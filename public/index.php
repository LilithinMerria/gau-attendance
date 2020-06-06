<?php session_start();
if(isset($_SESSION['email'])){
header('Location: instructor.php'); //forces redirect to instructor home page when instructor is logged in
}
if(isset($_SESSION['admin'])){
header('Location: admin.php'); //forces redirect to instructor home page when instructor is logged in
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Girne American University</title>
        <link rel="shortcut icon" type="image/x-icon" href="gauicon.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/login.css">
    </head>
    <body>
        <div class="login-form">
            <h2>SIGN IN</h2>
            <form action="verify.php" method="post">
                <div class="text-center">
                    <img src="assets/images/avatar.gif" class="img-circle avatar" alt="Avatar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" name="email" required="required">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </div>
            </form>
        </div>
    </body>
</html>