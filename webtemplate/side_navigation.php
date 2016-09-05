	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
				<?php
				 $user_type=$_SESSION['login_userntype'];
					if($user_type=="master"){
						require_once('master_menu.php');
					}
					
				 ?>
	
		</ul>

	</div><!--/.sidebar-->
		