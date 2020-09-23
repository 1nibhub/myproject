<?php session_start();
ob_start();
include "connection.php";
    
?>
<?php  include "include/html.php";    ?>

<body>
    <div id="wrapper">
     <?php include "include/header.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/facultysidebar.php";  ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard <small>Welcome student</small>
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="facultyhome.php">Faculty Home</a></li>
					  <li class="active">View Student</li>
					</ol> 
									
		</div>
		
		
		<form action="addattendancecode.php" method="post" enctype="multipart/form-data" name="form1" >
		
		<div class="row">
	<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Attendance Sheet</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
									
									  <div class="form-group">
									  <label>Select Class</label>
									  <select name="selectclass" class="form-control" id="selectfaculty">
                                         <option value="">Select Class</option>
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
                                       </select>
									 </div>
									
									 <div class="form-group">
									  <label>Select Faculty</label>
									  <select name="selectfaculty" class="form-control" id="selectfaculty">
                                         <option value="">Select Faculty name</option>
                                             <?php
		  
		 										 include "connection.php";
											  $r=mysql_query("select * from tblfacultymaster") or die(mysql_error());
		  
											  while($row=mysql_fetch_assoc($r))
											  {
											  ?>
										<option> <?php echo $row['facultyname']; ?> </option>
												<?php
												}
												?>	
                                       </select>
									 </div>
									
									
									
									 
									
										
                                      
									 
                                      <div class="form-group">
                                            <label>Select Date</label>
                                            <input name="txtdate" class="form-control" id="txtdob" type="date">
                                      </div>
										
                                        
                                       
                                        
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
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
           <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Attendance Sheet
                        </div>
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table align="center" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<tr align="center">
								 <th>ID</th>
								 <th>Name</th>
								 <th>Photo</th>
								 <th>Enrollment</th>
								 <th>Roll No</th>
								 <th colspan="2">Attandance</th>
								 <th colspan="2">Action</th>
								 
								</tr>
          <?php
	include "connection.php";
	
	$res=mysql_query("select * from tblstudentmaster where class='14CE1'");
	
	while($row=mysql_fetch_array($res))
	{
		$id=$row['id'];
		
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['studentname']."</td>";	
	    echo "<td><img height='20' width='20' src='".$row['photo']."'/></td>";
			echo "<td><input type='text' name='txteno' disabled='disabled' value='".$row['enrollmentno']."'/></td>";
			echo "<td><input type='text' name='txtrno' disabled='disabled'  value='".$row['rollno']."'/></td>";
		//	echo "<td>".$row['rollno']."</td>";
			
			echo "<td><input type='checkbox' name='Present'  value='P'/>YES</td>";
			echo "<td><input type='checkbox' name='Absent'  value='A'/>No</td>";
			
			echo "<td><a href=edit.php?id=$id>EDIT</a>";
			echo "<td><a href=delete_student.php?id=$id>DELETE</a>";
		echo "</tr>";
	}
?>
          </table>
		  
 </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                <!-- /. ROW  -->
                <!-- /. ROW  -->
				<div align="center">
                                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                          <button type="reset" name="reset" class="btn btn-default">Reset</button>
                                        </div>
										
									

										
										
                                    </form>


		
			<?php   include "include/footer.php";  ?>