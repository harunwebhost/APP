<?php // Create connection
function db_connection(){
$connection = mysqli_connect('localhost', 'root', '');
// Check connection
if (!$connection) {
    die("Connection failed: " . mysql_error());
}else{
  mysqli_select_db($connection,'app');

} 
return $connection;
}
?>