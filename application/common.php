<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\cache\driver\Redis;
use think\Session;
// 应用公共文件
function get_auto_login_list(){
    $redis=new Redis();
    $autoLoginList = unserialize($redis->get('auto_login_list'));
    foreach ($autoLoginList as $k => $v){
        if($k==request()->ip()){
             if(!Session::has('uname','users')){
                 Session::set('uname',$v,'users');
                 if(cookie('uname') != null){
                     cookie('uname',$v,3600);
                 }
                 return true;
             }
             break;
        }
    }
    return false;
}
