<?php
include("config.php");
$Enterstudentfirstname=$_POST["txt_studentfirstname"];
$Enterstudentlastname=$_POST["txt_studentlastname"];
$Enterdob=$_POST["txt_studentdob"];
$Enteremail=$_POST["txt_email"];
$Entercontact=$_POST["txt_contact"];
$Enterusername=$_POST["txt_username"];
$Enterpassword=$_POST["txt_userpassword"];


$sql=mysqli_query($con,"select ifnull(count(basicid),0)+1 AS 'COUNT' from tbl_candidatebasicdetails");
$row=mysqli_fetch_array($sql);
$appno=$row["COUNT"];
$currentyear=date("Y");
$applicationnumber=$appno+$currentyear;;
$admissionstatus="sdsds";
$courseid=2323;

$save=mysqli_query($con,"insert into tbl_candidatebasicdetails(first_name,last_name,dob,email,contact_number,username,password,applicationnumber,admission_status,courseid)values('$Enterstudentfirstname','$Enterstudentlastname','$Enterdob','$Enteremail','$Entercontact','$Enterusername','$Enterpassword','$applicationnumber','$admissionstatus','$courseid')");
//
echo "<script>alert('Course Registration Successfull!!!'); window.location='login.php'</script>";

//echo "insert into tbl_candidatebasicdetails(first_name,last_name,dob,email,contact_number,username,password,application_number,admission_status,courseid)values('$Enterstudentfirstname','$Enterstudentlastname','$Enterdob','$Enteremail','$Entercontact','$Enterusername','$Enterpassword','$applicationnumber','$admissionstatus','$courseid')";

//console.log($save);

?>