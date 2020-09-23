<?php session_start();
ob_start();
include "connection.php";
   
?>

<?php  include "include/html.php";    ?> 
<style type="text/css">
<!--
.style1 {color: #0000FF}
-->
</style>
<body>
    <div id="wrapper">
     <?php include "include/header.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/adminsidebar.php";  ?>
		 
		 
		 
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h2 class="page-header">Change Password</h2>
						 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
		<div class="row">
	<div class="col-lg-12">
                    <div class="panel panel-default">
					<div class="panel-heading">
                            Change Password
                        </div>
                      <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="login-form">
  <form name="form1" method="post" action="">
  <div class="form-group">
    <table width="468" border="0">
	 <tr>
     <td width="157">Enter Old Password:</td>
     <td width="300"><input type="password" name="txtoldpassword" placeholder=" Enter Old Password" required/></td>
	 </tr>
	</table>
</div>
	
	<div class="form-group">
    <table width="468" border="0">
	 <tr>
     <td width="157">Enter New Password:</td>
    <td width="300"><input type="password" name="txtnewpassword" placeholder=" Enter New Password" required/></td>
  
  </tr>
	</table>
	</div>
	
	<div class="form-group">
    <table width="468" border="0">
	 <tr>
     <td width="157">Confirm Password:</td>
    <td width="300"><input type="password" name="txtcpassword" placeholder=" Enter Confirm Password" required/></td>
 	</tr>
	</table>
	</div>
	
    <div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <input type="submit" name="submit" value="Change Password" class="login-button"/>
      <br>
        <br>
      
        <?php
					
$pass=$_SESSION["pass"];
$id=$_SESSION["id"];	
if(isset($_REQUEST["submit"]))
{
$newpass=$_REQUEST["txtnewpassword"];
$oldpass=$_REQUEST["txtoldpassword"];
$cps=$_REQUEST["txtcpassword"];
if($pass==$oldpass)
{
if($newpass==$cps)
	{
	$q="update tbllogin set password='$cps' where id='$id'";
	$rs=mysql_query($q);
	if($rs)
	{
	echo"<h4><font color='red' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your password is changed </font></h4>";
	}
	else
	{
		echo "error";
	}
}
else
{
	echo "<h4><font color='red' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password does not match</font></h4>";
}
}
else
{
	echo "<h4><font color='red' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Password</font></h4>";
}
}

?>
      
      
      
      
      
      
    </div>
  </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- 
								
								
								/.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
						
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
          </div>
</div>
		
		
			<?php   include "include/footer.php";  ?>
			
			
			
			
			
			
