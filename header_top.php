<?php
//ini_set('session.cookie_httponly',true);
//ini_set('display_errors',true);
ini_set('max_execution_time','200');
ini_set('session.name',md5("SUNIL"));
session_start();
ob_start();

$unm=md5("a_unm");
$pass=md5("a_pass");
  
function stringReplace($val)
	{
		include('connection.php');
		try
		{
		$tmp=str_replace('>', '&gt;',preg_replace('/\s\s+/', '',mysqli_real_escape_string($mysqli,$val)));
		$tmp= str_replace('<', '&lt;',$tmp);
		$tmp= str_replace('(', '&#40;',$tmp);
		return str_replace(')', '&#41;',$tmp);
		}
		catch (Exception $e) {

			}
	
    
	}
	
if(isset($_SESSION['last_ip'])==false)
{
	$_SESSION['last_ip']=$_SERVER['REMOTE_ADDR'];
}

if(isset($_SESSION['last_ip'])!=$_SERVER['REMOTE_ADDR'])
{
session_unset();
session_destroy();
print"<script>alert('session_destroyed !!');

window.location='Remove_sessions.php';

</script>";

}
else if(isset($_SESSION[$unm]) && isset($_SESSION[$pass]))
  {
	 
			if($_SESSION[$unm] == "" || $_SESSION[$pass] == "")
			{
				print"<script>alert('session_EMPTY !!');					
					</script>";

						print'<script>window.location="Remove_sessions.php";</script>';
						exit();
			}
			else
			{
				
				/*if($_SESSION['role']==0)
				{
					print'<script>window.location="Remove_sessions.php";</script>';
						exit();
				}*/
			}
	
	}
	elseif(basename($_SERVER['PHP_SELF'])=="index.php")
	{
	
	}
	else
	{
		print'<script>window.location="Remove_sessions.php";</script>';
		exit();

	}
	?>