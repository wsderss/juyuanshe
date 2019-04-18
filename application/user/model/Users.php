<?php
/**
 * Created by PhpStorm.
 * User: Win
 * Date: 2019-4-2
 * Time: 20:51
 */
namespace app\user\model;
use think\Model;
use think\Session;
use think\Cookie;
use think\cache\driver\Redis;
class Users extends Model{
  //类型转换
    protected $type=array(
      'registertime'=>'timestamp:Y-m-d H:m:s',
      'birthday'=>'timestamp:Y-m-d',
      'create_time'=>'timestamp:Y-m-d H:m:s',
      'update_time'=>'timestamp:Y-m-d H:m:s'
    );
  //开启自动写入时间戳字段
    protected $autoWriteTimestamp='true';
  //指定数据表
    protected $table='users';
    public function login($loginArr){
       $findData=$this->where('user_name',$loginArr['loginData'][0])->find();
       if(empty($findData)){
          return 0;//0表示查询为空
       }elseif($findData['password']==md5($loginArr['loginData'][1])){
           Session::set('uname',$loginArr['loginData'][0],'users');
           Cookie::set('uname',$loginArr['loginData'][0],3600);
           self::autoLogin($loginArr['loginData']);
           return 1;//表示登录成功
       }else{
           return 2;//表示密码不正确
       }
    }
    protected function autoLogin($loginArr){
        $request=request();
        $redis=new Redis();
        $autoLoginList=unserialize($redis->get('auto_login_list'));
               if($loginArr[2]=='1'){
                  $autoLoginList["$loginArr[0]"]= $request->ip();
               }elseif ($loginArr[2]=='0'){
                   foreach($autoLoginList as $k=>$v){
                       if($v==$loginArr['0']){
                           unset($autoLoginList[$k]);break;
                       }
                   }
               }
        $redis->set('auto_login_list',serialize($autoLoginList));
    }
}