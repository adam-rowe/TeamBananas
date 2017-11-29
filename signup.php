<?php



   require('php/connect.php');
   
    if (isset($_POST['First_Name']) && isset($_POST['Password'])){
      $conn = new mysqli('127.0.0.1', 'adam_rowe', 'Iz5lHo4g', 'gopagoda	');
      
        $First_Name = $conn->real_escape_string($_POST['First_Name']);
        $Last_Name = $conn->real_escape_string($_POST['Last_Name']);
        $Email = $conn->real_escape_string($_POST['Email']);
        $Password = $conn->real_escape_string($_POST['Password']);
        $password_confirmation = $conn->real_escape_string($_POST['password_confirmation']);
        $Student_Status = $conn->real_escape_string($_POST['radio']);
        $College = $conn->real_escape_string($_POST['Option']);
        
        if($First_Name == "" || $Last_Name == "" || $Email =="" || $Password != $password_confirmation)
          $msg = "Please check your inputs!";
        else{
          $sql = $conn->query("SELECT User_id FROM Users WHERE Email ='$Email'");
          if ($sql->num_rows > 0){
            $msg = "Email already registered";
          }
          else{
            $Confirm_code ='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890';
            $Confirm_code = str_shuffle($Confirm_code);
            $Confirm_code = substr($Confirm_code,0, 10);
            
            
            $conn->query("INSERT INTO `Users` (`First_Name`, `Last_Name`, `Email`, `Password`, `Student_Status`, `College`,	`Confirmed`,`Confirm_code`) VALUES ('$First_Name','$Last_Name', '$Email', '$Password', '$Student_Status','$College','0','$Confirm_code');");
          
          $msg = "Thank you for registering, please verify your account by email before logging in!";
          
          
          $to      = $Email; // Send email to our user
          $subject = 'Verification'; // Give the email a subject 
          $message = '
 
          Thanks for signing up!
          Your account has been created
           
           
          This is your activation code:
          https://team-project-adam-rowe.c9users.io/EmailVerify.php?Email='.$Email.'&Confirm_code='.$Confirm_code.'
           
          '; // Our message above including the link
                               
          $headers = 'From:x15331296@student.ncirl.ie' . "\r\n"; // Set from headers
          mail($to, $subject, $message); // Send our email
                    
        }
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

   <!--
    <script>
      
      function validate(){
        
        var college  = document.getElementById("college").value;
        var email = document.getElementById("Email").value;
        var success = true;
        //var colleges = ["student.ncirl.ie","dcu.ie","tcd.ie"];
        
        
        
        alert("the value of the email is : "+email);
        
       //  var re =  /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
          var array = email.split("@");
          var domain = array[1];
    
        /*
          This is the email testing...
        */
        if(email !=""){
          alert("the test function is being called");
          
          for(var i=0;i < locations.length;i ++){
            
            var location = locations[i];
            
             if(domain == location){
              alert("we have a valid college email address");
            
            document.getElementById("unknownEmail").style.display = "none";
             }
          else{
            document.getElementById("unknownEmail").style.display = "inline";
            success = false;
          } 
          }
          
        }
        else{
          document.getElementById("badEmail").style.display = "inline";
          success = false;
        }
        
        
      
        /*
          This is the college testing...
        */
        
        if(college == "college"){
          document.getElementById("badCollege").style.display = "inline";
          success = false;
        }
        else{
          document.getElementById("badCollege").style.display = "none";
        }
        
        
        // when all conditions are finished...
        
        if(success){
          //this is where we would invoke the call using ajax....
        }
     
      }
      
      
    </script> -->
    

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
      </div>
    </nav>

     <!-- Signup Content -->
    
   <section class="success" id="about" class="masthead1">
      <div class="container">
        <h2 class="text-center signup-title">Sign Up</h2>
        <hr class="star-light">
          <div class="row">
            <div class="col-md-6 i-am-centered">
              
              <?php if($msg !="") echo $msg . "<br></br>" ?>
             
              <form action ="signup.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <p class="signup-p">Name</p>
                        <input type="text" name="First_Name" id="First_Name" class="form-control input-lg" placeholder="First Name" required tabindex="1">
                       </div>
                    </div>
                    <div class="col-md-6">
                     <div class="form-group">
                       <p class="signup-p"> Last Name</p>
                       <input type="text" name="Last_Name" id="Last_Name" class="form-control input-lg" placeholder="Last Name" required tabindex="2">
                     </div>
                    </div>
                 </div>
                 <!--validation
                 <div id="badEmail" class="row" style="display:none;">
                    <div class="col-md-12">
                      <div class="alert alert-danger">
                          <strong>Warning!</strong> You must provide a valid email address
                      </div>  
                    </div>
                  </div>         -->
                  <!--validation
                <div id="unknownEmail" class="row" style="display:none;">
                    <div class="col-md-12">
                      <div class="alert alert-warning">
                          <strong>Warning!</strong> You must provide a valid college email address
                      </div>  
                    </div>
                  </div>       -->      
                <div class="form-group">
                  <p class="signup-p">Email</p>
                  <input type="email" name="Email" id="Email" class="form-control input-lg" placeholder="Email Address" required tabindex="4">
                 </div>        
                 
                 <div class="row">
                   <div class="col-md-6">
                      <div class="form-group">
                          <p class="signup-p">Password</p>
                          <input type="password" name="Password" id="Password" class="form-control input-lg" placeholder="Password" required tabindex="5">
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                          <p class="signup-p">Confirm Password</p>
                          <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" required tabindex="6">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="radio-inline1">
                          <p class="signup-p">Student Status</p>
                          <input type="radio" name="radio" value="Secondary Level">
                          Secondary Level
                        </label>
                        <label class="radio-inline2">
                          <input type="radio" name="radio" value="Third Level">
                          Third Level
                        </label>
                        <label class="radio-inline3">
                          <input type="radio" name="radio" value="Mature">
                          Mature
                        </label>
                      </div>
                      
                    </div>
                    <!--validation
                  </div>
                  <div id="badCollege" class="row">
                    <div class="col-md-12">
                      <div class="alert alert-danger">
                          <strong>Warning!</strong> You must provide the details of the college.
                      </div>  
                    </div>
                  </div>         -->
                  <!--validation college-->
                  <div class="row">
                    <div class="col-md-12">
                      <select id="college" class="drop-down-menu" name= "Option">
                        <option value="college">Select College</option>
                        <option value="Secondary">Second Level</option>
                        <option value="Mature">Mature Student</option>
                        <option value="NCI">NCI</option>
                        <option value="DCU">DCU</option>
                        <option value="Trinity">Trinity College</option>
                        <option value="UCD">UCD</option>
                      </select>
                    </div>
                  </div>
                  <hr class="colorgraph">
                  <div class="row">
                    <div class="col-md-6">
                       <input type="submit" value="Register" class ="btn btn-primary btn-block btn-lg" tabindex="7">
                     </div>
                     <!-- <button onclick="validate();">Test Validate</button> -->
                     <div class="col-md-6"><a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a></div>
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
