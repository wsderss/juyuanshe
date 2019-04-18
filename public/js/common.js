function getSession(){
      $.ajax({
          url: "/api/Index/getSession",
          dataType: "json",
          success: function (data) {
              //根据session缓存获取用户信息
              switch (data.uname){
                  case 'false':
                      $.session.set('uname', null);break;
                  default:
                      $.session.set('uname', data.uname);
                      window.location.reload();
              }
          },
          error: function () {
              mizhu.toast('网络错误');
          }
      });
}
//登录检查
function checkUser(action) {
    switch (action){
        case 'index':
            if (!judgement()) {
               mizhu.toast('为保证信息安全，请登录后操作!',2000);
               window.setTimeout("window.location='/'",2000);
            }else{
                return judgement();
            }
        break;
        case 'home':
            if (judgement()) {
                 mizhu.toast('社员已登录!即将前往主页',2000);
                window.setTimeout("window.location='/home.html'",2000);
            }
        break;
    }
}
function judgement() {
    if (typeof($.session.get('uname')) == "undefined"){
            var sessionType = false;
        }else {
            return true;
        }
    if (typeof($.cookie('uname')) == "undefined"  || $.cookie('uname')=='undefined') {
            var cookieType = false;
        } else {
            return true;
        }
    if(sessionType || cookieType){
        return true;
    }
}

//登录控制
function checkform(obj) {
    var username = obj.username;
    var password = obj.password;
    var keepalive = obj.keepalive;
    if (username.length == 0) {
        mizhu.toast('用户名不能为空！', 2000);
        return false;
    }
    if (password.length == 0) {
        mizhu.toast('密码不能为空！', 2000);
        return false;
    }
    if (keepalive == 'true') {
         keepalive= '1';
    } else {
         keepalive = '0';
    }
    var loginArr = [username,password,keepalive ];
    return loginArr;
}
function charge(obj) {
    switch(obj.val()){
        case 'true':
            obj.attr('value','false');
            break;
        case 'false':
            obj.attr('value','true');
            break;
    }
}