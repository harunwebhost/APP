

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create New User</h4>
      </div>
      <div class="modal-body">

			<form role="form" action="insert_opration.php" method="POST">
				<input type="hidden" name="table_name" value="district_users">
				<div class="col-md-12">
					<div class="col-md-6">
					<div class="form-group">
					<label>Name</label>
					<input class="form-control" placeholder="Name" name="field[district_name]" required="">
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
					<label>Email</label>
					<input class="form-control" placeholder="Email"  name="field[district_user_iemail]" required="">
					</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="col-md-6">
					<div class="form-group">
					<label>Mobile</label>
					<input class="form-control" placeholder="Mobile" name="field[district_user_mobile]" required="">
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
					<label>City</label>
					<input class="form-control" placeholder="City"  name="field[district_user_city]" required="">
					</div>
					</div>
				</div>
						
						<div class="col-md-10 col-md-offset-4">
						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Create" name="Create">
							</div>
								</form>
							</div>
								
				</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>