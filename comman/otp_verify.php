<?php 
session_start();
require_once('db_function.php');
$login_id=$_SESSION['loggin_id'];
$otp=sql_injection($_POST['otp']); 
$sql="SELECT * FROM app_authonticate WHERE login_id='$login_id' 
and uniqid='$otp' AND status='1'";
$result=execute_sql_query($sql);
$count=sql_fetch_num_rows($result);
if($count==1){
	update_otp($login_id);
	$_SESSION['login_history_id']=track_login();
	page_redirection('../master/','Logged In');
}
else {
	update_otp($login_id);
page_redirection("../index.php","Invalid OPT Please Login Again");
}



?>