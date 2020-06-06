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
	$update="UPDATE std_attendance set Present='$present' WHERE STUDENT='$std' and Attendance =$attid";
	$result=mysqli_query($conn,$update);
}

	echo "<script>alert('Attendance Record Updated Successfully')</script>";
	echo "<script>location.href = 'viewattendance.php?courseid=$course'</script>"; 
 ?>