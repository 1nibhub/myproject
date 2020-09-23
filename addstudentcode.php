     <?php
 include "connection.php";
  
  if(isset($_POST['submit']))
  {
		//login detail
		
		$path="";

copy($_FILES["file"]["tmp_name"],"images/".$_FILES["file"]["name"]);

$path="images/".$_FILES["file"]["name"];
		
		
		/*$uemail=$_POST['txtuemail'];
		
		$pass=$_POST['txtpassword'];
		$conpass=$_POST["txtconfirmpass"];
		
		$utype="Student";
		
		$secque=$_POST["secquestion"];

		$ans=$_POST["txtanswer"];*/

		//personal detail
		$eno=$_POST["txteno"];
		$rno=$_POST["txtrno"];
		$sd=$_POST["selectdept"];
		$sc=$_POST["selectclass"];
		
		//$class=$sd." ".$sc;
		
		$fnm=$_POST["txtfname"];
		$mnm=$_POST["txtmname"];
		$lnm=$_POST["txtlname"];
		
		$name=$fnm." ".$mnm." ".$lnm;
		
		$gender=$_POST["gender"];
		$add=$_POST["txtaddress"];
		$city=$_POST["txtcity"];
		
		$bday=$_POST["txtdob"];
		
		
		$mobno=$_POST["txtcontact"];
		
		
		
		/*$D=getdate();

		$dt=$D["year"]."-".$D["mon"]."-".$D["mday"];
		$st="Active";*/
		
			/// login detail
			/*mysql_query("insert into tbllogin (useremail,password,usertype,secquestion,
														answer,registrationdate,status) values('$uemail','$pass','$utype','$secque','$ans','$dt','$st')") or die(mysql_error());
		*/
		// personal detail	
		$uid=mysql_insert_id();	
		
		mysql_query("insert into tblstudentmaster 		(loginid,enrollmentno,rollno,department,class,studentname,gender,dob,address,city,contact,photo) 			values('$uid','$eno','$rno','$sd','$sc','$name','$gender','$bday','$add','$city','$mobno',																			'$path')") or die(mysql_error());
																					
			
			
			echo '<script> alert("Record Inserted Successfully");
                  window.location="viewstudent.php";
			     </script>';

		
	}	
?>
