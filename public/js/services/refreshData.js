/**
 * Created by admin on 11/5/15.
 */
productApp.factory('RefreshData', function($http) {
    var RefreshData = {};

    RefreshData.getInventory = function() {
        this.result = {};
        $http.get( "/inventory.json").success(function(data) {
            this.result = data;
        }).error(function () {
            console.log('error loading data');
        })
        return this.result;
    }
    RefreshData.checkInventory = function(val) {
        this.check = false;
        this.result = {};

        //@TODO add logic for searching through the name values to compare to the 'val' given

        $http.get( "/inventory.json").success(function(data) {
            this.result = data;

        }).error(function () {
            console.log('error loading data');
        })
    }

    return RefreshData;
});