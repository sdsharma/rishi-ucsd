var myApp = angular.module('myApp', []);
function Main($scope, $http){
  
  $http.get('./team.me').success(function(data) {
    $scope.users = data.results;
    $('#loader').hide();
    $('#userList').show();
  }).error(function(data, status) {
    alert('get data error!');
  });
  
  $scope.showUserModal = function(idx){
    var user = $scope.users[idx].user;
    $scope.currUser = user;
    $('#myModalLabel').text(user.name.first
         + ' ' + user.name.last);
    $('#myModal').modal('show');
  }
 
}    


//$(document).ready(function() {});
