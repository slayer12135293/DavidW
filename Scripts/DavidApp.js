'use strict'

var DavidSite = angular.module('DavidSite', ['ngResource','ngRoute']);



DavidSite.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $routeProvider.when('/', {
        templateUrl: 'Views/Index.html',
        controller: 'IndexController',
        reloadOnSearch: false
    }).when('/Book', {
        templateUrl: 'Views/SendMail.html',
        controller: 'SendMailController',
        reloadOnSearch: false
    }).otherwise({
        redirectTo: '/',
        reloadOnSearch: false
    });
    //$locationProvider.html5Mode(true);
}]);