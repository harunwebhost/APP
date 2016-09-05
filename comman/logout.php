<?php 
require_once('db_function.php');
session_start();
$login_history_id=$_SESSION['login_history_id'];
$current_datetime=current_data_time();
$distory="Update app_logins_history set logged_out_time='$current_datetime' Where login_history_id='$login_history_id'";
execute_sql_query($distory);
session_destroy();
page_redirection("../index.php","Logged Out Successful");



?>