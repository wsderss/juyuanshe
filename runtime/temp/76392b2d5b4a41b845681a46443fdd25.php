<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"E:\apache24\htdocs\juyuanshe\public/../application/index\view\form\thread.html";i:1555504883;}*/ ?>
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
                <a href="help.php">帮助中心</a>
            </div>
        </div>
    </div>
</nav>

<div id="page-content">
    <!-- this is the real content, should be returned from server when PJAX working.-->
    <!-- start main -->
    <div id="bdwm-title">燕园食宿(CanteenDorm)版 - 聚远社BBS</div>
    <script>
        $("#link-buttons > a").removeClass("cur");
    </script>
    <div id="page-thread" class="page-thread">
        <!-- start _board-head.php-->
        <!-- start board-head -->
        <div class="breadcrumb-trail">
            <!--这里是面包屑导航，样式在global里面-->
            <a href="http://www.tp5.com/home.html">首页</a>
            <a href="http://www.tp5.com/zone.php">版面目录</a>
            <a href="board.php?bid=664">一区: 北京大学</a>
            <a href="/v2/thread.php?bid=1431&amp;mode=topic">燕园食宿(CanteenDorm)</a>
        </div>

        <div id="board-head" data-bid="1431">
            <div id="title-wrapper">
                <div id="title" class="gray limit">
                    <span class="title-text eng">CanteenDorm</span>
                    <span class="title-text black">燕园食宿</span>
                </div>
                <div id="stat" class="gray l">
                    在线：<span class="num">53</span>
                    今日：<span class="num">30</span>
                    主题：<span class="num">8226</span>
                    帖数：<span class="num">101398</span>
                </div>
            </div>
            <div id="add-fav" class="gray">
                <a id="bid" class="star" data-action="make-favorite" data-bid="1431"></a>
                <span id="fav-text" class="fav-text" data-action="make-favorite">收藏本版</span> (<span class="num">1411</span>)
                <!--<a data-no-pjax target="_blank" class="rss" href="rss.php?bid=1431"></a>-->
            </div>
            <div id="content" class="gray">
                <div id="intro" class="limit">所有关于食堂和宿舍的话题，都来这里讨论吧！</div>
                <div id="admin" class="limit">版务:
                    <a href="user.php?uid=13401">naiiive</a>
                    <a href="user.php?uid=32338">dyd</a>
                </div>
            </div>

            <div id="tab">
                <div class="tab-button" id="tab-button-thread"><a href="thread.php?bid=1431" class="gray link">帖子</a></div>
                <div class="tab-button" id="tab-button-collection"><a href="collection.php?path=groups/GROUP_1/CanteenDorm" class="gray link">精华区</a></div>
                <div class="tab-button" id="tab-button-note"><a href="note.php?bid=1431" class="gray link">备忘录</a></div>
            </div>

            <div class="search-box">
            </div>

            <div id="favorite-modal" class="modal bdwm-dialog" style="display: none;">
                <div class="text">
                    <span>您已成功将</span>
                    <span class="board-name"><span id="board-name">燕园食宿</span>(<span board-name-en>CanteenDorm</span>)</span>
                    <span><br/>添加至版面收藏夹</span>
                </div>
                <a data-action="dialog-dismiss" class="button">确认</a>
            </div>

        </div>
        <!-- end board-head -->



        <!-- end _board-head.php-->

        <!-- start board-body -->
        <script>
            $("#tab-button-thread").addClass("active");
        </script>
        <div id="board-body">
            <div id="list-head" class="fw">
                <div id="list-filter" class="l" data-type="1">
                    <div class="l filter-item filter-item-active"><a class="link" href="?bid=1431"></a>全部</div>
                    <div class="l filter-item"><a class="link" href="?bid=1431&amp;type=3"></a>保留</div>
                    <div class="l filter-item"><a class="link" href="?bid=1431&amp;type=2"></a>文摘</div>
                    <div class="l filter-item hidden"><a class="link" href="?bid=1431&amp;type=10"></a>附件</div>
                    <div id="more-button" class="l more active">更多  &#9658</div>
                </div>
                <div id="list-option" class="r">
                    <div class="l option-button">
                        <a id="change-list-mode" href="?bid=1431" data-mode="topic" class="link"></a>
                        <div class="change"></div>
                        <div>切换到单帖模式</div>
                    </div>
                    <div class="l option-button">
                        <a id="clear-all-unread" class="link"></a>
                        <div class="l delete"></div>
                        <div class="l">清除未读</div>
                    </div>
                </div>
            </div>
            <div id="list-body" class="fw">
                <div id="list-title" class="fw list-title">
                    <div class="l id">序号</div>
                    <div class="l title">标题</div>
                    <div class="l author">作者</div>
                    <div class="l reply">回复</div>
                    <div class="l time">最后发表</div>
                </div>
                <div id="list-content" class="fw">
                    <!-- list pin -->
                    <div class="list-item" data-itemid="15708325"><a class="link" href="post-read-single.php?bid=1431&amp;type=0&amp;postid=15708325"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 456px;">燕园食宿版使用指南&nbsp;v1.0</div>
                            <img src="http://www.tp5.com/resource/images/topics/wz.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=16180"></a>
                            <img src="/attach/avatar/Z/zhongzi.jpg?t=1467912526">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=16180"></a>
                            <div class="name limit">zhongzi</div>
                            <div class="time">2016-10-03</div>
                        </div>
                    </div>
                    <!-- list pin -->
                    <div class="list-item" data-itemid="16290468"><a class="link" href="post-read-single.php?bid=1431&amp;type=0&amp;postid=16290468"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 394px;">食堂开餐时间表（2017.4更新）</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                            <img src="http://www.tp5.com/resource/images/topics/bl.png">
                            <img src="http://www.tp5.com/resource/images/topics/wz.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=36140"></a>
                            <img src="/attach/avatar/Q/qianyu.jpg?t=1490386051">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=36140"></a>
                            <div class="name limit">qianyu</div>
                            <div class="time">2017-04-15</div>
                        </div>
                    </div>
                    <!-- list pin -->
                    <div class="list-item" data-itemid="15748140"><a class="link" href="post-read-single.php?bid=1431&amp;type=0&amp;postid=15748140"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 456px;">Tips&nbsp;&nbsp;to&nbsp;学校食堂【投诉者】(转载)</div>
                            <img src="http://www.tp5.com/resource/images/topics/bl.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=16180"></a>
                            <img src="/attach/avatar/Z/zhongzi.jpg?t=1467912526">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=16180"></a>
                            <div class="name limit">zhongzi</div>
                            <div class="time">2016-10-21</div>
                        </div>
                    </div>
                    <!-- list pin -->
                    <div class="list-item" data-itemid="18553247"><a class="link" href="post-read-single.php?bid=1431&amp;type=0&amp;postid=18553247"></a>
                        <div class="id l"><div class="pin">置顶</div></div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 456px;">【监督员】Hi，这里是新一年的监督员</div>
                            <img src="http://www.tp5.com/resource/images/topics/wz.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=15592"></a>
                            <img src="/attach/avatar/Q/quanyi.jpg?t=1467912727">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=15592"></a>
                            <div class="name limit">quanyi</div>
                            <div class="time">2018-10-11</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17057086"><a class="link" href="post-read.php?bid=1431&amp;threadid=17057086"></a>
                        <div class="id l">101204</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">主食每种限三个，耐不过被薅七八种。。</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=31210"></a>
                            <img src="/attach/avatar/N/NANA.jpg?t=1480849248">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=31210"></a>
                            <div class="name limit">NANA</div>
                            <div class="time">前天 20:36</div>
                        </div>
                        <div class="reply-num l">74</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17057086&amp;page=a&amp;postid=20094220#20094220"></a>
                            <div class="name limit">jasperchen</div>
                            <div class="time">3分钟前</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058984"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058984"></a>
                        <div class="id l">101377</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">【吐槽】勺园四号楼某些同学，出浴室带个门很难吗</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=23883"></a>
                            <img src="/attach/avatar/S/stevezhang.jpg?t=1550233969">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=23883"></a>
                            <div class="name limit">stevezhang</div>
                            <div class="time">昨天 23:46</div>
                        </div>
                        <div class="reply-num l">10</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058984&amp;page=a&amp;postid=20094214#20094214"></a>
                            <div class="name limit">GarfieldShen</div>
                            <div class="time">3分钟前</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17059686"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059686"></a>
                        <div class="id l">101406</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">强烈要求学生证上不附加照片</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=12971"></a>
                            <img src="/attach/avatar/W/wmdcstdio.jpg?t=1502113809">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=12971"></a>
                            <div class="name limit">wmdcstdio</div>
                            <div class="time">9分钟前</div>
                        </div>
                        <div class="reply-num l">0</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059686&amp;page=a&amp;postid=20094194#20094194"></a>
                            <div class="name limit">wmdcstdio</div>
                            <div class="time">9分钟前</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17059650"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059650"></a>
                        <div class="id l">101405</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">请问勺园二楼教职工餐厅的烤鱼现在还有吗</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=19033"></a>
                            <img src="/attach/avatar/K/kakasika.jpg?t=1474792976">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=19033"></a>
                            <div class="name limit">kakasika</div>
                            <div class="time">39分钟前</div>
                        </div>
                        <div class="reply-num l">0</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059650&amp;page=a&amp;postid=20094094#20094094"></a>
                            <div class="name limit">kakasika</div>
                            <div class="time">39分钟前</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17059615"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059615"></a>
                        <div class="id l">101401</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">北京都有哪些高校食堂可以刷微信支付宝呀？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=24778"></a>
                            <img src="/attach/avatar/E/erutan.jpg?t=1524977546">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=24778"></a>
                            <div class="name limit">erutan</div>
                            <div class="time">12:48</div>
                        </div>
                        <div class="reply-num l">1</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059615&amp;page=a&amp;postid=20094086#20094086"></a>
                            <div class="name limit">kakasika</div>
                            <div class="time">43分钟前</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058486"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058486"></a>
                        <div class="id l">101344</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">勺园门口停车技术哪家强？</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=20478"></a>
                            <img src="http://www.tp5.com/resource/images/user/portrait-neu.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=20478"></a>
                            <div class="name limit">petrellzh</div>
                            <div class="time">昨天 16:58</div>
                        </div>
                        <div class="reply-num l">10</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058486&amp;page=a&amp;postid=20094079#20094079"></a>
                            <div class="name limit">pkubwb<i class="verified-min vip-min-1"></i></div>
                            <div class="time">45分钟前</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17059617"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059617"></a>
                        <div class="id l">101402</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">勺园沙茶面有小份啦！</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=153808"></a>
                            <img src="/attach/avatar/L/luckyss.jpg?t=1553837358">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=153808"></a>
                            <div class="name limit">luckyss</div>
                            <div class="time">12:49</div>
                        </div>
                        <div class="reply-num l">0</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059617&amp;page=a&amp;postid=20093975#20093975"></a>
                            <div class="name limit">luckyss</div>
                            <div class="time">12:49</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17057097"><a class="link" href="post-read.php?bid=1431&amp;threadid=17057097"></a>
                        <div class="id l">101209</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">【注意】45甲楼地下物美超市收银员疑似任意刷价</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=45010"></a>
                            <img src="http://www.tp5.com/resource/images/user/portrait-neu.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=45010"></a>
                            <div class="name limit">yijihongni</div>
                            <div class="time">前天 20:51</div>
                        </div>
                        <div class="reply-num l">23</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17057097&amp;page=a&amp;postid=20093802#20093802"></a>
                            <div class="name limit">professional</div>
                            <div class="time">11:50</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058287"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058287"></a>
                        <div class="id l">101318</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">勺园凉菜窗口——糖拌一切？？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=31301"></a>
                            <img src="/attach/avatar/D/dadazuihaola.jpg?t=1469500462">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=31301"></a>
                            <div class="name limit">dadazuihaola</div>
                            <div class="time">昨天 14:27</div>
                        </div>
                        <div class="reply-num l">3</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058287&amp;page=a&amp;postid=20093637#20093637"></a>
                            <div class="name limit">ssssrrrr</div>
                            <div class="time">10:55</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17059315"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059315"></a>
                        <div class="id l">101388</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">【强烈呼吁】希望松林尽快恢复青菜包的供应</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=32282"></a>
                            <img src="/attach/avatar/M/MetatronCube.jpg?t=1495332530">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=32282"></a>
                            <div class="name limit">MetatronCube</div>
                            <div class="time">07:27</div>
                        </div>
                        <div class="reply-num l">1</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17059315&amp;page=a&amp;postid=20093145#20093145"></a>
                            <div class="name limit">MetatronCube</div>
                            <div class="time">07:28</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17054517"><a class="link" href="post-read.php?bid=1431&amp;threadid=17054517"></a>
                        <div class="id l">101010</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">话说街边书报亭没有了，大家去哪儿买书报杂志呀？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=15424"></a>
                            <img src="/attach/avatar/C/chihiro.jpg?t=1467912521">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=15424"></a>
                            <div class="name limit">chihiro</div>
                            <div class="time">04-10 14:06</div>
                        </div>
                        <div class="reply-num l">2</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17054517&amp;page=a&amp;postid=20092738#20092738"></a>
                            <div class="name limit">chihiro</div>
                            <div class="time">01:02</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058149"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058149"></a>
                        <div class="id l">101300</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">学一青团不限量？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=7954"></a>
                            <img src="/attach/avatar/W/wky.jpg?t=1509377332">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=7954"></a>
                            <div class="name limit">wky</div>
                            <div class="time">昨天 13:00</div>
                        </div>
                        <div class="reply-num l">3</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058149&amp;page=a&amp;postid=20092270#20092270"></a>
                            <div class="name limit">propagator</div>
                            <div class="time">昨天 22:54</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058882"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058882"></a>
                        <div class="id l">101374</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">怀念以前的老干妈炒饭</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=122439"></a>
                            <img src="http://www.tp5.com/resource/images/user/portrait-neu.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=122439"></a>
                            <div class="name limit">gqjin</div>
                            <div class="time">昨天 22:44</div>
                        </div>
                        <div class="reply-num l">0</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058882&amp;page=a&amp;postid=20092229#20092229"></a>
                            <div class="name limit">gqjin</div>
                            <div class="time">昨天 22:44</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058583"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058583"></a>
                        <div class="id l">101354</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">畅春园食堂二楼的蒸面死贵死贵</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=2017"></a>
                            <img src="http://www.tp5.com/resource/images/user/portrait-neu.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=2017"></a>
                            <div class="name limit">gcs</div>
                            <div class="time">昨天 18:23</div>
                        </div>
                        <div class="reply-num l">5</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058583&amp;page=a&amp;postid=20092209#20092209"></a>
                            <div class="name limit">daxiongmao</div>
                            <div class="time">昨天 22:39</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058776"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058776"></a>
                        <div class="id l">101370</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">[吐槽]艺园二楼晚上的蛋炒饭是不放盐吗？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=146168"></a>
                            <img src="http://www.tp5.com/resource/images/user/portrait-mas.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=146168"></a>
                            <div class="name limit">xlfinpku</div>
                            <div class="time">昨天 21:21</div>
                        </div>
                        <div class="reply-num l">0</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058776&amp;page=a&amp;postid=20091912#20091912"></a>
                            <div class="name limit">xlfinpku</div>
                            <div class="time">昨天 21:21</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058737"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058737"></a>
                        <div class="id l">101365</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">4.12晚上在燕南买的12元草莓都是坏的</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=22795"></a>
                            <img src="/attach/avatar/T/ThaleCress.jpg?t=1467912731">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=22795"></a>
                            <div class="name limit">ThaleCress</div>
                            <div class="time">昨天 20:44</div>
                        </div>
                        <div class="reply-num l">1</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058737&amp;page=a&amp;postid=20091826#20091826"></a>
                            <div class="name limit">kimberley</div>
                            <div class="time">昨天 20:56</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058034"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058034"></a>
                        <div class="id l">101281</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">解决退休教职工和同学争购主食问题的个人建议</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=979"></a>
                            <img src="/attach/avatar/N/niisikhsurg.jpg?t=1542757444">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=979"></a>
                            <div class="name limit">niisikhsurg</div>
                            <div class="time">昨天 11:46</div>
                        </div>
                        <div class="reply-num l">11</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058034&amp;page=a&amp;postid=20091302#20091302"></a>
                            <div class="name limit">pkutcy</div>
                            <div class="time">昨天 18:11</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17058041"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058041"></a>
                        <div class="id l">101285</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">比心物美监督员</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=9770"></a>
                            <img src="/attach/avatar/B/bfyswy.jpg?t=1537279973">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=9770"></a>
                            <div class="name limit">bfyswy</div>
                            <div class="time">昨天 11:54</div>
                        </div>
                        <div class="reply-num l">8</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17058041&amp;page=a&amp;postid=20090781#20090781"></a>
                            <div class="name limit">kimberley</div>
                            <div class="time">昨天 15:48</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17057910"><a class="link" href="post-read.php?bid=1431&amp;threadid=17057910"></a>
                        <div class="id l">101262</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 499px;">燕园内的食材（动物和植物）能做出哪些可口饭菜？</div>
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=18552"></a>
                            <img src="http://www.tp5.com/resource/images/user/portrait-fem.png">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=18552"></a>
                            <div class="name limit">jingrufei</div>
                            <div class="time">昨天 10:53</div>
                        </div>
                        <div class="reply-num l">4</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17057910&amp;page=a&amp;postid=20090760#20090760"></a>
                            <div class="name limit">al</div>
                            <div class="time">昨天 15:44</div>
                        </div>
                    </div>
                    <!-- list item -->
                    <div class="list-item-topic list-item" data-itemid="17045585"><a class="link" href="post-read.php?bid=1431&amp;threadid=17045585"></a>
                        <div class="id l">100207</div>
                        <div class="dot l" data-role="unread-dot"></div>
                        <div class="title-cont l">
                            <div class="title l limit" style="max-width: 480px;">艺园的回锅肉&nbsp;没有肉</div>
                            <img src="http://www.tp5.com/resource/images/topics/attach.png">
                        </div>
                        <div class="avatar l"><a class="link" href="user.php?uid=152127"></a>
                            <img src="/attach/avatar/L/lovelyMe.jpg?t=1552987466">
                        </div>
                        <div class="author l"><a class="link" href="user.php?uid=152127"></a>
                            <div class="name limit">lovelyMe</div>
                            <div class="time">04-04 19:42</div>
                        </div>
                        <div class="reply-num l">13</div>
                        <div class="author l"><a class="link" href="post-read.php?bid=1431&amp;threadid=17045585&amp;page=a&amp;postid=20090552#20090552"></a>
                            <div class="name limit">Homagod</div>
                            <div class="time">昨天 14:55</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paging">
                <div class="paging-button n active"><a class="link" href="?bid=1431&amp;mode=topic"></a>1</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=2"></a>2</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=3"></a>3</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=4"></a>4</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=5"></a>5</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=6"></a>6</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=7"></a>7</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=8"></a>8</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=9"></a>9</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=412"></a>...412</div>
                <div class="paging-button n"><a class="link" href="?bid=1431&amp;mode=topic&amp;page=2"></a>下一页 &gt;</div>
                <div class="paging-input-wrapper"><input type="number" data-role="goto-input" max="412" min="1" value="1"></div>
                <div>/ 412</div>
                <div class="paging-button"><a data-action="goto-link" class="link" data-bid="1431"></a>跳转</div>
            </div>
        </div>
        <!-- end board-body -->
        <hr/>
        <!-- start _new-thread-simple.php-->
        <!-- start new-thread-simple -->
        <div class="editor-wrapper">
            <!--<div class="disable-mask"><p>请您先 <a href="javascript:document.getElementById('username').focus();">登录</a> 再进行发帖</p></div>-->
            <div id="bdwm-editor" class="bdwm-editor" data-bid="1431" data-role="simple_editor" data-parentid="" data-title="" data-redirect="">
                <div class="row">
                    <span>快捷发帖</span>
                </div>
                <div class="row">
                    <span class="title">标题</span>
                    <div class="input-wrapper title-input"><input type="text" data-role="post-title" maxlength="48" tabindex="-1" value=""></div>
                    <span class="title-suggest">建议：≤ 24个字</span>
                    <div class="r">
                        <a class="switch-button" id="chose_editor"  href="http://www.tp5.com/post-new/<?php echo $bid; ?>.html">
                            <img src="http://www.tp5.com/resource/images/mail/iconfont-fatie.png">
                            <span>切换到完整模式</span>
                        </a>
                    </div>
                </div>
                <div class="input-wrapper content-input" ><textarea data-role="new-post-textarea" tabindex="-1"  placeholder="插入图片、公式、附件，请点击右上方“切换到完整模式”。"></textarea></div>
                <div class="row">
                    <span class="title">签名档</span>
                    <div class="cs-select">
                        <section>
                            <select class="cs-select" data-role="signature" data-signature-count="0" >
                                <option value="" >无</option>
                            </select>
                        </section>
                    </div>
                    <div class="r">
                        <div class="input-wrapper">
                            <input id="input-anonymous6780585" data-role="input-anonymous" type="checkbox" disabled>
                            <label for="input-anonymous6780585">匿名</label>
                            <input id="input-noreply6780585" data-role="input-noreply" type="hidden" value="false">
                        </div>
                        <div class="publish-button extended" data-action="new-post-publish" tabindex="-1">发布(Ctrl+回车)</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end new-thread-simple -->

        <!-- end _new-thread-simple.php-->

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