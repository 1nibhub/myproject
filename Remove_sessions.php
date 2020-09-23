<?php
ini_set('session.name',md5("SUNIL"));
session_start();
session_destroy();
session_unset();


print("<script language='javascript'>");
				print("window.location='index.php'");
				print("</script>");

//header("location:index.php");

?>
