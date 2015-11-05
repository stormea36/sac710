'use strict';

var productApp = angular.module('productApp', ['ngAnimate','ngSanitize'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
