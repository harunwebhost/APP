<?php 
    require_once('connection.php');
	/*sql query functions*/
	function execute_sql_query($sql){
       
		$connection=db_connection();
		$result=mysqli_query($connection,$sql);
		
		if(!$result){
			sql_error($connection);
		}else{
			return $result;
		}
	}

	/*fetch from database*/
	function execute_fetch($result){
		
		$fetch=mysqli_fetch_array($result);
		if(!$fetch){
				//sql_comman_error();
		}else
		{
			return $fetch;
		}
	}

	/*sql error*/
	function sql_error($connection){
		echo "you have an error please check".mysqli_error($connection);
		die();
		
		
	}

/*Reset OTP*/
function update_otp($login_id){
    $optunset="update app_authonticate SET uniqid='optisnotfound'";
    execute_sql_query($optunset);
}

/*Track Login*/
function track_login(){
    $connection=db_connection();
    $ip=get_user_ip_address();
    $current_time=current_data_time();
    $sql_track="INSERT INTO app_logins_history (logged_ip,logged_time)
    VALUES ('$ip','$current_time')";
    mysqli_query($connection,$sql_track);
    $track_id=mysqli_insert_id($connection);   
    return $track_id;
}

/*
	function sql_comman_error(){
		die("your are doing some mistakes".mysqli_error());
	}*/
	function sql_fetch_num_rows($sql){
		return mysqli_num_rows($sql);
	}
function sql_injection($values){
	$connection=db_connection();
	$values=trim($values);
	return mysqli_real_escape_string($connection,$values);
}
function convert_spaces_into_underscore($title){
return str_replace(' ', '_', $title);
}
function convert_underscore_into_spaces($title){
	return str_replace('_', ' ', $title);
}
	/*get the main pages*/
	function campaings($campaign_group_name){
		
			$sql="select * from campaigns"; 
			$result=execute_sql_query($sql);
			while ($campaigns=execute_fetch($result)) {
			?>
			<option value="<?php echo $campaigns['campaign_id'] ?>"
             <?php if($campaigns['campaign_name']==$campaign_group_name){echo "selected"; } ?>>
            <?php echo $campaigns['campaign_name']?></option>
		<?php }
	}


    function distric_list($disctric){
        
            $sql="select * from districts"; 
            $result=execute_sql_query($sql);
            while ($districts=execute_fetch($result)) {
            ?>
            <option value="<?php echo $districts['district_id'] ?>"
             <?php if($districts['district_name']==$disctric){echo "selected"; } ?>>
            <?php echo $districts['district_name']?></option>
        <?php }
    }









function display_data($data){
	echo $data;
}

function shor_information($data,$limit){
	$words = preg_split('/\s+/', $data);
	 $words = array_slice($words, 0, $limit);
	 return implode(" ",$words);
}

function create_url($page,$menus_title){
$url =<<<EOD
<a href="{$page}">{$menus_title}</a>
EOD;
return $url;
}

function get_user_ip_address(){
	return $user_ip_address=$_SERVER['REMOTE_ADDR'];

}
function page_redirection($pagename,$message){
    $message=urlencode($message);
    header("Location:$pagename?message=$message");
 }
	function check_user(){
		session_start();
		if(!isset($_SESSION['username']) && !isset($_SESSION['id'])){
			//page_redirection('../index.php','please login again');
		}
	}
?>


<?php function check_session(){
        if(!isset($_SESSION['login_username']) && !isset($_SESSION['login_userntype'])){
            page_redirection("../index.php",'Login Once Again');
        }
} 

function logged_user_id(){
    if(isset($_SESSION['login_username'])){
        $login_email=sql_injection($_SESSION['login_email']);
        $get_select_user="SELECT * FROM crm_employer WHERE emp_email='$login_email'";
        $get_select_user_execute=execute_sql_query($get_select_user);
        $get_logged_user_array=execute_fetch($get_select_user_execute);
       return $get_logged_user_id=$get_logged_user_array['emp_id'];
    }

}    

function check_empty($value){
    if(empty($value)){
        $value="";
    }else{
        $value=$value;
    }
    return $value;
}

?>



<?php 
     function todays_date(){
             $date=current_data_time();
            return $today=substr($date, 0,10);
        }
         function current_data_time(){
           date_default_timezone_set('Asia/calcutta');
          return date('Y-m-d h:i:s');
    }

    function convert_date($date){
        /*converting date into yy-mm-dd*/
        $date_to_convert=explode('-', $date);
        return  $date_to_convert['2']."-".$date_to_convert[1]."-".$date_to_convert[0];
    }
    
 ?>

<?php 
set_time_limit(0);
    function get_my_total($status){
        $status=sql_injection($status);
    if($_SESSION['login_userntype']=="master"){
        $sql_get_total="SELECT * FROM crm_leads WHERE lead_status='$status'";
     }else{
        $emp_id=logged_user_id();
                $sql_get_total="SELECT * FROM crm_leads WHERE lead_status='$status' AND emp_id='$emp_id'";
    }
            $excute_total=execute_sql_query($sql_get_total);
            $total=sql_fetch_num_rows($excute_total);
            if($total>0){
                return $total;
            }else{
                return 0;
            }
            
    }
 ?>

<?php 
        function get_emp(){
            $select_emp="SELECT * FROM crm_employer";
            $getemp=execute_sql_query($select_emp);
            while ($emp=execute_fetch($getemp)) {
                ?>
                <option value="<?php echo $emp['emp_id'] ?>"> <?php echo $emp['emp_name'] ?> </option>
            <?php 
        }
        }
        
 ?>

 <?php 
        function get_lead_current_status(){
            $select_status="SELECT DISTINCT lead_status  FROM crm_leads";
            $getlead=execute_sql_query($select_status);
            while ($lead_status=execute_fetch($getlead)) {
                ?>
                <option value="<?php echo $lead_status['lead_status'] ?>"> <?php echo $lead_status['lead_status'] ?> </option>
            <?php 
        }
        }
        
        /*Updating*/
    function get_update_records(){
        date_default_timezone_set('Asia/Kolkata');
        $current_time=date('Y-m-d H:i:s');  
        $current_ip=$_SERVER['REMOTE_ADDR'];
        $added_by=1; 
        $update="modified_date='$current_time',modified_ip='$current_ip',modified_by='$added_by'";
        return $update;
        }

        function get_server(){
            date_default_timezone_set('Asia/Kolkata');
            $current_time=date('d-m-Y H:i:s');  
            $current_ip=$_SERVER['REMOTE_ADDR'];
            $added_by=1;
            $server_details="'$current_time','$current_ip','$added_by'";
            return $server_details;
    }

    function check_isset($getvalue){
        if(isset($getvalue)){
            return $getvalue;
        }else{
            return "";
        }
    }
 ?>

