<?php // Create connection
$connection = mysqli_connect('localhost', 'root', '');

// Check connection
if (!$connection) {
    die("Connection failed: " . mysql_error());
}else{
  mysqli_select_db($connection,'stockglizsearch_db');

} ?>