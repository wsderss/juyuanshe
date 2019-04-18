<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"E:\apache24\htdocs\juyuanshe\public/../application/user\view\user\register.html";i:1555498372;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册-聚远社BBS</title>
    <link rel="stylesheet" href="http://www.tp5.com/css/register.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/common.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/alert_style.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/bootstrap.min.css">
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery.cookie.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery.session.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/alert_ui.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/common.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/register.js"></script>
</head>
<body style="margin:0px;text-align: center">
<div class="top-red">
    <div class="logo">
        <span class="h1">聚远社</span><br/>
        <span class="h2">45.40.203.138</span>
    </div>
</div>
<div class="main-container">
  <div class="tabs">
    <a class="tabs">邮箱注册</a>
    <a>第三方注册</a>
  </div>
    <div class="tabs-info">
        <span>推荐本方式</span>
    </div>
    <div class="form">
        <div class="row">
            <span>邮箱地址</span>
            <input type="text" data-role="email" placeholder="123456789@qq.com">
            <span class="rowspan">注册后可以随时更改</span>
        </div>
        <div class="row">
            <span>昵称</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" data-role="email" placeholder="小白">
            <span class="rowspan">注册后可以随时更改</span>
        </div>
        <div class="row">
            <span>真实姓名</span>
            <input type="text" data-role="email" placeholder="小白">
            <span class="rowspan">注册后可以随时更改</span>
        </div>
        <div class="row">
            <span>密码</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" data-role="email" placeholder="123456">
            <span class="rowspan">注册后可以随时更改</span>
        </div>
        <div class="row">
            <span>重复密码</span>
            <input type="text" data-role="email" placeholder="123456">
            <span class="rowspan">注册后可以随时更改</span>
        </div>
        <div class="row">
            <span>生日</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" data-role="email" placeholder="2000-01-01">
            <span class="rowspan">注册后可以随时更改</span>
        </div>
        <div class="row">
            <span>性别</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label class="my_protocol">
                <input class="keepalive_protocol" onclick="charge('sexman')" type="checkbox" name="sexman" data-role="keepalive" value="false">
                <span></span>&nbsp;&nbsp;男
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--//#f0544d-->
            <label class="my_protocol">
                <input class="keepalive_protocol" onclick="charge('sexwoman')"  type="checkbox" name="sexwoman" data-role="keepalive" value="false">
                <span></span>&nbsp;&nbsp;女
            </label>
            <span class="rowspan">注册后可以随时更改</span>
        </div>
        <div>
            <a class="button red" id="register" data-action="register">注册</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="button" data-action="clear-form">清除</a>
        </div>
        <div>
            <p class="normalword" style="text-align: left;font-size:16px">点击注册，即表示你阅读并同意遵守<b>聚远社BBS总纲</b>，以及各项具体<b>站规细则</b></p>
        </div>
    </div>
    <div id="delayJumpWindow" class="delayJumpWindow">
        <span id="delayJumpToHomepage"></span>
    </div>
</div>
<script type="text/javascript">
    $("#register").click(function(){var dataArr=checkform();if(dataArr){register(dataArr);}});
</script>
<p class="normalword">©2012-2019聚远社BBS</p>
</body>
</html>