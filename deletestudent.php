<title>delete</title><?php

	include "connection.php";
	
	$id=$_REQUEST['id'];
	
	mysql_query("delete from tblstudentmaster where id='$id'") or die(mysql_error());
	
	echo '<script>alert ("Record Deleted Successfully");
			window.location="viewstudent.php";
			</script>';
?>