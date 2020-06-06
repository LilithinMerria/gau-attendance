<?php 
require 'sessioncheck.php';
require 'connect.php';

$course=$_REQUEST['course'];
$attid=$_REQUEST['id'];

$q1="SELECT * from course  where code='$course'";
$result1 = mysqli_query($conn,$q1);
	$row=mysqli_fetch_assoc($result1);
	$coursename=$row['Name'];

$q2="SELECT * from attendance where id='$attid'";
$result2 = mysqli_query($conn,$q2);
	$row2=mysqli_fetch_assoc($result2);
	$coursedate=$row2['Date'];

$q3 = "SELECT * FROM student,schedule where std_id=student and course='$course'";
$res3=mysqli_query($conn,$q3);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Update Student Attendance</title>
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
        <style type="text/css">
        	form p{
        		font-weight: 500;
        	}
        	form label{
        		font-weight: 400;
        	}
        </style>
</head>
<body>
	<?php require 'nav.php'; ?>

	<div class="container">
		<br><br><br><br>
		

		<br>
		<h3 class="display-5" style="font-family: Poppins">&nbsp;Update Student Attendance</h3> <br>
		<h5 class="display-5" style="font-family: Poppins">&nbsp;<?php echo $coursename." - ".$coursedate ?></h5>
		<br>
		<div class="col-sm-7">
		<form action="attendanceupdate.php" method="POST">
			<input type="hidden" name="course" value="<?php echo $course; ?>">
			<input type="hidden" name="attid" value="<?php echo $attid; ?>">
		<?php 

			while($row3 = mysqli_fetch_assoc($res3)){
				$student=$row3['Std_id'];
				$check="SELECT * from std_attendance where Student='$student' and Attendance =$attid";
				$checkres=mysqli_query($conn,$check);
				$present=mysqli_fetch_row($checkres);
				
		?>
			
			<div class="radio-buttons" style="float:right;">
				<input type="radio" name="<?php echo $row3['Std_id'] ?>" value="1" required <?php echo ($present[2] ==1) ? 'checked' : ''; ?>>
				<label>Attended</label>
				<input type="radio" name="<?php echo $row3['Std_id'] ?>" value="2" <?php echo ($present[2] ==2) ? 'checked' : ''; ?>>
				<label>Not Attended</label>
				<input type="radio" name="<?php echo $row3['Std_id'] ?>" value="3" <?php echo ($present[2] ==3) ? 'checked' : ''; ?>>
				<label>Permitted</label>
			</div>
			<p><?php echo $row3['Name'] ." ". $row3['Surname'] ?></p>
		<?php
			}
		
		?>

		<input type="submit" class="btn btn-primary" value="Update">
		</form>
		</div>
				
	</div>
</body>
</html>