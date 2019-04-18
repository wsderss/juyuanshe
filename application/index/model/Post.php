<?php
/**
 * Created by PhpStorm.
 * User: Win
 * Date: 2019-4-15
 * Time: 19:04
 */
namespace app\index\model;
use think\Model;

class Post extends Model{
    //类型转换
    protected $type=array(
        'create_time'=>'timestamp:Y-m-d H:m:s',
        'update_time'=>'timestamp:Y-m-d H:m:s'
    );
    //开启自动写入时间戳字段
    protected $autoWriteTimestamp='true';
    //设置当前模型对应数据库表
    protected $table = 'form_post';
    public function savePost($arr){
        $this->data([
            'bid'=>$arr['bid'],
            'post_title'=>$arr['postData'][1],
            'post_author'=>$arr['postData'][3],
            'post_type'=>$arr['postData'][4],
            'post_contents'=>$arr['postData'][2]
        ]);
        if($this->save()){
            return json(['status'=>'true']);
        }else{
            return json((['status'=>'false']));
        }
    }
}