
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
                        <h1 class="page-header"><small>Welcome to CE2 Attendance Sheet of NMA</small></h1>
						<ol class="breadcrumb">
					  <!--<li><a href="#">Home</a></li>-->
					  <li><a href="facultyhome.php">Faculty Home</a></li>
					 <!-- <li class="active"><a href="addfaculty.php">Add Faculty</a></li>-->
					</ol> 
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
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
   <th>R1</th>
   <th>R2</th>
   <th>R3</th>
   <th>R4</th>
   <th>R5</th>
   <th>R6</th>
   <th>R7</th>
   <th>R8</th>
   <th>R9</th>
   <th>R10</th>
   <th>R11</th>
   <th>R12</th>
   <th>R13</th>
   <th>R14</th>
   <th>R15</th>
   <th>R16</th>
   <th>R17</th>
   <th>R18</th>
   <th>R19</th>
   <th>R20</th>
   
   <th>Action</th>
   </tr>
          <?php
	include "connection.php";
	
	$res=mysql_query("select * from  classc2 where subject='NMA'");
	
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
			   /*$result=mysql_query(" SELECT SUM(r1+r2+r3+r4+r5) AS total FROM  classc2");
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
   <th>  <?php    $result=mysql_query("SELECT count(*) as date from  classc2 where subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo $data['date'];
				echo '  Labs&Lecture'; 
		?>
		
		
		</th>
   <th> </th>
   <th></th> 
    <th>Total Attendance</th>
   <th>  <?php    $result=mysql_query("SELECT count(*) as r1 from  classc2 where r1='P' AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r1'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r1 from  classc2 where r1='A' AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r1'].')'; 
				
		?>
	<?php /*?>	 <?php    $result=mysql_query("SELECT count(*) as r1 from  classc2 where subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'NMA('.$data['r1'].')'; 
				
		?><?php */?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r2 from  classc2 where r2='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r2'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r2 from  classc2 where r2='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r2'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r3 from  classc2 where r3='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r3'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r3 from  classc2 where r3='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r3'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r4 from  classc2 where r4='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r4'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r4 from  classc2 where r4='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r4'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r5 from  classc2 where r5='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r5'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r5 from  classc2 where r5='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r5'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r6 from  classc2 where r6='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r6'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r6 from  classc2 where r6='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r6'].')'; 
				
		?>
	</th><th>  <?php    $result=mysql_query("SELECT count(*) as r7 from  classc2 where r7='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r7'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r7 from  classc2 where r7='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r7'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r8 from  classc2 where r8='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r8'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r8 from  classc2 where r8='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r8'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r9 from  classc2 where r9='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
               echo 'P('.$data['r9'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r9 from  classc2 where r9='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r9'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r10 from  classc2 where r10='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
               echo 'P('.$data['r10'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r10 from  classc2 where r10='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r10'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r11 from  classc2 where r11='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r11'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r11 from  classc2 where r11='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r11'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r12 from  classc2 where r12='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r12'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r12 from  classc2 where r12='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r12'].')'; 
				
		?>
<th>  <?php    $result=mysql_query("SELECT count(*) as r13 from  classc2 where r13='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r13'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r13 from  classc2 where r13='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r13'].')'; 
				
		?>
	</th>
	
	<th>  <?php    $result=mysql_query("SELECT count(*) as r14 from  classc2 where r14='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r14'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r14 from  classc2 where r14='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r14'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r15 from  classc2 where r15='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r15'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r15 from  classc2 where r15='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r15'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r16 from  classc2 where r16='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                 echo 'P('.$data['r16'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r16 from  classc2 where r16='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r16'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r17 from  classc2 where r17='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
               echo 'P('.$data['r17'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r17 from  classc2 where r17='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r17'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r18 from  classc2 where r18='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r18'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r18 from  classc2 where r18='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r18'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r19 from  classc2 where r19='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r19'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r19 from  classc2 where r19='A'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'A('.$data['r19'].')'; 
				
		?>
	</th>
	<th>  <?php    $result=mysql_query("SELECT count(*) as r20 from  classc2 where r20='P'  AND subject='NMA'");
               $data=mysql_fetch_assoc($result);
                echo 'P('.$data['r20'].')'; 
				
		?>
		<?php    $result=mysql_query("SELECT count(*) as r20 from  classc2 where r20='A'  AND subject='NMA'");
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
