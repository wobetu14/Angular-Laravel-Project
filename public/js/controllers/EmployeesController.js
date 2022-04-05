var app=angular.module('empModule',[]);

app.controller('empController',['$scope','$http',function ($scope,$http) {
     $scope.btnName='Create Employee';
     $scope.data=null;
    $scope.insert=function () {
        var empData={'emp_id':$scope.emp_id,
            'firstname':$scope.firstname,
            'lastname':$scope.lastname,
            'education':$scope.education,
            'position':$scope.position,
            'salary':$scope.salary,
            'contact_number':$scope.contact_number};

            $http({
            url:'http://localhost:8000/api/v1/employee',
            method:'post',
            data:empData,
        }).then(
            function (response) {
               $scope.data=response.data;
               // alert($scope.datas);
            },
            function (failureResponse) {
                alert(failureResponse);
           });
    }
}]);