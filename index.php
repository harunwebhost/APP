<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/mystyle.css" rel="stylesheet">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
					<div class="alert-warning text-center">
					<?php if(isset($_GET['message'])){echo $message=$_GET['message'];}?></div>
				<div class="panel-body">
					<form role="form" id="formID" method="POST" action="comman/login.php">
						<fieldset>
		<div class="form-group">
			<input class="form-control" name="username"  autofocus="" id="username">
		</div>
		<div class="form-group" id="password">
				<input class="form-control" name="password" placeholder="Password" name="password" type="password" value="">
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
		

	
