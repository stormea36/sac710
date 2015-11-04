/**
 * Created by admin on 10/28/15.
 */

productApp.controller('ProductController',
function ProductController($scope, $http) {
   $scope.info = {
       name: 'Sierra Patient Network',
       times: [
           {
               'Monday': '9am - 8pm',
               'Tuesday': '9am - 8pm',
               'Wednesday': '9am - 8pm',
               'Thursday': '9am - 8pm',
               'Friday': '9am - 8pm',
               'Saturday': '9am - 8pm',
               'Sunday': '9am - 8pm'
           }
       ]
   }
    $http.get( "inventory.json").success(function(data) {
        $scope.items = data;
    }).error(function () {
        console.log('error loading data');
    })

});


