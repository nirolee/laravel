<!DOCTYPE html>
<html lang="zh" ng-app="niro">
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
    <body>
        <div class="navbar">
            <div class="fl">
                <div class="navbar-item">item1</div>
                <div class="navbar-item">item2</div>
            </div>
            <div class="fr">
                <div class="navbar-item">item1</div>
                <div class="navbar-item">item2</div>
                <div class="navbar-item">item3</div>
            </div>
        </div>  
           <script type="text/ng-template" id="login.tpl">
          <h1>login</h1>
        </script>
        <script type="text/ng-template" id="home.tpl">
          <h1>home</h1>
        </script>
        <div ui-view>
     
        </div>
    </body>
</html>
