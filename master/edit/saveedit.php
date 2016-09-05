<?php
require_once('../../comman/db_function.php');
$sql=("UPDATE app_leads set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);
$result = execute_sql_query($sql);
?>