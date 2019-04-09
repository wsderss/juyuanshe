<?php
/**
 * Created by PhpStorm.
 * User: Win
 * Date: 2019-4-9
 * Time: 8:43
 */
namespace app\api\controller;
use think\Controller;
use app\api\model\Users;
use think\Session;
class Index extends Controller{
    public function getSession(){
        $uname=Session::get('uname','users');
        if($uname) {
            return json(['uname' => $uname]);
        }else{
            return json(['uname'=>'false']);
        }
    }
}