<?php
	include "connection.php";
	
	$id=$_REQUEST['id'];
	
	mysql_query("delete from ec1 where id='$id'") or die(mysql_error());
	
	echo '<script>alert ("Record Deleted Successfully");
			window.location="ec1.php";
			</script>';
?>