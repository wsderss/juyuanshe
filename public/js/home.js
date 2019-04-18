
$(document).ready(function () {
    if(checkUser('index')){
        online();
    }
    $("body").bind('click',function () {
        var evt = event.srcElement ? event.srcElement : event.target;
        $.pjax.defaults.fragment='#page-content';
        switch(evt.id){
            case 'btn-login':
                var objBtnLogin=new Object();
                objBtnLogin.username=$("#username").val();
                objBtnLogin.password=$("input[name='password']").val();
                objBtnLogin.keepalive=$("#form-remember-checkbox").val();
                if(checkform(objBtnLogin)){
                    loginHome(checkform(objBtnLogin));
                }
                break;
            case 'form-remember-checkbox':
                var objCheckbox=$('#form-remember-checkbox');
                charge(objCheckbox);
            break;
            case 'triangleSpan':
                buttonList();
            break;
            case 'tab_home':
                $(document).pjax("#tab_home","#page-content");
            break;
            case  'tab_favorite':
                $(document).pjax("#tab_favorite","#page-content");
                break;
            case 'tab_zone':
                $(document).pjax("#tab_zone","#page-content");
            break;
            case 'tab_favorite_collection':
                $(document).pjax("#tab_favorite_collection","#page-content");
            break;
            case 'tab_friend':
                $(document).pjax("#tab_friend","#page-content");
            break;
            case 'btn-logout':
                $.session.remove('uname');
                $.cookie('uname',undefined);
                checkUser('index');
            break;
            case 'chose_editor':
                alert('我执行了');
                $(document).pjax("#page-content","#page-content");
            break;
            default:
                searchView(evt);
        }

    });
    $(".search-ipt").bind('input propertychange',function () {
        var searchContent=$(".search-ipt").val();
        searchPlatform(searchContent);
    });
    $("div[data-action='new-post-publish']").bind('click',function () {
        var postTitle=$("input[data-role='post-title']").val();
        var postContent=$("textarea[data-role='new-post-textarea']").val();
        var dataArr=a(postTitle,postContent);
        if(dataArr){
            $.ajax({
                type:'POST',
                dataType:'json',
                url:dataArr[0],
                contentType:'application/json;charset=UTF-8',
                data:JSON.stringify({'postData':dataArr}),
                success:function(data1){//返回结果
                    if(data1.status) {
                        mizhu.toast('发帖成功！');
                    }else{
                            mizhu.toast('发生未知错误，请联系管理员任勇：17805932065');
                    }
                }
            });
        }
        function a(ca,cb) {
            var url = window.location.pathname;
            var urlInfo=url.split("/");
            switch(urlInfo.length){
                case 3:
                    var url="/post-new/"+urlInfo[2];
                    break;
                case 4:
                    var boardId=urlInfo[2];
                    var url="/post-new/"+boardId+"/"+urlInfo[3];
                    break;
                default:
                    mizhu.toast("这不是一个发帖操作",2000);
            }
            if(ca.length==0){
                mizhu.toast('标题不能为空！',2000);
                return false;
            }
            if(cb.length==0){
                mizhu.toast('内容不能为空！',2000);
                return false;
            }

            return [url,ca,cb,$.session.get('uname'),0];
        }

    })

});

function searchPlatform(v) {
    if(v!="" && $(".keywords-result").css("display")=="none"){
        $(".keywords-result").css("display","block");
    }
    var liDistrict="<li class='category'>搜索"+v+"<strong class='keyword'>相关版区</strong></li>";
    var liUsers="<li class='category'>搜索"+v+"<strong class='keyword'>相关社员</strong></li>";
    var liPost="<li class='category'>搜索"+v+"<strong class='keyword'>相关帖子</strong></li>";
    $(".search-box ul:eq(0)").empty();
    $(".search-box ul:eq(0)").append(liDistrict+liUsers+liPost);
}

function searchView(evt) {
    var clickId=evt.id;
    if(clickId =='search-ipt' && $(".mask-without-header").css("display")=="none"){
        $(".mask-without-header").css("display","block");
        $("#left-nav").css("z-index","90");
        if($(".search-ipt").val()!="" && $(".keywords-result").css("display")=="none"){
            $(".keywords-result").css("display","block");
        }
    }else if($(".mask-without-header").css("display")=="block" && clickId=='search-ipt'){
        return ;
    }else{
        $(".mask-without-header").css("display","none");
        $("#left-nav").css("z-index","151");
        $(".keywords-result").css("display","none");
    }
}

function buttonList() {
    var btnListStatue=$(".btn-list").css("display");
    switch (btnListStatue){
        case 'none':
            $(".btn-list").css("display","block");
            $(".have-login").css("height","276px");
            $(".username span:eq(1)").toggleClass("self-triangle triangle");
        break;
        case 'block':
            $(".btn-list").css("display","none");
            $(".have-login").css("height","156px");
            $(".username span:eq(1)").toggleClass("self-triangle triangle");
            break;
        default :
            mizhu.toast("发生一个错误，请稍后重试",2000);
    }
}

function loginHome(loginArr) {
    $.ajax({
        type:'POST',
        dataType:'json',
        url:'user/user/login',
        contentType:'application/json;charset=UTF-8',
        data:JSON.stringify({'loginData':loginArr}),
        success:function(data1){//返回结果
            switch (data1.statue){
                case '0':
                    mizhu.toast('查无此社员，请检查用户名是否有误！',2000); break;
                case '1':
                    mizhu.toast('欢迎社员访问家园',2000);
                    $(".not-login").css("display","none");
                    $(".have-login").css("display","block");
                    break;
                case '2':
                    mizhu.toast('密码错误，请检查并重新操作',2000);break;
                default:
                    mizhu.toast('未知错误，请联系管理员任勇：17805932065',2000);
            }
        }
    });
}

function online(){
    $(".not-login").css("display","none");
    $(".have-login").css("display","block");
    $("#login-info").css("display","block");
}


(function () {

})(jQuery);

