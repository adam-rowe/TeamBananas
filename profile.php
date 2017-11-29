<?php
require('php/connect.php');

error_reporting(E_ALL);
ini_set('desplay_errors','1');

/*	$msg="";
	require('php/connect.php');//uses the connect.php file to access the database == step 2
	
	
  function getUserData($id)
  {
    $array = array()
    $query = "SELECT * FROM Users WHERE User_id = .$id");
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($query))
    {
      $array['User_id'] = $row ['User_id'];
      $array['First_Name'] = $row ['First_Name'];
      $array['Last_Name'] = $row ['Last_Name'];
      $array['Email'] = $row ['Email'];
      $array['Password'] = $row ['Password'];
      $array['Student_Status'] = $row ['Student_Status'];
      $array['College'] = $row ['College'];
    }
    
    return $array;
    
  }
        
   



   */


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    
    

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
              <a class="nav-link js-scroll-trigger" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="About.html">About</a>
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
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="chat.php">Chat</a>
            </li>
          </ul>
            
            
            <a href="logout.php"> <i class="fa fa-sign-out fa-3" style="font-size:36px;"></i></a>
            
      </div>
    </nav>

     <!-- Login Content -->
    
   <section class="success" id="about" class="masthead1">
      <div class="container">
        <h2 class="text-center signup-title">Profile Page</h2>
        <hr class="star-light">
          <div class="row">
            <div class="col-md-6 i-am-centered">
              <form role="form" method="POST" action="#">
                 
               
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                  


                          <div class="card">
                            <img src="img.jpg" alt="John" style="width:100%">
                            <h5>Name: Peter</h5>
                            <br />
                            <p1 class="title">Email: peter@ncirl.ie</p1>
                            <br />
                            <p1>Current Occupation: student</p1>
                            <br />
                            <p1>College: NCI</p1>
                            
                            
                            
                            
                     
                         </div>
                        
                    
                  
                  
                  
                 
                  
                  <hr class="colorgraph">
                  <div class="row">
                    
                      <div class="col-md-6"><a href="chat.php" class="btn btn-success btn-block btn-lg">Chat</a></div>
                      <div class="col-md-6"><a href="forms.html" class="btn btn-success btn-block btn-lg">Forums</a></div>
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