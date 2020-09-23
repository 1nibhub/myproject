<?php
	include "connection.php";
	
	$id=$_REQUEST['id'];
	
	mysql_query("delete from me1 where id='$id'") or die(mysql_error());
	
	echo '<script>alert ("Record Deleted Successfully");
			window.location="me1.php";
			</script>';
?>