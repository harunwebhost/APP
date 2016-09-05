<?php 
	$connection=mysqli_connect("localhost","root","","ajax");
	 $create_trigger="CREATE TRIGGER 
	`coman` 
		BEFORE INSERT ON
	 `emploee` 
	 FOR EACH ROW 
	 Insert into login values(new.emp_name,new.city)";

	mysqli_query($connection,$create_trigger);
	 $sql="INSERT INTO emploee (emp_name,city) VALUES ('Haru1', 'harihar1')";
	 mysqli_query($connection,$sql);
	
	echo mysqli_error($connection);
	 
 ?>