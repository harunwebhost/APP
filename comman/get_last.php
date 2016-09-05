<?php 
require_once('db_function.php');
function track_login(){
	$connection = mysqli_connect('localhost', 'root', '');
	if (!$connection) {
    die("Connection failed: " . mysql_error());
	}else{
  	mysqli_select_db($connection,'app');
 		} 
	$ip=get_user_ip_address();
	$current_time=current_data_time();
	if($_SERVER['REQUEST_URI']=="logout.php"){
	}
	else{
	$sql_track="INSERT INTO app_logins_history (logged_ip,logged_time)
	VALUES ('$ip','$current_time')";
	mysqli_query($connection,$sql_track);
	echo $track_id=mysqli_insert_id($connection); 	
	}
}

track_login();
 ?>