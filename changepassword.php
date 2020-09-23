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
                        <h2 class="page-header">
                            Change Password
							 </h2>
						<ol class="breadcrumb">
					  <!--<li><a href="adminhome.php">Admin Home</a></li>-->
					  <!--<li><a href="#">Home</a></li>
					  <li class="active">Add Faculty</li>-->
					</ol> 
									
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
                                    <form role="form" name="form1" enctype="multipart/form-data"   action="" method="post">
									 
									 
									 <div class="form-group">
									 <table width="406" border="0">
	 									<tr>
                                          <td width="82"> <label>Username</label></td>
							           
							           <td width="314"><input name="txtemail"  type="text" id="txtclass" placeholder="Enter Username" required></td>
									   </tr>
									   </table>						           
									  </div>
								 
                                     
                                       
                                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                          <input type="submit" name="submit" value="Submit">
                                        </div>
										
										
	 <?php
$uemail=$_REQUEST["txtemail"];
$_SESSION["User_email"]=$uemail;
if(isset($_REQUEST["submit"]))
{	
	$que="select * from tbllogin where useremail='$uemail'";
	$r=mysql_query($que);
	if($res=mysql_fetch_assoc($r))
	{
		$id=$res["id"];
		$pass=$res["password"];
		$_SESSION["id"]=$id;
		$_SESSION["pass"]=$pass;
		header("location:changepass.php");	
	}
	else
	{
		echo "<h4><font color='red' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid User Email Id </font></h4>";
	}
	
}
?>
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
                <!-- /. ROW  -->
		
		
			<?php   include "include/footer.php";  ?>
			
			
			
			
			
			
		