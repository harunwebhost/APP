<?php require_once('../webtemplate/headtags.php'); ?>
<?php require_once('../webtemplate/header_nav.php'); ?>
<?php require_once('../webtemplate/side_navigation.php'); ?>  
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			
		</div><!--/.row-->
				
				<?php 

				if(isset($_POST['update']) && !empty($_POST['update'])){
								$keys="";
								$values="";	
							$update_key=$_POST['lead_id']; 
							$primary_key='lead_id';
							$message="Record is updated";
							  foreach($_POST['field'] as $x=>$x_value)
							  {
							  $keys= $x;
							  $filter_data=sql_injection($x_value);
							  $values.=$keys."="."'$filter_data',";
							}
						$values=rtrim($values,',');
						$sql = "update app_leads SET $values WHERE  $primary_key=$update_key";
						execute_sql_query($sql);
						page_redirection("edit_lead.php?edit_lead=$update_key&","Row Is updated");
					}

					/*get page header*/
					if(isset($_GET['edit_lead'])){
							 $edit_lead=sql_injection($_GET['edit_lead']);
							$get_old="SELECT * FROM app_leads WHERE lead_id='$edit_lead'";
							$excute_old=execute_sql_query($get_old);
							$olddata=execute_fetch($excute_old);
					}

					
					
				 ?>

		
				<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Lead Information</div>
					<div class="panel-body">
						
			<form role="form" action="#" method="POST">

			<input type="hidden" name="lead_id" value="<?php echo check_isset($olddata['lead_id']);?>">
				<div class="col-md-12">
					<div class="col-md-4">
					<div class="form-group">
					<label>Name</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['lead_name']);?>" name="field[lead_name]">
					</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					<label>Email</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['lead_email']);?>"  name="field[lead_email]">
					</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					<label>Mobile</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['lead_mobile']);?>"  name="field[lead_mobile]">
					</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="col-md-4">
					<div class="form-group">
					<label>Address</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['lead_address']);?>"  name="field[lead_address]">
					</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					<label>Source</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['lead_name']);?>"  name="field[lead_name]">
					</div>
					</div>
					<div class="col-md-4">
						
						<div class="form-group">
									<label>Distric</label>
									<select class="form-control" name="field[district_name]" id="district_name">
										<?php distric_list(check_isset($olddata['district_name'])); ?>
									</select>
								</div>

					</div>
				</div>

				<div class="col-md-12">
					<div class="col-md-4">
				<div class="form-group">
									<label>Selects</label>
									<select class="form-control" name="field[assembly_name]" id="assembly_name">
											<option value="">Select State</option>
									</select>
								</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					<label>Ward or zip</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['ward_or_zp_name']);?>"  name="field[ward_or_zp_name]">
					</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					<label>Polling Booth No</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['polling_booth_no']);?>"  name="field[polling_booth_no]">
					</div>
					</div>
				</div>	

					<div class="col-md-12">
					<div class="col-md-4">
					
					<div class="form-group">
									<label>Selects</label>
									<select class="form-control" name="field[campaign_group_name]">
										<?php campaings(check_isset($olddata['campaign_group_name'])); ?>
									</select>
								</div>
					

					</div>
					<div class="col-md-4">
						<div class="form-group">
					<label>Voter ID</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['voter_id']);?>"  name="field[voter_id]">
					</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
					<label>Response</label>
					<input class="form-control" placeholder="Placeholder"
					 value="<?php echo check_isset($olddata['notepad']);?>"  name="field[notepad]">
					</div>
					</div>
				</div>	
				<div class="form-group">
							<input type="submit" class="btn btn-primary" value="update" name="update">
							</div>
				</form>
			</div>
				</div>
			</div><!-- /.col-->
		</div>

	</div><!--/.main-->

	<?php require_once('../webtemplate/footer.php'); ?> 
	<script type="text/javascript">
			$(document).ready(function(){
				$("#district_name").change(function(){
					district_id=$("#district_name").val();
					
					$.ajax({
						type	: 	'POST',
						data 	: 	'district_id='+district_id,
						url		: 	'get_assamlydetails.php',
						success :	function(data){
							$("#assembly_name").html(data);
						}	
					});
				});
			});

	</script>
</body>

</html>
