
<?php  include "include/html.php";    ?>
<body>
    <div id="wrapper">
     <?php include "include/header.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/facultysidebar.php";  ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h2 class="page-header">
                             student
                        </h2>
						<ol class="breadcrumb">
					  <!--<li><a href="#">Home</a></li>-->
					  <li><a href="facultyhome.php">Faculty Home</a></li>
					  <!--<li class="active">View Student</li>-->
					</ol> 
									
		</div>
           <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <p>View Student Table</p>
                             <table width="832" border="0">
                               <tr>
                                 <td width="27"><div align="right"><small>Id</small></div></td>
                                 <td width="57"><div align="right"><small>Image</small></div></td>
                                 <td width="97"><div align="right"><small>Department</small></div></td>
                                 <td width="95"><div align="right"><small>Class</small></div></td>
                                 <td width="64"><div align="right"><small>Name</small></div></td>
                                 <td width="83"><div align="right"><small>Gender</small></div></td>
                                 <td width="58"><div align="right"><small>DOB</small></div></td>
                                 <td width="87"><div align="right"><small>Address</small></div></td>
                                 <td width="101"><div align="right"><small>City</small></div></td>
                                 <td width="121"><div align="right"><small>Contact</small>
                                 </div></td>
                               </tr>
                        </table>
                             
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
          <?php
	include "connection.php";
	
	$res=mysql_query("select * from tblstudentmaster");
	
	while($row=mysql_fetch_array($res))
	{
		$id=$row['id'];
		
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
			
			echo "<td><img height='50' width='50' src='".$row['photo']."'/></td>";
			
			  echo "<td>".$row['department']."</td>";
				echo "<td>".$row['enrollementno']."</td>";
					echo "<td>".$row['class']."</td>";
						echo "<td>".$row['studentname']."</td>";
							echo "<td>".$row['gender']."</td>";
								echo "<td>".$row['dob']."</td>";
									echo "<td>".$row['address']."</td>";
							
							echo "<td>".$row['city']."</td>";
								echo "<td>".$row['contact']."</td>";
											
												echo "<td><a href=editstudent.php?id=$id>EDIT</a>";
											echo "<td><a href=deletestudent.php?id=$id>DELETE</a>";
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
<div class="row">
  <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div class="table-responsive"></div>
                      </div>
                  </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>

		
			<?php   include "include/footer.php";  ?>