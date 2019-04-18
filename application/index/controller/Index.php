<?php
namespace app\index\controller;
use think\Controller;
use think\cache\driver\Redis;
use app\index\model\Region;
use app\index\model\Board;
use app\index\model\Post;
use app\index\model\Index as InModel;

class Index extends Controller
{
    public function index()
    {
        if(!get_auto_login_list()) {
            return view('login');
        }else{
            self::home();
        }
    }
    public function home()
    {
        $InModel=new InModel();
        $formHome=$InModel->homecontents();
        $this->assign('regions',$formHome->regions);
        $this->assign('boards',$formHome->boards);
        $this->assign('url',$formHome->url);
        return view('home');
    }
    public function phpinfo(){
        return phpinfo();
    }
    public function test(){
        $redis = new \Redis();
        $redis->connect('127.0.0.1',6379);
        $redis->set('test','hello my redis!');
        return $redis->get('test');
    }
    public function test2(){
        $redis=new Redis();
        $redis->set('mytry','hello my try');
        return $redis->get('mytry');
    }
    public function test3(){
        $redis=new Redis();
        $auto_login_list=[
          '127.0.0.1'=>'幻灵枫',
            'www.tp5.com'=>"幻曦蜉"
        ];
        $value=serialize($auto_login_list);
        $redis->set('auto_login_list',$value);
        $value1=unserialize($redis->get('auto_login_list'));
        dump($value1);
        echo "<br/>";
        foreach($value1 as $k=>$v){
            if($v=='幻灵枫'){
                echo $k;break;
            }
        }

    }
}