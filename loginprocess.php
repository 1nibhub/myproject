
<?php


	include "connection.php";
   
	if(isset($_REQUEST["submit"]))
	{
	$uemail=$_REQUEST["txtemail"];
	$upass=$_REQUEST["txtpass"];
	
	//$query="SELECT a.strUserEmail, a.strPassWord, b.strUserType
//FROM tbllogin AS a INNER JOIN tblusertype AS b ON a.intUserId = b.intUserId and a.strUserEmail='$uemail' and a.strPassword='$upass'";
$query="select * from tbllogin where useremail='$uemail' and password='$upass'";
	$res=mysql_query($query);
	if($r=mysql_fetch_assoc($res))
	{
		$uid=$r["id"];
		$email=$r["useremail"];
		$pass=$r["password"];
		$usertype=$r["usertype"];
		$_SESSION["useremail"]=$email;
		$_SESSION["userpass"]=$pass;
		$_SESSION["userid"]=$uid;
		$id=$_SESSION["userid"];
		//echo "$email";
		//echo "$pass";
		//echo "$usertype";
		}
		if($upass==$pass)
		{
	/*	if($usertype=='Student')
		{
		
		echo '<script>;
                  window.location="studenthome.php";
			      </script>';
		
		
		}*/
		if($usertype=='Admin')
		{
		
		echo '<script>;
                  window.location="adminhome.php";
			      </script>';
		}
		if($usertype=='Faculty')
		{
		
		echo '<script>;
                  window.location="facultyhome.php";
			      </script>';
		
		
		}
		
		}
		else
		{
			echo '<script> alert("Invalid Useremail or Password.");
                  window.location="index.php";
			      </script>';
				  }
	
	}
?>
<?php
/*		include "connection.php";
			if(isset($_POST['submit']))
			{
			$uemail=$_POST["txtuemail"];
			$upass=$_POST["txtpass"];
			
			$query=mysql_query("select * from tbllogin where useremail='$uemail' and password='$upass' ") or die(mysql_error());
		
			$data=mysql_fetch_row($query);
			
	
			   if($data)
			   {
			   
			   
			   
			     echo '<script> alert("Sucessfilly Login");
                  window.location="facultyhome.php";
			      </script>';
				  }
			   else
			          {
					  
					       	echo '<script> alert("Invalid Username/Password");
									window.location="login.php";
				  					</script>';
						}
						
				
			
			
			}*/
			
			
				 
				 
			
  ?>
  
<body>
</body>
</html>
