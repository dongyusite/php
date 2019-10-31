<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\In;
use Input;
use DB;
use Session;
class PageController extends Controller
{

  public function pageIndex(){
      return view('index');
  }
    public function pageClassic(){


$catelist=DB::table('type')->get();

$hot=DB::table('goods')->where('hot',7)->get();

$hots=DB::table('goods')->where('hot',9)->get();

$women=DB::table('goods')->whereBetween('cate_id', [44,47])->get();
$man=DB::table('goods')->whereBetween('cate_id', [48,51])->get();

$uid = Session::get('uid');
$cartCount = DB::table('cart as c')->where('uid',$uid)->count();

$catelist=preArr($catelist);
$rows=gettree($catelist);

$data=compact('rows','hot','hots','women','man','cartCount');

return view('index',$data);
    }

    public function pageDetail($id){
         $k = Input::get('k','0_0');
              $arr = explode('_',$k);
              $brand = $arr[0];
              $price = $arr[1];
        $where = [];
//        $price = Input::get('price',0);
//        $brand = Input::get('brand',0);
//        $where = [];
        // 产地
        switch ($brand){
            case "1":
                $where[] = ['brand',2];

                break;
            case "2":
                $where[] = ['brand',1];

                break;
            case "3":
                $where[] = ['brand',3];
                break;
            case "4":
                $where[] = ['brand',4];
                break;
            case "5":
                $where[] = ['brand',5];
                break;
            case "6":
                $where[] = ['brand',6];
                break;
            case "7":
                $where[] = ['brand',7];
                break;
        }

        // 价格
        switch ($price){
            case "1":
                $where[] = ['goods_price','>',0];
                $where[] = ['goods_price','<=',100];
                break;
            case "2":
                $where[] = ['goods_price','>',100];
                $where[] = ['goods_price','<=',200];
                break;
            case "3":
                $where[] = ['goods_price','>',200];
                $where[] = ['goods_price','<=',300];
                break;
            case "4":
                $where[] = ['goods_price','>',300];
                $where[] = ['goods_price','<=',400];
                break;
            case "5":
                $where[] = ['goods_price','>',400];
                $where[] = ['goods_price','<=',500];
                break;
            case "6":
                $where[] = ['goods_price','>',500];
                break;

        }




         $ids = getSonsIdById($id);
        array_unshift($ids,$id);

        // 查询此分类列表ids数组下的所有商品
        $goods_list = DB::table('goods')->whereIn('cate_id',$ids)->where($where)->paginate(4);

        $uid = Session::get('uid');
        $cartCount = DB::table('cart as c')->where('uid',$uid)->count();
        $hot=DB::table('goods')->where('hot',7)->get();
        $data = compact('goods_list','id','price','brand','cartCount','hot');
        return view('pageDetails',$data);
    }

    public function shopDetail($id){
      $goods=DB::table('goods')->where('id',$id)->pluck('shop');
      $brand=DB::table('brand')->where('brand_name',$goods)->get();
      $name=DB::table('goods')->where('id',$id)->pluck('goods_name');
      $goods_list=DB::table('goods')->where('shop',$goods)->paginate(4);


        $uid = Session::get('uid');
        $cartCount = DB::table('cart as c')->where('uid',$uid)->count();
      $data=compact('goods_list','cartCount','name','brand');

      return view('shopDetail',$data);
    }

    public function pageSearch(){
      $keyword=Input::get('keyword');
      if (!$keyword){
          $goods_list = DB::table('goods')->paginate(4);
      }else{
          $goods_list=DB::table('goods')->where('goods_name','like',"%$keyword%")->paginate(4);
      }
        $uid = Session::get('uid');
        $cartCount = DB::table('cart as c')->where('uid',$uid)->count();
        $hot=DB::table('goods')->where('hot',7)->get();
      $data=compact('goods_list','keyword','cartCount','hot');
      return view('pageSearch',$data);
    }

    public function goodsDetail(Request $request, $id){
        DB::table('goods')->where('id',$id)->increment('hit');
        $current_url = urlencode($request->getUri());
        $shop=DB::table('goods')->where('id',$id)->pluck('shop');
        $shops=DB::table('goods')->where('shop',$shop)->get();

        $goods = DB::table('goods as g')->leftJoin('type as c','g.cate_id','c.id')->
        select('g.id','g.goods_name','g.shop' ,'g.goods_price','g.hit','g.goods_pic','g.goods_detail','c.name','g.goods_num','g.brand')
            ->where('g.id',$id)->first();
        if(!$goods){
            return redirect('/');
        }

        $hots=DB::table('goods')->where('hot',9)->get();
        $uid = Session::get('uid');
        $cartCount = DB::table('cart as c')->where('uid',$uid)->count();
        $data = compact('goods','current_url','cartCount','shops','hots');

        return view("goodsDetail",$data);

    }
    public function goodsClassic(){
        $catelist=DB::table('type')->get();

        $catelist=preArr($catelist);
        $rows=gettree($catelist);

        $data=compact('rows');

        return view('goodsDetail',$data);
    }
    public function isLogin(){
        // 判断用户是否登录
        // 从session 取用户信息
        if(Session::get('uid')){
            // 已经登录
//            return Session::get('uid');
            return Session::get('uid');

        }else{
            return false;
        }
    }
    // 添加购物车
    public function addCart(){
        // 判断用户是否登录
        if($this->isLogin()){
            $uid = $this->isLogin();
            $gid = \Illuminate\Support\Facades\Input::get('id');
            $num = Input::get('num');

            // 存购物车 之前需要查询 此商品是否已经存在

            $row = DB::table('cart')->where(['uid'=>$uid,'gid'=>$gid])->first();
            if($row){
                // 取出这个商品的数量
                /* $new_num = $row->num + $num;
                 DB::table('cart')->where(['id'=>$row->id])->update(['num'=>$new_num]);*/
                $bool = DB::table('cart')->where(['id'=>$row->id])->increment('num',$num);
            }else{
                $data = compact('uid','gid','num');

                $bool = DB::table('cart')->insertGetId($data);
            }
            if($bool){

                $data['status'] = 0;
            }else{
                $data['status'] = 1;
            }

        }else{
            $data['status'] = 2;
        }

        return response()->json($data);

    }
    public function cartDetail(){

        $uid = Session::get('uid');

        $cartList = DB::table('cart as c')->select('c.*','g.goods_name','g.goods_price','g.goods_pic')->leftJoin('goods as g','c.gid','=','g.id')->where('uid',$uid)->get();
        $cartCount = DB::table('cart as c')->where('uid',$uid)->count();
        $total = 0;
        foreach ($cartList as $v){
            $total += $v->goods_price * $v->num;
        }
        Session::put('total',$total);
        $data = compact('cartList','cartCount','total');

     return view('cartDetail',$data);
    }

    public function cartChange(){
        $id=Input::get('id');
        $num=Input::get('num');
        DB::table('cart')->where('id',$id)->update(['num'=>$num]);
    }

    public function cartDel(){
        $id=Input::get('id');
        $uid=Input::get('uid');
        if (isset($id)){
            $rows=DB::table('cart')->where('id',$id)->delete();
            if ($rows){
                $data['status']=1;
                $data['count']=DB::table('cart')->where('uid',$uid)->count();
            }else{
                $data['status']=0;
            }
        }else{

            return redirect('Page/cartDetil');
        }
        return response()->json($data);
    }

    public function DelSelect(){
        $ids=Input::get('ids');

       $row= DB::table('cart')->whereIn('id',$ids)->delete();
       if($row){
           $data['status']=1;
       }else{
           $data['status']=2;
       }
       return response()->json($data);
    }

    public function submit()
    {
        $id = Input::get('cid');

        $uid = Session::get('uid');

         $total=Session::get('total');
       

     if(isset($id)){
         $rows = DB::table('cart')->whereIn('id',$id)->get()->toArray();

         $gid = DB::table('cart')->whereIn('id', $id)->pluck('gid')->toArray();

         $goods = DB::table('goods')->whereIn('id', $gid)->get();
         foreach ($goods as $v){
             $data['g_name']=$v->goods_name;
             $data['g_pic'] = $v->goods_pic;
             $data['g_shop'] = $v->shop;
         }

         $data['form_id'] = time().$uid;
         $data['g_total']=$total;

         foreach ($rows as $v) {

             $data['uid']=$v->uid;
             $data['gid'] = $v->gid;
             $data['g_num'] = $v->num;
             $id = DB::table('my_order')->insertGetId($data);
             if ($id && $v->id > 0) {
                 DB::table('cart')->where('id', $v->id)->delete();
             }
     }

//            $form=DB::table('my_order')->where('uid',$uid)->get();
//            $d=compact('form');
          return redirect('Page/clearing');
        }
    }
    public function clearing(){

        $uid = Session::get('uid');
        $form=DB::table('my_order')->where('uid',$uid)->paginate(4);
        $count=DB::table('my_order')->where('uid',$uid)->sum('g_num');
        $total = 0;
        foreach ($form as $v){
            $total += $v->g_total * $v->g_num;
        }
        $d=compact('form','total','count');
        return view('submit',$d);
    }
    public function Del_form(){
      $id=Input::get('id');
      $row=DB::table('my_order')->where('id',$id)->first();
     if ($row){
         $row=DB::table('my_order')->where('id',$id)->delete();
         if ($row){
             $data['status']=0;
         }else{
             $data['status']=1;
         }
     }
      return response()->json($data);
    }




    public  function login(){
        $returnUrl = urldecode(Input::get('returnUrl','/'));
        return view('login',['returnUrl'=>$returnUrl]);
    }
    public function Out(){
        // 清session
        Session::forget('uid');
        Session::forget('admin_name');
        // 跳转登录页面
        return redirect(url('/'));
    }
    public function loginAction(){
        $returnUrl = Input::get('returnUrl','/');
     $admin_name=Input::get('admin_name');
     $admin_pass= md5(Input::get('admin_pass'));

    $where=compact('admin_pass','admin_name');
    $rows=DB::table('manager')->where($where)->first();
    $data=compact('rows');

    if ($rows){
        Session::put('uid',$rows->id);
        Session::put('admin_name',$rows->admin_name);
        return redirect($returnUrl);
    }else{
        return redirect(url('Page/login'));
    }
    }
}
