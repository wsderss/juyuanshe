<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\apache24\htdocs\juyuanshe\public/../application/index\view\form\board.html";i:1555157613;}*/ ?>
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
                <span data-role="login-username">guest</span>
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
                <a href="help.php">帮助中心</a>
            </div>
        </div>
    </div>
</nav>
<div id="page-content">
    <div id="login-info" style="display: none">
        <div data-role="login-info-username" data-value="guest"></div>
        <div data-role="login-info-nickname" data-value="未名湖里的鱼儿"></div>
        <div data-role="login-info-rankname" data-value="高级站友"></div>
        <div data-role="login-info-numposts" data-value="1695"></div>
    </div>
    <!-- this is the real content, should be returned from server when PJAX working.-->
    <!-- start main -->
    <div id="bdwm-title">一区: 北京大学 - 北大未名BBS</div>
    <script>
        $("#link-buttons > a").removeClass("cur");
    </script>
    <div id="page-board">
        <div class="breadcrumb-trail">
            <!--这里是面包屑导航，样式在global里面-->
            <a href="home.html">首页</a>
            <a href="zone.html">版面目录</a>
            <a href="/v2/board.html?bid=664">一区: 北京大学</a>
        </div>
        <div class="section" data-fold="open">
            <div class="section-title" data-action="whole-click">
                <span>热门版面</span>
                <div class="right">
                    <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                    <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                </div>
            </div>
            <div class="section-content">
                <div class="boards-wrapper hots">
                    <div class="board-block" data-bid="1431">
                        <a class="block-link" href="thread.html?bid=1431"></a>
                        <div class="left">
                            <div class="title">
                                <a class="star" data-action="make-favorite"></a>
                                <span class="eng-name">CanteenDorm</span>
                                <span class="name">燕园食宿</span>
                                <span class="people">46人在线</span>
                            </div>
                            <div class="intro">所有关于食堂和宿舍的话题，都来这里讨论吧！</div>
                            <div class="stat"><span>今日：27</span><span>主题：8,225</span><span>帖数：101,395</span></div>
                            <div class="admin">
                                <span>版务: </span>
                                <a class="inline-link red" href="user.html?uid=13401">naiiive</a>
                                <a class="inline-link red" href="user.html?uid=32338">dyd</a>
                            </div>
                        </div>
                        <div class="right">
                            <a class="avatar" href="user.html?uid=19033"><img src="/attach/avatar/K/kakasika.jpg?t=1474792976" /></a>
                            <div class="post">
                                <a href="post-read.html?bid=1431&amp;threadid=17059650&amp;page=a&amp;postid=20094094#20094094" class="title">请问勺园二楼教职工餐厅的烤鱼现在还有吗</a>
                                <div class="info"><span>kakasika</span><span>15分钟前</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="board-block" data-bid="44">
                        <a class="block-link" href="thread.html?bid=44"></a>
                        <div class="left">
                            <div class="title">
                                <a class="star" data-action="make-favorite"></a>
                                <span class="eng-name">CIS</span>
                                <span class="name">智能科学系</span>
                                <span class="people">5人在线</span>
                            </div>
                            <div class="intro">mi,&nbsp;cis,&nbsp;eecs,&nbsp;智能科学系,&nbsp;信息中心,&nbsp;信科</div>
                            <div class="stat"><span>今日：0</span><span>主题：1,654</span><span>帖数：4,581</span></div>
                            <div class="admin">
                                <span>版务: </span>
                            </div>
                        </div>
                        <div class="right">
                            <a class="avatar" href="user.html?uid=27107"><img src="/attach/avatar/H/harrygogo.jpg?t=1467912522" /></a>
                            <div class="post">
                                <a href="post-read.html?bid=44&amp;threadid=17054736&amp;page=a&amp;postid=20036997#20036997" class="title">【实习】微软小冰团队招聘NLP算法实习生(转载)</a>
                                <div class="info"><span>harrygogo</span><span>04-10 16:30</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="board-block" data-bid="846">
                        <a class="block-link" href="thread.html?bid=846"></a>
                        <div class="left">
                            <div class="title">
                                <a class="star" data-action="make-favorite"></a>
                                <span class="eng-name">COE</span>
                                <span class="name">工学院</span>
                                <span class="people">0人在线</span>
                            </div>
                            <div class="intro">工学院, 理力, 工程,&nbsp;能源,&nbsp;材料,&nbsp;生医,&nbsp;航空</div>
                            <div class="stat"><span>今日：0</span><span>主题：2,315</span><span>帖数：5,038</span></div>
                            <div class="admin">
                                <span>版务: </span>
                            </div>
                        </div>
                        <div class="right">
                            <a class="avatar" href="user.html?uid=137715"><img src="images/user/portrait-mas.png" /></a>
                            <div class="post">
                                <a href="post-read.html?bid=846&amp;threadid=17042108&amp;page=a&amp;postid=19884461#19884461" class="title">香港中文大学（深圳）材料科学与工程博士项目</a>
                                <div class="info"><span>gqzhangcuhk</span><span>04-02 20:00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section"  data-show-mode="list">
            <div class="section-title">
                <span>所有版面</span>
                <div class="right">
                    <a class="button" data-action='show-blocks'><img src="http://www.tp5.com/resource/images/board/bankuai.png"/></a>
                    <a class="button" data-action='show-list'><img src="http://www.tp5.com/resource/images/board/liebiao.png"/></a>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>默认版面</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="1107">
                                <a class="block-link" href="thread.html?bid=1107"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Admin1_lobby</span>
                                    <a class="update" href="post-read.html?bid=1107&amp;threadid=17059107&amp;page=a&amp;postid=20092807#20092807">最后更新：01:30</a>
                                    <span class="name">一区议事厅        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=24091">alwaysmoving</a>
                                    <a class="admin-link" href="user.html?uid=23162">sliorveen</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="25">
                                <a class="block-link" href="thread.html?bid=25"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKULibrary</span>
                                    <a class="update" href="post-read.html?bid=25&amp;threadid=17057889&amp;page=a&amp;postid=20093610#20093610">最后更新：10:44</a>
                                    <span class="name">北京大学图书馆        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1107">
                                <a class="block-link" href="thread.html?bid=1107"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Admin1_lobby</span>
                                    <span class="name">一区议事厅</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=24091">alwaysmoving</a>
                                        <a class="inline-link" href="user.html?uid=23162">sliorveen</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1107&amp;threadid=17059107&amp;page=a&amp;postid=20092807#20092807">最后更新：01:30</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="25">
                                <a class="block-link" href="thread.html?bid=25"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKULibrary</span>
                                    <span class="name">北京大学图书馆</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=25&amp;threadid=17057889&amp;page=a&amp;postid=20093610#20093610">最后更新：10:44</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>北京大学医学部</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="138">
                                <a class="block-link" href="thread.html?bid=138"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">HSC</span>
                                    <a class="update" href="post-read.html?bid=138&amp;threadid=17058710&amp;page=a&amp;postid=20093926#20093926">最后更新：12:31</a>
                                    <span class="name">医学部        </span>
                                    <span class="people">22人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=811">monsterswalk</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="1014">
                                <a class="block-link" href="thread.html?bid=1014"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">HSCINFO</span>
                                    <a class="update" href="post-read.html?bid=1014&amp;threadid=15723769&amp;page=a&amp;postid=20083875#20083875">最后更新：前天 10:17</a>
                                    <span class="name">医学部信息        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="540">
                                <a class="block-link" href="thread.html?bid=540"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SPH</span>
                                    <a class="update" href="post-read.html?bid=540&amp;threadid=16369678&amp;page=a&amp;postid=17604047#17604047">最后更新：2018-03-28</a>
                                    <span class="name ro">公共卫生学院            <span class="readonly">只读</span>
        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="256">
                                <a class="block-link" href="thread.html?bid=256"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SPS</span>
                                    <a class="update" href="post-read.html?bid=256&amp;threadid=17047459&amp;page=a&amp;postid=20011424#20011424">最后更新：04-07 04:53</a>
                                    <span class="name">药学院        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="138">
                                <a class="block-link" href="thread.html?bid=138"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">HSC</span>
                                    <span class="name">医学部</span>
                                    <span class="people">22人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=811">monsterswalk</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=138&amp;threadid=17058710&amp;page=a&amp;postid=20093926#20093926">最后更新：12:31</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1014">
                                <a class="block-link" href="thread.html?bid=1014"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">HSCINFO</span>
                                    <span class="name">医学部信息</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1014&amp;threadid=15723769&amp;page=a&amp;postid=20083875#20083875">最后更新：前天 10:17</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="540">
                                <a class="block-link" href="thread.html?bid=540"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SPH</span>
                                    <span class="name ro">公共卫生学院</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=540&amp;threadid=16369678&amp;page=a&amp;postid=17604047#17604047">最后更新：2018-03-28</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="256">
                                <a class="block-link" href="thread.html?bid=256"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SPS</span>
                                    <span class="name">药学院</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=256&amp;threadid=17047459&amp;page=a&amp;postid=20011424#20011424">最后更新：04-07 04:53</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>经济与管理学部</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="62">
                                <a class="block-link" href="thread.html?bid=62"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Economics</span>
                                    <a class="update" href="post-read.html?bid=62&amp;threadid=17053090&amp;page=a&amp;postid=20031916#20031916">最后更新：04-09 15:30</a>
                                    <span class="name">经济学院        </span>
                                    <span class="people">6人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="23">
                                <a class="block-link" href="thread.html?bid=23"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">GSM</span>
                                    <a class="update" href="post-read.html?bid=23&amp;threadid=17047547&amp;page=a&amp;postid=19969412#19969412">最后更新：04-06 05:35</a>
                                    <span class="name">光华管理学院        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="67">
                                <a class="block-link" href="thread.html?bid=67"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">NSD</span>
                                    <a class="update" href="post-read.html?bid=67&amp;threadid=17047557&amp;page=a&amp;postid=19969423#19969423">最后更新：04-06 05:51</a>
                                    <span class="name">国家发展研究院        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="62">
                                <a class="block-link" href="thread.html?bid=62"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Economics</span>
                                    <span class="name">经济学院</span>
                                    <span class="people">6人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=62&amp;threadid=17053090&amp;page=a&amp;postid=20031916#20031916">最后更新：04-09 15:30</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="23">
                                <a class="block-link" href="thread.html?bid=23"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">GSM</span>
                                    <span class="name">光华管理学院</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=23&amp;threadid=17047547&amp;page=a&amp;postid=19969412#19969412">最后更新：04-06 05:35</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="67">
                                <a class="block-link" href="thread.html?bid=67"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">NSD</span>
                                    <span class="name">国家发展研究院</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=67&amp;threadid=17047557&amp;page=a&amp;postid=19969423#19969423">最后更新：04-06 05:51</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>人文学部</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="75">
                                <a class="block-link" href="thread.html?bid=75"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">AoA</span>
                                    <a class="update" href="post-read.html?bid=75&amp;threadid=16001583&amp;page=a&amp;postid=16000692#16000692">最后更新：2017-01-17</a>
                                    <span class="name ro">艺术学院            <span class="readonly">只读</span>
        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="70">
                                <a class="block-link" href="thread.html?bid=70"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Archaeology</span>
                                    <a class="update" href="post-read.html?bid=70&amp;threadid=17054850&amp;page=a&amp;postid=20037291#20037291">最后更新：04-10 17:53</a>
                                    <span class="name">考古文博学院        </span>
                                    <span class="people">6人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="63">
                                <a class="block-link" href="thread.html?bid=63"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Chinese</span>
                                    <a class="update" href="post-read.html?bid=63&amp;threadid=17054587&amp;page=a&amp;postid=20036537#20036537">最后更新：04-10 14:55</a>
                                    <span class="name">中文系        </span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="278">
                                <a class="block-link" href="thread.html?bid=278"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Philo</span>
                                    <a class="update" href="post-read.html?bid=278&amp;threadid=17053507&amp;page=a&amp;postid=20033332#20033332">最后更新：04-09 21:14</a>
                                    <span class="name">哲学系        </span>
                                    <span class="people">8人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=33753">dadaye</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="321">
                                <a class="block-link" href="thread.html?bid=321"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUHistory</span>
                                    <a class="update" href="post-read.html?bid=321&amp;threadid=17000663&amp;page=a&amp;postid=19694941#19694941">最后更新：03-09 11:10</a>
                                    <span class="name">历史学系        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=26815">elliejin</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="64">
                                <a class="block-link" href="thread.html?bid=64"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SFL</span>
                                    <a class="update" href="post-read.html?bid=64&amp;threadid=17057885&amp;page=a&amp;postid=20089234#20089234">最后更新：昨天 10:37</a>
                                    <span class="name">外国语学院        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=17551">LLHH</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="75">
                                <a class="block-link" href="thread.html?bid=75"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">AoA</span>
                                    <span class="name ro">艺术学院</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=75&amp;threadid=16001583&amp;page=a&amp;postid=16000692#16000692">最后更新：2017-01-17</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="70">
                                <a class="block-link" href="thread.html?bid=70"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Archaeology</span>
                                    <span class="name">考古文博学院</span>
                                    <span class="people">6人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=70&amp;threadid=17054850&amp;page=a&amp;postid=20037291#20037291">最后更新：04-10 17:53</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="63">
                                <a class="block-link" href="thread.html?bid=63"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Chinese</span>
                                    <span class="name">中文系</span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=63&amp;threadid=17054587&amp;page=a&amp;postid=20036537#20036537">最后更新：04-10 14:55</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="278">
                                <a class="block-link" href="thread.html?bid=278"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Philo</span>
                                    <span class="name">哲学系</span>
                                    <span class="people">8人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=33753">dadaye</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=278&amp;threadid=17053507&amp;page=a&amp;postid=20033332#20033332">最后更新：04-09 21:14</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="321">
                                <a class="block-link" href="thread.html?bid=321"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUHistory</span>
                                    <span class="name">历史学系</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=26815">elliejin</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=321&amp;threadid=17000663&amp;page=a&amp;postid=19694941#19694941">最后更新：03-09 11:10</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="64">
                                <a class="block-link" href="thread.html?bid=64"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SFL</span>
                                    <span class="name">外国语学院</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=17551">LLHH</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=64&amp;threadid=17057885&amp;page=a&amp;postid=20089234#20089234">最后更新：昨天 10:37</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>信息与工程学部</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="192">
                                <a class="block-link" href="thread.html?bid=192"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CESE</span>
                                    <a class="update" href="post-read.html?bid=192&amp;threadid=17038818&amp;page=a&amp;postid=20092987#20092987">最后更新：04:40</a>
                                    <span class="name">环境科学与工程学院        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=15753">bychenpku</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="846">
                                <a class="block-link" href="thread.html?bid=846"></a>
                                <div class="right-label" data-action="show-hide-sub-blocks">
                                    <img class="spread-right" src="http://www.tp5.com/resource/images/board/spread-right.png">
                                    <img class="withdraw-left" src="http://www.tp5.com/resource/images/board/withdraw-left.png" style="display: none">
                                </div> <!--有子block就必须加这个-->
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">COE</span>
                                    <a class="update" href="post-read.html?bid=846&amp;threadid=17042108&amp;page=a&amp;postid=19884461#19884461">最后更新：04-02 20:00</a>
                                    <span class="name">工学院        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                            <div class="board-block sub-block hidden" data-bid="17">
                                <a class="block-link" href="thread.html?bid=17"></a>
                                <div class="left-label"></div>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Mechanics</span>
                                    <a class="update" href="post-read.html?bid=17&amp;threadid=15629996&amp;page=a&amp;postid=14950480#14950480">最后更新：2015-12-12</a>
                                    <span class="name ro">力学系            <span class="readonly">只读</span>
        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="322">
                                <a class="block-link" href="thread.html?bid=322"></a>
                                <div class="right-label" data-action="show-hide-sub-blocks">
                                    <img class="spread-right" src="http://www.tp5.com/resource/images/board/spread-right.png">
                                    <img class="withdraw-left" src="http://www.tp5.com/resource/images/board/withdraw-left.png" style="display: none">
                                </div> <!--有子block就必须加这个-->
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">EECS</span>
                                    <a class="update" href="post-read.html?bid=322&amp;threadid=17058470&amp;page=a&amp;postid=20091034#20091034">最后更新：昨天 16:52</a>
                                    <span class="name">信息科学技术学院        </span>
                                    <span class="people">12人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=20109">davy</a>
                                </div>
                            </div>
                            <div class="board-block sub-block hidden" data-bid="44">
                                <a class="block-link" href="thread.html?bid=44"></a>
                                <div class="left-label"></div>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CIS</span>
                                    <a class="update" href="post-read.html?bid=44&amp;threadid=17054736&amp;page=a&amp;postid=20036997#20036997">最后更新：04-10 16:30</a>
                                    <span class="name">智能科学系        </span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                            <div class="board-block sub-block hidden" data-bid="24">
                                <a class="block-link" href="thread.html?bid=24"></a>
                                <div class="left-label"></div>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CS</span>
                                    <a class="update" href="post-read.html?bid=24&amp;threadid=17059552&amp;page=a&amp;postid=20093784#20093784">最后更新：11:43</a>
                                    <span class="name">计算机科学技术系        </span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                            <div class="board-block sub-block hidden" data-bid="59">
                                <a class="block-link" href="thread.html?bid=59"></a>
                                <div class="left-label"></div>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Electronics</span>
                                    <a class="update" href="post-read.html?bid=59&amp;threadid=17010013&amp;page=a&amp;postid=19719769#19719769">最后更新：03-14 23:02</a>
                                    <span class="name">电子学系        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                            <div class="board-block sub-block hidden" data-bid="140">
                                <a class="block-link" href="thread.html?bid=140"></a>
                                <div class="left-label"></div>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">IME</span>
                                    <a class="update" href="post-read.html?bid=140&amp;threadid=17046456&amp;page=a&amp;postid=19951171#19951171">最后更新：04-05 11:18</a>
                                    <span class="name">微电子系        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="327">
                                <a class="block-link" href="thread.html?bid=327"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SSM</span>
                                    <a class="update" href="post-read.html?bid=327&amp;threadid=17046456&amp;page=a&amp;postid=19951174#19951174">最后更新：04-05 11:19</a>
                                    <span class="name">软件与微电子学院        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="192">
                                <a class="block-link" href="thread.html?bid=192"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CESE</span>
                                    <span class="name">环境科学与工程学院</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=15753">bychenpku</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=192&amp;threadid=17038818&amp;page=a&amp;postid=20092987#20092987">最后更新：04:40</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="846">
                                <a class="block-link" href="thread.html?bid=846"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">COE</span>
                                    <span class="name">工学院</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=846&amp;threadid=17042108&amp;page=a&amp;postid=19884461#19884461">最后更新：04-02 20:00</a>
                                </div>
                            </div>
                            <div class="board-block sub-block" data-bid="17">
                                <a class="block-link" href="thread.html?bid=17"></a>
                                <div class="line"></div> <!--sub block必须包含这个-->
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Mechanics</span>
                                    <span class="name ro">力学系</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=17&amp;threadid=15629996&amp;page=a&amp;postid=14950480#14950480">最后更新：2015-12-12</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="322">
                                <a class="block-link" href="thread.html?bid=322"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">EECS</span>
                                    <span class="name">信息科学技术学院</span>
                                    <span class="people">12人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=20109">davy</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=322&amp;threadid=17058470&amp;page=a&amp;postid=20091034#20091034">最后更新：昨天 16:52</a>
                                </div>
                            </div>
                            <div class="board-block sub-block" data-bid="44">
                                <a class="block-link" href="thread.html?bid=44"></a>
                                <div class="line"></div> <!--sub block必须包含这个-->
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CIS</span>
                                    <span class="name">智能科学系</span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=44&amp;threadid=17054736&amp;page=a&amp;postid=20036997#20036997">最后更新：04-10 16:30</a>
                                </div>
                            </div>
                            <div class="board-block sub-block" data-bid="24">
                                <a class="block-link" href="thread.html?bid=24"></a>
                                <div class="line"></div> <!--sub block必须包含这个-->
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CS</span>
                                    <span class="name">计算机科学技术系</span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=24&amp;threadid=17059552&amp;page=a&amp;postid=20093784#20093784">最后更新：11:43</a>
                                </div>
                            </div>
                            <div class="board-block sub-block" data-bid="59">
                                <a class="block-link" href="thread.html?bid=59"></a>
                                <div class="line"></div> <!--sub block必须包含这个-->
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Electronics</span>
                                    <span class="name">电子学系</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=59&amp;threadid=17010013&amp;page=a&amp;postid=19719769#19719769">最后更新：03-14 23:02</a>
                                </div>
                            </div>
                            <div class="board-block sub-block" data-bid="140">
                                <a class="block-link" href="thread.html?bid=140"></a>
                                <div class="line"></div> <!--sub block必须包含这个-->
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">IME</span>
                                    <span class="name">微电子系</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=140&amp;threadid=17046456&amp;page=a&amp;postid=19951171#19951171">最后更新：04-05 11:18</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="327">
                                <a class="block-link" href="thread.html?bid=327"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SSM</span>
                                    <span class="name">软件与微电子学院</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=327&amp;threadid=17046456&amp;page=a&amp;postid=19951174#19951174">最后更新：04-05 11:19</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>跨学科类</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="971">
                                <a class="block-link" href="thread.html?bid=971"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">AAIS</span>
                                    <a class="update" href="post-read.html?bid=971&amp;threadid=17045100&amp;page=a&amp;postid=19914342#19914342">最后更新：04-04 13:39</a>
                                    <span class="name">交叉学科研究院        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="1095">
                                <a class="block-link" href="thread.html?bid=1095"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">IMM</span>
                                    <a class="update" href="post-read.html?bid=1095&amp;threadid=15629996&amp;page=a&amp;postid=14950484#14950484">最后更新：2015-12-12</a>
                                    <span class="name ro">分子医学研究所            <span class="readonly">只读</span>
        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="325">
                                <a class="block-link" href="thread.html?bid=325"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">ypjh</span>
                                    <a class="update" href="post-read.html?bid=325&amp;threadid=17049003&amp;page=a&amp;postid=20026693#20026693">最后更新：04-08 11:50</a>
                                    <span class="name">元培计划        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=47919">Hotarubi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="971">
                                <a class="block-link" href="thread.html?bid=971"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">AAIS</span>
                                    <span class="name">交叉学科研究院</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=971&amp;threadid=17045100&amp;page=a&amp;postid=19914342#19914342">最后更新：04-04 13:39</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1095">
                                <a class="block-link" href="thread.html?bid=1095"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">IMM</span>
                                    <span class="name ro">分子医学研究所</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1095&amp;threadid=15629996&amp;page=a&amp;postid=14950484#14950484">最后更新：2015-12-12</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="325">
                                <a class="block-link" href="thread.html?bid=325"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">ypjh</span>
                                    <span class="name">元培计划</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=47919">Hotarubi</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=325&amp;threadid=17049003&amp;page=a&amp;postid=20026693#20026693">最后更新：04-08 11:50</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>北大生活</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="222">
                                <a class="block-link" href="thread.html?bid=222"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Auditory</span>
                                    <a class="update" href="post-read.html?bid=222&amp;threadid=17037402&amp;page=a&amp;postid=20090252#20090252">最后更新：昨天 13:41</a>
                                    <span class="name">百周年纪念讲堂        </span>
                                    <span class="people">7人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=24045">smgsmg</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="1431">
                                <a class="block-link" href="thread.html?bid=1431"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CanteenDorm</span>
                                    <a class="update" href="post-read.html?bid=1431&amp;threadid=17059650&amp;page=a&amp;postid=20094094#20094094">最后更新：15分钟前</a>
                                    <span class="name">燕园食宿        </span>
                                    <span class="people">46人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=13401">naiiive</a>
                                    <a class="admin-link" href="user.html?uid=32338">dyd</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="807">
                                <a class="block-link" href="thread.html?bid=807"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CCYuan</span>
                                    <a class="update" href="post-read.html?bid=807&amp;threadid=17056345&amp;page=a&amp;postid=20084828#20084828">最后更新：前天 12:57</a>
                                    <span class="name">畅春新园        </span>
                                    <span class="people">4人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="1382">
                                <a class="block-link" href="thread.html?bid=1382"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CQB</span>
                                    <a class="update" href="post-read.html?bid=1382&amp;threadid=16141269&amp;page=a&amp;postid=16693815#16693815">最后更新：2017-07-05</a>
                                    <span class="name ro">菜头帮            <span class="readonly">只读</span>
        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="294">
                                <a class="block-link" href="thread.html?bid=294"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUdevelopment</span>
                                    <a class="update" href="post-read.html?bid=294&amp;threadid=17053130&amp;page=a&amp;postid=20092830#20092830">最后更新：01:53</a>
                                    <span class="name">北大发展        </span>
                                    <span class="people">9人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=13401">naiiive</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="260">
                                <a class="block-link" href="thread.html?bid=260"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUHighSchool</span>
                                    <a class="update" href="post-read.html?bid=260&amp;threadid=15629996&amp;page=a&amp;postid=14950486#14950486">最后更新：2015-12-12</a>
                                    <span class="name ro">北大附中            <span class="readonly">只读</span>
        </span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="972">
                                <a class="block-link" href="thread.html?bid=972"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Postgraduate</span>
                                    <a class="update" href="post-read.html?bid=972&amp;threadid=17043869&amp;page=a&amp;postid=19888987#19888987">最后更新：04-03 19:40</a>
                                    <span class="name">研究生        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=32338">dyd</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="315">
                                <a class="block-link" href="thread.html?bid=315"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">WanLiu</span>
                                    <a class="update" href="post-read.html?bid=315&amp;threadid=16916034&amp;page=a&amp;postid=19918688#19918688">最后更新：04-04 16:53</a>
                                    <span class="name">万柳生活        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="769">
                                <a class="block-link" href="thread.html?bid=769"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">WisePark</span>
                                    <a class="update" href="post-read.html?bid=769&amp;threadid=15299881&amp;page=a&amp;postid=14288765#14288765">最后更新：2014-12-01</a>
                                    <span class="name ro">二旗家园            <span class="readonly">只读</span>
        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="628">
                                <a class="block-link" href="thread.html?bid=628"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Xuanliu</span>
                                    <a class="update" href="post-read.html?bid=628&amp;threadid=15299881&amp;page=a&amp;postid=14288767#14288767">最后更新：2014-12-01</a>
                                    <span class="name ro">选留之家            <span class="readonly">只读</span>
        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="1404">
                                <a class="block-link" href="thread.html?bid=1404"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">YuanMingYuan</span>
                                    <a class="update" href="post-read.html?bid=1404&amp;threadid=15442768&amp;page=a&amp;postid=14584852#14584852">最后更新：2015-05-11</a>
                                    <span class="name ro">圆明园校区            <span class="readonly">只读</span>
        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="1303">
                                <a class="block-link" href="thread.html?bid=1303"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">ZhongGuanYuan</span>
                                    <a class="update" href="post-read.html?bid=1303&amp;threadid=16853739&amp;page=a&amp;postid=19162257#19162257">最后更新：2018-12-05</a>
                                    <span class="name">中关新园        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="222">
                                <a class="block-link" href="thread.html?bid=222"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Auditory</span>
                                    <span class="name">百周年纪念讲堂</span>
                                    <span class="people">7人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=24045">smgsmg</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=222&amp;threadid=17037402&amp;page=a&amp;postid=20090252#20090252">最后更新：昨天 13:41</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1431">
                                <a class="block-link" href="thread.html?bid=1431"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CanteenDorm</span>
                                    <span class="name">燕园食宿</span>
                                    <span class="people">46人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=13401">naiiive</a>
                                        <a class="inline-link" href="user.html?uid=32338">dyd</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1431&amp;threadid=17059650&amp;page=a&amp;postid=20094094#20094094">最后更新：15分钟前</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="807">
                                <a class="block-link" href="thread.html?bid=807"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CCYuan</span>
                                    <span class="name">畅春新园</span>
                                    <span class="people">4人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=807&amp;threadid=17056345&amp;page=a&amp;postid=20084828#20084828">最后更新：前天 12:57</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1382">
                                <a class="block-link" href="thread.html?bid=1382"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CQB</span>
                                    <span class="name ro">菜头帮</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1382&amp;threadid=16141269&amp;page=a&amp;postid=16693815#16693815">最后更新：2017-07-05</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="294">
                                <a class="block-link" href="thread.html?bid=294"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUdevelopment</span>
                                    <span class="name">北大发展</span>
                                    <span class="people">9人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=13401">naiiive</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=294&amp;threadid=17053130&amp;page=a&amp;postid=20092830#20092830">最后更新：01:53</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="260">
                                <a class="block-link" href="thread.html?bid=260"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUHighSchool</span>
                                    <span class="name ro">北大附中</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=260&amp;threadid=15629996&amp;page=a&amp;postid=14950486#14950486">最后更新：2015-12-12</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="972">
                                <a class="block-link" href="thread.html?bid=972"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Postgraduate</span>
                                    <span class="name">研究生</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=32338">dyd</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=972&amp;threadid=17043869&amp;page=a&amp;postid=19888987#19888987">最后更新：04-03 19:40</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="315">
                                <a class="block-link" href="thread.html?bid=315"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">WanLiu</span>
                                    <span class="name">万柳生活</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=315&amp;threadid=16916034&amp;page=a&amp;postid=19918688#19918688">最后更新：04-04 16:53</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="769">
                                <a class="block-link" href="thread.html?bid=769"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">WisePark</span>
                                    <span class="name ro">二旗家园</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=769&amp;threadid=15299881&amp;page=a&amp;postid=14288765#14288765">最后更新：2014-12-01</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="628">
                                <a class="block-link" href="thread.html?bid=628"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Xuanliu</span>
                                    <span class="name ro">选留之家</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=628&amp;threadid=15299881&amp;page=a&amp;postid=14288767#14288767">最后更新：2014-12-01</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1404">
                                <a class="block-link" href="thread.html?bid=1404"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">YuanMingYuan</span>
                                    <span class="name ro">圆明园校区</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1404&amp;threadid=15442768&amp;page=a&amp;postid=14584852#14584852">最后更新：2015-05-11</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1303">
                                <a class="block-link" href="thread.html?bid=1303"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">ZhongGuanYuan</span>
                                    <span class="name">中关新园</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1303&amp;threadid=16853739&amp;page=a&amp;postid=19162257#19162257">最后更新：2018-12-05</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>理学部</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="1356">
                                <a class="block-link" href="thread.html?bid=1356"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CALA</span>
                                    <a class="update" href="post-read.html?bid=1356&amp;threadid=15299881&amp;page=a&amp;postid=14288769#14288769">最后更新：2014-12-01</a>
                                    <span class="name ro">建筑与景观设计学院            <span class="readonly">只读</span>
        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="61">
                                <a class="block-link" href="thread.html?bid=61"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CCME</span>
                                    <a class="update" href="post-read.html?bid=61&amp;threadid=17024894&amp;page=a&amp;postid=20037231#20037231">最后更新：04-10 17:31</a>
                                    <span class="name">化学与分子工程学院        </span>
                                    <span class="people">6人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=25993">entropy</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="15">
                                <a class="block-link" href="thread.html?bid=15"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">LifeScience</span>
                                    <a class="update" href="post-read.html?bid=15&amp;threadid=17047459&amp;page=a&amp;postid=19969315#19969315">最后更新：04-06 03:14</a>
                                    <span class="name">生命科学学院        </span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="57">
                                <a class="block-link" href="thread.html?bid=57"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Physics</span>
                                    <a class="update" href="post-read.html?bid=57&amp;threadid=17055246&amp;page=a&amp;postid=20090554#20090554">最后更新：昨天 14:56</a>
                                    <span class="name">物理学院        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=24352">hrcegg</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="38">
                                <a class="block-link" href="thread.html?bid=38"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Psychology</span>
                                    <a class="update" href="post-read.html?bid=38&amp;threadid=17058253&amp;page=a&amp;postid=20090349#20090349">最后更新：昨天 14:03</a>
                                    <span class="name">心理与认知科学学院        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=3153">huanggouxin</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="267">
                                <a class="block-link" href="thread.html?bid=267"></a>
                                <div class="right-label" data-action="show-hide-sub-blocks">
                                    <img class="spread-right" src="http://www.tp5.com/resource/images/board/spread-right.png">
                                    <img class="withdraw-left" src="http://www.tp5.com/resource/images/board/withdraw-left.png" style="display: none">
                                </div> <!--有子block就必须加这个-->
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SESS</span>
                                    <a class="update" href="post-read.html?bid=267&amp;threadid=17055228&amp;page=a&amp;postid=20088907#20088907">最后更新：昨天 09:20</a>
                                    <span class="name">地球与空间科学学院        </span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                            <div class="board-block sub-block hidden" data-bid="66">
                                <a class="block-link" href="thread.html?bid=66"></a>
                                <div class="left-label"></div>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Geology</span>
                                    <a class="update" href="post-read.html?bid=66&amp;threadid=17031280&amp;page=a&amp;postid=19776719#19776719">最后更新：03-27 15:45</a>
                                    <span class="name">地质学系        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                            <div class="board-block sub-block hidden" data-bid="60">
                                <a class="block-link" href="thread.html?bid=60"></a>
                                <div class="left-label"></div>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Geophysics</span>
                                    <a class="update" href="post-read.html?bid=60&amp;threadid=17023172&amp;page=a&amp;postid=19754944#19754944">最后更新：03-22 17:20</a>
                                    <span class="name">地球物理系        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="51">
                                <a class="block-link" href="thread.html?bid=51"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SMS</span>
                                    <a class="update" href="post-read.html?bid=51&amp;threadid=17047849&amp;page=a&amp;postid=20092395#20092395">最后更新：昨天 23:23</a>
                                    <span class="name">数学科学学院        </span>
                                    <span class="people">7人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=14930">jefaystone</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="31">
                                <a class="block-link" href="thread.html?bid=31"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Urban</span>
                                    <a class="update" href="post-read.html?bid=31&amp;threadid=17031051&amp;page=a&amp;postid=19775907#19775907">最后更新：03-27 13:16</a>
                                    <span class="name">城市与环境学院        </span>
                                    <span class="people">4人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1356">
                                <a class="block-link" href="thread.html?bid=1356"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CALA</span>
                                    <span class="name ro">建筑与景观设计学院</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1356&amp;threadid=15299881&amp;page=a&amp;postid=14288769#14288769">最后更新：2014-12-01</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="61">
                                <a class="block-link" href="thread.html?bid=61"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">CCME</span>
                                    <span class="name">化学与分子工程学院</span>
                                    <span class="people">6人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=25993">entropy</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=61&amp;threadid=17024894&amp;page=a&amp;postid=20037231#20037231">最后更新：04-10 17:31</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="15">
                                <a class="block-link" href="thread.html?bid=15"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">LifeScience</span>
                                    <span class="name">生命科学学院</span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=15&amp;threadid=17047459&amp;page=a&amp;postid=19969315#19969315">最后更新：04-06 03:14</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="57">
                                <a class="block-link" href="thread.html?bid=57"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Physics</span>
                                    <span class="name">物理学院</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=24352">hrcegg</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=57&amp;threadid=17055246&amp;page=a&amp;postid=20090554#20090554">最后更新：昨天 14:56</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="38">
                                <a class="block-link" href="thread.html?bid=38"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Psychology</span>
                                    <span class="name">心理与认知科学学院</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=3153">huanggouxin</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=38&amp;threadid=17058253&amp;page=a&amp;postid=20090349#20090349">最后更新：昨天 14:03</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="267">
                                <a class="block-link" href="thread.html?bid=267"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SESS</span>
                                    <span class="name">地球与空间科学学院</span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=267&amp;threadid=17055228&amp;page=a&amp;postid=20088907#20088907">最后更新：昨天 09:20</a>
                                </div>
                            </div>
                            <div class="board-block sub-block" data-bid="66">
                                <a class="block-link" href="thread.html?bid=66"></a>
                                <div class="line"></div> <!--sub block必须包含这个-->
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Geology</span>
                                    <span class="name">地质学系</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=66&amp;threadid=17031280&amp;page=a&amp;postid=19776719#19776719">最后更新：03-27 15:45</a>
                                </div>
                            </div>
                            <div class="board-block sub-block" data-bid="60">
                                <a class="block-link" href="thread.html?bid=60"></a>
                                <div class="line"></div> <!--sub block必须包含这个-->
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Geophysics</span>
                                    <span class="name">地球物理系</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=60&amp;threadid=17023172&amp;page=a&amp;postid=19754944#19754944">最后更新：03-22 17:20</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="51">
                                <a class="block-link" href="thread.html?bid=51"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SMS</span>
                                    <span class="name">数学科学学院</span>
                                    <span class="people">7人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=14930">jefaystone</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=51&amp;threadid=17047849&amp;page=a&amp;postid=20092395#20092395">最后更新：昨天 23:23</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="31">
                                <a class="block-link" href="thread.html?bid=31"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Urban</span>
                                    <span class="name">城市与环境学院</span>
                                    <span class="people">4人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=31&amp;threadid=17031051&amp;page=a&amp;postid=19775907#19775907">最后更新：03-27 13:16</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>社会科学部</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="243">
                                <a class="block-link" href="thread.html?bid=243"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">BDSJC</span>
                                    <a class="update" href="post-read.html?bid=243&amp;threadid=15721101&amp;page=a&amp;postid=15163658#15163658">最后更新：2016-03-28</a>
                                    <span class="name ro">北大新闻与传播学院            <span class="readonly">只读</span>
        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="295">
                                <a class="block-link" href="thread.html?bid=295"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">GSE</span>
                                    <a class="update" href="post-read.html?bid=295&amp;threadid=15770374&amp;page=a&amp;postid=15286003#15286003">最后更新：2016-05-16</a>
                                    <span class="name ro">教育学院            <span class="readonly">只读</span>
        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="131">
                                <a class="block-link" href="thread.html?bid=131"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">IM</span>
                                    <a class="update" href="post-read.html?bid=131&amp;threadid=17001451&amp;page=a&amp;postid=19697040#19697040">最后更新：03-09 22:50</a>
                                    <span class="name">信息管理系        </span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=25604">eastdog</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="54">
                                <a class="block-link" href="thread.html?bid=54"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Law</span>
                                    <a class="update" href="post-read.html?bid=54&amp;threadid=16985764&amp;page=a&amp;postid=20090946#20090946">最后更新：昨天 16:30</a>
                                    <span class="name">法学院        </span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=3820">pkuerljh</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="203">
                                <a class="block-link" href="thread.html?bid=203"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Marxism</span>
                                    <a class="update" href="post-read.html?bid=203&amp;threadid=15299881&amp;page=a&amp;postid=14288771#14288771">最后更新：2014-12-01</a>
                                    <span class="name ro">马克思主义学院            <span class="readonly">只读</span>
        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="69">
                                <a class="block-link" href="thread.html?bid=69"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SG</span>
                                    <a class="update" href="post-read.html?bid=69&amp;threadid=17040909&amp;page=a&amp;postid=19881475#19881475">最后更新：04-02 10:53</a>
                                    <span class="name">政府管理学院        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=13050">dishan</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="155">
                                <a class="block-link" href="thread.html?bid=155"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SIS</span>
                                    <a class="update" href="post-read.html?bid=155&amp;threadid=17058702&amp;page=a&amp;postid=20093997#20093997">最后更新：45分钟前</a>
                                    <span class="name">国际关系学院        </span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                    <a class="admin-link" href="user.html?uid=24189">Homagod</a>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="188">
                                <a class="block-link" href="thread.html?bid=188"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SL</span>
                                    <a class="update" href="post-read.html?bid=188&amp;threadid=15804442&amp;page=a&amp;postid=15446672#15446672">最后更新：2016-06-19</a>
                                    <span class="name ro">社会学系            <span class="readonly">只读</span>
        </span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="243">
                                <a class="block-link" href="thread.html?bid=243"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">BDSJC</span>
                                    <span class="name ro">北大新闻与传播学院</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=243&amp;threadid=15721101&amp;page=a&amp;postid=15163658#15163658">最后更新：2016-03-28</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="295">
                                <a class="block-link" href="thread.html?bid=295"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">GSE</span>
                                    <span class="name ro">教育学院</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=295&amp;threadid=15770374&amp;page=a&amp;postid=15286003#15286003">最后更新：2016-05-16</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="131">
                                <a class="block-link" href="thread.html?bid=131"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">IM</span>
                                    <span class="name">信息管理系</span>
                                    <span class="people">3人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=25604">eastdog</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=131&amp;threadid=17001451&amp;page=a&amp;postid=19697040#19697040">最后更新：03-09 22:50</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="54">
                                <a class="block-link" href="thread.html?bid=54"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Law</span>
                                    <span class="name">法学院</span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=3820">pkuerljh</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=54&amp;threadid=16985764&amp;page=a&amp;postid=20090946#20090946">最后更新：昨天 16:30</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="203">
                                <a class="block-link" href="thread.html?bid=203"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">Marxism</span>
                                    <span class="name ro">马克思主义学院</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=203&amp;threadid=15299881&amp;page=a&amp;postid=14288771#14288771">最后更新：2014-12-01</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="69">
                                <a class="block-link" href="thread.html?bid=69"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SG</span>
                                    <span class="name">政府管理学院</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=13050">dishan</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=69&amp;threadid=17040909&amp;page=a&amp;postid=19881475#19881475">最后更新：04-02 10:53</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="155">
                                <a class="block-link" href="thread.html?bid=155"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SIS</span>
                                    <span class="name">国际关系学院</span>
                                    <span class="people">5人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                        <a class="inline-link" href="user.html?uid=24189">Homagod</a>
                                    </div>
                                    <a class="update" href="post-read.html?bid=155&amp;threadid=17058702&amp;page=a&amp;postid=20093997#20093997">最后更新：45分钟前</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="188">
                                <a class="block-link" href="thread.html?bid=188"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">SL</span>
                                    <span class="name ro">社会学系</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">2人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=188&amp;threadid=15804442&amp;page=a&amp;postid=15446672#15446672">最后更新：2016-06-19</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-section" data-fold="open">
                <div class="sub-section-title" data-action="whole-click">
                    <span>深圳研究生院</span>
                    <div class="right">
                        <a class="button" data-action="hide-section"><img src="http://www.tp5.com/resource/images/board/triangle-up.png"/></a>
                        <a class="button" data-action="show-section"><img src="http://www.tp5.com/resource/images/board/triangle-down.png"/></a>
                    </div>
                </div>
                <div class="section-content">
                    <div class="boards-wrapper blocks">
                        <div class="set">
                            <div class="board-block color-block" data-bid="1278">
                                <a class="block-link" href="thread.html?bid=1278"></a>
                                <div class="upper">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PHBS</span>
                                    <a class="update" href="post-read.html?bid=1278&amp;threadid=16001583&amp;page=a&amp;postid=16000697#16000697">最后更新：2017-01-17</a>
                                    <span class="name ro">汇丰商学院            <span class="readonly">只读</span>
        </span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">因版务空缺只读，诚征版务中</span>
                                </div>
                            </div>
                        </div>
                        <div class="set">
                            <div class="board-block color-block" data-bid="367">
                                <a class="block-link" href="thread.html?bid=367"></a>
                                <div class="upper">
                                    <a class="star active" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUSZ</span>
                                    <a class="update" href="post-read.html?bid=367&amp;threadid=17037767&amp;page=a&amp;postid=19867615#19867615">最后更新：03-31 17:22</a>
                                    <span class="name">深圳研究生院        </span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="lower">
                                    <span class="admin">版务：</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boards-wrapper list">
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="1278">
                                <a class="block-link" href="thread.html?bid=1278"></a>
                                <div class="left">
                                    <a class="star" data-action="make-favorite"></a>
                                    <span class="eng-name">PHBS</span>
                                    <span class="name ro">汇丰商学院</span>
                                    <span class="readonly">只读</span>
                                    <span class="people">0人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>因版务空缺只读，诚征版务中</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=1278&amp;threadid=16001583&amp;page=a&amp;postid=16000697#16000697">最后更新：2017-01-17</a>
                                </div>
                            </div>
                        </div>
                        <div class="set"><!--一个board和他的所有子board在一个set里面-->
                            <div class="board-block" data-bid="367">
                                <a class="block-link" href="thread.html?bid=367"></a>
                                <div class="left">
                                    <a class="star active" data-action="make-favorite"></a>
                                    <span class="eng-name">PKUSZ</span>
                                    <span class="name">深圳研究生院</span>
                                    <span class="people">1人</span>
                                </div>
                                <div class="right">
                                    <div class="admin">
                                        <span>版务：</span>
                                    </div>
                                    <a class="update" href="post-read.html?bid=367&amp;threadid=17037767&amp;page=a&amp;postid=19867615#19867615">最后更新：03-31 17:22</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="favorite-modal" class="bdwm-dialog" data-timeout="2000" data-animate-in="false" data-animate-out="true" data-background="false" style="display: none;" >
            <img src="http://www.tp5.com/resource/images/board/ok.png">
            <span>收藏成功!</span>
        </div>

    </div>

    <!-- end main -->
    <!-- content end-->
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

<footer id="footer">
    <p><a data-no-pjax href="../123/" target="_blank">常用网站</a> - <a href="download.php">相关下载</a> - <a href="publication.php">聚远社刊</a> - <a href="about-us.php">关于我们</a> - <a href="contact.php">联系我们</a> - <a href="join-us.php">加入我们</a> - <a href="help.php">帮助中心</a> - <a href="mail-new.php?username=SYSOP">意见反馈</a></p>
    <p>© 2012–2019 聚远社BBS</p>
</footer>

</body>
</html>