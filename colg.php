<?php
$link = mysqli_connect("localhost", "root", "", "studb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Course = mysqli_real_escape_string($link, $_REQUEST['Course']);
$Branch = mysqli_real_escape_string($link, $_REQUEST['Branch']);
$Semester = mysqli_real_escape_string($link, $_REQUEST['Semester']);
$AppliedUnder = mysqli_real_escape_string($link, $_REQUEST['AppliedUnder']);
$CET = mysqli_real_escape_string($link, $_REQUEST['CET']);
$Comedk = mysqli_real_escape_string($link, $_REQUEST['Comedk']);
$AIEEE = mysqli_real_escape_string($link, $_REQUEST['AIEEE']);
$CandidateName = mysqli_real_escape_string($link, $_REQUEST['CandidateName']);
$DOB = mysqli_real_escape_string($link, $_REQUEST['DOB']);
$MotherTongue = mysqli_real_escape_string($link, $_REQUEST['MotherTongue']);
$Religion = mysqli_real_escape_string($link, $_REQUEST['Religion']);
$Nationality = mysqli_real_escape_string($link, $_REQUEST['Nationality']);
$Category = mysqli_real_escape_string($link, $_REQUEST['Category']);
$BloodGroup = mysqli_real_escape_string($link, $_REQUEST['BloodGroup']);
$admissionnumber = mysqli_real_escape_string($link, $_REQUEST['admissionnumber']);
$CETTATNumber = mysqli_real_escape_string($link, $_REQUEST['CETTATNumber']);
$claimedcategory = mysqli_real_escape_string($link, $_REQUEST['claimedcategory']);
$PhysicallyHandicapped = mysqli_real_escape_string($link, $_REQUEST['PhysicallyHandicapped']);
$EconomicallyBackward = mysqli_real_escape_string($link, $_REQUEST['EconomicallyBackward']);
$Residenttype = mysqli_real_escape_string($link, $_REQUEST['Residenttype']);
$AdhaarNumber = mysqli_real_escape_string($link, $_REQUEST['AdhaarNumber']);

 
// attempt insert query execution
$sql = "INSERT INTO college (Course,Branch,Semester,AppliedUnder,CET,Comedk,AIEEE,CandidateName,DOB,MotherTongue,Religion,Nationality,Category,BloodGroup,admissionnumber,CETTATNumber,claimedcategory,PhysicallyHandicapped,EconomicallyBackward,Residenttype,AdhaarNumber) VALUES ('$Course','$Branch','$Semester','$AppliedUnder','$CET','$Comedk','$AIEEE','$CandidateName','$DOB','$MotherTongue','$Religion','$Nationality','$Category','$BloodGroup','$admissionnumber','$CETTATNumber','$claimedcategory','$PhysicallyHandicapped','$EconomicallyBackward','$Residenttype','$AdhaarNumber')";
if(mysqli_query($link, $sql)){
    header('Location:http://localhost:8080/Student/createmodify.html');
	//echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>