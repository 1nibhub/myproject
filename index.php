<?php //session_start();
//ob_start();
include "connection.php";
    
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
<!--
.style2 {color: #000000}
-->
</style>
<body>
    <div id="wrapper">
     <?php include "include/loginheader.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/loginsidebar.php";  ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
		  <div class="div">
                      <div class="login">
  <div class="login-header">
    <h1 class="style2">Attendence Management System</h1>
  </div>
  <div class="login-form">
  <form name="form1" method="post" action="loginprocess.php">
  
    <table width="444" border="0">
	 <tr>
     <td width="134"><h3>Username:</h3></td>
     <td width="300"><input type="text" name="txtemail" placeholder=" Enter Username" required/></td>
	 </tr>        
	</table>
    
	
    <table width="444" border="0">
	 <tr>
     <td width="134"><h3>Password:</h3></td>
     <td width="300"><input type="password" name="txtpass" placeholder=" Enter Password" required/></td>
	 </tr>        
	</table>
    
	<br>
	
    <input type="submit" name="submit" value="Login" class="login-button"/>
    <br>
    <br>
	
   


	</form>
  </div>
</div>
<div class="error-page">
  
</div>

		</div>
			</div>
</div>
