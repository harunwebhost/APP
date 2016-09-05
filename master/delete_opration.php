<?php 
			require_once('../comman/db_function.php');
			$delete_id=sql_injection($_GET['delete_id']);
			$tbl=sql_injection($_GET['page1']);
			$tbl_primary_key=sql_injection($_GET['id']);
			$page=sql_injection($_GET['page']);
			 $sql="DELETE FROM $tbl WHERE $tbl_primary_key='$delete_id'";
		
			if(execute_sql_query($sql)){
				page_redirection($page."&","row Deleted");
			}
 ?>