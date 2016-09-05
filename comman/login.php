<?php
session_start();
require_once('db_function.php');
$myusername=sql_injection($_POST['username']); 

$mypassword=sql_injection($_POST['password']); 

$sql="SELECT * FROM app_authonticate WHERE user_email='$myusername' and user_password='$mypassword' AND status='1'";
$result=execute_sql_query($sql);
$count=sql_fetch_num_rows($result);
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"get
$get_login_detais=execute_fetch($result);
$login_username=$get_login_detais['user_email'];
$login_userntype=$get_login_detais['user_type'];
$_SESSION['login_username']=$login_username;
$_SESSION['login_userntype']=$login_userntype;
$_SESSION['login_email']=$_POST['username'];
$_SESSION['loggin_id']=$get_login_detais['login_id'];
$string = $myusername.'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$string_shuffled = str_shuffle($string);
$otp = substr($string_shuffled, 1, 7);
$sql="UPDATE   app_authonticate SET  uniqid='$otp' 
WHERE login_id='".$get_login_detais['login_id']."'";
$result=execute_sql_query($sql);
page_redirection("../otp.php","Enter OPT Password");
}

else {
page_redirection("../index.php","Invalid User Name Password");
}
?>