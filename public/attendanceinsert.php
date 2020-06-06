<?php 
require 'sessioncheck.php';
require 'connect.php';

$course=$_POST['course'];
$attid=$_POST['attid'];

$q3 = "SELECT * FROM student,schedule where std_id=student and course='$course'";
$students=mysqli_query($conn,$q3);
foreach($students as $student){
	$std=$student['Std_id'];
	$present=$_POST[$std]; 
	$insert="INSERT into std_attendance(Student,Attendance,Present) VALUES('$std',$attid,'$present')";
	$result=mysqli_query($conn,$insert);
}
$update ="UPDATE attendance set Active_flag=1 WHERE Id=$attid";
$updateresult=mysqli_query($conn,$update);
	echo "<script>alert('Attendance Record Inserted Successfully')</script>";
	echo "<script>location.href = 'viewattendance.php?courseid=$course'</script>"; 
 ?>