/**
 * Created by admin on 10/28/15.
 */
$(document).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

})
productApp.controller('ProductController',
    function ProductController($scope, $http, RefreshData) {
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
        $http.get( "/inventory.json").success(function(data) {
            $scope.items = data;
        }).error(function () {
            console.log('error loading data');
        })
        $scope.test = RefreshData.getInventory();
        $scope.newProduct = {
            "name" : "",
            "description" : "",
            "type": "",
            "active" : "",
            "price":""

        }
        $scope.priceFormat = 1;
        $scope.switchPrice = function() {
            $scope.priceFormat === 1? $scope.priceFormat=2:$scope.priceFormat=1;
        }
        $scope.priceValue = [
            {
                "value":""
            },
            {
                "gram": "",
                "eighth": "",
                "quarter": "",
                "half": "",
                "oz": ""
            }
        ];
        var base_url = "http://sierrapn:8888";
        $scope.save = function() {
            if($scope.priceFormat === 1) {
                $scope.newProduct.price = $scope.priceValue[0].value;
            }
            else if ($scope.priceFormat === 2) {
                $scope.newProduct.price = $scope.priceValue[1];
            }
            $http.post(base_url+'/ajax/save', $scope.newProduct).then(function() {
                console.log('was able to post to jsonReader');
            })
        }

    });


