<?php 

require "db.php";
if(isset($_POST['save'])){

$schol = $_POST['school'];
$whatDid = $_POST['did'];
$couse = $_POST['course'];
$sdate = $_POST['startdate'];
$edate = $_POST['enddate'];
$qtions = $_POST['qualifications'];
$ctions = $_POST['certifications'];
$referee = $_POST['referees'];

$insert = "insert into educatiiokloon( nameSchool,whatDid,course,startDate,endDate,qualifications,certification,referees)VALUES('$schol','$whatDid','$couse','$sdate','$edate','$qtions','$ctions','$referee')";

$qury=mysqli_query($con,$insert);
if($qury){

   
$newURL = "userlogin.php";
header('Location: '.$newURL);
}

}

?>