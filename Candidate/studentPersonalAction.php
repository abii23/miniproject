<?php
include("config.php");
$Enterhousename=$_POST["txt_housename"];
$Entergender=$_POST["txt_rbgender"];
$Enterreligion=$_POST["txt_Religion"];
$Entercaste=$_POST["txt_caste"];
$Entercity=$_POST["txt_city"];
$Enterpincode=$_POST["txt_pincode"];
$applicationnumber=202101;
$stateid=2;
$distid=2323;

$save=mysqli_query($con,"insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')");
//
echo "<script>alert('Course Registration Successfull!!!'); window.location='parent.php'</script>";
//echo "insert into tbl_candidatepersonaldetails(housename,gender,religion,caste,city,pincode,applicationnumber,distid,stateid)values('$Enterhousename','$Entergender','$Enterreligion','$Entercaste','$Entercity','$Enterpincode','$applicationnumber','$distid','$stateid')";

//console.log($save);

?>