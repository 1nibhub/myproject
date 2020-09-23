<?php
	include "connection.php";
	
	$id=$_REQUEST['id'];
	
	mysql_query("delete from civil2 where id='$id'") or die(mysql_error());
	
	echo '<script>alert ("Record Deleted Successfully");
			window.location="civil2.php";
			</script>';
?>