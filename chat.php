

<?php 
    require('php/connect.php');
    session_start();
    
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">
    
    <!-- jQuery library -->
    <script 
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <!--Custom CSS for chat.php-->
    <link rel="stylesheet" type="text/css" href="css/chat.css">
    
    <script>
    /*global $*/
        
        $(document).ready(function(e){
            
            function showChat(){
                
                
            
            $.ajax({
                
                url: 'showChat.php',
                type: 'POST',
                success: function(data){
                    $("#chatDisplay").html(data);
                }
                
            });
            
        }
        
        setInterval(function() {showChat()}, 1000);
            
            $('#send-messageBtn').click(function(e){
                 var name = $("#userName").val();
                 var message = $("#message").val();
                 $("#chatForm")[0].reset(); //Clears text fields
                 
                 
                 $.ajax({
                     
                     url: 'sendChat.php',
                     type: 'POST',
                     data: {
                         uname: name,
                         umessage: message
                     }
                     
                 });
            });  
        });
        
        
        
    </script>
    
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top1" id="mainNav">
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
      </div>
    </nav>

    <!-- Header -->
   <header class="masthead1" >
        <div class="container-fluid">
            
            <h3 class="text-center">General Chat</h3>
            
            <hr class="star-light">
            
            
            <div id="chat-box">
            
            
            <div id="chatDisplay"></div>
                
            </div>
            
            <form id="chatForm">
                
                <input type="text" id="userName" placeholder="Enter your name"><br>     
                <textarea name="message" id="message" cols="30" rows="2" placeholder="Type your message"></textarea><br>
               
                <button class="btn btn-success btn-lg" id="send-messageBtn">Send</button>
                
            </form>
            
        </div>
            
    </header>   
     
 

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
