<?php
	include "connection.php";
	
	$id=$_REQUEST['id'];
	
	mysql_query("delete from ec2 where id='$id'") or die(mysql_error());
	
	echo '<script>alert ("Record Deleted Successfully");
			window.location="ec2.php";
			</script>';
?>