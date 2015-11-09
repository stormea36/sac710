'use strict';

var productApp = angular.module('productApp', ['ngAnimate','ngSanitize'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

productApp.directive('tooltip', function(){
    return {
        restrict: 'A',
        link: function(scope, element, attrs){
            $(element).hover(function(){
                // on mouseenter
                $(element).tooltip('show');
            }, function(){
                // on mouseleave
                $(element).tooltip('hide');
            });
        }
    };
});

$(document).ready(function() {
    console.log('ready');
    $("#cartBtn").click(function() {
    $('html, body').animate({
        scrollTop: $("#cartSection").offset().top
        }, 2000);
    });
});
