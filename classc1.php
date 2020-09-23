
<?php //session_start();
//ob_start();
include "connection.php";
    
?>
<?php  include "include/html.php";    ?> 
<script type= "text/javascript" src = "validate.js"></script>
<style type="text/css">
<!--
-->

.rno{
 font-size:24px;
 width:auto;
 text-align:center;
 

}
</style>

<body>
    <div id="wrapper">
     <?php include "include/header.php";  ?>
        <!--/. NAV TOP  -->
         <?php include "include/facultysidebar.php";  ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header"><small>Welcome to CE1 Attendance Sheet</small>
                        </h1>
						<ol class="breadcrumb">
					  <!--<li><a href="#">Home</a></li>-->
					  <li><a href="facultyhome.php">Faculty Home</a></li>
					  <!--<li class="active"><a href="addfaculty.php">Add Faculty</a></li>-->
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	
		<div class="row">
	<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Attendance </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
         <form action="" method="post" enctype="multipart/form-data" name="form1" onSubmit="return validateForm()" >
								
									<script type= "text/javascript" src = "faculty1.js"></script>
									
			  <div class="form-group">
									 <table width="351" border="0">
									 <tr>
                                       <td width="116"> <label>Select Faculty</label></td>
			                          <td width="225"><select id="country" name ="selectfaculty" class="form-control" required>
                                        <option> --Select Faculty-- </option>
                                      </select></td>
									   </tr>
			    </table>
			  </div>
								  <div class="form-group">
									  <table width="351" border="0">
									 <tr>
                                       <td width="116"><label>Select Subject</label></td>
								     <td width="225"> <select name ="selectsubject" id ="state" class="form-control" required>
                                        <option> --Select Subject-- </option>
                                      </select></td>
									   </tr>
									    </table>
								  </div>
                <script language="javascript">
				populateCountries("country", "state");
				</script>
										 <div class="form-group">
 <table width="351" border="0">
									 <tr>
                                       <td width="351"><b><b><b>
 <input name='select' type='radio'  class="select" id="radio" value="Lecture" required/>
 </b></b>&nbsp;Lecture
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>
 <input name='select' type='radio'  class="select" id="select" value="Lab" required/>&nbsp;Lab</b>	</td>
 			 </tr>
			</table>
 		  </div>
                                 
  
                                      <div class="form-group">
                                            <table width="351" border="0">
									 <tr>
                                       <td width="116"><label>Select Date</label></td>
                                            <td width="225"><input name="txtdate" class="form-control" id="txtdate" type="date" placeholder="Enter Date" required></td>
											 </tr>
									    </table>
                                      </div>
                                 <table width="502" border="0" align="center" cellspacing="0">
                                   <tr>
                                     <td width="41">&nbsp;</td>
                                     <td width="72"><div align="center">Roll No </div></td>
                                     <td colspan="9">Attendance</td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                     <td><div align="center">
                                       <input type='text' name='1' disabled="disabled" value="1" class="rno"  size='3'/>
                                     </div></td>
                                   <td width="65"><div align="center">
                                     <input type='radio' name='p1'   value='P'/>
                                     YES</div></td>
			                       <td width="69"><div align="center">
		                             <input type='radio' name='p1'  value='A'/>
		                             No</div></td>
                                   <td width="39">&nbsp;</td>
                                   <td width="65"><div align="center"><b>
                                     <input name='11' type='text' disabled="disabled" class="rno" id="11" value="11"  size='3'/>
                                   </b></div></td>
                                   <td width="68"><div align="center">
                                     <input type='radio' name='p11'   value='P'/>
                                     YES</div></td>
                                   <td width="67"><div align="center">
                                     <input type='radio' name='p11'  value='A'/>
                                     No</div></td>
                                   </tr>
                                   <tr>
                                     <td height="44">&nbsp;</td>
                                      <td><div align="center">
                                        <input type='text' name='2' disabled="disabled" class="rno" value="2" size='3'/>
                                      </div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p2'  value='P'/>
                                     YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p2'  value='A'/>
		                             No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='12' type='text' disabled="disabled" class="rno" id="12" value="12" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p12'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p12'  value='A'/>
                                     No</div></td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                     <td><div align="center">
                                       <input type='text' name='3' disabled="disabled" class="rno" value="3" size='3'/>
                                     </div></td>
                                     <td><div align="center">
                                       <input type='radio' name='p3'  value='P'/>
                                     YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p3'  value='A'/>
		                             No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='13' type='text' disabled="disabled" class="rno" id="13" value="13" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p13'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p13'  value='A'/>
                                     No</div></td>
                                   </tr>
                                  <tr>
                                     <td>&nbsp;</td>
                                     <td><div align="center">
                                       <input type='text' name='4' disabled="disabled" class="rno" value="4" size='3'/>
                                     </div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p4'  value='P'/>
                                    YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p4'  value='A'/>
	                                No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='14' type='text' disabled="disabled" class="rno" id="14" value="14" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p14'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p14'  value='A'/>
                                     No</div></td>
                                  </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                      <td><div align="center">
                                        <input type='text' name='5' disabled="disabled" class="rno" value="5" size='3'/>
                                      </div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p5'  value='P'/>
                                     YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p5'  value='A'/>
		                             No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='15' type='text' disabled="disabled" class="rno" id="15" value="15" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p15'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p15'  value='A'/>
                                     No</div></td>
                                   </tr>
                                  
								   <tr>
                                     <td>&nbsp;</td>
                                     <td><div align="center">
                                       <input type='text' name='6' disabled="disabled" class="rno" value="6" size='3'/>
                                     </div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p6'  value='P'/>
                                     YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p6'  value='A'/>
		                             No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='16' type='text' disabled="disabled" class="rno" id="16" value="16" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p16'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p16'  value='A'/>
                                     No</div></td>
								   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                      <td><div align="center">
                                        <input type='text' name='7' disabled="disabled" class="rno" value="7" size='3'/>
                                      </div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p7'  value='P'/>
                                     YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p7'  value='A'/>
		                             No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='17' type='text' disabled="disabled" class="rno" id="17" value="17" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p17'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p17'  value='A'/>
                                     No</div></td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                     <td><div align="center">
                                       <input type='text' name='8' disabled="disabled" class="rno" value="8" size='3'/>
                                     </div></td>
                                     <td><div align="center">
                                       <input type='radio' name='p8'  value='P'/>
                                     YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p8'  value='A'/>
		                             No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='18' type='text' disabled="disabled" class="rno" id="18" value="18" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p18'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p18'  value='A'/>
                                     No</div></td>
                                   </tr>
                                  <tr>
                                     <td>&nbsp;</td>
                                     <td><div align="center">
                                       <input type='text' name='9' disabled="disabled" class="rno" value="9" size='3'/>
                                     </div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p9'  value='P'/>
                                    YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p9'  value='A'/>
	                                No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='19' type='text' disabled="disabled" class="rno" id="19" value="19" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p19'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p19'  value='A'/>
                                     No</div></td>
                                  </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                      <td><div align="center">
                                        <input type='text' name='10' disabled="disabled" class="rno" value="10" size='3'/>
                                      </div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p10'  value='P'/>
                                     YES</div></td>
			                       <td><div align="center">
		                             <input type='radio' name='p10'  value='A'/>
		                             No</div></td>
                                   <td>&nbsp;</td>
                                   <td><div align="center"><b>
                                     <input name='20' type='text' disabled="disabled" class="rno" id="20" value="20" size='3'/>
                                   </b></div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p20'  value='P'/>
                                     YES</div></td>
                                   <td><div align="center">
                                     <input type='radio' name='p20'  value='A'/>
                                     No</div></td>
                                   </tr>
                                   <tr>
                                     <td>&nbsp;</td>
                                     <td><div align="center"></div></td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                     <td>&nbsp;</td>
                                   </tr>
                                   <tr>
                                     <td colspan="11"><div align="center">
                                          <button type="submit" name="submit" class="btn btn-default">Submit</button>
                                          <button type="reset" name="reset" class="btn btn-default">Reset</button>
                                     </div></td>
                                   </tr>
                                 </table>
  
       <?php
 include "connection.php";
  
  if(isset($_POST['submit']))
  {
		//login detail
		
		$sf=$_POST["selectfaculty"];
       $lec=$_POST["select"];
      $sub=$_POST["selectsubject"];
		//personal detail
		//$eno=$_POST["txteno"];
		//$rno=$_POST["txtrno"];
	  /*  $rno1=$_POST['1'];
		 $rno2=$_POST['2'];
		 $rno3=$_POST['3'];
		 $rno4=$_POST['4'];
		 $rno5=$_POST['5'];
		  $rno6=$_POST['6'];
		   $rno7=$_POST['7'];
		    $rno8=$_POST['8'];
			 $rno9=$_POST['9'];
			  $rno10=$_POST['10'];
			   $rno11=$_POST['11'];
			    $rno12=$_POST['12'];*/
		 
		 
		 
		$p1=$_POST['p1'];
		//$a1=$_POST['a1'];
		
		//$r1=$p1."".$a1;
		
		$p2=$_POST['p2'];
		
		
		$p3=$_POST['p3'];
		
		
		$p4=$_POST['p4'];
		
		
		$p5=$_POST['p5'];
		
		
		$p6=$_POST['p6'];
		
		$p7=$_POST['p7'];
		
		$p8=$_POST['p8'];
		
		$p9=$_POST['p9'];
		
		$p10=$_POST['p10'];
		
		
		$p11=$_POST['p11'];
		
		
		$p12=$_POST['p12'];
		
		
		$p13=$_POST['p13'];
		
		
		$p14=$_POST['p14'];
		
		
		$p15=$_POST['p15'];
		
		
		$p16=$_POST['p6'];
		
		$p17=$_POST['p17'];
		
		$p18=$_POST['p18'];
		
		
		$p19=$_POST['p19'];
		
		$p20=$_POST['p20'];
		
		$dt=$_POST['txtdate'];
		
		//$D=getdate();

		//$dt=$D["year"]."-".$D["mon"]."-".$D["mday"];
		$st="Active";
		
			
			mysql_query("insert into classc1(facultyname,lecture,subject,r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r12,r13,r14,r15,r16,r17,r18,r19,r20,date) values ('$sf','$lec','$sub','$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11','$p12','$p13','$p14','$p15','$p16','$p17','$p18','$p19','$p20','$dt')") or die(mysql_error());
		
	
																					
			
			
			echo '<script> alert("Attendance Sucessfully filled ");
                  window.location="classc1.php";
			     </script>';

		
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
                <p>
                  <!-- /. ROW  -->
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Attendance Sheet
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                             
                              <form name="form1" method="post" action="">
							  
							 
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
  
   <tr>
   <th>Id</th>
   <th>Date</th>
   <th>Faculty Name</th>
   <th>Lecture</th>
   <th>subject</th>
   <th>R 1</th>
   <th>R 2</th>
   <th>R 3</th>
   <th>R 4</th>
   <th>R 5</th>
   <th>R 6</th>
   <th>R 7</th>
   <th>R 8</th>
   <th>R 9</th>
   <th>R 10</th>
   <th>R 11</th>
   <th>R 12</th>
   <th>R 13</th>
   <th>R 14</th>
   <th>R 15</th>
   <th>R 16</th>
   <th>R 17</th>
   <th>R 18</th>
   <th>R 19</th>
   <th>R 20</th>
   
   <th>Action</th>
   </tr>
          <?php
	include "connection.php";
	
	$res=mysql_query("select * from classc1");
	
	while($row=mysql_fetch_array($res))
	{
		$id=$row['id'];
		
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
			
			
			  echo "<td>".$row['date']."</td>";
			  echo "<td>".$row['facultyname']."</td>";
			  echo "<td>".$row['lecture']."</td>";
			   echo "<td>".$row['subject']."</td>";
			  echo "<td>".$row['r1']."</td>";
			 echo "<td>".$row['r2']."</td>";
			 echo "<td>".$row['r3']."</td>";
			 echo "<td>".$row['r4']."</td>";
			 echo "<td>".$row['r5']."</td>";
			 echo "<td>".$row['r6']."</td>";
			 echo "<td>".$row['r7']."</td>";
			 echo "<td>".$row['r8']."</td>";
			 echo "<td>".$row['r9']."</td>";
			 echo "<td>".$row['r10']."</td>";
			 echo "<td>".$row['r11']."</td>";
			 echo "<td>".$row['r12']."</td>";
			 echo "<td>".$row['r13']."</td>";
			 echo "<td>".$row['r14']."</td>";
			 echo "<td>".$row['r15']."</td>";
			 echo "<td>".$row['r16']."</td>";
			 echo "<td>".$row['r17']."</td>";
			 echo "<td>".$row['r18']."</td>";
			 echo "<td>".$row['r19']."</td>";
			 echo "<td>".$row['r20']."</td>";
			 
          
			echo "<td><a href=deleteclassc1.php?id=$id>DELETE</a>";
			   /*$result=mysql_query(" SELECT SUM(r1+r2+r3+r4+r5) AS total FROM classc1");
               $data=mysql_fetch_assoc($result);
                echo "<td>".$data['1']."</td>";*/
				
	//`r1`,`r2`,`r3`,`r4`,`r5`,`r6`,`r7`,`r8`,`r9`,`r10`,`r11`,`r12`,`r13`,`r14`,`r15`,`r16`,`r17`,`r18`,`r19`,`r20`,
				 
			/*echo "<td><a href=edit.php?id=$id>EDIT</a>";
			echo "<td><a href=delete_student.php?id=$id>DELETE</a>";*/
		echo "</tr>";
		
	}
	
?>

		
		
<tr>
   <th></th>
   <th>  <?php    $result=mysql_query("SELECT count(*) as date from classc1");
               $data=mysql_fetch_assoc($result);
                echo $data['date'];
				echo ' Days'; 
		?>
		
		
		</th>
   <th></th>
   <th>Total Attendance</th>
    <th> </th>
   <th>  <?php    $result=mysql_query("SELECT count(*) as r1 from classc1 where r1='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r1'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r1 from classc1 where r1='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r1'].')'; 
				
		?>
		<?php /*?> <?php    $result=mysql_query("SELECT count(*) as r1 from classc1 where subject='AJAVA'");
               $data=mysql_fetch_assoc($result);
                echo 'AJAVA('.$data['r1'].')'; 
				
		?><?php */?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r2 from classc1 where r2='P'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r2'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r2 from classc1 where r2='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r2'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r3 from classc1 where r3='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r3'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r3 from classc1 where r3='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r3'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r4 from classc1 where r4='P'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r4'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r4 from classc1 where r4='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r4'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r5 from classc1 where r5='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r5'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r5 from classc1 where r5='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r5'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r6 from classc1 where r6='P'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r6'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r6 from classc1 where r6='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r6'].')'; 
				
		?>
	</th><th>  <?php    $result=mysql_query("SELECT count(*) as r7 from classc1 where r7='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r7'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r7 from classc1 where r7='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r7'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r8 from classc1 where r8='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r8'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r8 from classc1 where r8='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r8'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r9 from classc1 where r9='P'");
               $data=mysql_fetch_assoc($result);
               echo 'P('.$data['r9'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r9 from classc1 where r9='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r9'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r10 from classc1 where r10='P'");
               $data=mysql_fetch_assoc($result);
               echo 'P('.$data['r10'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r10 from classc1 where r10='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r10'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r11 from classc1 where r11='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r11'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r11 from classc1 where r11='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r11'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r12 from classc1 where r12='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r12'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r12 from classc1 where r12='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r12'].')'; 
				
		?>
<th>  <?php    $result=mysql_query("SELECT count(*) as r13 from classc1 where r13='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r13'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r13 from classc1 where r13='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r13'].')'; 
				
		?>
	</th>
	
	<th>  <?php    $result=mysql_query("SELECT count(*) as r14 from classc1 where r14='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r14'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r14 from classc1 where r14='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r14'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r15 from classc1 where r15='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r15'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r15 from classc1 where r15='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r15'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r16 from classc1 where r16='P'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r16'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r16 from classc1 where r16='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r16'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r17 from classc1 where r17='P'");
               $data=mysql_fetch_assoc($result);
               echo 'P('.$data['r17'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r17 from classc1 where r17='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r17'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r18 from classc1 where r18='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r18'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r18 from classc1 where r18='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r18'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r19 from classc1 where r19='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r19'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r19 from classc1 where r19='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r19'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r20 from classc1 where r20='P'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r20'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r20 from classc1 where r20='A'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r20'].')'; 
				
		?>
	</th>
	
	
	</th>
   <th></th>
   </tr>
          </table>

		                </form>
 </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
					
										  
							  
							  
							  
							  
							  
							  
							  
              
					
                </div>
            </div>
                  <?php   include "include/footer.php";  ?>
                </p>
