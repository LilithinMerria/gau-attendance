<?php 
require 'sessioncheck.php';
require 'connect.php';

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
         <style type="text/css">
            input,select{
                width:100%;
            }
        </style>
</head>
<body>
	<?php require 'nav.php'; ?>

	<div class="container" style="padding-top: 200px">
		
		<div class="row text-center">
            <div class="col-sm-4">
                
            </div>
            <div class="col-sm-4">
                <h3><b>Create User</b></h3>
                <form action="insertuser.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <select name="type" required>
                            <option value="">Select User Type</option>
                            <option value="1">Admin</option>
                            <option value="2">Instructor</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin-right: 10px">
                        <input type="submit" class="btn btn-primary" value="Create">
                    </div>
                </form>
            </div>
		  
		</div>		
	</div>
</body>
</html>