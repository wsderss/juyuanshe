<?php
/**
 * Created by PhpStorm.
 * User: Win
 * Date: 2019-4-2
 * Time: 20:48
 */
namespace app\user\controller;
use app\user\model\Users;
use think\Controller;
use think\Request;
use think\Session;
use think\Cookie;
class User extends Controller{
public function register(Request $request){
    $regData=$request->param();
    if(empty($regData)){
      return view('register');
    }else {
        $users = new Users();
        $users->data([
            'user_name' => $regData['regData'][1],
            'password' => md5($regData['regData'][3]),
            'email' => $regData['regData'][0],
            'true_name' => $regData['regData'][2],
            'birthday' => strtotime($regData['regData'][4]),
            'sex' => $regData['regData'][5],
            'grade' => 0
        ]);
        if($users->where('email',$regData['regData'][0])->find()){
            return json(['statue'=>'1']);//表示邮箱已注册
        }elseif ($users->where('user_name',$regData['regData'][1])->find()){
            return json(['statue'=>'2']);//表示昵称已注册
        }
       if($users->save()){
           Session::set('uname',$regData['regData'][1],'users');
           Cookie::set('uname',$regData['regData'][1],3600);
           return json(['statue'=>'true']);
       }else{
           return $users->getError();
       }
    }
}
public function login(Request $request){
    $loginData=$request->param();
    if(empty($loginData)){
        return view('login');
    }else {

        $users = new Users();
        $result=$users->login($loginData);
        switch ($result){
            case 0:
                return json(['statue'=>'0']);break;
            case 1:
                return json(['statue'=>'1']);break;
            case 2:
                return json(['statue'=>'2']);break;
        }
//        if($users->save()){
//            Session::set('uname',$regData['regData'][1]);
//            Cookie::set('uname',$regData['regData'][1],3600);
//            return json(['result'=>'true']);
//        }else{
//            return $users->getError();
        }
    }
//}
//}
public function test(Request $request){
    $name=Session::get('uname','users');
    $name1=Cookie::get('uname');
    //$content="Session是".$name."<br/>"."Cookie是".$name1;
    //return $content;
//   dump($name1);
    echo $request->cookie('uname')."<br/>";
    echo $name1."<br/>";
    echo Session::get('uname','users')."<br/>";
    echo $name."<br/>";
    echo $_COOKIE['uname']."<br/>";
    echo $_SESSION['users']['uname'];
    var_dump($_SESSION);
}
}