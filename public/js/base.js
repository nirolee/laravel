;
(function(){
   'use strict';
    angular.module('niro', ['ui.router'])
    .config(function($interpolateProvider,
                     $stateProvider,
                     $urlRouterProvider){
        $interpolateProvider.startSymbol('[:');
        $interpolateProvider.endSymbol(':]');
        $urlRouterProvider.otherwise('/home');
        $stateProvider
            .state('home',{
            url: '/home',
            templateUrl: 'home.tpl'
        })
            .state('login',{
            url: '/login',
            templateUrl: 'login.tpl'
        })
    })
//    .controller('TestController', function($scope){
//        $scope.name = "niro";
//    })

})();


