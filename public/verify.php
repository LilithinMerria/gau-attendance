<?php 

session_start(); // starts a new session or resumes an existing session	
	require 'connect.php'; //establishes connection to the database(host,dbusername,dbpassword,dbname)
	$email = mysqli_real_escape_string($conn, $_POST['email']); //creates escape variables to prevent MySQL injection
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, 'SELECT * from instructor where email = "'.$email.'" and password ="'.$password.'"');
	$result2 = mysqli_query($conn, 'SELECT * from admin where Email = "'.$email.'" and password ="'.$password.'"');
	if(mysqli_num_rows($result)==1){ 
		$_SESSION['email'] = $email; //assigns a session variable unique to every instructor logged in
		echo "<script>location.href = 'instructor.php'</script>"; //redirects to the instructor home page
		
	}
	elseif(mysqli_num_rows($result2)==1){
		$_SESSION['admin'] = $email; //assigns a session variable unique to every admin logged in
		echo "<script>location.href = 'admin.php'</script>"; //redirects to the instructor home page
	}
	else{
		echo "<script>alert('Invalid username or password!')</script>";
		echo "<script>location.href = 'index.php'</script>"; 
	}

?>