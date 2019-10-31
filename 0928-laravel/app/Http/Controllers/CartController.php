<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myadmin;
use Session;
//use Illuminate\Support\Facades\Cookie;
use Cookie;
use View;
use DB;
class CartController extends Controller
{
    //
    public function add()
    {

        $name = "小王";
        $data['name'] = $name;
        $data['age'] = 18;
        $data['sex'] = '男';

        return view('Cart/add', $data);
    }

    public function setcookie(Request $request)
    {
        Cookie::queue('name', 'xiaoming');
        Cookie::queue('age', 20);


    }

    public function getcookie(Request $request)
    {
        echo Cookie::get('name');
        echo Cookie::get('age');

    }

    public function setSession(Request $request)
    {
//        1
        session()->put('key', 'ssss');
//        2
        $request->session()->put('dy', '董玉');
    }

    public function getSession(Request $request)
    {
//        1
        echo session()->get('key');
//        2
        echo $request->session()->get('dy');

    }

    public function uploadImg(Request $request)
    {
        if ($request->isMethod('post')) {
//            $tmp_name = $_FILES['pic']['tmp_name'];
//           var_dump(move_uploaded_file($tmp_name,'./1.jpg'));
            //跟入口文件同级
            $request->file('pic')->move('./image', '2.jpg');

        }

        return view('Cart/uploadImg');
    }

    public function db()
    {
//调用DB类原始数据库操作
        //1.插入
//       $bool=DB::insert('insert into user (username,password) values(?,?)',['xx',md5(12131)]);
//
//       dd($bool);
        //2查询
//       $rows =  DB::select('select * from user where id = 15');
//     dd($rows);
//  3删除
//       $bool=DB::delete('delete from user where id=?',[22]);
//       dd($bool);
////       4修改
//       $bool=DB::update('update user set age=? where username=?',[44,'曹操']);
//
//       dd($bool);
//
//       查询构造器
//       1。增加
//       $bool=DB::table('user')->insert (['username'=>'rose','age'=>19]);
//       dd($bool);
//       2.删除
//      $bool= DB::table('user')->where('id','=',23)->delete();
//      dd($bool);
//   }
//     3.修改
//        $bool = DB::table('user')->where('id', 21)->update(['age' => 56]);
//        dd($bool);
////     4.查询
//        $bool=DB::table('user')->whereRaw('id>? and age>?',[17,40])->get()->toArray();
//        dd($bool);
//        自增
//    DB::table('user')->where('id',15)->increment('age',2);
//        自减
//    DB::table('user')->where('id',16)->decrement('age',2);
//        firest查询一个结果
//        $bool=DB::table('user')->where('id',17)->first();
//        dd($bool);
//       selsect 查询多个字段结果
//        $bool=DB::table('user')->select('id as i','age as 年龄')->get()->toArray();
//        dd($bool);
//        分段查询  适合用于数据过多的查询
//        DB::table('dt_area')->orderBy('id',"asc")->chunk(20,function ($row){
//            dump($row->toArray());
//            echo "<br>";
//        });
//        聚合函数  注意是对数字的操作 所以只支持int float...等数字型
        //获取总记录数
        $c=DB::table('user')->count();
        dump($c);
//        最大值 max（字段名）
        $m=DB::table('user')->max('age');
        dump($m);
//        平均数 avg（字段名）
        $a=DB::table('user')->avg('age');
        dump($a);
//        和  sum（字段名）
        $s=DB::table('user')->sum('age');
        dump($s);
    }
}