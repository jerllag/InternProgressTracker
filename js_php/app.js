var app = angular.module("InProgTrack",['ngRoute','ui.bootstrap', 'ngCookies', 'angularFileUpload', 'ng-context-menu']);

app.controller("LogInController", function($http, $scope, $modal, $log, $location, $cookieStore, $anchorScroll) {
	$cookieStore.put('hasUser', false);
	$scope.loginData = {};
	
	this.login = function() {		
		$http({
		method: 'GET',
		url: 'js_php/server.php',
		params: {email: $scope.loginData.email, pass: $scope.loginData.pass}
		})
		.success(function(data) {
			/*$cookieStore.put('usernum', data[0][0]);
			$cookieStore.put('name', data[0][1]);
			$cookieStore.put('email', data[0][2]);
			$cookieStore.put('password', data[0][3]);
			$cookieStore.put('hasUser', true);
			$cookieStore.put('location', 'Home');
			$cookieStore.put('sortBy', 'filename');
			$cookieStore.put('sort', 'asc');
			$location.path("/home");*/
			
		})
		.error(function() {
			alert("error");
		})
		;
	};
	
	$scope.scrollTo = function(id) {
      $location.hash(id);
      $anchorScroll();
   }
});

app.config(function($routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: 'html/login.html'
    })
    .when('/home', {
      templateUrl: 'html/leaderbord.html'
    })
	.when('/home/account', {
      templateUrl: 'html/account.html'
    })
	.otherwise ({
		redirectTo: '/'
	});
});