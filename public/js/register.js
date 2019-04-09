var t=5;
$(document).ready(function () {
    getSession();
    checkPermit();
})
function checkform() {
    var email=$(".form input:eq(0)").val();
    var nickname=$(".form input:eq(1)").val();
    var truename=$(".form input:eq(2)").val();
    var password=$(".form input:eq(3)").val();
    var password1=$(".form input:eq(4)").val();
    var birthday=$(".form input:eq(5)").val();
    var sexMan=$(".form input:eq(6)").val();
    var sexWoman=$(".form input:eq(7)").val();
    var myreg= /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
    var reg=/^[\u0391-\uFFE5]+$/;
    var date= /^(\d{1,4})(-)(\d{1,2})\2(\d{1,2})$/;
    if(!myreg.test(email)){
        mizhu.toast('请输入有效的邮箱！'+email+'格式错误',3000);
        return false;
    }

    if(nickname.length==0){
        mizhu.toast('昵称不能为空！',2000);
        return false;
    }
    if(truename.length==0){
        mizhu.toast('真实姓名不能为空！',2000);
        return false;
    }
    if(truename!="" && !reg.test(truename)){
        mizhu.toast('真实姓名必须为中文姓名！',2000);
        return false;
    }
    if(password.length==0){
        mizhu.toast('密码不能为空！',2000);
        return false;
    }
    if(password != password1){
        mizhu.toast('密码不一致！请重新输入',2000);
        return false;
    }
    if(birthday.length==10){
        var r=birthday.match(date);
      if(!r){
        mizhu.toast('生日日期格式不正确！请重新输入',2000);
        return false;
      }
      var d= new Date(r[1],r[3]-1,r[4]);
      var c=(d.getFullYear()==r[1] && (d.getMonth()+1)==r[3] && d.getDate()==r[4]);
      if(!c){
          mizhu.toast('请重新输入正确日期！',2000);
          return false;
      }

    }else{
        mizhu.toast('生日日期格式不正确！请重新输入',2000);
        return false;
    }
    if(sexMan ==sexWoman){
        mizhu.toast('请选择你的性别！',2000);
        return false;
    }
    if(sexMan=='true' && sexWoman=='false'){
        var sex='1';
    }else{
        var sex='0';
    }
    var dataArr=[email,nickname,truename,password,birthday,sex];
    return dataArr;
    //mizhu.alert('',email,'');
    //mizhu.alert('alert_带标题', '这是alert效果');
    // mizhu.alert('', '这是alert效果','alert_red');
    //mizhu.alert('alert_带标题带图标', '这是alert效果','alert_green');
    //mizhu.alert('', '这是alert效果');
    /*
mizhu.confirm('', '是否要取消关注？', function(flag) {
    if(flag) {
        mizhu.alert('', '取消成功');
    }
});

mizhu.confirm('', '是否要取消关注？', function(flag) {
    if(flag) {
        mizhu.alert('温馨提醒', '取消成功');
    }
});

mizhu.toast('已取消关注');

mizhu.toast('已取消关注', 6000);
    * */
}
function charge(value) {
    if(value=="sexman"){
        var obj=$(".form input:eq(6)");}else{
        var obj=$(".form input:eq(7)");
    }
    switch(obj.val()){
        case 'true':
            obj.attr('value','false');
            break;
        case 'false':
            obj.attr('value','true');
            break;
    }
}
function register(dataArr){
    $.ajax({
        type:'POST',
        dataType:'json',
        url:'register',
        contentType:'application/json;charset=UTF-8',
        data:JSON.stringify({'regData':dataArr}),
        success:function(data1){//返回结果
            switch (data1.statue){
                case '1':
                    mizhu.toast('该邮箱已注册，请检查或找回密码');break;
                case '2':
                    mizhu.toast('该昵称已注册，请重新斟酌输入');break;
                case 'true':
                    getSession();
                    show_jump('已注册成功');break;
                default:
                    mizhu.toast('发生未知错误，请联系管理员任勇：17805932065');
            }
        }
    });
}
function show_jump(content){
    if($.cookie('uname')!=null  ||  $.session.get('uname') != null){
        $(".form .tabs .tabs-info").hide();
        $("#delayJumpWindow").show();
        var content="we are champion";
        setInterval("delayJumpToHomepage()",1000); //启动1秒定时
        delayJumpToHomepage(content);
    }else{
        $(".form .tabs .tabs-info").show();
        $("#delayJumpWindow").hide();
        alert($.cookie('uname')+"登录错误，请重新登录，或联系管理员：任勇 17805932065"+$.session.get('uname'));
    }
}
function delayJumpToHomepage(contents){
    if(t==0){
        location="/index.php/home"; //#设定跳转的链接地址
    }
    document.getElementById('delayJumpToHomepage').innerHTML=contents+t+"秒后跳转到主页"; // 显示倒计时
    t--; // 计数器递减
}
function checkPermit() {
    if (typeof($.session.get('uname')) != "undefined" && $.session.get('uname')!='null') {
        if (typeof($.cookie('uname')) != "undefined" && $.cookie('uname') != "null") {
            // $(".form .tabs .tabs-info").attr("style","display:none");
            $(".form ,.tabs ,.tabs-info").hide();
            $("#delayJumpWindow").show();
            // var content='社员账号已登录，无需注册,';
            setInterval("delayJumpToHomepage('社员账号已登录，无需注册,')", 1000);
            // delayJumpToHomepage(content);
        }
    }
}


