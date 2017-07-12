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
		
			<nav class="navbar">
				<div class="container-fluid header">
					<div class="navbar-header">
				    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
				      	</button>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li><a href="/"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Home</a></li>
				        <li><a href="#!listusers"><i style="font-size: 28px;" class="fa fa-vcard fa-2x" aria-hidden="true"></i> List User</a></li>
				      </ul>
				    </div>
				</div>
			</nav>
		<div class="container main">
			<div style="padding-top: 30px;" ng-view></div>
		</div>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>