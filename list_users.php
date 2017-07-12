
<div class="col-md-12">
<h2 style="padding-bottom: 30px;">List Users</h2>
	<div class="col-md-6 search-list">
		<div class="input-group" style="width: 70%">
						<input  type="text" class="form-control input-search" placeholder="Search for name" ng-change="searchInput()" ng-model="input">
						<span class="input-group-btn">
							<button ng-click="search()" class="btn btn-info" type="button"><span class="fa fa-search"></span></button>
						</span>
					</div>
	</div>
	<div class="col-md-6">
		<button class="btn btn-success btn-add" data-toggle="modal" data-target="#addModal">Add user</button>
	</div>
	
	<table class="table table-striped table-hover scroll">
		<thead>
			<tr>
				<th width="30%">ID <button class="btn btn-link btn-xs" ng-init="vec='id'" ng-click="sortid()"><span class="fa fa-sort"></span></button></th>
				<th width="21%">Name <button ng-init="vec='name'" ng-click="sortname()" class="btn btn-link btn-xs"><span class="fa fa-sort"></span></button></th>
				<th width="15%">Age <button ng-init="vec='age'" ng-click="sortage()" class="btn btn-link btn-xs"><span class="fa fa-sort"></span></button></th>
				<th width="20%">Email <button ng-init="vec='email'" ng-click="sortemail()" class="btn btn-link btn-xs"><span class="fa fa-sort"></span></button></th>
				<th width="7%">Edit</th>
				<th width="7%">Delete</th>
			</tr>
		</thead>
		<tbody>
			<tr ng-repeat="x in users | filter : {name: ''+y} | orderBy : fil">
				<td class="id" width="30%">{{x.id}}</td>
				<td width="21%">{{x.name}}</td>
				<td width="15%">{{x.age}}</td>
				<td class="email" width="20%">{{x.email}}</td>
				<td width="7%">
						<button class="btn btn-info" ng-click="requestupdate(x)" data-toggle="modal" data-target="#updateModal">
							<span class="glyphicon glyphicon-edit"></span>
						</button>
				</td>
				<td width="7%">
					<button class="btn btn-danger" ng-click="requestdelete(x)" data-toggle="modal" data-target="#deleteModal">
						<span class="glyphicon glyphicon-trash"></span>
					</button>
				</td>
			</tr>
		</tbody>
	</table>

	<!-- Modal -->
	<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header modal-header-info">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Edit User</h4>
	      </div>
	      <div class="modal-body">
	        <form class="table table-responsive" method="post" ng-submit="saveupdate()" >

	        	<div class="input-group update">
	        		<span class="input-group-addon span-info">
						ID
					</span>
					<input type="text" class="form-control input-update" name="name" required placeholder="ID" ng-model="id_edit" readonly>
					
				</div>

				<div class="input-group update">
	        		<span class="input-group-addon span-info">
						Name
					</span>
					<input type="text" class="form-control input-update" name="name" required placeholder="Full name" ng-model="name_edit">
					
				</div>

				<div class="input-group update">
	        		<span class="input-group-addon span-info">
						Age
					</span>
					<input type="text" class="form-control input-update" name="age" required placeholder="Age" ng-model="age_edit">
					
				</div>

				<div class="input-group update">
	        		<span class="input-group-addon span-info">
						Email
					</span>
					<input type="text" class="form-control input-update" name="email" required placeholder="Email" ng-model="email_edit">
				</div>
				<hr>
				<button type="submit" class="btn btn-info updatesave">Save changes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header modal-header-success">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Add User</h4>
	      </div>
	      <div class="modal-body">
	        <form class="table table-responsive" method="post" ng-submit="saveadd(); $hide()">

	        	<div class="input-group add">
	        		<span class="input-group-addon span-success">
						ID
					</span>
					<input type="text" class="form-control input-add" name="name" required ng-model="id_add">
				</div>

				<div class="input-group add">
	        		<span class="input-group-addon span-success">
						Name
					</span>
					<input type="text" class="form-control input-add" name="name" required ng-model="name_add">
				</div>

				<div class="input-group add">
	        		<span class="input-group-addon span-success">
						Age
					</span>
					<input type="text" class="form-control input-add" name="age" required ng-model="age_add">
				</div>

				<div class="input-group add">
	        		<span class="input-group-addon span-success">
						Email
					</span>
					<input type="text" class="form-control input-add" name="email" required ng-model="email_add">
				</div>
				<hr>
				<button type="submit" class="btn btn-success addsave">Save changes</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</form>
	      </div>
	      
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header modal-header-danger">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Delete User</h4>
	      </div>
	      <div class="modal-body">
	       	Are you want delete this User?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="delete()">Delete</button>
	      </div>
	    </div>
	  </div>
	</div>
</div>