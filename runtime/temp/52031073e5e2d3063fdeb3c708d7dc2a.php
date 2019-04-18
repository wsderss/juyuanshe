<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\apache24\htdocs\juyuanshe\public/../application/index\view\index\home.html";i:1555499242;}*/ ?>
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
    <script>
        mizhu.toast('欢迎社员访问家园',2000);
    </script>
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
          <a class="btn-goto-homepage" href="user.php?uid=15265">个人主页</a>
          <a href="modify-profile.php">修改帐号</a>
          <a class="btn-logout" id="btn-logout">退出</a>
        </span><!--以下是已注销账号的显示内容-->
            </p>
            <!--<ul id="detail-list">-->
                <!--<li data-role="login-nickname">昵称：未名湖里的鱼儿</li>-->
                <!--<li data-role="login-rankname">等级：高级站友</li>-->
                <!--<li data-role="login-numposts">文章：1695</li>-->
            <!--</ul>-->
            <!--<a href="refill-form.php" class="sub-button red">-->
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
                <a class="white-link" data-no-pjax href="reset-password-req.php">找回密码</a>
            </form>
        </div>
    </div>
    <div id="link-buttons">
        <a href="home.html" id="tab_home"><img src="http://www.tp5.com/resource/images/home/iconfont-home.png">首页</a>
        <a href="favorite.html" id="tab_favorite"><img src="http://www.tp5.com/resource/images/home/icon-shoucangjia.png">版面收藏夹</a>
        <a href="zone.html" id="tab_zone"><img src="http://www.tp5.com/resource/images/home/iconfont-fenlei.png">版面目录</a>
        <a href="favorite-collection.html" id="tab_favorite_collection"><img src="http://www.tp5.com/resource/images/home/icon-jinghuaqu.png">精华区收藏夹</a>
        <a href="friend.html" id="tab_friend"><img src="http://www.tp5.com/resource/images/home/iconfont-haoyou.png">关注/粉丝</a>
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
    <div id="bdwm-title">北大未名BBS - 北京大学校园论坛，北大人的网上精神家园</div>
    <script>
        $("#link-buttons > a").removeClass("cur");
        $("#tab_home").addClass("cur");
    </script>
    <div id="page-home">
        <div class="advt" id="banner_top">
            <div id="banner_top_0">
                <!--<a href="https://bbs.pku.edu.cn/123/" target="_blank" data-no-pjax><img src="/v2/uploads/banner_WI68In.png"></a>-->
            </div>
        </div>
        <div class="column-left">
            <div>
                <section class="topic-block big-ten">
                    <div class="wrapper">
                        <div class="title one-line">
                            <p>
                                <span class="name">全社十大</span>
                            </p>
                        </div>
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="block-message">游客暂不能访问十大热门话题，请您登录</div>
                    </div>
                </section><!--
      --><section class="topic-block">
                <div class="wrapper">
                    <div class="title one-line">
                        <p>
                            <span class="name">聚远热点</span>
                            <a class="more-link" href="thread.php?bid=351">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20036762">【招募】北京大学国际汉学家研修基地招聘学生助理</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20035596">【招募】2019年北京大学师生田径运动会志愿者</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20032593">【活动】北京大学第十五届社会学文化节</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=19951575">【活动】第44期围炉夜话——体制内专场</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20026899">【通知】“北京大学第十九届创业大赛”举办通知</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20030400">【招生】香港大学商学院硕士项目-北大经院宣讲会</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20030918">【招募】北京大学国际校友联络会秘书处招聘学生秘书</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20031580">【活动】青年发展沙龙：专注在教育领域的北大创业者</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=20032495">【招募】《北大研究生》编辑部2019春季学期招采编</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=351&amp;type=2&amp;postid=19870974">【通知】江泽涵杯数学建模与计算机应用竞赛报名名单</a></li>
                    </ul>
                </div>
            </section><!--
      --><section class="topic-block">
                <div class="wrapper">
                    <div class="title one-line">
                        <p>
                            <span class="name">聚远社动态</span>
                            <a class="more-link" href="thread.php?bid=342">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="post-link" href="post-read-single.php?bid=342&amp;type=2&amp;postid=19914451">[04.10]&nbsp;财富管理:中国财富管理经营模式与行业趋势</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=342&amp;type=2&amp;postid=19913664">[04.11]&nbsp;北大人文讲座210讲：钢铁与工业文明</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=342&amp;type=2&amp;postid=19924422">[04.12]&nbsp;对话全球创新大师系列讲座：音乐，照亮未来</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=342&amp;type=2&amp;postid=19888941">[04.17]&nbsp;世界文学要义系列讲座：世界文学定义新探</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=342&amp;type=2&amp;postid=19889077">[04.18]&nbsp;世界文学要义系列讲座：文学经典与世界文学</a></li>
                    </ul>
                </div>
            </section><!--
      --><section class="topic-block">
                <div class="wrapper">
                    <div class="title one-line">
                        <p>
                            <span class="name">站内热点</span>
                            <a class="more-link" href="thread.php?bid=352">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="post-link" href="post-read-single.php?bid=352&amp;postid=20034224">未名起居注&nbsp;2019年04月09日</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=352&amp;postid=20029343">未名起居注&nbsp;2019年04月08日</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=352&amp;postid=19924512">未名起居注&nbsp;2019年04月04日</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=352&amp;postid=19893931">未名起居注&nbsp;2019年04月03日</a></li>
                        <li><a class="post-link" href="post-read-single.php?bid=352&amp;postid=19885291">未名起居注&nbsp;2019年04月02日</a></li>
                    </ul>
                </div>
            </section>
            </div>

            <div class="advt" id="banner_middle">
                <!--<div id="banner_middle_0">-->
                    <!--<a href="https://bbs.pku.edu.cn/download/android/bdwm.apk" target="_blank" data-no-pjax><img src="/v2/uploads/banner_fhEutH.gif"></a>-->
                <!--</div>-->
                <!--<div id="banner_middle_1">-->
                    <!--<a href="https://bbs.pku.edu.cn/123/" target="_blank" data-no-pjax><img src="/v2/uploads/banner_WI68In.png"></a>-->
                <!--</div>-->
            </div>

            <div>
                <section class="topic-block">
                    <div class="wrapper">
                        <div class="title two-line">
                            <p><a href="<?php echo $url['regions'][1]; ?>"><span class="area-digit"><?php echo $regions[0]['bid']; ?></span><span class="name"><?php echo $regions[1]['region_name']; ?></span></a></p>
                            <p>
                                <?php $__FOR_START_22485__=0;$__FOR_END_22485__=count($boards[1]);for($i=$__FOR_START_22485__;$i < $__FOR_END_22485__;$i+=1){ ?>
                                <a class="topic-link" href="<?php echo $url['boards'][$i]; ?>">[<?php echo (isset($boards[1][$i]['board_name']) && ($boards[1][$i]['board_name'] !== '')?$boards[1][$i]['board_name']:""); ?>]</a>
                                <?php } ?>
                                <a class="more-link" href="<?php echo $url['regions'][1]; ?>">更多</a>
                            </p>
                        </div>
                        <ul>
                            <li><a class="topic-link" href="thread.php?bid=368">[站务、仲裁申请]</a><a class="post-link" href="post-read.php?bid=368&amp;threadid=17054250">[申请]NicoleG申请实习站务</a></li>
                            <li><a class="topic-link" href="thread.php?bid=162">[十九周年站庆]</a><a class="post-link" href="post-read.php?bid=162&amp;threadid=17044959">要站庆了</a></li>
                            <li><a class="topic-link" href="thread.php?bid=368">[站务、仲裁申请]</a><a class="post-link" href="post-read.php?bid=368&amp;threadid=17053268">[申请]&nbsp;xiangpeng&nbsp;申请技术站务</a></li>
                            <li><a class="topic-link" href="thread.php?bid=7">[测试用版]</a><a class="post-link" href="post-read.php?bid=7&amp;threadid=17054317">测试宽度</a></li>
                        </ul>
                    </div>
                </section><!--
      --><section class="topic-block">
                <div class="wrapper">
                    <div class="title two-line">
                        <p><a href="board.php?bid=664"><span class="area-digit">一区</span><span class="name">据点</span></a></p>
                        <p>
                            <a class="topic-link" href="thread.php?bid=63">[中文系]</a>
                            <a class="topic-link" href="thread.php?bid=322">[信息科学技术学院]</a>
                            <a class="topic-link" href="thread.php?bid=51">[数学科学学院]</a>
                            <a class="topic-link" href="thread.php?bid=57">[物理学院]</a>
                            <a class="more-link" href="board.php?bid=664">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="topic-link" href="thread.php?bid=1431">[燕园食宿]</a><a class="post-link" href="post-read.php?bid=1431&amp;threadid=17052811">【建议】卖整盒肉松一口酥</a></li>
                        <li><a class="topic-link" href="thread.php?bid=138">[医学部]</a><a class="post-link" href="post-read.php?bid=138&amp;threadid=17052825">今天去吃了清真餐厅的健身餐，谈谈感受</a></li>
                        <li><a class="topic-link" href="thread.php?bid=1431">[燕园食宿]</a><a class="post-link" href="post-read.php?bid=1431&amp;threadid=17054437">私人物品在食堂占座这种事情是怎么在校园滋长的</a></li>
                        <li><a class="topic-link" href="thread.php?bid=25">[北京大学图书馆]</a><a class="post-link" href="post-read.php?bid=25&amp;threadid=17047728">探讨给保洁阿姨和叔叔一个小房间休息？</a></li>
                    </ul>
                </div>
            </section>
                <section class="topic-block">
                    <div class="wrapper">
                        <div class="title two-line">
                            <p><a href="board.php?bid=671"><span class="area-digit">二区</span><span class="name">文学版区</span></a></p>
                            <p>
                                <a class="topic-link" href="thread.php?bid=450">[极目楚天]</a>
                                <a class="topic-link" href="thread.php?bid=486">[南粤风采]</a>
                                <a class="topic-link" href="thread.php?bid=464">[天府之国]</a>
                                <a class="topic-link" href="thread.php?bid=104">[清华大学]</a>
                                <a class="more-link" href="board.php?bid=671">更多</a>
                            </p>
                        </div>
                        <ul>
                            <li><a class="topic-link" href="thread.php?bid=468">[皇城根儿]</a><a class="post-link" href="post-read.php?bid=468&amp;threadid=17054531">大家一般多久回一次家啊</a></li>
                            <li><a class="topic-link" href="thread.php?bid=468">[皇城根儿]</a><a class="post-link" href="post-read.php?bid=468&amp;threadid=17054032">Mor</a></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </section><!--
      --><section class="topic-block">
                <div class="wrapper">
                    <div class="title two-line">
                        <p><a href="board.php?bid=673"><span class="area-digit">三区</span><span class="name">游戏研讨</span></a></p>
                        <p>
                            <a class="topic-link" href="thread.php?bid=184">[日本研究]</a>
                            <a class="topic-link" href="thread.php?bid=342">[讲座动态]</a>
                            <a class="topic-link" href="thread.php?bid=346">[数学工具]</a>
                            <a class="topic-link" href="thread.php?bid=996">[电子制作]</a>
                            <a class="more-link" href="board.php?bid=673">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="topic-link" href="thread.php?bid=244">[医学与健康]</a><a class="post-link" href="post-read.php?bid=244&amp;threadid=17051409">医生误诊</a></li>
                        <li><a class="topic-link" href="thread.php?bid=244">[医学与健康]</a><a class="post-link" href="post-read.php?bid=244&amp;threadid=17052452">终于想通校医院皮肤科大夫的逻辑了！</a></li>
                        <li><a class="topic-link" href="thread.php?bid=249">[谈股论金]</a><a class="post-link" href="post-read.php?bid=249&amp;threadid=16996044">上证指数回到了我刚踏入股市的水平</a></li>
                        <li><a class="topic-link" href="thread.php?bid=249">[谈股论金]</a><a class="post-link" href="post-read.php?bid=249&amp;threadid=17010861">求赵老师微信群</a></li>
                    </ul>
                </div>
            </section>
                <section class="topic-block">
                    <div class="wrapper">
                        <div class="title two-line">
                            <p><a href="board.php?bid=674"><span class="area-digit">四区</span><span class="name">创业资讯</span></a></p>
                            <p>
                                <a class="topic-link" href="thread.php?bid=1001">[Google]</a>
                                <a class="topic-link" href="thread.php?bid=35">[网络技术]</a>
                                <a class="topic-link" href="thread.php?bid=209">[网络资源]</a>
                                <a class="topic-link" href="thread.php?bid=13">[优秀的Free&nbsp;OS]</a>
                                <a class="more-link" href="board.php?bid=674">更多</a>
                            </p>
                        </div>
                        <ul>
                            <li><a class="topic-link" href="thread.php?bid=488">[苹果爱好者]</a><a class="post-link" href="post-read.php?bid=488&amp;threadid=17053840">&nbsp;GreatFire&nbsp;新项目曝光苹果在中国实施的审查&nbsp;</a></li>
                            <li><a class="topic-link" href="thread.php?bid=488">[苹果爱好者]</a><a class="post-link" href="post-read.php?bid=488&amp;threadid=17053716">ipad&nbsp;pro&nbsp;维修要发票吗</a></li>
                            <li><a class="topic-link" href="thread.php?bid=484">[笔记本电脑]</a><a class="post-link" href="post-read.php?bid=484&amp;threadid=17054819">【求助】惠普暗影精灵2Pro开机风扇一直转，噪声很大</a></li>
                            <li><a class="topic-link" href="thread.php?bid=484">[笔记本电脑]</a><a class="post-link" href="post-read.php?bid=484&amp;threadid=17054495">【求助】Win10出现Your&nbsp;PC&nbsp;did&nbsp;not&nbsp;start&nbsp;correctly</a></li>
                        </ul>
                    </div>
                </section><!--
            --><section class="topic-block">
                <div class="wrapper">
                    <div class="title two-line">
                        <p><a href="board.php?bid=675"><span class="area-digit">五区</span><span class="name">ToDo应用</span></a></p>
                        <p>
                            <a class="topic-link" href="thread.php?bid=18">[武侠世家]</a>
                            <a class="topic-link" href="thread.php?bid=390">[相声]</a>
                            <a class="topic-link" href="thread.php?bid=1064">[耽美文学]</a>
                            <a class="topic-link" href="thread.php?bid=163">[梦回红楼]</a>
                            <a class="more-link" href="board.php?bid=675">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="topic-link" href="thread.php?bid=53">[阅读空间]</a><a class="post-link" href="post-read.php?bid=53&amp;threadid=17053477">一本书的阅读周期</a></li>
                        <li><a class="topic-link" href="thread.php?bid=338">[ID文化]</a><a class="post-link" href="post-read.php?bid=338&amp;threadid=17054400">【转】ipad&nbsp;pro&nbsp;9.7&nbsp;128Gb&nbsp;玫瑰金(转载)</a></li>
                        <li><a class="topic-link" href="thread.php?bid=705">[音乐剧情人]</a><a class="post-link" href="post-read.php?bid=705&amp;threadid=17053446">【水一贴】聊聊今年的Oliver奖</a></li>
                        <li><a class="topic-link" href="thread.php?bid=647">[铁路]</a><a class="post-link" href="post-read.php?bid=647&amp;threadid=17053533">5月9日起集通线6041/40/39/42次和K2017/6/8/5次停运</a></li>
                    </ul>
                </div>
            </section>
             <!--以下内容隐藏-->
                <!--<section class="topic-block">-->
                    <!--<div class="wrapper">-->
                        <!--<div class="title two-line">-->
                            <!--<p><a href="board.php?bid=678"><span class="area-digit">六区</span><span class="name">休闲娱乐</span></a></p>-->
                            <!--<p>-->
                                <!--<a class="topic-link" href="thread.php?bid=108">[动漫天地]</a>-->
                                <!--<a class="topic-link" href="thread.php?bid=441">[图片艺术]</a>-->
                                <!--<a class="topic-link" href="thread.php?bid=94">[旅游]</a>-->
                                <!--<a class="topic-link" href="thread.php?bid=83">[电影]</a>-->
                                <!--<a class="more-link" href="board.php?bid=678">更多</a>-->
                            <!--</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=90">[美食天地]</a><a class="post-link" href="post-read.php?bid=90&amp;threadid=17051965">突发奇想打算组一个吃遍驻京办的团</a></li>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=49">[电子游戏]</a><a class="post-link" href="post-read.php?bid=49&amp;threadid=17053717">【week14】谈一谈最近一次购买游戏</a></li>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=958">[天黑请闭眼]</a><a class="post-link" href="post-read.php?bid=958&amp;threadid=17054828">lovelive学园偶像大作战&nbsp;剧情故事</a></li>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=90">[美食天地]</a><a class="post-link" href="post-read.php?bid=90&amp;threadid=17051260">在连续吃了快两年各式原味坚果后，今天吃到的的</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                <!--</section>&lt;!&ndash;-->
      <!--&ndash;&gt;<section class="topic-block">-->
                <!--<div class="wrapper">-->
                    <!--<div class="title two-line">-->
                        <!--<p><a href="board.php?bid=679"><span class="area-digit">七区</span><span class="name">知性感性</span></a></p>-->
                        <!--<p>-->
                            <!--<a class="topic-link" href="thread.php?bid=52">[男孩子]</a>-->
                            <!--<a class="topic-link" href="thread.php?bid=36">[谈情说爱]</a>-->
                            <!--<a class="topic-link" href="thread.php?bid=97">[单身一族]</a>-->
                            <!--<a class="topic-link" href="thread.php?bid=270">[鹊桥征玩友]</a>-->
                            <!--<a class="more-link" href="board.php?bid=679">更多</a>-->
                        <!--</p>-->
                    <!--</div>-->
                    <!--<ul>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=176">[灰色心情]</a><a class="post-link" href="post-read.php?bid=176&amp;threadid=17053810">学校附近有没有可以坐下独自哭泣的地方？</a></li>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=103">[未名湖]</a><a class="post-link" href="post-read.php?bid=103&amp;threadid=17054111">老师上课努力寻求互动好辛苦啊……</a></li>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=414">[别问我是谁]</a><a class="post-link" href="post-read.php?bid=414&amp;threadid=17052117">买房家里能出80万左右首付，是什么水平</a></li>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=167">[鹊桥]</a><a class="post-link" href="post-read.php?bid=167&amp;threadid=17052096">【For&nbsp;GG】大四狗夕阳红征友！（附照片）</a></li>-->
                    <!--</ul>-->
                <!--</div>-->
            <!--</section>-->
                <!--<section class="topic-block">-->
                    <!--<div class="wrapper">-->
                        <!--<div class="title two-line">-->
                            <!--<p><a href="board.php?bid=680"><span class="area-digit">八区</span><span class="name">三角地</span></a></p>-->
                            <!--<p>-->
                                <!--<a class="topic-link" href="thread.php?bid=896">[实习]</a>-->
                                <!--<a class="topic-link" href="thread.php?bid=419">[学生资助中心兼职信息]</a>-->
                                <!--<a class="topic-link" href="thread.php?bid=845">[求职信息发布]</a>-->
                                <!--<a class="topic-link" href="thread.php?bid=230">[房屋租赁]</a>-->
                                <!--<a class="more-link" href="board.php?bid=680">更多</a>-->
                            <!--</p>-->
                        <!--</div>-->
                        <!--<ul>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=71">[跳蚤市场]</a><a class="post-link" href="post-read.php?bid=71&amp;threadid=17053504">【出】MacBook&nbsp;Pro（Retina屏，13英寸，i5，128G)</a></li>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=71">[跳蚤市场]</a><a class="post-link" href="post-read.php?bid=71&amp;threadid=17054617">求二手游戏本</a></li>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=22">[三角地]</a><a class="post-link" href="post-read.php?bid=22&amp;threadid=17049909">2018届本科毕业生实名质疑北大日语系</a></li>-->
                            <!--<li><a class="topic-link" href="thread.php?bid=99">[找工作啦]</a><a class="post-link" href="post-read.php?bid=99&amp;threadid=17054216">求问，建信信托待遇怎么样？</a></li>-->
                        <!--</ul>-->
                    <!--</div>-->
                <!--</section>&lt;!&ndash;-->
      <!--&ndash;&gt;<section class="topic-block">-->
                <!--<div class="wrapper">-->
                    <!--<div class="title two-line">-->
                        <!--<p><a href="board.php?bid=681"><span class="area-digit">九区</span><span class="name">体育修身</span></a></p>-->
                        <!--<p>-->
                            <!--<a class="topic-link" href="thread.php?bid=219">[健美健身]</a>-->
                            <!--<a class="topic-link" href="thread.php?bid=861">[跑步]</a>-->
                            <!--<a class="topic-link" href="thread.php?bid=839">[橙色风暴]</a>-->
                            <!--<a class="topic-link" href="thread.php?bid=77">[羽毛球]</a>-->
                            <!--<a class="more-link" href="board.php?bid=681">更多</a>-->
                        <!--</p>-->
                    <!--</div>-->
                    <!--<ul>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=88">[篮球公园]</a><a class="post-link" href="post-read.php?bid=88&amp;threadid=17054225">魔术师约翰逊辞职了&nbsp;</a></li>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=88">[篮球公园]</a><a class="post-link" href="post-read.php?bid=88&amp;threadid=17054361">乔治绝杀，雷霆112-111火箭</a></li>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=519">[体育游戏]</a><a class="post-link" href="post-read.php?bid=519&amp;threadid=17053806">FML季末大猜想：the&nbsp;wildest&nbsp;season？</a></li>-->
                        <!--<li><a class="topic-link" href="thread.php?bid=93">[足球世界]</a><a class="post-link" href="post-read.php?bid=93&amp;threadid=17053573">[公告]&nbsp;Football&nbsp;版的投票结果</a></li>-->
                    <!--</ul>-->
                <!--</div>-->
                <!--</section>&lt;!&ndash;这里以上暂时隐蔽&ndash;&gt;-->
                <section class="topic-block">
                    <div class="wrapper">
                        <div class="title two-line">
                            <p><a href="board.php?bid=682"><span class="area-digit">Ａ区</span><span class="name">社团群体</span></a></p>
                            <p>
                                <a class="topic-link" href="thread.php?bid=635">[法学社]</a>
                                <a class="topic-link" href="thread.php?bid=849">[北京大学“派”设计协会]</a>
                                <a class="topic-link" href="thread.php?bid=299">[北京大学文化产业协会]</a>
                                <a class="topic-link" href="thread.php?bid=237">[北大交响乐团]</a>
                                <a class="more-link" href="board.php?bid=682">更多</a>
                            </p>
                        </div>
                        <ul>
                            <li><a class="topic-link" href="thread.php?bid=783">[流浪猫关爱协会]</a><a class="post-link" href="post-read.php?bid=783&amp;threadid=17008972">TNR5&nbsp;|&nbsp;小菊的个人写真重磅来袭！</a></li>
                            <li><a class="topic-link" href="thread.php?bid=216">[吉他协会]</a><a class="post-link" href="post-read.php?bid=216&amp;threadid=17053811">[求问]换琴弦时一次性全拆了真的对琴颈有损伤吗？</a></li>
                            <li><a class="topic-link" href="thread.php?bid=952">[定向运动协会]</a><a class="post-link" href="post-read.php?bid=952&amp;threadid=17054344">【队记】2019.04.09例训</a></li>
                            <li><a class="topic-link" href="thread.php?bid=783">[流浪猫关爱协会]</a><a class="post-link" href="post-read.php?bid=783&amp;threadid=17046787">【猫咪讣告】燕南小菊</a></li>
                        </ul>
                    </div>
                </section>
                <!--以下是隐藏内容
                <section class="topic-block">
                <div class="wrapper">
                    <div class="title two-line">
                        <p><a href="board.php?bid=683"><span class="area-digit">Ｂ区</span><span class="name">组织机构</span></a></p>
                        <p>
                            <a class="topic-link" href="thread.php?bid=253">[北京大学学生会]</a>
                            <a class="topic-link" href="thread.php?bid=289">[社团文体之家]</a>
                            <a class="topic-link" href="thread.php?bid=242">[北大青年志愿者协会]</a>
                            <a class="topic-link" href="thread.php?bid=912">[北大剧星风采大赛]</a>
                            <a class="more-link" href="board.php?bid=683">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="topic-link" href="thread.php?bid=690">[心理健康教育与咨询中心]</a><a class="post-link" href="post-read.php?bid=690&amp;threadid=17053161">特别喜欢熬夜感觉都快成病了</a></li>
                        <li><a class="topic-link" href="thread.php?bid=690">[心理健康教育与咨询中心]</a><a class="post-link" href="post-read.php?bid=690&amp;threadid=16991195">失恋后恢复不了</a></li>
                        <li><a class="topic-link" href="thread.php?bid=343">[北京大学研究生会]</a><a class="post-link" href="post-read.php?bid=343&amp;threadid=16561049">亲身体会了自如的甲醛房</a></li>
                        <li><a class="topic-link" href="thread.php?bid=343">[北京大学研究生会]</a><a class="post-link" href="post-read.php?bid=343&amp;threadid=15759439">对于“学术十杰”处理的怎么样了？（更新）</a></li>
                    </ul>
                </div>
            </section>
                <section class="topic-block">
                    <div class="wrapper">
                        <div class="title two-line">
                            <p><a href="board.php?bid=685"><span class="area-digit">Ｃ区</span><span class="name">课程特区</span></a></p>
                            <p>
                                <a class="topic-link" href="thread.php?bid=1320">[人类的性、生育与健康]</a>
                                <a class="topic-link" href="thread.php?bid=814">[西方美术史十五讲]</a>
                                <a class="topic-link" href="thread.php?bid=727">[艺术史]</a>
                                <a class="topic-link" href="thread.php?bid=568">[传记文学]</a>
                                <a class="more-link" href="board.php?bid=685">更多</a>
                            </p>
                        </div>
                        <ul>
                            <li><a class="topic-link" href="thread.php?bid=575">[社会心理学]</a><a class="post-link" href="post-read.php?bid=575&amp;threadid=17054664">[诚招被试，40分钟70元】</a></li>
                            <li><a class="topic-link" href="thread.php?bid=575">[社会心理学]</a><a class="post-link" href="post-read.php?bid=575&amp;threadid=17054658">【诚招被试】情绪类别判断实验（40分钟/35元）</a></li>
                            <li><a class="topic-link" href="thread.php?bid=1010">[心理学双学位]</a><a class="post-link" href="post-read.php?bid=1010&amp;threadid=17054672">【诚招被试，40分钟70元】</a></li>
                            <li><a class="topic-link" href="thread.php?bid=485">[心理学概论]</a><a class="post-link" href="post-read.php?bid=485&amp;threadid=17054651">【诚招被试】情绪类别判断实验（40分钟/35元）</a></li>
                        </ul>
                    </div>
                </section>
                <section class="topic-block">
                <div class="wrapper">
                    <div class="title two-line">
                        <p><a href="board.php?bid=687"><span class="area-digit">Ｆ区</span><span class="name">校务特区</span></a></p>
                        <p>
                            <a class="topic-link" href="thread.php?bid=316">[北京大学体育教研部]</a>
                            <a class="topic-link" href="thread.php?bid=622">[北京大学财务部]</a>
                            <a class="topic-link" href="thread.php?bid=1075">[北京大学港澳台办公室]</a>
                            <a class="topic-link" href="thread.php?bid=411">[北京大学学生资助中心]</a>
                            <a class="more-link" href="board.php?bid=687">更多</a>
                        </p>
                    </div>
                    <ul>
                        <li><a class="topic-link" href="thread.php?bid=668">[北京大学计算中心]</a><a class="post-link" href="post-read.php?bid=668&amp;threadid=17054696">北大院系官网无法打开</a></li>
                        <li><a class="topic-link" href="thread.php?bid=438">[校长信箱]</a><a class="post-link" href="post-read.php?bid=438&amp;threadid=17050991">校园卡的制卡成本和身份证一样高吗？</a></li>
                        <li><a class="topic-link" href="thread.php?bid=438">[校长信箱]</a><a class="post-link" href="post-read.php?bid=438&amp;threadid=17043026">建议在各宿舍楼区域设置电动车充电桩或电池充电柜</a></li>
                        <li><a class="topic-link" href="thread.php?bid=625">[北京大学就业指导中心]</a><a class="post-link" href="post-read.php?bid=625&amp;threadid=16354038">头一次发帖，有考公务员的吗？</a></li>
                    </ul>
                </div>
            </section>
            以上内容隐藏-->
            </div>

            <div class="advt" id="banner_bottom">
                <!--<div id="banner_bottom_0" style="display: block">-->
                    <!--<a href="https://bbs.pku.edu.cn/download/android/bdwm.apk" target="_blank" data-no-pjax><img src="/v2/uploads/banner_fhEutH.gif"></a>-->
                <!--</div>-->
            </div>

        </div><!--
  --><div class="column-right">
        <section class="topic-block">
            <div class="wrapper">
                <div class="title one-line">
                    <p>
                        <span class="name">热门版面</span>
                    </p>
                </div>
                <ul>
                    <li><a class="post-link" href="thread.php?bid=414">别问我是谁 SecretGarden</a></li>
                    <li><a class="post-link" href="thread.php?bid=167">鹊桥 PieBridge</a></li>
                    <li><a class="post-link" href="thread.php?bid=71">跳蚤市场 SecondHand</a></li>
                    <li><a class="post-link" href="thread.php?bid=896">实习 Intern</a></li>
                    <li><a class="post-link" href="thread.php?bid=1431">燕园食宿 CanteenDorm</a></li>
                    <li><a class="post-link" href="thread.php?bid=99">找工作啦 Job</a></li>
                    <li><a class="post-link" href="thread.php?bid=22">三角地 Triangle</a></li>
                    <li><a class="post-link" href="thread.php?bid=635">法学社 LSA</a></li>
                    <li><a class="post-link" href="thread.php?bid=90">美食天地 Food</a></li>
                    <li><a class="post-link" href="thread.php?bid=690">心理健康教育与咨询中心 MentalityEdu</a></li>
                </ul>
            </div>
        </section>
        <section class="topic-block">
            <div class="wrapper">
                <div class="title one-line">
                    <p>
                        <span class="name">快捷外联</span>
                        <a class="more-link" href="thread.php?bid=165">更多</a>
                    </p>
                </div>
                <ul>
                    <li><a class="post-link" href="post-read-single.php?bid=165&amp;type=2&amp;postid=20030114">校园卡，16级光华本科，邹同学</a></li>
                    <li><a class="post-link" href="post-read-single.php?bid=165&amp;type=2&amp;postid=20026534">中文系&nbsp;李林倩&nbsp;校园卡等</a></li>
                    <li><a class="post-link" href="post-read-single.php?bid=165&amp;type=2&amp;postid=20021592">三教门口捡到一圆形校徽图案公交卡&nbsp;背面为未名湖</a></li>
                    <li><a class="post-link" href="post-read-single.php?bid=165&amp;type=2&amp;postid=19991678">4.6穿着黑白条纹骑电动向五道口方向的小哥&nbsp;</a></li>
                    <li><a class="post-link" href="post-read-single.php?bid=165&amp;type=2&amp;postid=19989464">校园卡&nbsp;信科18级&nbsp;李同学</a></li>
                </ul>
            </div>
        </section>
        <div class="vertical-advt">
            <!--<ul>-->
                <!--<li><a href="https://bbs.pku.edu.cn/v2/thread.php?bid=163"><img src="/v2/uploads/home-advert_36SeVY.jpg"></a></li>-->
                <!--<li><a href="thread.php?bid=88"><img src="/v2/uploads/home-advert_y12x7V.jpg"></a></li>-->
                <!--<li><a href="thread.php?bid=197"><img src="/v2/uploads/home-advert_w2WbG7.gif"></a></li>-->
                <!--<li><a href="thread.php?bid=1380"><img src="/v2/uploads/home-advert_hkI4AR.gif"></a></li>-->
                <!--<li><a href="/v2/thread.php?bid=99"><img src="/v2/uploads/home-advert_5RnLFP.png"></a></li>-->
            <!--</ul>-->
        </div>
        <section class="topic-block contact-us">
            <div class="wrapper">
                <div class="title one-line">
                    <p>
                        <span class="name">联系我们</span>
                    </p>
                </div>
                <div class="second-block">
                    <p class="sn-link">聚远社BBS微博</p>
                    <p class="sn-link">聚远社微信公众号</p>
                    <!--<p class="sn-link"><img src="images/home/iconfont-weibo.png"><a href="http://weibo.com/bdwmbbs" target="_blank">北大未名BBS</a></p>-->
                    <!--<a href="http://weibo.com/bdwmbbs" target="_blank"><p class="qr-code"><img src="images/home/qrcode_weibo.png"></p></a>-->
                    <!--<p class="sn-link"><img src="images/home/iconfont-weixin.png">PKUbdwmbbs</p>-->
                    <!--<p class="qr-code"><img src="images/home/qrcode_wechat.jpg"></p>-->
                </div>
            </div>
        </section>
        <section class="topic-block download">
            <div class="wrapper">
                <div class="title one-line">
                    <p>
                        <span class="name">客户端下载</span>
                    </p>
                </div>
                <div class="second-block">
                    <!--<p><a href="download.php"><img src="images/home/anniu-Term.png"></a></p>-->
                    <p><a><img src="http://www.tp5.com/resource/images/home/anniu-IOS-comingsoon.png" title="稍后发布"></a></p>
                    <p><a href="/download/android/jysbbs.apk" target="_blank" data-no-pjax><img src="http://www.tp5.com/resource/images/home/anniu-Android.png" title="等待开发中"></a></p>
                </div>
            </div>
        </section>

    </div>
    </div>
    <!-- start _welcome.php-->
    <div id="dialog-welcome">
        <div class="loading"><img src="http://www.tp5.com/resource/images/welcome/loading.gif"></div>
        <a class="image"  href="https://bbs.pku.edu.cn/v2/post-read.php?bid=1&threadid=17010806" target="_blank" data-no-pjax><img id="welcome-image" style="visibility: hidden" src="http://www.tp5.com/resource/sign/Azure.jpg"></a>
        <div class="bottom"><a class="button red" data-action="dialog-dismiss">进入未名BBS</a></div>
        <a class="dismiss" data-action="dialog-dismiss"><i class="icon-font">&#xe61a;</i></a>
        <a class="side" data-action="show-welcome-request">进<br>站<br>申<br>请</a>
    </div>

    <div id="dialog-welcome-request">
        <div class="title">进站申请</div>
        <div class="subtitle">版面/活动类进站申请</div>
        <div class="content">版面类进站为未名所有版面的活动宣传之用（个别特殊要求见下文），活动类进站为校内重大活动，如十佳歌手等对大部分北大学生有重大影响力的活动。院系/社团的文化节、活动、演出、讲座等也允许申请，但请在作品中体现对院系/社团版面的宣传。</div>
        <div class="subtitle">个人设计作品进站投稿</div>
        <div class="content">以校园、节日、纪念日等为题材的个人绘画、设计作品。</div>
        <div class="buttons"><a href="post-read.php?bid=130&threadid=3213366" class="button">查看详细说明</a><a href="thread.php?bid=130" class="button red">申请</a></div>
        <div class="subtitle">个人摄影作品进站投稿</div>
        <div class="content">以校园生活为题材的个人摄影作品。</div>
        <div class="buttons"><a href="post-read.php?bid=130&threadid=14330638" class="button">查看详细说明</a><a href="mail-new.php?username=ColorShow" class="button red">申请</a></div>
        <a class="dismiss" data-action="dialog-dismiss"><i class="icon-font">&#xe61a;</i></a>
    </div>
    <!-- end _welcome.php-->

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
