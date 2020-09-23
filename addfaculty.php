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
                             Faculty Registration
							 </h2>
						<ol class="breadcrumb">
					  <li><a href="adminhome.php">Admin Home</a></li>
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
                            Add Faculty
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" name="form1" enctype="multipart/form-data"   action="addfacultycode.php" method="post">
									 
									 	<span class="style2 style1"><u>Login Information </u></span><br />
									 <div class="form-group">
									 <table width="676" border="0">
									 <tr>
                                           <td width="176"> <label>User Name </label></td>
							           
							               <td width="491"><input name="txtuemail" type="email" id="txtuemail" placeholder"enter username" required></td>
									 </tr>  
							           </table>
									 </div>
									<div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                           <td width="176"><label>Password </label></td>
									        
									        <td width="491"><input name="txtpassword" type="password" id="txtpassword" placeholder"Enter Password" required></td>
											</tr>
											</table>
							           
									 </div>
									<div class="form-group">
									<table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Confirm Password </label></td>
									        
									        <td width="491"><input name="txtconfirmpass" type="password" id="txtonfirmpass" placeholder"Confirm Password" required></td>
							           </tr>
											</table>
									 </div>
									
									 <div class="form-group">
									 <table width="676" border="0">
									 <tr>
									  <td width="176"> <label>Security Question</label></td>
									  <td width="491"><select name="secquestion" class="form-control" id="secquestion" required>
                                         <option value="">--Select Question--</option>
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
									 <table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Answer </label></td>
									        
									        <td width="491"><input name="txtanswer" type="text" id="txtanswer" placeholder"Enter Answer" required></td>
							           </tr>
											</table>
									 </div>
									
									
									 <span class="style2 style1"><u>Personal  Details</u></span><br />
									 
									  <div class="form-group">
									  <table width="676" border="0">
									 <tr>
									   <td width="176"><label>Select Department</label></td>
									  <td width="491"><select name="selectdept" class="form-control" id="selectdept">
                                        <option value="">--Select Department-- </option>
                                     
                                            <?php
		  
		 										 include "connection.php";
											  $r=mysql_query("select * from tbldepartment") or die(mysql_error());
		  
											  while($row=mysql_fetch_assoc($r))
											  {
											  ?>
										<option> <?php echo $row['department']; ?> </option>
												<?php
												}
												?>
                                      </select></td>
									  </tr>
											</table>
									  </div>
									  <div class="form-group">
									  <table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Select Class</label></td>
									        <td width="491"><select name="selectclass" class="form-control" id="selectcls">
                                              <option>--Select Class--</option>
                                              <?php
		  
		 										 include "connection.php";
											  $r=mysql_query("select * from tblclass") or die(mysql_error());
		  
											  while($row=mysql_fetch_assoc($r))
											  {
											  ?>
                                              <option> <?php echo $row['class']; ?> </option>
                                              <?php
												}
												?>
                                            </select></td>
											</tr>
											</table>
									  </div>
										
                                        <div class="form-group">
										<table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Faculty Name</label></td>
											<td width="491"><select name="selecttitles" id="selecttitles">
											   <option>Mr. </option>
                                                <option>Miss.</option>
                                                <option>Mrs.</option>
                                              
                                          </select>
                                            <input name="txtfname" id="txtfname" placeholder="First Name" size="13">
											<input name="txtmname" id="txtmname" placeholder="Middle Name" size="13">
											<input name="txtlname" id="txtlname" placeholder="Last Name" size="13" required></td>
											</tr>
											</table>
                                            	
                                        </div>
										 <div class="form-group">
										 <table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Gender</label></td>
                                            <label class="radio-inline">
                                                <td width="491"><input type="radio" name="gender" id="gender" value="Male" checked="" required>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio"  name="gender" id="gender" value="Female" required>Female
                                            </label></td>
                                           </tr>
											</table>
                                        </div>
                                      <div class="form-group">
									  <table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Date Of Birth</label></td>
                                            <td width="491"><input name="txtdob" class="form-control" id="txtdob" type="date" placeholder="Enter Date" required></td>
											</tr>
											</table>
                                      </div>
										<div class="form-group">
										<table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Address</label></td>
                                            <td width="491"><textarea name="txtaddress" class="form-control" rows="3" placeholder"Enter Address"></textarea></td>
											</tr>
											</table>
                                        </div>
									  <div class="form-group">
									  <table width="676" border="0">
									 <tr>
                                             <td width="176"><label>City</label></td>
									        <td width="491"><input name="txtcity" class="form-control" id="txtct" placeholder="Enter City" required></td>
											</tr>
											</table>
									  </div>
										
										<div class="form-group">
										<table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Contact No</label></td>
									        <td width="491"><input name="txtcontact" class="form-control" id="txtcontact" placeholder="Enter MobileNo" required></td>
											</tr>
											</table>
									  </div>
										
									  <div class="form-group">
									  <table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Select Qualification</label></td>
									        <td width="491"><select name="selectqualif" class="form-control" id="selectqualif">
                                              <option selected="selected">--Select qualification--</option>
                                              <?php
		  
		 										 include "connection.php";
											  $r=mysql_query("select * from tblqualification") or die(mysql_error());
		  
											  while($row=mysql_fetch_assoc($r))
											  {
											  ?>
                                              <option> <?php echo $row['qualification']; ?> </option>
                                              <?php
												}
												?>
                                            </select></td>
											</tr>
											</table>
									  </div>
									  <div class="form-group">
									  <table width="676" border="0">
									 <tr>
                                             <td width="176"><label>Experience</label></td>
									        <td width="491"><select name="selectexperience" class="form-control" id="selectexperience">
                                              <option>--Select Experience-- </option>
                                              <?php
		  
		 										 include "connection.php";
											  $r=mysql_query("select * from tblexperience") or die(mysql_error());
		  
											  while($row=mysql_fetch_assoc($r))
											  {
											  ?>
                                              <option> <?php echo $row['experience']; ?> </option>
                                              <?php
												}
												?>
                                            </select></td>
											</tr>
											</table>
									  </div>
                                       
                                      <div class="form-group">
									  <table width="676" border="0">
									 <tr>
                                            <td width="176"> <label>Upload Photo</label></td>
                                            <td width="491"><input name="file" type="file" id="file" ></td>
											</tr>
											</table>
                                      </div>
                                        
                                       
                                        <div align="center">
                                          <input type="submit" name="submit" value="Submit" required>
                                          <input name="reset" type="reset" id="reset" value="Reset" required>
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
                <!-- /. ROW  -->
		
		
			<?php   include "include/footer.php";  ?>