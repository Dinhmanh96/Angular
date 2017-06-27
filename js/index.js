<script>
		var app = angular.module("myApp", []);
		app.controller("myCtrl", function($scope) {
			$scope.temp = [];
		    $scope.users = [
		    	{id: '1', name: 'user 1'},
		    	{id: '2', name: 'user 2'},
		    	{id: '3', name: 'user 3'},
		    	{id: '4', name: 'user 4'},
		    	{id: '5', name: 'user 5'},
		    	{id: '6', name: 'user 6'},
		    	{id: '7', name: 'user 7'},
		    	{id: '8', name: 'user 8'},
		    	{id: '9', name: 'user 9'},
		    	{id: '10', name: 'user 10'},
		    	{id: '11', name: 'user 11'},
		    	{id: '12', name: 'user 12'},
		    ];
		    $scope.listusers = [
		    ];
		    $scope.search= function(){
		    	$scope.y = $scope.input;
		    }

		    $scope.clickusers = function(x){
		    		
		   			if (x.checked == true) {
		   				$scope.temp.push({id: x.id,name: x.name});
		   			}else{                            
		   				var i=0;                            
		   				while(i < $scope.temp.length){                                
		   					if($scope.temp[i].name==x.name){                                    
		   						$scope.temp.splice(i, 1);                                
		   					}                                
		   					i ++;                            
		   				}                        
		   			}
		    }
		    $scope.addusers = function(){
		    	$scope.listusers = $scope.listusers.concat($scope.temp);

		    	for (var i = 0; i < $scope.temp.length; i++) {
		    		for (var j = 0; j < $scope.users.length; j++) {
		    			if ($scope.users[j].id == $scope.temp[i].id) {
		    				$scope.users.splice(j,1);
		    			}			
		    		}
		    	}
		    	$scope.temp.splice(0,$scope.temp.length);
		    }
		    $scope.undo = function(x){
		    	$scope.users.push({id: x.id,name: x.name})
		    	for (var j = 0; j < $scope.listusers.length; j++) {
		    			if ($scope.listusers[j].id == x.id) {
		    				$scope.listusers.splice(j,1);

		    			}			
		    		}
		    }
		});
	</script>