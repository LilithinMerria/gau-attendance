<?php 
require 'sessioncheck.php';
require 'connect.php';
$course=$_REQUEST['courseid'];
$q1="SELECT * from course  where code='$course'";
$result1 = mysqli_query($conn,$q1);
	$row=mysqli_fetch_assoc($result1);
	$coursename=$row['Name'];

$q2="SELECT * from course c, attendance a where c.code=a.course and c.code='$course' and Report_flag='1'"; // AND report=1
$res2=mysqli_query($conn,$q2);

$q3 = "SELECT * FROM student,schedule where std_id=student and course='$course'";
$res3=mysqli_query($conn,$q3);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Attendance Report</title>
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
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Poppins" rel="stylesheet"> 
        <style type="text/css">
        	table b{
        		font-weight: 500;
        	}
        </style>
</head>
<body>
	<?php require 'nav.php'; ?>

	<div class="container">

		<br><br><br><br>

		<nav aria-label="breadcrumb">
  			<ol class="breadcrumb">
    			<li class="breadcrumb-item"><a href="instructor.php"><b>Dashboard</b></a></li>
    			<li class="breadcrumb-item active"><b><?php echo $coursename; ?> / Attendance Form</b></li>
 		 	</ol>
		</nav>
			<br>
		<?php  
			$check=mysqli_num_rows($res2);
			$count=0;
			$count2=0;
			$att = array();
			$stdcount=1;

			if($check>0){

		?>
		<button style="font-size: 14px; margin-bottom: 20px" onclick="printData()" class="btn btn-sm print btn-primary">Print Form</button>
		
		<table id="myTable" style="margin-bottom: 150px" class="table table-bordered">
			<thead>
				<tr>
					<th class="font-weight-bold" >#</th>
					<th class="font-weight-bold">Student No.</th>
					<th class="font-weight-bold">Name</th>
					<?php 
						while($row2=mysqli_fetch_assoc($res2)){
						
						$count++;
					 ?>
					 <th class="font-weight-bold"><a class="text-primary" ><?php echo $row2['Date']; ?></a></th>
					<?php } ?>

				</tr>
			</thead>
			<?php while($row3=mysqli_fetch_assoc($res3)){
			 ?>
			<tbody>
				<tr>
					<td><b><?php echo $stdcount; $stdcount++; ?></b></td>
					<td><b><?php echo $row3['Std_id'] ?></b></td>
					<td><b><?php echo $row3['Name'];?> &nbsp; &nbsp;<?php echo $row3['Surname'] ?></b></td>
					<?php 
					for($i=0;$i<$count;$i++) {
							?>
					 <td></td>
					<?php }
						
					?>

				</tr>

			<?php
			
			 } ?>
			</tbody>

			<?php
		}
	else{
		?>
		<h5 class="display-5" style="font-family: Poppins">&nbsp;&nbsp;&nbsp; No Report Available</h5>
		<?php
	}
	?>
		</table>


	</div>
<script>
	function printData1()
	{
	   var divToPrint=document.getElementById("myTable");
	   newWin= window.open("");
	   newWin.document.write(divToPrint.outerHTML);
	   newWin.print();
	   newWin.close();
	}
	function printData() {
        $('.breadcrumb').hide();
        $('.print').hide();
        //Print Page
        window.print();
        $('.breadcrumb').show();
        $('.print').show();
       

    }
</script>
</body>
</html>