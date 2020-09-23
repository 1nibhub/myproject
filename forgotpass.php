<?php session_start();
ob_start();
//include "commondata.php";
include "connection.php";
   // $con=new commondata();
	$uemail=$_SESSION["User_email"];
?>

<?php  include "include/html.php";    ?> 
<style type="text/css">
<!--
.div {
	height: auto;
	width: auto;
	padding-top: 50px;
	padding-right: 100px;
	padding-bottom: 100px;
	padding-left: 100px;
}
-->
</style>
<link href="loginstyle.css" rel="stylesheet" type="text/css">
<style type="text/css">

.style2 {color: #000000}
.dropdown{
width:30px;
margin-left:0px;
}
.secquestion{
	height:30px;
	width:400px;
	}
.answer{
	height:30px;
	width:400px;
	margin-right:1000px;
]
</style>
<body>

	<div id="wrapper">
     <?php include "include/loginheader.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/blanksidebar.php";  ?>
        <!-- /. NAV SIDE  -->
      
-- /. NAV SIDE  -->
      
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
                            Forgot Password
                        </div>
                      <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                    <form role="form" name="form1" enctype="multipart/form-data"   action="" method="post">
									 
									 
								  <div class="form-group">
									 
									 <table width="653" border="0">
									 <tr>
                                       <td width="178"><h5>Select Security Question</h5></td>
                                       <td width="465"><select name="secquestion" class="secquestion" id="secquestion" required>
                                         <option value=""> --Select Question-- </option>
                                         <?php
		  
		 										 include "connection.php";
											  $r=mysql_query("select * from tblsecquestion") or die(mysql_error());
		  
											  while($row=mysql_fetch_assoc($r))
											  {
											  ?>
                                         <option> <?php echo $row['secquestion']; ?> </option>
                                         <?php
		}
		?>
                                       </select></td>
									 </tr>        
								    </table>
									 </div>
									 <div class="form-group">
                                     <table width="653" border="0">
									 <tr>
                                       <td width="178">
									   <h5>Answer:</h5></td>
        
                                       <td width="465"><input type="text" name="txtans"  placeholder="Enter Answer" size="30" required /></td>
									 </tr>        
									 </table>
       								  </div>
									  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="submit" name="submit" value="Get My Password" class="login-button"/>
          <br>
          
          
          
          
        
									 
								 
                                     
                                       
                                        
	  
	  
		
	<?php


$que="select * from tbllogin where useremail='$uemail'";
$r=mysql_query($que);

if($res=mysql_fetch_assoc($r))
{
	$secque=$res["secquestion"];
	$ans=$res["answer"];
	$pass=$res["password"];
}

$as=$_REQUEST["txtans"];
if(isset($_REQUEST["submit"]))
{
if($ans==$as)
{
	//echo "<br>Password=".$pass;
	echo "<h4><font color='blue' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:".$pass." </font></h4>";
}
else
{
	//echo "wrong ans";
	
	echo "<h4><font color='white' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wrong Answer </font></h4>";
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
<?php   include "include/footer.php";  ?>