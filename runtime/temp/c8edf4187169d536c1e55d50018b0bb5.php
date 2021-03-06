<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"E:\apache24\htdocs\juyuanshe\public/../application/index\view\form\post-new.html";i:1555504902;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>聚远社BBS-聚远社员的网上家园</title>
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/all.css?v19">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/font-awesome.min.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/github.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/highslide.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/bdwm.min.css?v4">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/alert_style.css">
    <link rel="stylesheet" href="http://www.tp5.com/css/reference/jquery.qeditor.css" type="text/css">
    <link rel="stylesheet" href="http://www.tp5.com/css/home.css">
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery.cookie.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery.session.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery.pjax.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/jquery.qeditor.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/reference/alert_ui.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/common.js"></script>
    <script type="text/javascript" src="http://www.tp5.com/js/home.js"></script>
</head>
<body>
<nav id="left-nav">
    <div id="logo"><a href="home.html"><img src="http://www.tp5.com/resource/sign/logo_ibfb2M.png"></a></div>
    <div id="user-info">
        <div class="have-login" style="display: none;">
            <div class="portrait-container">
                <img class="portrait pic" src="http://www.tp5.com/resource/images/user/portrait-neu.png">
            </div>
            <p class="username ">
                <a class="user-list-trigger" data-action="user-list-trigger" id="triangleSpan"></a>
                <span data-role="login-username"><?php echo session('uname','','users'); ?></span>
                <span class="triangle"></span>
                <span class="btn-list"  style="display: none">
          <a class="btn-goto-homepage" href="user.html?uid=15265">个人主页</a>
          <a href="modify-profile.html">修改帐号</a>
          <a class="btn-logout">退出</a>
        </span><!--以下是已注销账号的显示内容-->
            </p>
            <!--<ul id="detail-list">-->
            <!--<li data-role="login-nickname">昵称：未名湖里的鱼儿</li>-->
            <!--<li data-role="login-rankname">等级：高级站友</li>-->
            <!--<li data-role="login-numposts">文章：1695</li>-->
            <!--</ul>-->
            <!--<a href="refill-form.html" class="sub-button red">-->
            <!--<span>重填注册单</span>-->
            <!--</a>-->
        </div>
        <div class="not-login">
            <form id="loginform">
                <div class="portrait-container">
                    <img class="portrait pic" src="http://www.tp5.com/resource/images/user/icon-weidenglu.png">
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="用户名 / username" name="username" id="username">
                </div>
                <div class="input-wrapper">
                    <input type="password" placeholder="密码 / password" name="password">
                </div>
                <div class="input-wrapper">
                    <input type="checkbox" name="keepalive" data-role="keepalive" id="form-remember-checkbox" value="false">
                    <label for="form-remember-checkbox">下次自动登录</label>
                </div>
                <div class="btn-group">
                    <a class="btn" id="btn-login">登录</a>
                    <a class="btn" id="btn-register" data-no-pjax href="register.html" target="_blank">注册</a>
                </div>
                <a class="white-link" data-no-pjax href="reset-password-req.html">找回密码</a>
            </form>
        </div>
    </div>
    <div id="link-buttons">
        <a href="http://www.tp5.com/home.html" id="tab_home"><img src="http://www.tp5.com/resource/images/home/iconfont-home.png">首页</a>
        <a href="http://www.tp5.com/favorite.html" id="tab_favorite"><img src="http://www.tp5.com/resource/images/home/icon-shoucangjia.png">版面收藏夹</a>
        <a href="http://www.tp5.com/zone.html" id="tab_zone"><img src="http://www.tp5.com/resource/images/home/iconfont-fenlei.png">版面目录</a>
        <a href="http://www.tp5.com/favorite-collection.html" id="tab_favorite_collection"><img src="http://www.tp5.com/resource/images/home/icon-jinghuaqu.png">精华区收藏夹</a>
        <a href="http://www.tp5.com/friend.html" id="tab_friend"><img src="http://www.tp5.com/resource/images/home/iconfont-haoyou.png">关注/粉丝</a>
    </div>
</nav>

<nav id="top-nav">
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="search-box bdwm-search-box">
                <input class="search-ipt" id="search-ipt" type="text" placeholder="搜索版面、帖子、用户" autocomplete="off">
                <img class="search-btn" src="http://www.tp5.com/resource/images/home/iconfont-sousuo.png">
                <ul class="search-result box-shadow keywords-result"></ul>
                <ul class="search-result box-shadown history-result"></ul>
            </div>
            <div class="top-right-links">
                <a href="help.html">帮助中心</a>
            </div>
        </div>
    </div>
</nav>

<div id="page-content">
    <div id="page-post-new">
        <div class="breadcrumb-trail">
            <!--这里是面包屑导航，样式在global里面-->
            <a href="home.html">首页</a>
            <a href="zone.html">版面目录</a>
            <a href="board.html?bid=664">一区: 北京大学</a>
            <a href="thread.html?bid=1431">燕园食宿(CanteenDorm)</a>
            <a href="/v2/post-new.html?bid=1431&amp;parentid=20087173">发帖/修改帖子</a>
        </div>
        <div class="post-body">
            <div class="bdwm-editor" data-mode="new" data-bid="1431">
                <div class="row">
                    <span class="title" style="padding-right: 1em;">标题</span>
                    <div class="input-wrapper title-input">
                        <input type="text" tabindex="1" data-role="post-title" maxlength="48">
                    </div>
                    <span class="title-suggest">建议：≤24个字</span>
                </div>
                <div class="qeditor_border" style="display:block;text-align: left">
                        <textarea id="new-post-textarea" tabindex="2" class="qeditor" style="display: none;"></textarea>
                    </div>
                <div class="row">
                        <span class="title">签名档</span>
                        <div class="cs-select">
                            <section>
                                <div class="cs-select" tabindex="0">
                                    <span class="cs-placeholder"></span>
                                    <div class="cs-options">
                                        <ul>
                                            <li data-option data-value>
                                                <span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <select class="cs-select" data-role="signature" data-signature-count="0" >

                                    <option value="">无</option>
                                </select>
                            </section>
                            <div id="signature-origin" style="display: none">null</div>
                        </div>
                        <a data-action="file-upload" class="fade-button" data-upload-dir="f65b99c4491b19d0">管理附件</a>
                        <div class="r">
                            <div class="input-wrapper">
                                <input id="input-noreply" type="checkbox">
                                <label for="input-noreply">不可回复</label>
                            </div>
                            <div class="input-wrapper">
                                <input id="input-remind" type="checkbox">
                                <label for="input-remind">回复提醒</label>
                                <span class="other">（通过消息）</span>
                            </div>
                            <div class="input-wrapper">
                                <input id="input-forward" type="checkbox" disabled>
                                <label for="input-forward">抄送给原作者</label>
                                <span class="other  disabled">（通过站内信）</span>
                            </div>
                            <div class="input-wrapper">
                                <input id="input-anonymous" type="checkbox" disabled>
                                <label for="input-anonymous">匿名</label>
                            </div>
                            <a class="publish-button extended" data-action="new-post-publish" tabindex="3">发布(Ctrl+回车)</a>
                        </div>
                    </div>
            </div>
        </div>
            <!--<div class="bdwm-editor" data-mode="reply" data-bid="1431" data-parentid="20087173">
                <div class="row">
                    <span class="title" style="padding-right: 1em;">标题</span>
                    <div class="input-wrapper title-input"><input type="text" tabindex="1" data-role="post-title" maxlength="48" value="Re: 主食每种限三个，耐不过被薅七八种。。"></div>
                    <span class="title-suggest">建议：≤ 24个字</span>
                    <div class="r">
                        <span>引文模式</span>
                        <div class="cs-select">
                            <section>
                                <select data-role="quote-mode" class="cs-select">
                                    <option value="simple" selected>精简</option>
                                    <option value="full">完整</option>
                                </select>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="input-wrapper content-input" ><textarea id="new-post-textarea" tabindex="2"></textarea></div>
                <div class="row">
                    <span class="title">签名档</span>
                    <div class="cs-select">
                        <section>
                            <select class="cs-select" data-role="signature" data-signature-count="0" >
                                <option value="">无</option>
                            </select>
                        </section>
                        <div id="signature-origin" style="display: none">null</div>
                    </div>
                    <a data-action="file-upload" class="fade-button" data-upload-dir="9b67581e9ba53c57">管理附件</a>
                    <div class="r">
                        <div class="input-wrapper">
                            <input id="input-noreply" type="checkbox">
                            <label for="input-noreply">不可回复</label>
                        </div>
                        <div class="input-wrapper">
                            <input id="input-remind" type="checkbox">
                            <label for="input-remind">回复提醒</label>
                            <span class="other">（通过消息）</span>
                        </div>
                        <div class="input-wrapper">
                            <input id="input-forward" type="checkbox" data-uid="31210">
                            <label for="input-forward">抄送给原作者</label>
                            <span class="other ">（通过站内信）</span>
                        </div>
                        <div class="input-wrapper">
                            <input id="input-anonymous" type="checkbox" disabled>
                            <label for="input-anonymous">匿名</label>
                        </div>
                        <a class="publish-button extended" data-action="new-post-publish" tabindex="3">发布(Ctrl+回车)</a>
                    </div>
                </div>
            </div>-->
        <div class="instruction">
          <div class="title">
                    请注意：
                </div>
          <div class="content">
                    <p>本站规定，相同或相近内容的帖子一周内严禁在5个及5个以上讨论区内重复张贴，否则将受到禁言全站发文权限直至删除帐号的处罚。<br>
                        多个id共同一文多发的，对参与多发的每个id按多发总数处罚！</p>
                    <p>本站无权阻止任何人将您的帖子转载到其他任何地方。如果您不希望您的帖子被转载，则请不要发表。</p>
                </div>
        </div>
    </div>
    <!-- end main -->
    <!-- content end-->
    <script type="text/javascript">
        $("#new-post-textarea").qeditor({});
        $(".qeditor_preview").css({
            "border-radius":"3px",
            // "margin": "0",
            "border": "1px solid #eee",
            "background":" #fff",
            "box-shadow": "inset 0 1px 0 0 rgba(0,0,0,.03), inset 0 3px 0 0 rgba(0,0,0,.02)",
            "outline":" 0",
            "resize":" none",
            "padding":" 10px",
            "font-size":" 14px",
            "line-height":" 20px",
            "width":" 896px",
            "min-height":"240px",
            "max-height":"450px",
            "overflow":"auto",
            "color":"#333!important"
        });
        $("a[data-action='fullScreen']").click(function () {
            alert("我执行了");
            $(".qeditor_preview").css({
                "margin-top":"20px",
                "margin-left":"224.5px"
            });
        })
    </script>
</div>

<div class="mask mask-without-header"></div>

<div class="mask mask-full-screen" id="page-notice-container">
    <div class="page-notice box-shadow">
        <p>您输入的密码有误，请重新输入</p>
        <button>确认</button>
    </div>
</div>

<div class="mask mask-transparent"></div>

<div class="mask mask-transparent top-nav"></div>
<div class="bdwm-dialog-wrapper bdwm-dialog-wrapper-background" style="display: none">
    <div id="bdwm-file-uploader" class="bdwm-dialog" style="display: inline-block;position: absolute;left: 528px;top: -43.5px;">
       <div class="bawm-file-uploader-content">
        <span class="bdwm-file-upload-title">管理附件</span>
        <span class="bdwm-file-uploader-instruction">点击『选取文件』选择需要上传的文件，点击『确认』完成上传</span>
        <div class="row">
            <a class="bdwm-file-uploader-open-file-button" data-action="bdwm-file-uploader-open-file">选取文件</a>
        </div>
        <span class="bdwm-file-uploader-subtitle">管理附件</span>
        <ul class="bdwm-file-uploader-file-list bdwmm-custom-scroll-bar" data-role="filelist"></ul>
        <div class="row" style="text-align: center">
            <a class="bdwm-file-uploader-submit-button" data-action="bdwm-file-uploader-submit">确认</a>
        </div>
       <a class="bdwm-file-uploader-dismiss" data-action="=dialog-dismiss">
           <img src="http://www.tp5.com/resource/images/mail/iconfont-qingchu-1.png">
       </a>
        <input type="file" name="file" data-role="bdwm-file-uploader-input" style="display:none">
       </div>
    </div>
</div>
<footer id="footer">
    <p><a data-no-pjax href="../123/" target="_blank">常用网站</a> - <a href="download.html">相关下载</a> - <a href="publication.html">聚远社刊</a> - <a href="about-us.html">关于我们</a> - <a href="contact.html">联系我们</a> - <a href="join-us.html">加入我们</a> - <a href="help.html">帮助中心</a> - <a href="mail-new.html?username=SYSOP">意见反馈</a></p>
    <p>© 2012–2019 聚远社BBS</p>
</footer>

</body>
</html>