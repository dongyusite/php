<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Input;
use Session;
use DB;
use function foo\func;
use function SebastianBergmann\GlobalState\TestFixture\snapshotFunction;

class AdminsController extends Controller
{
    //后台头部文件
    public function top(){
        $id=Session::get('id');
        $row=DB::table('manager')->where(['id'=>$id])->first();

       $admin_name=$row->admin_name;
       return view('Admins/top',['admin_name'=>$admin_name]);
    }
    //后台主页面
    public function Admins(){
        return view('Admins/admins');
    }
    //后台左边侧边栏页面
    public function left(){
        return view('Admins/left');
    }
    //后台右侧主体信息页面
    public function main(){
        $id=Session::get('id');
        $row=DB::table('manager')->where(['id'=>$id])->first();
        $admin_name = $row->admin_name;
        return view('Admins/main',['admin_name'=>$admin_name]);
    }
    //后台足部文件
    public function footer(){
        return view('Admins/footer');
    }
    //后台管理员页面
    public function list(){
        return view('Admins/list');
    }

    //后台登录页面
    public function AdminLogin(){
        return view('Admins/AdminLogin');
    }
    //跳转到网站主页面
    public function index(){
        return view('Admins/index');
    }
//     //后台处理登录程序页面
    public function AdminLoginAction(){
        $admin_name = Input::get('admin_name');
        $admin_pass = md5(Input::get("admin_pass"));

        $status = '1';
        $where = compact("admin_name","admin_pass","status");
//        $where = ['admin_name'=>$admin_name,'admin_pass'=>$admin_pass,"status"=>1];
        // 查询用户名密码是否正确并且不被禁用
//        DB::connection()->enableQueryLog();#开启执行日志
        $row  = DB::table('manager')->where($where)->first();
//        dump($row);
//        print_r(DB::getQueryLog());   //获取查询语句、参数和执行时间

        if($row){
            // 用户名,密码正确,并且不被禁用
            // 1.存session
            $id = $row->id;
            Session::put('id',$id);
            // 2.去首页
            return redirect(url("Admins/admins"));
        }else {
            return redirect(url("Admins/AdminLogin"));
        }
    }



    //后台退出页面 清楚session中保存的id
    public function AdminLogout(){
    Session::forget('id');
    return redirect('Admins/AdminLogin');
    }


   public function AdminerList(){
        $keyword=Input::get('keyword');
        if (!$keyword){
            $row=DB::table('manager')->orderBy('id','asc')->get();
            }else{
            $row=DB::table('manager')->where('admin_name','like',"%$keyword%")->orderBy('id','asc');
        }
       $rows=DB::table('manager')->orderBy('id','asc')->get();
//       dd($rows);
       $data=compact('rows','row','keyword');
//        dd($data);
      return view("Admins/list",$data);

   }
    //后台管理员添加页面
    public  function AdminerAdd(){
        return view('Admins/AdminerAdd');
    }
   public function Add(){
        $id=Input::get('id');
       $admin_name = Input::get('admin_name');
       $admin_pass = md5(md5(Input::get('admin_pass')));
       $status = Input::get('status');
       $flag = md5($id.Input::get('admin_pass'));
       $add_time = date("Y-m-d H:i:s");
       // 插入数据库 之前一定要查询数据库管理员名称是否存在
       if(!isset($admin_name)){
           return redirect(url('Admins/AdminerAdd'));
       }
       $row = DB::table('manager')->where(['admin_name'=>$admin_name])->first();
       if(!$row){
           // 插入。 。。
           $data = compact('admin_name','admin_pass','status','flag','add_time');
           $id = DB::table('manager')->insertGetId($data);
           if($id){
               // 跳转到管理员列表页面
               return redirect(url('Admins/AdminerList'));
           }else{
               return redirect(url('Admins/AdminerList'));
           }
       }else{
           // 查到了 不能添加
           return redirect(url('Admins/AdminerAdd'));
       }

   }
    public function Del(){
        $id = Input::get('id');
        if(isset($id) && $id >0){
            // 删除
            DB::table('manager')->where(['id'=>$id])->delete();
//            return redirect(url('Admin/Manager/managerList'));
            $data['status'] =1;
            $data['msg']='成功删除!';
        }
        return response()->json($data);


    }
    public function Edit(){

        $id = Input::get('id');
//        dd($id);
        $row = DB::table('manager')->where('id',$id)->first();
        return view("Admins/AdminerEeit",['row'=>$row]);
    }
    public function EditAction(){
        $id = Input::get('id');
        $admin_name = Input::get('admin_name');
        $admin_pass = md5(Input::get('admin_pass'));

        $status = Input::get('status');

        // 查询管理员是否已经存在
        // 排除掉自己查询别人
        $row = DB::table('manager')->where('admin_name',$admin_name)->where('id','!=',$id)->first();
        if($row){
            return redirect("Admin/Manager/managerEdit?id=$id");
        }else{
            $data['admin_name'] = $admin_name;
            $data['admin_pass'] = $admin_pass;

            $data['status'] = $status;
            DB::table('manager')->where('id',$id)->update($data);
            return redirect("Admins/AdminerList");
        }
    }
}
