<?php
																	  
if(isset($_POST['submit']))
  
{
		include "connection.php";
		$pcate_save=$_POST['selectcategory'];
		
		$eno_save=$_POST['txteno'];
		
		$rno_save=$_POST['txtrno'];
		
		$department_save=$_POST['selectdept'];
		
		$class_save=$_POST['selectclass'];
		
		$studentname_save=$_POST['txtname'];
		
		$gender_save=$_POST['gender'];
		
		$dob_save=$_POST['txtdob'];
		
		$address_save=$_POST['txtaddress'];
		
		$city_save=$_POST['txtcity'];
		
		$contact_save=$_POST['txtcontact'];
		
		 if($_FILES['image']['name'] == "")
		{
        $location_save = $_POST['image_url'];
		}
		else
		{
		$file=$_FILES['image']['temp_name'];
		$image=$_FILES['image']['name'];
		$image_name=addslashes($_FILES['image']['name']);
		$size=$_FILES["image"]["size"];
		$error=$_FILES['image']['error'];
		
		move_uploaded_file($_FILES["image"]["tmp_name"],"images/".time().$_FILES["image"]["name"]);
	    $location_save="images/".time().$_FILES["image"]["name"];
		}
	
		
		
		mysql_query(" update tblstudentmaster set
		 enrollmentno='$eno_save',rollno='$rno_save',
		 department='$department_save',class='$class_save'
		,studentname='$studentname_save',gender='$gender_save'
		,dob='$dob_save',address='$address_save',
		city='$city_save',contact='$contact_save'
		,photo='$location_save'
		where id='".$_GET['id']."'") or die(mysql_error());
		
	echo '<script> alert("Data Updated sucessfully");
				window.location="viewstudent.php";
				</script>';
	}

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
                        <h2 class="page-header">Edit:Student Registration
                        </h2>
						<ol class="breadcrumb">
					  <li><a href="#">Faculty Home</a></li>
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
                            Edit Student </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								
								<?php
								include "connection.php";
								 if(isset($_GET['id'])){ 
					$result=mysql_query("select * from tblstudentmaster where id='".$_GET['id']."'");
					$test = mysql_fetch_array($result); 
					 ?>
								
                                    <form action="" method="post" enctype="multipart/form-data" name="form1" >
								
									
									
									 <div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Enrollment No </label></td>
							           
							           <td width="491"><input name="txteno" type="text" id="txteno" value="<?php echo $test['enrollmentno']; ?>" placeholder="Enter EnrollmentNo"></td>
							          </tr>        
									 </table>
									 </div>
									 <div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Roll No </label></td>
									        
									        <td width="491"><input name="txtrno" type="text" id="txtrno" value="<?php echo $test['rollno']; ?>"  placeholder="Enter RollNo"></td>
							           </tr>        
									 </table>
									 </div>
									 <div class="form-group">
									  <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Select Department</label></td>
									  <td width="491"><select name="selectdept" class="form-control" id="selectdept">
                                        
                                        <option value="<?php echo $test['department']; ?>"><?php echo $test['department']; ?></option>
                                        <?php
		  
		 										 include "connection.php";
											  $r=mysql_query("select * from tbldepartment ORDER BY department ASC") or die(mysql_error());
		  
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
									        <td width="491"><select name="selectclass" class="form-control" id="select">
											
                                              <option value="<?php echo $test['class']; ?>"><?php echo $test['class']; ?></option>
                                              <?php
		  
		 										 include "connection.php";
											  $r1=mysql_query("select * from tblclass ORDER BY class ASC") or die(mysql_error());
		  
											  while($row1=mysql_fetch_assoc($r1))
											  {
											  ?>
                                              <option> <?php echo $row1['class']; ?> </option>
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
                                       <td width="176"><label>Student Name</label></td>
                                            <td width="491"><input name="txtname" id="txtname" placeholder=" Enter Name" size="13" value="<?php echo $test['studentname']; ?>"></td>
											</tr>        
									 </table>
                                      </div>
                                            
									  <div class="form-group">
                             <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Gender</label></td>
									  <td width="491"><select name="gender">
                                        <option value="<?php echo $test['gender']; ?>"><?php echo $test['gender']; ?></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select></td>
									  </tr>        
									 </table>
									  </div>
                                      <div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Date Of Birth</label></td>
                                            <td width="491"><input name="txtdob2" class="form-control" id="txtdob" placeholder="Enter Date" type="date"  value="<?php echo $test['dob']; ?>"></td>
                                            <input type="hidden" name="txtdob" value="<?php echo $test['dob']; ?>"  />				
											
							
											
											
											
											</tr>        
									 </table>
											
                                      </div>
									  <div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Address</label></td>
									        <td width="491"><input name="txtaddress" class="form-control"placeholder="Enter address" value="<?php echo $test['address']; ?>"></td>
											</tr>        
									 </table>
									  </div>
									  <div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>City</label></td>
									        <td width="491"><input name="txtcity" class="form-control" id="txtct" placeholder="Enter City" value="<?php echo $test['city']; ?>"></td>
											</tr>        
									 </table>
									  </div>
										 
									     
                                      <div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Contact No</label></td>
                                            <td width="491"><input name="txtcontact" class="form-control" id="txtcontact" placeholder="Enter MobileNo" value="<?php echo $test['contact']; ?>"></td>
											</tr>        
									 </table>
                                      </div>
                                      <div class="form-group">
                                            <table width="676" border="0">
									 <tr>
                                       <td width="176"><label>Upload Photo</label></td>
                                            <td width="491"><input class="input-file uniform_on" id="fileInput" name="image" type="file" value="<?php echo $test['pimage']; ?>"></td>
                                        <img src="<?php echo $test['photo']; ?>" type="hidden" name="image_url" value="<?php echo $test['photo']; ?> height="200" width="200" >
								
								
							
								
								<input type="hidden" name="updateBlock" value="update"  />
									</tr>        
									 </table>
                                      </div>
                                        
                                       
                                        <div align="center">
                                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                          <button type="reset" name="reset" class="btn btn-default">Reset</button>
                                        </div>
										
									

										
										
                                    </form>
									<?php  } ?>
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