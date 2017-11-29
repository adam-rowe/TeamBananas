<?php

      
         //database details
          $servername = "127.0.0.1";
          $username = "adam_rowe";
          $password = "Iz5lHo4g";
          $port = "3306";
          $dbname = "TeamBananas";


          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $port, $dbname);
          session_start();        
	
	      if(isset($_POST['email']))

        {
            $email = $_POST ['email'];
            $password =$_POST ['password'];
            
            
            $query = "SELECT * FROM Users WHERE Email='$email' AND Password='$password' LIMIT 1";
            if($result = mysqli_query($conn, $query)){

            if(mysqli_num_rows($result) > 0){

              //user account exists
              $member = mysqli_fetch_array($result, MYSQLI_ASSOC);
              $email = $member["Email"];
              header('Location: profile.php');

            } else {
        
                //user account does not exist
                header('Location: failedlogin.html');
        
            }

            } else {
            
                echo "Error executing database query.";
            
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

    <title>Login</title>

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
              <a class="nav-link js-scroll-trigger" href="signup.php">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="forms.html">Forums</a>
            </li>
             </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="chat.php">Chat</a>
            </li>
      </div>
    </nav>

     <!-- Login Content -->
    
   <section class="success" id="about" class="masthead1">
      <div class="container">
        <h2 class="text-center signup-title">Log In</h2>
        <hr class="star-light">
          <div class="row">
            <div class="col-md-6 i-am-centered">
              <form role="form" method="post" action="#">
                 
               
               
               <div class="form-group">
                  <p class="signup-p">Email</p>
                  <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" required tabindex="4">
                 </div>
                 
                 <div class="row">
                   <div class="col-md-6">
                      <div class="form-group">
                          <p class="signup-p">Password</p>
                          <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required tabindex="5">
                       </div>
                    </div>
                    
                  </div>
                 
                  
                  <hr class="colorgraph">
                  <div class="row">
                    
                     <div class="col-md-12">
                       <button name = "btn_log"  class="sign-in-sign" type="submit"  > Sign In </button> 
                     </div>
                  </div>
              </form>
            </div>
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