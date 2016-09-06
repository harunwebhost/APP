<?php
require_once("../comman/db_function.php");

if(!empty($_POST["district_id"])) {
	$query ="SELECT * FROM assemblis WHERE district_id = '" . $_POST["district_id"] . "'";
	$results = execute_sql_query($query);
?>
	<option value="">Select Assemblis</option>
<?php
	foreach($results as $assemblis) {
?>
	<option value="<?php echo $assemblis["assemblis"]; ?>"><?php echo $assemblis["assembly_name"]; ?></option>
<?php
	}
}
?>