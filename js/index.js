var app = angular.module("myApp", []);
	app.controller("myCtrl", function($scope, $http) {
		$scope.temp = [];
		$http.get("users.json").then(function(response) {
			$scope.users = response.data.users;
		});
	    $scope.listusers = [];
	    $scope.searchInput = function(){
	    	if (!$scope.input) {
	    		$scope.y = "";
	    	}
	    }
	    $scope.search= function(){
	    	$scope.y = $scope.input;
	    }
	    $scope.clickusers = function(x){
   			if (x.checked == true) {
   				$scope.temp.push({id: x.id,name: x.name, age: x.age, email: x.email});
   				if ($scope.temp.length == $scope.users.length) {
   					$scope.checkAll = true;
   					$scope.all = true;
   				}
   			}else{                            
   				var i=0;                            
   				while(i < $scope.temp.length){                                
   					if($scope.temp[i].id == x.id){                                    
   						$scope.temp.splice(i, 1);                                
   					}                                
   					i ++;                            
   				}
   				if ($scope.temp.length < $scope.users.length) {
   					$scope.all = false;
   				}                       
   			}
	    }
	    $scope.checkedAll = function(){
	    	if ($scope.users.length != 0 && $scope.checkAll == true) {
	    		$scope.temp = angular.copy($scope.users);
	    	}else{
	    		$scope.temp = [];
	    	}
	    }
	    $scope.addusers = function(){
	    	if ($scope.temp.length != 0) {
	    		$scope.listusers = $scope.listusers.concat($scope.temp);
		    	for (var i = 0; i < $scope.temp.length; i++) {
		    		for (var j = 0; j < $scope.users.length; j++) {
		    			if ($scope.users[j].id == $scope.temp[i].id) {
		    				$scope.users.splice(j,1);
		    			}			
		    		}
		    	}
		    	$scope.temp.splice(0,$scope.temp.length);
		    	$scope.checkAll = false;
	    	}else{
	    		alert("No User Selected!");
	    	}
	    }
	    $scope.undo = function(x){
	    	var confirm = window.confirm("Are you want delete this User?");
	    	if (confirm) {
	    		$scope.users.push({id: x.id,name: x.name, age: x.age, email: x.email});
		    	for (var j = 0; j < $scope.listusers.length; j++) {
		    		if ($scope.listusers[j].id == x.id) {
		    			$scope.listusers.splice(j,1);
		    		}			
		    	}
	    	}
	    }
	    $scope.sortid = function(){
	    	$scope.fil = $scope.vec;
	    	if($scope.vec == "id"){
	    		$scope.vec = "-id";
	    	}else{
	    		$scope.vec = "id";
	    	}
	    }
	    $scope.sortname = function(){
	    	$scope.fil = $scope.vec;
	    	if($scope.vec == "name"){
	    		$scope.vec = "-name";
	    	}else{
	    		$scope.vec = "name";
	    	}
	    }
	    $scope.sortage = function(){
	    	$scope.fil = $scope.vec;
	    	if($scope.vec == "age"){
	    		$scope.vec = "-age";
	    	}else{
	    		$scope.vec = "age";
	    	}
	    }
	    $scope.sortemail = function(){
	    	$scope.fil = $scope.vec;
	    	if($scope.vec == "email"){
	    		$scope.vec = "-email";
	    	}else{
	    		$scope.vec = "email";
	    	}
	    }
	});