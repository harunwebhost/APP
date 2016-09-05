$(document).ready(function(){
	$("#submit").click(function(){
		username=$(this).val();
		$.ajax({
			type:'post',
			data:"username="+username,
			url	:"comman/login.php",
			success:function(data){
				alert(data);
			}

		});
	});
	
});