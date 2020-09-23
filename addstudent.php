<?php session_start();
ob_start();
include "connection.php";
    
?>
<?php  include "include/html.php";    ?> 
<style type="text/css">
<!--
.style2 {color: #0000FF}
-->
</style>
<body>
    <div id="wrapper">
     <?php include "include/header.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/facultysidebar.php";  ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h2 class="page-header">Student Registration
                        </h2>
						<ol class="breadcrumb">
					  <li><a href="facultyhome.php">Faculty Home</a></li>
					  <!--<li><a href="facultyhome.php">Home</a></li>
					  <li class="active">Add Faculty</li>-->
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
		<div class="row">
	<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Student </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="addstudentcode.php" method="post" enctype="multipart/form-data" name="form1" >
								<!--	<span class="style2"><u>Login Information </u></span><br />
									 <div class="form-group">
                                            <label>User Name </label>
							           <label>
							           <input name="txtuemail" type="text" id="txtuemail" placeholder"enter username">
							           </label>
									 </div>
									<div class="form-group">
                                            <label>Password </label>
									        <label>
									        <input name="txtpassword" type="password" id="txtpassword" placeholder"Enter Password">
							           </label>
									 </div>
									<div class="form-group">
                                            <label>Confirm Password </label>
									        <label>
									        <input name="txtconfirmpass" type="password" id="txtonfirmpass" placeholder"Confirm Password">
							           </label>
									 </div>
									
									 <div class="form-group">
									  <label>Security Question</label>
									  <select name="secquestion" class="form-control" id="secquestion">
                                        <option value="">Select Question</option>
                                        <?php
		  
		 									/*	 include "connection.php";
											  $r=mysql_query("select * from tblsecquestion") or die(mysql_error());
		  
											  while($row=mysql_fetch_assoc($r))
											  {*/
											  ?>
                                        <option> <?php //echo $row['secquestion']; ?> </option>
                                        <?php
												//}
												?>
                                      </select>
									 </div>
									 <div class="form-group">
                                            <label>Answer </label>
							           <label>
							           <input name="txtanswer" type="text" id="txtanswer" placeholder"enter answer">
							           </label>
									 </div>
									-->
									
									 <span class="style2"><u>Personal  Details</u></span><br />
									
									 <div class="form-group">
									 <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Enrollment No </label></td>
							           
							           <td width="491"><input name="txteno" type="text" id="txteno" placeholder="Enter EnrollmentNo" required></td>
									 </tr>        
									 </table>
									 </div>
									 <div class="form-group">
									 <table width="675" border="0">
									 <tr>
                                       <td width="176"> <label>Roll No </label></td>
									        
							           <td width="491"><input name="txtrno" type="text" id="txtrno" placeholder="Enter RollNo" required></td>
									   </tr>
									</table>
							           
									 </div>
									 <div class="form-group">
									 <table width="677" border="0">
									 <tr>
									  <td width="176"><label>Select Department</label></td>
									  <td width="491"><select name="selectdept" class="form-control" id="selectdept">
                                        <option value=""> --Select Department-- </option>
                                     
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
										 <table width="677" border="0">
										 <tr>
                                           <td width="176"><label>Select Class</label></td>
										  <td width="491"><select name="selectclass" class="form-control" id="selectclass">
                                              <option> --Select Class-- </option>
                                             
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
										<table width="677" border="0">
										<tr>
                                            <td width="176"><label>Student Name</label></td>
                                            <td width="491"><input name="txtfname" id="txtfname" placeholder="First Name" size="13">
                                            <input name="txtmname" id="txtmname" placeholder="Middle Name" size="13" >
                                            <input name="txtlname" id="txtlname" placeholder="Last Name" size="13" required></td>
											</tr>
											</table>
                                            	
                                        </div>
									  <div class="form-group">
									  <table width="680" border="0">
									  <tr>
                             <td width="176"><label>Gender</label></td>
                                            <td width="491"><label class="radio-inline">
<input name="gender" type="radio" id="radio" value="Male" checked required>                                            
Male                                            </label>
                                         <label class="radio-inline">
                                        <input type="radio"  name="gender" id="gender" value="Female" required>Female           </label></td>
									    </tr>
									    </table>
                                      </div>
                                      <div class="form-group">
									  <table width="679" border="0">
									  <tr>
                                        <td width="176"><label>Date Of Birth</label></td>
                                        <td width="491"><input name="txtdob" class="form-control" id="txtdob" type="date" placeholder="Enter Date" required></td>
										</tr>
									</table>
                                      </div>
										<div class="form-group">
										<table width="680" border="0">
										<tr>
                                          <td width="176"><label>Address</label></td>
                                          <td width="491"><textarea name="txtaddress" class="form-control" rows="3"></textarea></td>
										  </tr>
										</table>
                                        </div>
									  <div class="form-group">
									  <table width="680" border="0">
									  <tr>
                                        <td width="176"><label>City</label></td>
								        <td width="491"><input name="txtcity" class="form-control" id="txtcity" placeholder="Enter City" required></td>
										</tr>
									  </table>
									  </div>
										 
									     
                                      <div class="form-group">
									  <table width="680" border="0">
									  <tr>
                                        <td width="176"><label>Contact No</label></td>
                                        <td width="491"><input name="txtcontact" class="form-control" id="txtcontact" placeholder="Enter MobileNo" required></td>
										</tr>
									  </table>
                                      </div>
                                      <div class="form-group">
									   <table width="680" border="0">
									  <tr>
                                        <td width="176">  <label>Upload Photo</label></td>
                                        <td width="491"><input name="file" type="file" id="file" required></td>
									  </tr>
											</table>
                                      </div>
                                        
                                       
                                        <div align="center">
                                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                          <button type="reset" name="reset" class="btn btn-default">Reset</button>
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
                <p>
                  <!-- /. ROW  -->
                  
                  
                  <?php   include "include/footer.php";  ?>
                </p>
                