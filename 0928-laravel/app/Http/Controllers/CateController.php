<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input;

use Session;
use DB;
use function foo\func;
use function SebastianBergmann\GlobalState\TestFixture\snapshotFunction;


class CateController extends Controller
{
    public function  cateList(){
        $keyword=Input::get('keyword');
        $row=DB::table('type')->where('id',Session::get('id'))->first();
        if(!$keyword){
            $rows = DB::table('type')->orderBy('path','asc')->paginate(5);
        }else{
            $rows=DB::table('type')->where('name','like',"%$keyword%")->orderBy('id','asc')->paginate(4);
        }


        $data = compact("rows",'keyword','row');
        return view("Admins.Cate.cateList",$data);
    }

    // 添加分类
    public function cateAdd(){
        // 获取所有的分类
        $rows = DB::table("type")->orderBy('path','asc')->get();
        $data  = compact('rows');
        return view("Admins.Cate.cateAdd",$data);
    }

    // 添加根分类的处理程序
    public function cateAddAction(){
        $id = Input::get('id');
        $name = Input::get('name');
        // 无论根分类还是子分类，但凡查询的分类已经存在，就别想插入了。。。
        $row = DB::table("type")->where('name',$name)->first();
      if(!isset($name)){
          return redirect(url('Admins/cateAdd'));
      }
        if($row){
            // 此分类已经存在
            return redirect(url('Admins/cateAdd'));
        }else{
            // 不是根分类
            if($id>0){
                $pid = $id;
                // 1.通过父id查询到父类的path
                $row = DB::table('type')->where('id',$id)->select('path')->first();

//                $row = DB::table('category')->where('id',$id)->first();
                $path = $row->path;
                $data = compact('name','pid');
                // 2.插入成功后获取当前的id
                $id = DB::table("type")->insertGetId($data);
                // 3.当前的path = 父类的path + “,自己的id“
                $path = $path.",$id";
            }else{
                // 插入根分类
                $pid = 0;

                $data = compact('name','pid');
                $id = DB::table("type")->insertGetId($data);
                $path=$pid.",$id";

            }
            // 4.修改当前分类的path
            DB::table('type')->where('id',$id)->update(['path'=>$path]);
            return redirect(url('Admins/cateList'));
        }

    }
    public function cateDel(){
     $id=Input::get('id');
     $row=DB::table('type')->where(['id'=>$id])->delete();
     if($row){
         $data['status']=1;

     }
     return response()->json($data);
    }
}
