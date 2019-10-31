<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Input;
use Session;

class GoodsController extends Controller
{
    public function goodsAdd(){
        $rows=DB::table('type')->orderBy('path','asc')->get();
        $data=compact('rows');
        return view('Admins/Goods/goodsAdd',$data);
    }
    public function goodsAddAction(Request $request)
    {
        $old_name = $request->file('goods_pic')->getClientOriginalName();
        $ext = $request->file('goods_pic')->getClientOriginalExtension();

        $filename = $old_name . time() . mt_rand(1000, 9999) . '.' . $ext;
        $bool = $request->file('goods_pic')->move("./upload/", $filename);

        // 逻辑 图片上传成功后，写数据库
        // 数据写入成功
        // 数据库写入失败，删原图
        //  图片上传失败，不写了，直接跳转


        if ($bool) {
            $data = Input::all();
            unset($data['_token']);
            $data['add_time'] = date("Y-m-d H:i:s");
            $data['goods_pic'] = $filename;
            $row= DB::table('goods')->insertGetId($data);
            if ($row) {

                return redirect('Goods/goodsList');
            } else {
                //删
                unlink('./upload/' . $filename);
            }
        } else {
            return view('Admins/Goods/goodsAdd');
        }
    }

    public function goodsList(){
        $pageSize = 3;
        $cateList = getAllCateList();
        $search = Input::get('search');
        $keyword = Input::get('keyword')??'';
        $cate_id = Input::get('cate_id');
        if($search && ($keyword || $cate_id)){
            // 如果search 有值 说明有人点击了查询
            // 1.只有搜索关键字有值
            if($keyword && !$cate_id){
                $rows = DB::table('goods')
                    ->select("goods.id as gid","goods_name","goods_price","goods_detail","goods_pic","type.name","goods.goods_num")
                    ->leftJoin('type', 'type.id', '=', 'goods.cate_id')
                    ->where('goods_name','like',"%$keyword%")
                    ->orderBy('add_time','desc')->paginate($pageSize);
                // 2.只有分类有值
            }else if($cate_id && !$keyword){
                // 根据当前分类的id 获取此分类下的子孙id
                $ids_arr = getSonsIdById($cate_id);
                array_unshift($ids_arr,$cate_id);

                $rows = DB::table('goods')
                    ->select("goods.id as gid","goods_name","goods_price","goods_detail","goods_pic","type.name","goods.add_time","goods.goods_num")
                    ->leftJoin('type', 'type.id', '=', 'goods.cate_id')
                    ->whereIn('cate_id',$ids_arr)
                    ->orderBy('add_time','desc')->paginate($pageSize);

            }else{

                // 3.两个都有值
                $ids_arr = getSonsIdById($cate_id);
                array_unshift($ids_arr,$cate_id);
                $rows = DB::table('goods')
                    ->select("goods.id as gid","goods_name","goods_price","goods_detail","goods_pic","type.name","goods.add_time","goods.goods_num")
                    ->leftJoin('type', 'type.id', '=', 'goods.cate_id')
                    ->whereIn('cate_id',$ids_arr)  ->where('goods_name','like',"%$keyword%")
                    ->orderBy('add_time','desc')->paginate($pageSize);
            }
        }else{
            $rows = DB::table('goods')
                ->select("goods.id as gid","goods_name","goods_price","goods_detail","goods_pic","type.name","goods.add_time","goods.goods_num")
                ->leftJoin('type', 'type.id', '=', 'goods.cate_id')
                ->orderBy('add_time','desc')->paginate($pageSize);
        }
        $data = compact('rows','keyword','cateList','search','cate_id'); //
//        $data = ['rows'=>$rows];
        return view("Admins.Goods.goodsList",$data);
    }
    public function goodsEdit(){
        $rows=getAllCateList();
        $id = Input::get('id');

        $goods = DB::table('goods')->where('id',$id)->first();
        $data=compact('rows','goods');
        return view("Admins/Goods/goodsEdit",$data);

    }
    public function goodsEditAction(Request $request)
    {
     $id=Input::get('id');
     $all=Input::all();
     unset($all['_token']);
     if ($request->hasFile('goods_pic')){
         $filename=uploadPic($request);
         if($filename){
             $all['good_pic']=$filename;

             $goods=DB::table('goods')->find($id);

             $pic=$goods->pic;
             if (file_exists('./upload/'.$pic)){
                 unlink('./upload/'.$pic);
             }
             // 商品图片表 删除此商品下的所有幅图
             // 3.删除此商品对应的所有副图
             /* $rows = DB::table('goods_pic')->where('gid',$id)->get();
              foreach ($rows as $v){
                  unlink("./upload/$v->path");
              }
             // 4.删除商品图片表的 所有此商品对应的记录
              DB::table('goods_pic')->where('gid',$id)->delete();
             */

             DB::table('goods')->where('id',$id)->update($all);
         }else{
             return redirect('Goods/goodsEdit');
         }

     }else{
         DB::table('goods')->where('id',$id)->update($all);
     }
     return redirect('Goods/goodsList');

    }

    public function ajaxgoodsDel(){
        $id=Input::get('id');
        $rows=DB::table('goods')->where('id',$id)->delete();
        if ($rows){
            $data['status']=1;
        }else{
            $data['status']=2;
        }

        return  response()->json($data);
    }
}
