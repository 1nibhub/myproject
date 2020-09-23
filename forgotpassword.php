<?php session_start();
ob_start();
include "connection.php";
   
?>

<?php  include "include/html.php";    ?> 
<style type="text/css">
<!--
<style>
	answer{
	height:30px;
	width:400px;
	margin-right:1000px;
]

.style1 {color: #0000FF}
	
</style>
<body>
    <div id="wrapper">
     <?php include "include/loginheader.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/blanksidebar.php";  ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h2 class="page-header">
                            Forgot Password?</h2>
					
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
		<div class="row">
	<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Forgot Password
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="form1" enctype="multipart/form-data"   action="" method="post">
									 
									 
									 <div class="form-group">
                                             <table width="406" border="0">
									 <tr>
                                       <td width="82"><h5>Username </h5></td>
                                            
									       <td width="314"> <input name="txtemail"  type="text" id="txtemail" placeholder="Enter Username" class="answer" required/></td>
										   </tr>        
									 </table>
									 </div>
								 
                                     
                                       
                                        <div>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
		$secque=$res["secquestion"];
		$ans=$res["answer"];
		$pass=$res["password"];
		$_SESSION["secque"]=$secque;
		$_SESSION["ans"]=$ans;
		$_SESSION["pass"]=$pass;
		header("location:forgotpass.php");	
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
			
			
			
			
			
			
		