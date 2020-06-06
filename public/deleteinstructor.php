<?php 

require 'connect.php';

$id=$_REQUEST['id'];
$query = "DELETE FROM instructor WHERE Staff_id='".$id."'"; 
if(mysqli_query($conn,$query))
{
	echo "<script>alert('Instructor Successfully Deleted!')</script>";
	echo "<script>location.href = 'instructorslist.php'</script>"; 
}
else{
	echo "<script>alert('Error deleting!')</script>";
	echo "<script>location.href = 'instructorslist.php'</script>"; 
}
?>