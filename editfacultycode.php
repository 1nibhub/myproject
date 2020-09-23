<?php
	if(isset($_POST['submit']))
	{
	include "connection.php";
		$pcate_save=$_POST['selectcategory'];
	
	
	
		$department_save=$_POST['selectdept'];
		
		$class_save=$_POST['selectclass'];
		
		$facultyname_save=$_POST['txtfname'];
		
		/*$facultymname_save=$_POST['txtmname'];
		
		$facultylname_save=$_POST['txtlname'];*/
		
		$gender_save=$_POST['gender'];
		
		$dob_save=$_POST['txtdob'];
		
		$address_save=$_POST['txtaddress'];
		
		$city_save=$_POST['txtcity'];
		
		$contact_save=$_POST['txtcontact'];
		
		$qualification_save=$_POST['selectqualif'];
		
		$experience_save=$_POST['selectexperience'];
		
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
	
		
		
		
		
		
		
	
	mysql_query("update tblfacultymaster set department='$department_save',class='$class_save',
		 facultyname='$facultyname_save',gender='$gender_save',
		dob='$dob_save',address='$address_save'
		,dob='$dob_save',address='$address_save',
		city='$city_save',contact='$contact_save'
		,qualification='$qualification_save',experience='$experience_save',
		photo='$location_save' where id='".$_GET['id']."'") or die(mysql_error());
	echo '<script>alert("Data Updated sucessfully");
window.location="viewfaculty.php";
</script>';
}

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
                             Edit:Faculty Registration
							 </h2>
						<ol class="breadcrumb">
					  <li><a href="#">Admin Home</a></li>
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
                            Edit Faculty
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								<?php
								include "connection.php";
								 if(isset($_GET['id'])){ 
					$result=mysql_query("select * from tblfacultymaster where id='".$_GET['id']."'");
					$test = mysql_fetch_array($result); 
					 ?>
                                    <form role="form" name="form1" enctype="multipart/form-data"   action="" method="post">
									 
									 
									 
									
									
									
									
									
									 <span class="style2 style1"><u>Personal  Details</u></span><br />
									 
									  <div class="form-group">
									  <label>Select Department</label>
									  <select name="selectdept" class="form-control" id="selectdept">
									  
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
                                            <label>Faculty Name</label>
										
                                            <input name="txtfname" id="txtfname" placeholder="First Name" size="13" value="<?php echo $test['facultyname']; ?>">
											
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
										    
											<input name="txtaddress" class="form-control"placeholder="Enter address" value="<?php echo $test['address']; ?>">
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
                                            <label>Select Qualification</label>
									        <select name="selectqualif" class="form-control" id="selectqualif">
                                     <option value="<?php echo $test['qualification']; ?>"><?php echo $test['qualification']; ?></option>          
                                              <?php
		  
		 										 include "connection.php";
											  $r2=mysql_query("select * from tblqualification") or die(mysql_error());
		  
											  while($row2=mysql_fetch_assoc($r2))
											  {
											  ?>
                                              <option> <?php echo $row2['qualification']; ?> </option>
                                              <?php
												}
												?>
                                            </select>
									  </div>
									  <div class="form-group">
                                            <label>Experience</label>
									        <select name="selectexperience" class="form-control" id="selectexperience">
                                       <option value="<?php echo $test['experience']; ?>"><?php echo $test['experience']; ?></option>       
                                              <?php
		  
		 										 include "connection.php";
											  $r3=mysql_query("select * from tblexperience") or die(mysql_error());
		  
											  while($row3=mysql_fetch_assoc($r3))
											  {
											  ?>
                                              <option> <?php echo $row3['experience']; ?> </option>
                                              <?php
												}
												?>
                                            </select>
									  </div>
                                       
                                      <div class="form-group">
                                            <label>Upload Photo</label>
                                       
								
								
								<input class="input-file uniform_on" id="fileInput" name="image" type="file" value="<?php echo $test['pimage']; ?>">
								<img src="<?php echo $test['photo']; ?>" type="hidden" name="image_url" value="<?php echo $test['photo']; ?> height="200" width="200" >
								
								
							
								
								<input type="hidden" name="updateBlock" value="update"  />

                                      </div>
                                       
									   
									 
                                       
                                        <div align="center">
                                          <input type="submit" name="submit" value="submit">
                                          <input name="reset" type="reset" id="reset" value="Reset">
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
                <!-- /. ROW  -->
		
		
			<?php   include "include/footer.php";  ?>
