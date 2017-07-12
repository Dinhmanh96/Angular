<!DOCTYPE html>
<html>
	<head>
		<title>MyApp</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<script type="text/javascript" src="js/angular.min.js"></script>
		<script src="js/bower-angular-route-master/angular-route.js"></script>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<base href="/"></base>
		<!-- <script type="text/javascript" src="users.json"></script> -->
		
	</head>
	<body ng-app="myApp">
		<div class="container main">
			<a href="/">Home</a>
			<a href="#!listusers">List Users</a>
			<div ng-view></div>
		</div>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>