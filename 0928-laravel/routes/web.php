<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use function foo\func;
use Illuminate\Support\Facades\DB;

//Route::group(['prefix'=>'/'],function(){
//    Route::any('index',['uses'=>'PageController@index']);
//
//
//
//});


    Route::any('/',['uses'=>'PageController@pageClassic']);
//    $catelist=DB::table('type')->get();
//    $clothes=DB::table('type')->where('pid',3)->get();
//
//    $catelist=preArr($catelist);
//    $rows=gettree($catelist);
//    $hot=DB::table('goods')->where('hot',7)->get();
//    $hots=DB::table('goods')->where('hot',9)->get();
//    $women=DB::table('goods')->whereBetween('cate_id', [44,47])->get();
//    $man=DB::table('goods')->whereBetween('cate_id', [48,51])->get();
//    $uid = Session::get('uid');
//    $cartCount = DB::table('cart as c')->where('uid',$uid)->count();
//    $data=compact('rows','hot','hots','women','man','cartCount');






Route::group(['prefix'=>'/User'],function (){
    Route::get('/add',function(){
       return view('User/add');
    })->middleware('test');
    Route::get('/del',function (){
        return view('User/del');
    });
});

//Route::get('User/add',['as'=>'dir',function (){
//   $dir=route('dir');
//   return view('User/add',['dir'=>$dir]);
//}]);







Route::group(['prefix'=>'/Goods'],function(){
    Route::any('/GoodsInfo',['uses'=>'GoodsInfoController@GoodsInfo']);
    Route::any('/goodsList',['uses'=>'GoodsController@goodsList']);
    Route::any('/goodsAdd',['uses'=>'GoodsController@goodsAdd']);
    Route::any('/goodsAddAction',['uses'=>'GoodsController@goodsAddAction']);
    Route::any('/goodsEditAction',['uses'=>'GoodsController@goodsEditAction']);
    Route::any('/goodsEdit',['uses'=>'GoodsController@goodsEdit']);
    Route::post('/ajaxgoodsDel',['uses'=>'GoodsController@ajaxgoodsDel']);

});
Route::group(['prefix'=>'/Admins'],function(){
    Route::any('/top',['uses'=>'AdminsController@top']);
    Route::any('/admins',['uses'=>'AdminsController@admins']);
    Route::any('/left',['uses'=>'AdminsController@left']);
    Route::any('/main',['uses'=>'AdminsController@main']);
    Route::any('/footer',['uses'=>'AdminsController@footer']);
    Route::any('/list',['uses'=>'AdminsController@list']);

    Route::any('/AdminLogin',['uses'=>'AdminsController@AdminLogin']);
    Route::any('/index',['uses'=>'AdminsController@index']);
    Route::post('/AdminLoginAction',['uses'=>'AdminsController@AdminLoginAction']);
    Route::any('/AdminLogout',['uses'=>'AdminsController@AdminLogout']);
    Route::any('/AdminerList',['uses'=>'AdminsController@AdminerList']);
    Route::any('/AdminerAdd',['uses'=>'AdminsController@AdminerAdd']);
    Route::any('/Add',['uses'=>'AdminsController@Add']);
    Route::any('/Del',['uses'=>'AdminsController@Del']);
    Route::any('/Edit',['uses'=>'AdminsController@Edit']);
    Route::any('/EditAction',['uses'=>'AdminsController@EditAction']);

    //商品管理

    Route::any('/cateList',['uses'=>'CateController@cateList']);
    Route::any('/cateAdd',['uses'=>'CateController@cateAdd']);
    Route::any('/cateAddAction',['uses'=>'CateController@cateAddAction']);
    Route::any('/cateDel',['uses'=>'CateController@cateDel']);
});
Route::group(['prefix'=>'/Page'],function(){
    Route::any('/pageClassic',['uses'=>'PageController@pageClassic']);
    Route::any('/pageDetail/{id}',['uses'=>'PageController@pageDetail']);
    Route::any('/goodsDetail/{id}',['uses'=>'PageController@goodsDetail']);
    Route::any('/goodsClassic',['uses'=>'PageController@goodsClassic']);
    Route::any('/isLogin',['uses'=>'PageController@goodsisLogin']);
    Route::any('/addCart',['uses'=>'PageController@addCart']);
    Route::any('/cartDetail',['uses'=>'PageController@cartDetail']);
    Route::any('/cartChange',['uses'=>'PageController@cartChange']);
    Route::any('/cartDel',['uses'=>'PageController@cartDel']);
    Route::any('/login',['uses'=>'PageController@login']);
    Route::any('/loginAction',['uses'=>'PageController@loginAction']);
    Route::any('/Out',['uses'=>'PageController@Out']);
    Route::any('/DelSelect',['uses'=>'PageController@DelSelect']);
    Route::any('/pagePrice/{id}',['uses'=>'PageController@pagePrice']);
    Route::any('/pageSearch',['uses'=>'PageController@pageSearch']);
    Route::any('/shopDetail/{id}',['uses'=>'PageController@shopDetail']);
    Route::any('/submit',['uses'=>'PageController@submit']);
    Route::any('/clearing',['uses'=>'PageController@clearing']);
    Route::any('/Del_form',['uses'=>'PageController@Del_form']);



});



