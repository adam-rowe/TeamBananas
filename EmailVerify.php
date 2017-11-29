<?php
$msg ="";
$servername = "127.0.0.1";
$username = "adam_rowe";
$password = "Iz5lHo4g";
$port = "3306";
$dbname = "TeamBananas";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $port, $dbname);

// Check connection


if(isset($_GET['Email']) && !empty($_GET['Email']) AND isset($_GET['Confirm_code']) && !empty($_GET['Confirm_code'])){
    // Verify data
    $email = mysql_escape_string($_GET['email']); // Set email variable
    $Confirm_code = mysql_escape_string($_GET['Confirm_code']); // Set hash variable
                 
    $search = mysql_query("SELECT Email, Confirm_code, Confirmed FROM Users WHERE Email='$Email' AND Confirm_code='$Confirm_code' AND Confirmed='0'") or die(mysql_error()); 
    $match  = mysql_num_rows($search);

if($match >0){
      
        mysql_query("UPDATE Users SET Confirmed='1' WHERE Email='$Email' AND Confirm_code='$Confirm_code' AND Confirmed='0'") or die(mysql_error());
        $msg="Your account has been activated, you can now login";
        
    }else{
        $msg ="The url is either invalid or you already have activated your account.";
    }
                 
}




?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Verify</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">
     <link href="css/freelancer.css" rel="stylesheet">
    
    <!--signup page custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/signup.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

   
   
   

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Team Project Bananas</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html">About</a>
            </li>
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="SignUp.html">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Login.html">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="forms.html">Forums</a>
            </li>
             </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="chat.html">Chat</a>
            </li>
      </div>
    </nav>

     <!-- Signup Content -->
    
   <section class="success" id="about" class="masthead1">
      <div class="container">
        <h2 class="text-center verify-title">Verify</h2>
        <hr class="star-light">
        <div>
          <?php if($msg !="") echo $msg . "<br></br>" ?>
        </div>
    
          </div>
     
    </section>

    
    <!-- Footer -->
    <footer class="text-center">
      <div class="footer-above">
       
      </div>
      <div class="footer-below">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              Copyright &copy; team project Bananas
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
