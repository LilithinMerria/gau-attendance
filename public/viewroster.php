<?php 
require 'sessioncheck.php';
require 'connect.php';
$course=$_REQUEST['courseid'];
$q1="SELECT * from course  where code='$course'";
$result1 = mysqli_query($conn,$q1);
	$row=mysqli_fetch_assoc($result1);
	$coursename=$row['Name'];

$q3 = "SELECT * FROM student,schedule where std_id=student and course='$course'";
$res3=mysqli_query($conn,$q3);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Course Roster</title>
	<link rel="shortcut icon" type="image/x-icon" href="gauicon.png" />
	<!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" rel="stylesheet">
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/js/mdb.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins" rel="stylesheet"> 
</head>
<body>
	<?php require 'nav.php' ?>

	<div class="container">

		<br><br><br><br>

		<nav aria-label="breadcrumb">
  			<ol class="breadcrumb">
    			<li class="breadcrumb-item"><a href="instructor.php"><b>Dashboard</b></a></li>
    			<li class="breadcrumb-item active"><b><?php echo $coursename; ?> / Course Roster</b></li>
 		 	</ol>
		</nav>
			<br>
		<?php  
			$check=mysqli_num_rows($res3);
			$stdcount=1;

			if($check>0){

		?>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="font-weight-bold" >#</th>
					<th class="font-weight-bold">Student No.</th>
					<th class="font-weight-bold">Name</th>
				</tr>
			</thead>
			<?php while($row3=mysqli_fetch_assoc($res3)){
			 ?>
			<tbody>
				<tr>
					<td><b><?php echo $stdcount; $stdcount++ ?></b></td>
					<td><b><?php echo $row3['Std_id'] ?></b></td>
					<td><b><?php echo $row3['Name'];?> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php echo $row3['Surname'] ?></b></td>
				</tr>
				<?php

			 } ?>

			</tbody>

		<?php }

		else{
		 ?>
		 	<h5 class="display-5" style="font-family: Poppins">&nbsp;&nbsp;&nbsp; No Roster for Selected Course</h5>
		<?php } ?>


		</table>

	</div>

</body>
</html>
