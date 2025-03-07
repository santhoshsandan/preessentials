var app = angular.module("myApp", []);
app.controller("myCtrl", function($scope,$http) {
    $http.get("js/data.json").then(
        function (response) {
            $scope.product = response.data;
            //$scope.car_title_list = $scope.cars_list.title;
        });

      });
