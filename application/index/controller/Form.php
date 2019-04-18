<?php
/**
 * Created by PhpStorm.
 * User: Win
 * Date: 2019-4-10
 * Time: 10:37
 */
namespace app\index\controller;
use think\Controller;
use app\index\model\Region;
use app\index\model\Board;
use app\index\model\Post;
use think\Request;

class Form extends Controller{
  function zone(){
      return view('zone');
  }
  function board(){
      return view('board');
  }
  function thread(Request $request){
      $routeInfo=$request->param('bid');
      $this->assign('bid',$routeInfo);
      return view('form/thread');
  }
  function postRead(){
      return view('post-read');
  }
  function postNew(Request $request){
      $param=$request->param();
      $postNew=new Post();
      return $postNew->savePost($param);

  }

}