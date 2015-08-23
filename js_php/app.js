var app = angular.module("InProgTrack",['ui.router','ui.bootstrap', 'ngCookies', 'angularFileUpload', 'ng-context-menu']);

app.controller("LogInController", function($http, $scope, $location, $cookieStore, $state) {
	$cookieStore.put('hasUser', false);
	$scope.loginData = {};
	
	$scope.login = function() {
		$http({
		method: 'GET',
		url: 'js_php/studentCRU.php',
		params: {studno: $scope.loginData.studno, password: $scope.loginData.password}
		})
		.success(function(data) {
			$cookieStore.put('studno', data[0][0]);
			$cookieStore.put('fname', data[0][1]);
			$cookieStore.put('lname', data[0][2]);
			$cookieStore.put('email', data[0][3]);
			$cookieStore.put('password', data[0][4]);
			$cookieStore.put('hasUser', true);
			$state.go("navbarlogin.leaderboard");
			
		})
		.error(function() {
			alert("error");
		})
		;
	};
});

app.controller("SignUpController", function($http, $scope, $location, $cookieStore, $anchorScroll) {
	$scope.info = {};
	
	$scope.studSignUp = function () {
		
		$http.post('js_php/studentCRU.php', {studno: $scope.info.studno, fname: $scope.info.fname, lname: $scope.info.lname, course: $scope.info.course,
											 college: $scope.info.college, contactno: $scope.info.contactno, email: $scope.info.email, password: $scope.info.password,
											 compname: $scope.info.compname, startdate: "2015-01-01", enddate: "2015-01-02", hoursrequired: $scope.info.hoursrequired,
											 compadd: $scope.info.compadd, deptass: $scope.info.deptass, conperson: $scope.info.conperson,
											 cpcontactno: $scope.info.cpcontactno, cpemail: $scope.info.cpemail})
			.success(function(data) {
				alert("Sign up successful");
			})
			.error(function(data) {
				alert(data);
			});
	};
	
	$scope.scrollTo = function(id) {
      $location.hash(id);
      $anchorScroll();
	};
});

app.controller("ProfileController", function($http, $scope, $cookieStore) {
	$scope.profileData = {};

	$http({
		method: 'GET',
		url: 'js_php/studentProfileRU.php',
		params: {studno: $cookieStore.get('studno')}
		})
		.success(function(data) {
			$scope.profileData.fname = data[0][1];
			$scope.profileData.lname = data[0][2];
			$scope.profileData.course = data[0][3];
			$scope.profileData.college = data[0][4];
			$scope.profileData.contactno = data[0][5];
			$scope.profileData.email = data[0][6];
			$scope.profileData.startdate = data[0][9];
			$scope.profileData.enddate = data[0][10];
			$scope.profileData.hoursrequired = data[0][11];
			$scope.profileData.compname = data[0][12];
			$scope.profileData.compadd = data[0][13];
			$scope.profileData.deptass = data[0][14];
			$scope.profileData.conperson = data[0][15];
			$scope.profileData.cpcontactno = data[0][16];
			$scope.profileData.cpemail = data[0][17];
		})
		.error(function() {
			alert("error");
		})
		;
});

app.config(function($stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise("/login");

	$stateProvider
		.state('navbar', {
			abstract: true,
			url: "",
			templateUrl: "html/navbar.html"
		})
		.state('navbar.login', {
			url: "/login",
			templateUrl: "html/login.html"
		})
		.state('navbar.signup', {
			url: "/signup",
			templateUrl: "html/signup.html"
		})
		.state('navbarlogin', {
			url: "/logined",
			templateUrl: "html/navbarlogin.html"
		})
		.state('navbarlogin.leaderboard', {
			url: "/leaderboard",
			templateUrl: "html/leaderboard.html"
		})
		.state('navbarlogin.profile', {
			url: "/profile",
			templateUrl: "html/studentProfile.html"
		})
		.state('navbarlogin.accomReport', {
			url: "/accomReport",
			templateUrl: "html/accomReport.html"
		});
});

app.controller("navbarController", function($location, $cookieStore, $scope, $anchorScroll, $state) {
	$scope.signOut = function() {
		$cookieStore.remove('studno');
		$cookieStore.remove('fname');
		$cookieStore.remove('lname');
		$cookieStore.remove('email');
		$cookieStore.remove('password');
		$cookieStore.put('hasUser', false);
		$state.go("navbar.login");
	};
	
	$scope.scrollTo = function(id) {
      $location.hash(id);
      $anchorScroll();
	};
});