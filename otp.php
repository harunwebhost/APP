<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/mystyle.css" rel="stylesheet">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				
				<div class="panel-heading">	<div class="alert-success text-center">
					<?php if(isset($_GET['message'])){echo $message=$_GET['message'];}?></div></div>
				
				<div class="panel-body">
					<form role="form" id="formID" method="POST" action="comman/otp_verify.php">
						<fieldset>
		<div class="form-group">
			<input class="form-control" name="otp"  autofocus="" id="username">
		</div>
	
			<input type="submit"  class="btn btn-primary"  id="submit">
			</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	<script src="js/jquery-1.11.1.min.js"></script>
	
	<?php require_once('comman/val.php');?>	
	
	<?php require_once('webtemplate/disable.php'); ?>
		

	
