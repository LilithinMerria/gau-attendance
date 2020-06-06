<?php 

if(!empty($_SESSION['email'])){
    $queryi="SELECT *
    		FROM instructor WHERE email='".$_SESSION['email']."';";
    $resulti=mysqli_query($conn,$queryi);
    $rowi=mysqli_fetch_assoc($resulti);
}

if(!empty($_SESSION['admin'])){
    $querya="SELECT *
            FROM admin WHERE email='".$_SESSION['admin']."';";
    $resulta=mysqli_query($conn,$querya);
    $rowa=mysqli_fetch_assoc($resulta);
}
$name=$rowi['Name'];
if(empty($name)){
    $name=$rowa['Name'];
}

 ?>


	<!-- <nav class="navbar navbar-expand-lg navbar-dark primary-color"> -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark primary-color">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="index.php"><span><img src="assets/images/gau.png" style="height: 40px"></span></a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="instructor.php"></a>
                    </li>                   
                </ul>
                <!-- Links -->
                <div class="white-text"><span class="align-middle"><i class="fas fa-user-alt"></i><b> <?php echo " ", $name;?> &emsp;</b></span></div>
                <a class="btn btn-danger btn-sm pull-right" href="logout.php" role="button">Sign Out</a>
            </div>
            <!-- Collapsible content -->
        </nav>


