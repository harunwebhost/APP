<?php 
require_once('../comman/db_function.php');
	$keys="";
  $values="";

$table=sql_injection($_POST['table_name']);
$message="Record is Inserted";
  foreach($_POST['field'] as $x=>$x_value)
  {
  $keys .= $x.',';
  $filter_data=sql_injection($x_value);
  $values.='"'.$filter_data.'",';
}
$values=rtrim($values,',');
$keys=rtrim($keys,',');
$sql = "INSERT INTO $table ($keys) VALUES ($values)";
 execute_sql_query($sql); 
page_redirection("view_users.php?show=Users&","&New Account is created");
 ?>