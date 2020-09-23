 		 
      <?php
 include "connection.php";
  
  if(isset($_POST['submit']))
  {
		//login detail
		$uemail=$_POST['txtuemail'];
		
		$pass=$_POST['txtpassword'];
		$conpass=$_POST["txtconfirmpass"];
		
		$utype="Faculty";
		
		$secque=$_POST["secquestion"];

		$ans=$_POST["txtanswer"];

		//personal detail
		
		
		$dept=$_POST["selectdept"];
		
		
		$class=$_POST["selectclass"];
		
		$title=$_POST['selecttitle'];
		$fnm=$_POST["txtfname"];
		$mnm=$_POST["txtmname"];
		$lnm=$_POST["txtlname"];
		
		$name=$title." ".$fnm." ".$mnm." ".$lnm;
		
		$gender=$_POST["gender"];
		
		$add=$_POST["txtaddress"];
		
		$city=$_POST["txtcity"];
		
		$bday=$_POST["txtdob"];
		
		$path="";

copy($_FILES["file"]["tmp_name"],"images/".$_FILES["file"]["name"]);

		$path="images/".$_FILES["file"]["name"];
		
		$mobno=$_POST["txtcontact"];
		
		$qualif=$_POST["selectqualif"];
		
		$experience=$_POST["selectexperience"];
		
		$D=getdate();

		$dt=$D["year"]."-".$D["mon"]."-".$D["mday"];
		$st="Active";
		
			/// login detail
			mysql_query("insert into tbllogin (useremail,password,usertype,secquestion,
														answer,registrationdate,status) values('$uemail','$pass','$utype','$secque','$ans','$dt','$st')") or die(mysql_error());
		
		// personal detail	
		$uid=mysql_insert_id();	
		
		mysql_query("insert into tblfacultymaster 		(loginid,department,class,facultyname,gender,dob,address,city,contact,qualification,experience, photo) 			values('$uid','$dept','$class','$name','$gender','$bday','$add','$city','$mobno',																			'$qualif','$experience','$path')") or die(mysql_error());
																					
			
			
			echo '<script> alert("Record Inserted Successfully");
                  window.location="viewfaculty.php";
			      </script>';

		
	}	
?>
