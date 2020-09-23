

			<!-- nirbhay -->


<tr>
    <td><div align="center">nirbhay</div></td>
	
    <td><div align="center">
      <?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture,subject from classc1 where lecture='Lecture' AND nirbhay='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				
		?>
    </div></td>
    <td> <div align="center">
     <?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture,subject from classc1 where lecture='LAB' AND nirbhay='P' AND subject='AJAVA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				
		?>
    </div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture,subject from classc1 where lecture='Lecture' AND nirbhay='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture,subject from classc1 where lecture='LAB' AND nirbhay='P' AND subject='MCAD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				
		?></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture,subject from classc1 where lecture='Lecture' AND nirbhay='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture,subject from classc1 where lecture='LAB' AND nirbhay='P' AND subject='NMA' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				
		?></div></td>
    <td><div align="center"> <?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture,subject from classc1 where lecture='LAB' AND nirbhay='P' AND subject='PPUD' ");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				
		?>
		
		<!--it is for total practicals -->
		
		</div>      <div align="center"></div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture from classc1 where lecture='Lab' AND nirbhay='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].''; 
				$lab=$data['nirbhay'];
		?>
		
		<!--it is for total lecture -->
		
		</div></td>
    <td><div align="center"><?php    $result=mysql_query("SELECT count(*) as nirbhay,lecture from classc1 where lecture='Lecture' AND nirbhay='P'");
               $data=mysql_fetch_assoc($result);
                 echo ''.$data['nirbhay'].'';
				 $lec=$data['nirbhay']; 
				
		?>
		
		<!--it is for total practical & lecture of roll 1 is present -->
		
		</div></td>
    <td><div align="center">
	
	     <?php  echo $lab+$lec;
		 
		 
		  ?>
	         <!--it is grand  total of practical & lecture of roll 1 -->
	</div></td>
    <td><div align="center">
	<?php    $result=mysql_query("SELECT count(*) as date from classc1");
               $data=mysql_fetch_assoc($result);
               // echo $data['date'];
			    $tot=$data['date'];
				//echo ' Days'; 
				
				
		?>
		
		<!--it is for total practical & lecture of roll 1 -->
		
	   <?php    $result=mysql_query("SELECT count(*) as nirbhay from classc1 where nirbhay='P'");
               $data=mysql_fetch_assoc($result);
                //echo 'P('.$data['r2'].')'; 
				 $present=$data['nirbhay'];
		?>
		
		<!--it is for percentage%-->
		
	<?php  echo $present*100/$tot;   ?>
	</div></td>
    </tr>
