<?php 
	$connect=mysqli_connect("localhost","root","");
	mysqli_select_db($connect,'ajax');
 ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 
 <?php 
 		if(isset($_POST['update']) && !empty($_POST['update'])){
 			$emp_name=$_POST['emp_name'];
 			$city=$_POST['city'];
 			$emp_id=$_POST['emp_id'];
 			$sql="update emploee set emp_name='$emp_name',city='$city' where emp_id='$emp_id'";
 			if(mysqli_query($connect,$sql)){
 				$page="http://localhost:82/edit/";
 				$message=urlencode('Record updated');
 				header("location:$page?message=$message");
 			}
 		}elseif(){
 			
 		}
  ?>
<?php 
	if(isset($_GET['message'])){
		echo $message=$_GET['message'];
	}
 ?>
 <table border="1">
 	<tr>
 		<th>Sno</th>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Select</th>
 		<th>Edit</th>
 		<th>Delete</th>
 	</tr>
	<?php 
	$sql="select * from emploee";
	$result=mysqli_query($connect,$sql);
	$i=1;
	while($row=mysqli_fetch_array($result)){
	?>
	<form action="#" method="POST">
 	<tr id="block">
		 		<td><?php echo $i; ?></td>
 		 <td><input type="text" value="<?php echo $row['emp_name']?>" name="emp_name"> </td>
 				<td><input type="text" value="<?php echo $row['city']?>" name="city"> </td>	
 				<td><select>
 					<option>123</option>
 					<option>23</option>
 					<option>22</option>
 				</select></td>	
 				<td><input  type="submit" value="Update" name="update"></td>
 				<td><input  type="submit"  value="Delete" name="delete"></td>
 				<input  type="hidden"  value="<?php echo $row['emp_id'] ?>" name="emp_id"/>	
 	</tr>
 	</form>
 	<?php $i++;}?>
 </table>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$("#block input,select").attr('readonly',true);
 	});
$('#block input').on('click', function() {
    $(this).attr('readonly',false);
   		
});
 </script>