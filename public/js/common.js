function getSession() {
  if($.session.get('uname')=='null' || $.session.get('uname')=='undefined') {
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
}
function checkUser(action) {
    switch (action){
        case 'index':
            if (!judgement()) {
               mizhu.toast('为保证信息安全，请登录后操作!',2000);
               window.setTimeout("'/'",2000);
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
    if ($.session.get('uname') == "undefined" || $.session.get('uname') == 'null') {
        if ($.cookie('uname') == "undefined" && $.cookie('uname') == "null") {
            return false;
        }else {
            return true;
        }
    }else{
        return true;
    }
}