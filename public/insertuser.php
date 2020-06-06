<?php 
require 'connect.php';
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$type=$_POST['type'];

if($type==2){
	$q2="INSERT into instructor(Email,Password,Name) VALUES('$email','$password','$name')";
}else{
	$q2="INSERT into admin(Email,Password,Name) VALUES('$email','$password','$name')";
}
	
	if(mysqli_query($conn,$q2)){
		echo "<script>alert('User Successfully Created')</script>";
		echo "<script>location.href = 'createuser.php'</script>"; 
    }
	else{
		echo "<script>alert('Error inserting user!')</script>";
		echo "<script>location.href = 'createuser.php'</script>"; 
    }

?>