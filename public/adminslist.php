<?php 
require 'sessioncheck.php';
require 'connect.php';

$query= "SELECT *
			FROM admin";
	$result= mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Admin Dashboard</title>
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
	<?php require 'nav.php'; ?>

	<div class="container">
		<br><br><br><br>
		<?php  
		$check=mysqli_num_rows($result);

		if($check>0){

		?>
		<br>
		<h3 class="display-5" style="font-family: Poppins">&nbsp;Admins List</h3>
		<br>
		<table class="table table-hover">
			<thead class="grey lighten-2">
				<tr>
					<th class="font-weight-bold">NAME</th>
					<th class="font-weight-bold">EMAIL</th>
				</tr>
			</thead>
		<?php 

			while($row = mysqli_fetch_assoc($result)){
				
		?>
			<tbody>
				<tr>
					<td class="align-middle font-weight-bold"><b><?php echo $row['Name']?></b></td>
					<td class="align-middle font-weight-bold"><b><?php echo $row['Email']?></b></td>
				</tr>
		</tbody>
		<?php
			}
		}
		else{
			echo "<h4>No data available!</h4>";
		}
		?>
		</table>
				
	</div>
</body>
</html>