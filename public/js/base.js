;
(function(){
   'use strict';
   
    angular.module('niro', [])
    .config(function($interpolateProvider){
        $interpolateProvider.startSymbol('[:');
        $interpolateProvider.endSymbol(':]');
    })
    .controller('TestController', function($scope){
        $scope.name = "niro";
    })
})();


