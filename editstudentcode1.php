<?php
																	  
if(isset($_POST['submit']))
  
{
		include "connection.php";
		$pcate_save=$_POST['selectcategory'];
		
iudyutszyecfytt		$eno_save=$_POST['txteno'];
		
		$rno_save=$_POST['txtrno'];
		
		$dept_save=$_POST['selectdept'];
		
		$class_save=$_POST['selectclass'];
		
		$studentfname_save=$_POST['txtfname'];
		
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
		,studentname='$studentfname_save',studentname='$studentmname_save',
		studentname='$studentlname_save',gender='$gender_save'
		,dob='$dob_save',address='$address_save',
		city='$city_save',contact='$contact_save'
		,photo='$location_save'
		where id='".$_GET['id']."'") or die(mysql_error());
		
	echo '<script> alert("record Update sucessfully");
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
         <?php include "include/studentsidebar.php";  ?>
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
					$result=mysql_query("select * from tblfacultymaster where id='".$_GET['id']."'");
					$test = mysql_fetch_array($result); 
					 ?>
								
                                    <form action="" method="post" enctype="multipart/form-data" name="form1" >
								
									
									
									 <div class="form-group">
                                            <label>Enrollment No </label>
							           <label>
							           <input name="txteno" type="text" id="txteno" value="<?php echo $test['enrollmentno']; ?>">
							           </label>
									 </div>
									 <div class="form-group">
                                            <label>Roll No </label>
									        <label>
									        <input name="txtrno" type="text" id="txtrno" value="<?php echo $test['rollno']; ?>">
							           </label>
									 </div>
									 <div class="form-group">
									  <label>Select Department</label>
									  <select name="selectdept" class="form-control" id="select">
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
                                      </select>
									 </div>
										 <div class="form-group">
                                            <label>Select Class</label>
									        <select name="selectclass" class="form-control" id="selectdept">
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
                                            </select>
									  </div>
										
                                      <div class="form-group">
                                            <label>Student Name</label>
                                            <input name="txtfname" id="txtfname" placeholder="First Name" size="13" value="<?php echo $test['studentname']; ?>">
                                      </div>
                                            
									  <div class="form-group">
                             <label>Gender</label>
									  <select name="gender">
                                              <option value="<?php echo $test['gender']; ?>"><?php echo $test['gender']; ?></option>
                                              <option value="Male">Male</option>
                                              <option value="Female">Female</option>
                                            </select>
									  </div>
                                      <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <input name="txtdob" class="form-control" id="txtdob" placeholder="Enter Date (yyyy-mm-dd)" type="date"  value="<?php echo $test['dob']; ?>">
                                            <input type="hidden" name="txtdob" value="<?php echo $test['dob']; ?>"  />				
											
							
											
											
											
											
											
                                      </div>
									  <div class="form-group">
                                            <label>Address</label>
									        <input name="txtaddress" class="form-control"placeholder="Enter address" value="<?php echo $test['addre']; ?>">
									  </div>
									  <div class="form-group">
                                            <label>City</label>
									        <input name="txtcity" class="form-control" id="txtct" placeholder="Enter City" value="<?php echo $test['city']; ?>">
									  </div>
										 
									     
                                      <div class="form-group">
                                            <label>Contact No</label>
                                            <input name="txtcontact" class="form-control" id="txtcontact" placeholder="Cell Number" value="<?php echo $test['contact']; ?>">
									  </div>
                                      <div class="form-group">
                                            <label>Upload Photo</label>
                                           <input class="input-file uniform_on" id="fileInput" name="image" type="file" value="<?php echo $test['pimage']; ?>">
                                        <img src="<?php echo $test['photo']; ?>" type="hidden" name="image_url" value="<?php echo $test['photo']; ?> height="200" width="200" >
								
								
							
								
								<input type="hidden" name="updateBlock" value="update"  />

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