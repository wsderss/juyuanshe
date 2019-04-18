<?php
/**
 * Created by PhpStorm.
 * User: Win
 * Date: 2019-4-16
 * Time: 12:07
 */
namespace app\index\model;
use think\Db;
use think\Route;
use think\Url;

class Index
{
    public function homecontents(){
         $url=array();
         $board=array();
         Url::root('/');
        $regions=Db::query('select * from form_region where region_status=?',[1]);
        for ($i=0;$i<count($regions);$i++){
            $sql="select * from form_board where rid='".$regions[$i]['bid']."' and board_status=1 order by update_time limit 0,5";
            $index=$regions[$i]['rid'];
            $url['regions'][$index]=Url::build("/thread/$index");
            $board[$index]=Db::query($sql);
        }
        $boards=$this->charCalculateSelect($board);
        $url['boards']=$boards['url'];
        $formHome=(object) array('regions'=>'','boards'=>'','url');
        $formHome->regions=$regions;
        $formHome->boards=$boards['boards'];
        $formHome->url=$url;
        return $formHome;
}

    private function charCalculateSelect($array){
        $arrayNew=array();
        $url=array();
        foreach ($array as $k=>$v){
            $str="";
            for($i=0;$i<count($v);$i++){
                $str.=$v[$i]['board_name'];
                $bid=$v[$i]['bid'];
                $url[$i]=Url::build("/thread/$bid");
                if(strlen($str)>75){
                    break;
                }
                $arrayNew[$k][$i]=$v[$i];
            }
        }
        $arrayNew['boards']=$arrayNew;
        $arrayNew['url']=$url;
        return $arrayNew;
}
}