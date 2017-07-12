			<h1>Add User</h1>
			<div class="row">
				<div class="col-sm-3 listusers">
					
					<div class="input-group search">
						<input type="text" class="form-control" placeholder="Search for name" ng-change="searchInput()" ng-model="input">
						<span class="input-group-btn">
							<button ng-click="search()" class="btn btn-info" type="button"><span class="fa fa-search"></span></button>
						</span>
					</div>
					
					<table class="table table-striped table-hover scroll">
						<thead>
							<tr>
								<th width="40%"><input id="all" type="checkbox" ng-checked="all" ng-model="checkAll" ng-click="checkedAll()"> <label for="all">All</label></th>
								<th width="60%">Name</th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="x in users | filter : {name: ''+y} | orderBy : 'name'">
								<td width="40%"><input id={{x.id}} type="checkbox" ng-checked="checkAll" ng-model="x.checked" ng-click="clickusers(x)"></td>
								<td width="60%"><label for="{{x.id}}">{{x.name}}</label></td>
							</tr>
						</tbody>
					</table>
					
					<button ng-click="addusers()" class="btn btn-info btn-md addusers">Add to User List</button>
				</div>
				
				<div class="col-sm-9 addusers-table">
					<h2>Scenarino Name</h2>
					<h3>Users list</h3>
					<!-- <div class="addusers-table"> -->
					<table class="table table-striped table-hover scroll">
						<thead>
							<tr>
								<th width="40%">ID <button class="btn btn-link btn-xs" ng-init="vec='id'" ng-click="sortid()"><span class="fa fa-sort"></span></button></th>
								<th width="15%">Name <button ng-init="vec='name'" ng-click="sortname()" class="btn btn-link btn-xs"><span class="fa fa-sort"></span></button></th>
								<th width="10%">Age <button ng-init="vec='age'" ng-click="sortage()" class="btn btn-link btn-xs"><span class="fa fa-sort"></span></button></th>
								<th width="30%">Email <button ng-init="vec='email'" ng-click="sortemail()" class="btn btn-link btn-xs"><span class="fa fa-sort"></span></button></th>
								<th width="5%"></th>
							</tr>
						</thead>
						<tr ng-repeat="x in listusers | orderBy : fil">
							<td class="id" width="40%">{{x.id}}</td>
							<td width="15%">{{x.name}}</td>
							<td width="10%">{{x.age}}</td>
							<td class="email" width="30%">{{x.email}}</td>
							<td width="5%">
								<button data-toggle="modal" ng-click="requestundo(x)" data-target="#undoModal" type="submit" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</td>
							
						</tr>
					</table>
					<!-- </div> -->
				</div>
			</div>
			<div class="modal fade" id="undoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content">
			      <div class="modal-header modal-header-danger">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Delete User</h4>
			      </div>
			      <div class="modal-body">
			       	Do you want to delete this User?
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="undo()">Delete</button>
			      </div>
			    </div>
			  </div>
			</div>

			<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="modal-content">
			      <div class="modal-header modal-header-danger">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel">Alert</h4>
			      </div>
			      <div class="modal-body">
			       	No User Selected!
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
			      </div>
			    </div>
			  </div>
			</div>