<?php

namespace App\Http\Controllers;
use Input;
use Session;
use Captcha;
use Gregwar\Captcha\PhraseBuilder;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Http\Request;
//IndexModel中设置表明
use App\IndexModel;
//DB设置数据库名
use DB;
use Intervention\Image\ImageManagerStatic;



class IndexController extends Controller
{
    public  function  index()
    {
////        查询表的所有数据
//        $bool=IndexModel::all();
//        dd($bool);
//        根据主键查询
//        $bool=IndexModel::findOrFail(15);
//  dump($bool);
//   查询构造器进行查找
    }
//    public function reg(){
//       return view("Index-reg");
//    }
//    public function action(){
//        dump (Input::get('code'));
//         Session::get('captcha');
//    }
//    public function verify(){
//        if (request()->getMethod() == 'POST') {
//            $rules = ['captcha' => 'required|captcha'];
//            $validator = validator()->make(request()->all(), $rules);
//            if ($validator->fails()) {
//                echo '<p style="color: #ff0000;">错误!</p>';
//            } else {
//                echo '<p style="color: #00ff30;">正确 :)</p>';
//            }
//        }
//    }
//  public function captcha(){
//     $phrase=new PhraseBuilder(4,"qwertyuioplkjhgfdsazxcvbnm123456789");
//     $builder=new CaptchaBuilder(null,$phrase);
//
//     Session::put('captcha',$builder->getPhrase());
//
//     $builder->build("200","300");
//     header('Content-type:image/jpeg');
//     $builder->output();
//    }
//    public function ajaxCheckCaptcha(){
//
//       $cap=Session::get('captcha');
//       $code=Input::get('code');
//       if($cap==$code){
//           $data['status']=0;
//           $data['msg']='seccuss';
//       }else{
//           $data['status']=1;
//           $data['msg']="fail";
//       }
//       return response()->json($data);
//    }
//        $captcha =  Session::get('captcha');
//        $code =  Input::get('code');
//
//        if($captcha == $code){
//            $data['status'] = 0;
//            $data['msg'] = 'success';
//        }else{
//            $data['status'] = 1;
//            $data['msg'] = 'fail';
//        }
//
//
//        return response()->json($data);
//    }

public function img(){
        return view('Image');
}
public function imgAction(){

//    $img= ImageManagerStatic::make('./image/2.jpg');
    $img = ImageManagerStatic::make('./image/2.jpg');
    $img->resize(200,200);
    $img->save('./image./1_200x200.jpg');


}

}
