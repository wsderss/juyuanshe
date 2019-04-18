$(document).ready(function(){
    $("[data-action='login']").click(function(){
        var objLogin=new Object();
        objLogin.username=$(".loginBlock input:eq(0)").val();
        objLogin.password=$(".loginBlock input:eq(1)").val();
        objLogin.keepalive=$(".loginBlock input:eq(2)").val();
        if(checkform(objLogin)){
            login(checkform(objLogin));
        }});
    $("[data-action='keepalive']").click(function(){
        var objCheckbox=$("[data-action='keepalive']");
        charge(objCheckbox);
    });

});
checkUser('home');
function login(loginArr) {
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
                    getSession();
                    mizhu.toast('欢迎社员访问家园',2000);
                    window.setTimeout("window.location='/home'",2000);
                    break;
                case '2':
                    mizhu.toast('密码错误，请检查并重新操作',2000);break;
                default:
                    mizhu.toast('未知错误，请联系管理员任勇：17805932065',2000);
            }
        }
    });
}
function charge() {
     var obj=$(".loginBlock input:eq(2)");
     switch(obj.val()){
            case 'true':
                obj.attr('value','false');
                break;
            case 'false':
                obj.attr('value','true');
                break;
        }
    }