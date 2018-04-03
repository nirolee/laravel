<!DOCTYPE html>
<html lang="zh" >
    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/node_modules/normalize-css/normalize.css"/>
        <script src="/node_modules/angular/angular.js"></script>
        <script src="/node_modules/angular-ui-router/release/angular-ui-router.js"></script>
        <script src="/node_modules/jquery/dist/jquery.js"></script>
        <script src="/js/base.js"></script>
        <link rel="stylesheet" href="/css/base.css"/>
    </head>
    <body ng-app="niro">
        <div class="navbar clearfix">
            <div class="fl">
                <div class="navbar-item brand">zhihu</div>
                <div class="navbar-item">
                    <input type="text">
                </div>
            </div>
            <div class="fr">
                <a ui-sref="home" class="navbar-item">首页</a>
                <a ui-sref="register" class="navbar-item">注册</a>
                <a ui-sref="login" class="navbar-item">登录</a>
            </div>
        </div>  
           <script type="text/ng-template" id="login.tpl">
          <h1>login</h1>
        </script>
        <script type="text/ng-template" id="register.tpl">
            <label></label>
        </script>
        <script type="text/ng-template" id="home.tpl">
          <h1>home</h1>
        </script>
        <div ui-view>
     
        </div>
    </body>
</html>
