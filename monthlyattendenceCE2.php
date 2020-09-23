
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
                        <h1 class="page-header"><small>Welcome to CE2 Attendance Sheet</small>
                        </h1>
						<ol class="breadcrumb">
					  <!--<li><a href="#">Home</a></li>-->
					  <li><a href="facultyhome.php">Faculty Home</a></li>
					  <!--<li class="active"><a href="addfaculty.php">Add Faculty</a></li>-->
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. rOW  -->
	
		
                <p>
                  <!-- /. rOW  -->
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                        <div class="table-responsive">
                             
                              <form name="form1" method="post" action="">
							  
							 
  

							  
							  
							  
							  
							  
							  
							  
							  
                              </form>
 </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
			
	 <!--Monthlyreport--> 		
			
			
			
			
			
			
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
   <th>r1</th>
   <th>r2</th>
   <th>r3</th>
   <th>r4</th>
   <th>r5</th>
   <th>r6</th>
   <th>r7</th>
   <th>r8</th>
   <th>r9</th>
   <th>r10</th>
   <th>r11</th>
   <th>r12</th>
   <th>r13</th>
   <th>r14</th>
   <th>r15</th>
   <th>r16</th>
   <th>r17</th>
   <th>r18</th>
   <th>r19</th>
   <th>r20</th>
   
   <th></th>
   </tr>
          <?php
	include "connection.php";
	
	$res=mysql_query("select * from  classc2");
	
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
			 
          
			echo "<td><a href=deleteclassc2.php?id=$id>DELETE</a>";
			   /*$result=mysql_query(" SELECT SUM(r2+r2+r3+r4+r5) AS total FrOM  classc2");
               $data=mysql_fetch_assoc($result);
                echo "<td>".$data['1']."</td>";*/
				
	//`r2`,`r2`,`r3`,`r4`,`r5`,`r6`,`r7`,`r8`,`r9`,`r20`,`r21`,`r22`,`r23`,`r24`,`r25`,`r26`,`r27`,`r28`,`r29`,`r20`,
				 
			/*echo "<td><a href=edit.php?id=$id>EDIT</a>";
			echo "<td><a href=delete_student.php?id=$id>DELETE</a>";*/
		echo "</tr>";
		
	}
	
?>

		
	
<tr>
   
   
   </tr>
          </table>

		 </form>
 </div>
                            
                        </div>
                    </div>
					
   <table width="875" height="180" border="1" align="center">
  <tr>
    <td colspan="12"><div align="center"><strong> ATTENDENECE SHEET </strong></div></td>
    </tr>
  <tr>
    <td width="69" rowspan="2"><div align="center">ROLL NO </div></td>
    <td colspan="2"><div align="center">AJAVA</div></td>
    <td colspan="2"><div align="center">MCAD</div></td>
    <td colspan="2"><div align="center">NMA</div></td>
    <td><div align="center">PPUD</div></td>
    <td width="87" rowspan="2"><div align="center">TOTAL LAB </div>      <div align="center"></div></td>
    <td width="69" rowspan="2"> <div align="center">TOTAL LEC</div>      <div align="center"></div></td>
    <td width="65" rowspan="2"><div align="center">TOTAL
	

	
	
	</div>      <div align="center"></div></td>
    <td width="59" rowspan="2"><div align="center">PERCENTAGE(%)</div>      
      <div align="center"></div></td>
    </tr>
  <tr>
    <td width="53"><div align="center">T</div></td>
    <td width="63"><div align="center">P  </div></td>
    <td width="85"><div align="center">T </div></td>
    <td width="71"><div align="center">P  </div></td>
    <td width="45"><div align="center">T </div></td>
    <td width="46"><div align="center">P </div></td>
    <td><div align="center">P</div></td>
    </tr>
	
	
	
	
	
	
	<!--it is for total practical & lecture-->
	
	
	
	 <tr>
       <td width="69">&nbsp;</td>
       <td><div align="center">
         <?php    $result=mysql_query("SELECT count(*) as subject from  classc2 where  subject='AJAVA' AND lecture='Lecture'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['subject'].''; 
				$ajavalac=$data['subject'];
		?>
       </div></td>
       <td><div align="center">
         <?php    $result=mysql_query("SELECT count(*) as subject from  classc2 where  subject='AJAVA' AND lecture='Lab'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['subject'].''; 
				$ajavalab=$data['subject'];
		?>
       </div></td>
       <td><div align="center">
         <?php    $result=mysql_query("SELECT count(*) as subject from  classc2 where  subject='MCAD' AND lecture='Lecture'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['subject'].''; 
				$mcadlac=$data['subject'];
		?>
       </div></td>
       <td><div align="center">
         <?php    $result=mysql_query("SELECT count(*) as subject from  classc2 where  subject='MCAD' AND lecture='Lab'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['subject'].''; 
				$mcadlab=$data['subject'];
		?>
       </div></td>
       <td width="87" ><div align="center">
         <?php    $result=mysql_query("SELECT count(*) as subject from  classc2 where  subject='NMA' AND lecture='Lecture'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['subject'].''; 
				$nmalac=$data['subject'];
		?>
       </div></td>
       <td width="87" ><div align="center">
         <?php    $result=mysql_query("SELECT count(*) as subject from  classc2 where  subject='NMA' AND lecture='Lab'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['subject'].''; 
				$nmalab=$data['subject'];
		?>
       </div></td>
    <td width="69" ><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as subject from  classc2 where  subject='PPUD' AND lecture='Lab'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['subject'].''; 
				$ppudlab=$data['subject'];
		?>     
    </div></td>
    <td width="65">
      
      <div align="center">
        <?php    $result=mysql_query("SELECT count(*) as lecture from  classc2 where  lecture='Lab'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['lecture'].''; 
				
		?>   
       </div></td>
    <td width="65">
      
      <div align="center">
        <?php    $result=mysql_query("SELECT count(*) as lecture from  classc2 where  lecture='Lecture'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['lecture'].''; 
				
		?>
      </div></td>
    <td width="65">
	
	    <div align="center">
	      <?php  echo $ajavalac+$ajavalab+$mcadlac+$mcadlab+$nmalac+$nmalab+$ppudlab; ?>
          </div></td>
	<td width="59"><div align="center">100%</div></td>
    </tr>
  
	
	
	<!--it is for total practical & lecture of roll 1 -->
	
	
	
	
	
	
	
  
			<!-- r1 -->

<tr>
    <td><div align="center">R1</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r1,lecture,subject from  classc2 where lecture='Lecture' AND r1='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r1,lecture,subject from  classc2 where lecture='LAB' AND r1='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r1,lecture,subject from  classc2 where lecture='Lecture' AND r1='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r1,lecture,subject from  classc2 where lecture='LAB' AND r1='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r1,lecture,subject from  classc2 where lecture='Lecture' AND r1='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r1,lecture,subject from  classc2 where lecture='LAB' AND r1='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r1,lecture,subject from  classc2 where lecture='LAB' AND r1='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r1,lecture from  classc2 where lecture='Lab' AND r1='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].''; 
				$lab=$data['r1'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r1,lecture from  classc2 where lecture='Lecture' AND r1='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r1'].'';
				 $lec=$data['r1']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r1 from  classc2 where r1='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r1'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>

	
	<!-- r2 -->
	
	
	
	<tr>
    <td><div align="center">R2</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r2,lecture,subject from  classc2 where lecture='Lecture' AND r2='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r2,lecture,subject from  classc2 where lecture='LAB' AND r2='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r2,lecture,subject from  classc2 where lecture='Lecture' AND r2='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r2,lecture,subject from  classc2 where lecture='LAB' AND r2='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r2,lecture,subject from  classc2 where lecture='Lecture' AND r2='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r2,lecture,subject from  classc2 where lecture='LAB' AND r2='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r2,lecture,subject from  classc2 where lecture='LAB' AND r2='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r2,lecture from  classc2 where lecture='Lab' AND r2='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].''; 
				$lab=$data['r2'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r2,lecture from  classc2 where lecture='Lecture' AND r2='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r2'].'';
				 $lec=$data['r2']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r2 from  classc2 where r2='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r2'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r3 -->


<tr>
    <td><div align="center">R3</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r3,lecture,subject from  classc2 where lecture='Lecture' AND r3='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r3,lecture,subject from  classc2 where lecture='LAB' AND r3='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r3,lecture,subject from  classc2 where lecture='Lecture' AND r3='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r3,lecture,subject from  classc2 where lecture='LAB' AND r3='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r3,lecture,subject from  classc2 where lecture='Lecture' AND r3='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r3,lecture,subject from  classc2 where lecture='LAB' AND r3='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r3,lecture,subject from  classc2 where lecture='LAB' AND r3='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r3,lecture from  classc2 where lecture='Lab' AND r3='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].''; 
				$lab=$data['r3'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r3,lecture from  classc2 where lecture='Lecture' AND r3='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r3'].'';
				 $lec=$data['r3']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r3 from  classc2 where r3='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r3'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r4 -->


<tr>
    <td><div align="center">R4</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r4,lecture,subject from  classc2 where lecture='Lecture' AND r4='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r4,lecture,subject from  classc2 where lecture='LAB' AND r4='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r4,lecture,subject from  classc2 where lecture='Lecture' AND r4='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r4,lecture,subject from  classc2 where lecture='LAB' AND r4='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r4,lecture,subject from  classc2 where lecture='Lecture' AND r4='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r4,lecture,subject from  classc2 where lecture='LAB' AND r4='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r4,lecture,subject from  classc2 where lecture='LAB' AND r4='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r4,lecture from  classc2 where lecture='Lab' AND r4='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].''; 
				$lab=$data['r4'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r4,lecture from  classc2 where lecture='Lecture' AND r4='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r4'].'';
				 $lec=$data['r4']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r4 from  classc2 where r4='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r4'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo ceil($present*100/$tot); 
	
	
	
	  ?>
	</div></td>
    </tr>
	

			<!-- r5 -->


<tr>
    <td><div align="center">R5</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r5,lecture,subject from  classc2 where lecture='Lecture' AND r5='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r5,lecture,subject from  classc2 where lecture='LAB' AND r5='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r5,lecture,subject from  classc2 where lecture='Lecture' AND r5='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r5,lecture,subject from  classc2 where lecture='LAB' AND r5='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r5,lecture,subject from  classc2 where lecture='Lecture' AND r5='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r5,lecture,subject from  classc2 where lecture='LAB' AND r5='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r5,lecture,subject from  classc2 where lecture='LAB' AND r5='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r5,lecture from  classc2 where lecture='Lab' AND r5='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].''; 
				$lab=$data['r5'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r5,lecture from  classc2 where lecture='Lecture' AND r5='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r5'].'';
				 $lec=$data['r5']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r5 from  classc2 where r5='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r5'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r6 -->


<tr>
    <td><div align="center">R6</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r6,lecture,subject from  classc2 where lecture='Lecture' AND r6='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r6,lecture,subject from  classc2 where lecture='LAB' AND r6='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r6,lecture,subject from  classc2 where lecture='Lecture' AND r6='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r6,lecture,subject from  classc2 where lecture='LAB' AND r6='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r6,lecture,subject from  classc2 where lecture='Lecture' AND r6='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r6,lecture,subject from  classc2 where lecture='LAB' AND r6='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r6,lecture,subject from  classc2 where lecture='LAB' AND r6='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r6,lecture from  classc2 where lecture='Lab' AND r6='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].''; 
				$lab=$data['r6'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r6,lecture from  classc2 where lecture='Lecture' AND r6='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r6'].'';
				 $lec=$data['r6']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r6 from  classc2 where r6='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r6'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r7 -->


<tr>
    <td><div align="center">R7</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r7,lecture,subject from  classc2 where lecture='Lecture' AND r7='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r7,lecture,subject from  classc2 where lecture='LAB' AND r7='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r7,lecture,subject from  classc2 where lecture='Lecture' AND r7='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r7,lecture,subject from  classc2 where lecture='LAB' AND r7='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r7,lecture,subject from  classc2 where lecture='Lecture' AND r7='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r7,lecture,subject from  classc2 where lecture='LAB' AND r7='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r7,lecture,subject from  classc2 where lecture='LAB' AND r7='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r7,lecture from  classc2 where lecture='Lab' AND r7='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].''; 
				$lab=$data['r7'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r7,lecture from  classc2 where lecture='Lecture' AND r7='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r7'].'';
				 $lec=$data['r7']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r7 from  classc2 where r7='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r7'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r8 -->


<tr>
    <td><div align="center">R8</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r8,lecture,subject from  classc2 where lecture='Lecture' AND r8='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r8,lecture,subject from  classc2 where lecture='LAB' AND r8='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r8,lecture,subject from  classc2 where lecture='Lecture' AND r8='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r8,lecture,subject from  classc2 where lecture='LAB' AND r8='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r8,lecture,subject from  classc2 where lecture='Lecture' AND r8='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r8,lecture,subject from  classc2 where lecture='LAB' AND r8='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r8,lecture,subject from  classc2 where lecture='LAB' AND r8='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r8,lecture from  classc2 where lecture='Lab' AND r8='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].''; 
				$lab=$data['r8'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r8,lecture from  classc2 where lecture='Lecture' AND r8='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r8'].'';
				 $lec=$data['r8']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r8 from  classc2 where r8='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r8'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r9 -->


<tr>
    <td><div align="center">R9</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r9,lecture,subject from  classc2 where lecture='Lecture' AND r9='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r9,lecture,subject from  classc2 where lecture='LAB' AND r9='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r9,lecture,subject from  classc2 where lecture='Lecture' AND r9='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r9,lecture,subject from  classc2 where lecture='LAB' AND r9='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r9,lecture,subject from  classc2 where lecture='Lecture' AND r9='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r9,lecture,subject from  classc2 where lecture='LAB' AND r9='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r9,lecture,subject from  classc2 where lecture='LAB' AND r9='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r9,lecture from  classc2 where lecture='Lab' AND r9='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].''; 
				$lab=$data['r9'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r9,lecture from  classc2 where lecture='Lecture' AND r9='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r9'].'';
				 $lec=$data['r9']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r9 from  classc2 where r9='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r9'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r10 -->


<tr>
    <td><div align="center">R10</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r10,lecture,subject from  classc2 where lecture='Lecture' AND r10='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r10,lecture,subject from  classc2 where lecture='LAB' AND r10='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r10,lecture,subject from  classc2 where lecture='Lecture' AND r10='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r10,lecture,subject from  classc2 where lecture='LAB' AND r10='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r10,lecture,subject from  classc2 where lecture='Lecture' AND r10='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r10,lecture,subject from  classc2 where lecture='LAB' AND r10='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r10,lecture,subject from  classc2 where lecture='LAB' AND r10='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r10,lecture from  classc2 where lecture='Lab' AND r10='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r10'].''; 
				$lab=$data['r10'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r10,lecture from  classc2 where lecture='Lecture' AND r10='P'");
               $data=mysql_fetch_assoc($result);

                 echo ''.$data['r10'].'';
				 $lec=$data['r10']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r10 from  classc2 where r10='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r10'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r11 -->


<tr>
    <td><div align="center">R11</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r11,lecture,subject from  classc2 where lecture='Lecture' AND r11='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r11,lecture,subject from  classc2 where lecture='LAB' AND r11='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r11,lecture,subject from  classc2 where lecture='Lecture' AND r11='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r11,lecture,subject from  classc2 where lecture='LAB' AND r11='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r11,lecture,subject from  classc2 where lecture='Lecture' AND r11='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r11,lecture,subject from  classc2 where lecture='LAB' AND r11='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r11,lecture,subject from  classc2 where lecture='LAB' AND r11='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r11,lecture from  classc2 where lecture='Lab' AND r11='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].''; 
				$lab=$data['r11'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r11,lecture from  classc2 where lecture='Lecture' AND r11='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r11'].'';
				 $lec=$data['r11']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r11 from  classc2 where r11='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r11'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r12 -->


<tr>
    <td><div align="center">R12</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r12,lecture,subject from  classc2 where lecture='Lecture' AND r12='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r12,lecture,subject from  classc2 where lecture='LAB' AND r12='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r12,lecture,subject from  classc2 where lecture='Lecture' AND r12='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r12,lecture,subject from  classc2 where lecture='LAB' AND r12='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r12,lecture,subject from  classc2 where lecture='Lecture' AND r12='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r12,lecture,subject from  classc2 where lecture='LAB' AND r12='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r12,lecture,subject from  classc2 where lecture='LAB' AND r12='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r12,lecture from  classc2 where lecture='Lab' AND r12='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].''; 
				$lab=$data['r12'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r12,lecture from  classc2 where lecture='Lecture' AND r12='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r12'].'';
				 $lec=$data['r12']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r12 from  classc2 where r12='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r12'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r13 -->


<tr>
    <td><div align="center">R13</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r13,lecture,subject from  classc2 where lecture='Lecture' AND r13='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r13,lecture,subject from  classc2 where lecture='LAB' AND r13='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r13,lecture,subject from  classc2 where lecture='Lecture' AND r13='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r13,lecture,subject from  classc2 where lecture='LAB' AND r13='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r13,lecture,subject from  classc2 where lecture='Lecture' AND r13='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r13,lecture,subject from  classc2 where lecture='LAB' AND r13='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r13,lecture,subject from  classc2 where lecture='LAB' AND r13='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r13,lecture from  classc2 where lecture='Lab' AND r13='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].''; 
				$lab=$data['r13'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r13,lecture from  classc2 where lecture='Lecture' AND r13='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r13'].'';
				 $lec=$data['r13']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r13 from  classc2 where r13='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r13'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r14 -->


<tr>
    <td><div align="center">R14</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r14,lecture,subject from  classc2 where lecture='Lecture' AND r14='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r14,lecture,subject from  classc2 where lecture='LAB' AND r14='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r14,lecture,subject from  classc2 where lecture='Lecture' AND r14='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r14,lecture,subject from  classc2 where lecture='LAB' AND r14='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r14,lecture,subject from  classc2 where lecture='Lecture' AND r14='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r14,lecture,subject from  classc2 where lecture='LAB' AND r14='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r14,lecture,subject from  classc2 where lecture='LAB' AND r14='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r14,lecture from  classc2 where lecture='Lab' AND r14='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].''; 
				$lab=$data['r14'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r14,lecture from  classc2 where lecture='Lecture' AND r14='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r14'].'';
				 $lec=$data['r14']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r14 from  classc2 where r14='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r14'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r15 -->


<tr>
    <td><div align="center">R15</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r15,lecture,subject from  classc2 where lecture='Lecture' AND r15='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r15,lecture,subject from  classc2 where lecture='LAB' AND r15='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r15,lecture,subject from  classc2 where lecture='Lecture' AND r15='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r15,lecture,subject from  classc2 where lecture='LAB' AND r15='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r15,lecture,subject from  classc2 where lecture='Lecture' AND r15='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r15,lecture,subject from  classc2 where lecture='LAB' AND r15='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r15,lecture,subject from  classc2 where lecture='LAB' AND r15='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r15,lecture from  classc2 where lecture='Lab' AND r15='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].''; 
				$lab=$data['r15'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r15,lecture from  classc2 where lecture='Lecture' AND r15='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r15'].'';
				 $lec=$data['r15']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r15 from  classc2 where r15='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r15'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r16 -->


<tr>
    <td><div align="center">R16</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r16,lecture,subject from  classc2 where lecture='Lecture' AND r16='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r16,lecture,subject from  classc2 where lecture='LAB' AND r16='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r16,lecture,subject from  classc2 where lecture='Lecture' AND r16='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r16,lecture,subject from  classc2 where lecture='LAB' AND r16='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r16,lecture,subject from  classc2 where lecture='Lecture' AND r16='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r16,lecture,subject from  classc2 where lecture='LAB' AND r16='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r16,lecture,subject from  classc2 where lecture='LAB' AND r16='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r16,lecture from  classc2 where lecture='Lab' AND r16='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].''; 
				$lab=$data['r16'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r16,lecture from  classc2 where lecture='Lecture' AND r16='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r16'].'';
				 $lec=$data['r16']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r16 from  classc2 where r16='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r16'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r17 -->


<tr>
    <td><div align="center">R17</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r17,lecture,subject from  classc2 where lecture='Lecture' AND r17='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r17,lecture,subject from  classc2 where lecture='LAB' AND r17='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r17,lecture,subject from  classc2 where lecture='Lecture' AND r17='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r17,lecture,subject from  classc2 where lecture='LAB' AND r17='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r17,lecture,subject from  classc2 where lecture='Lecture' AND r17='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r17,lecture,subject from  classc2 where lecture='LAB' AND r17='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r17,lecture,subject from  classc2 where lecture='LAB' AND r17='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r17,lecture from  classc2 where lecture='Lab' AND r17='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].''; 
				$lab=$data['r17'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r17,lecture from  classc2 where lecture='Lecture' AND r17='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r17'].'';
				 $lec=$data['r17']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r17 from  classc2 where r17='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r17'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r18 -->


<tr>
    <td><div align="center">R18</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r18,lecture,subject from  classc2 where lecture='Lecture' AND r18='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r18,lecture,subject from  classc2 where lecture='LAB' AND r18='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r18,lecture,subject from  classc2 where lecture='Lecture' AND r18='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r18,lecture,subject from  classc2 where lecture='LAB' AND r18='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r18,lecture,subject from  classc2 where lecture='Lecture' AND r18='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r18,lecture,subject from  classc2 where lecture='LAB' AND r18='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r18,lecture,subject from  classc2 where lecture='LAB' AND r18='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r18,lecture from  classc2 where lecture='Lab' AND r18='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].''; 
				$lab=$data['r18'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r18,lecture from  classc2 where lecture='Lecture' AND r18='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r18'].'';
				 $lec=$data['r18']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r18 from  classc2 where r18='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r18'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r19 -->


<tr>
    <td><div align="center">R19</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r19,lecture,subject from  classc2 where lecture='Lecture' AND r19='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r19,lecture,subject from  classc2 where lecture='LAB' AND r19='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r19,lecture,subject from  classc2 where lecture='Lecture' AND r19='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r19,lecture,subject from  classc2 where lecture='LAB' AND r19='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r19,lecture,subject from  classc2 where lecture='Lecture' AND r19='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r19,lecture,subject from  classc2 where lecture='LAB' AND r19='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r19,lecture,subject from  classc2 where lecture='LAB' AND r19='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r19,lecture from  classc2 where lecture='Lab' AND r19='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].''; 
				$lab=$data['r19'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r19,lecture from  classc2 where lecture='Lecture' AND r19='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r19'].'';
				 $lec=$data['r19']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r19 from  classc2 where r19='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r19'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
	

			<!-- r20 -->


<tr>
    <td><div align="center">R20</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as r20,lecture,subject from  classc2 where lecture='Lecture' AND r20='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as r20,lecture,subject from  classc2 where lecture='LAB' AND r20='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r20,lecture,subject from  classc2 where lecture='Lecture' AND r20='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r20,lecture,subject from  classc2 where lecture='LAB' AND r20='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r20,lecture,subject from  classc2 where lecture='Lecture' AND r20='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r20,lecture,subject from  classc2 where lecture='LAB' AND r20='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as r20,lecture,subject from  classc2 where lecture='LAB' AND r20='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r20,lecture from  classc2 where lecture='Lab' AND r20='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].''; 
				$lab=$data['r20'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as r20,lecture from  classc2 where lecture='Lecture' AND r20='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['r20'].'';
				 $lec=$data['r20']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from  classc2");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as r20 from  classc2 where r20='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['r20'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>

</table>
                    <!--End Advanced Tables -->
                </div>
</div>			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				<p>
                  <?php   include "include/footer.php";  ?>
                </p>
