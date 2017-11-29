
<?php
	require('php/connect.php');//uses the connect.php file to access the database == step 2
     If the values are posted, insert them into the database.
    if (isset($_POST['First_Name']) && isset($_POST['Password'])){
        $First_Name = $_POST['First_Name'];
        $Last_Name = $_POST['Last_Name'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $password_confirmation =$_POST['password_confirmation'];
        $Student_Status = $_POST['Student_Status'];
        $College = $_POST['College'];
        
         if($First_Name == "" || $Last_Name == "" || $Email =="" || $Password != $password_confirmation){
          echo "<script type='text/javascript'>alert('Please check your inputs!')</script>";
         }else
         $query = "INSERT INTO `Users` (First_Name, Last_Name, Email, Password, Student_Status, College) VALUES ('$First_Name','$Last_Name', '$Email', '$Password', '$Student_Status','$College')";
        $result = mysqli_query($conn, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
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

   
   <script>
      
      function validate(){
        
        var college  = document.getElementById("college").value;
        var email = document.getElementById("Email").value;
        var success = true;
        var colleges = ["student.ncirl.ie","dcu.ie","tcd.ie"];
        
        
        
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
      
      
    </script>
   

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
              <a class="nav-link js-scroll-trigger" href="Login.html"</a>
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
        <h2 class="text-center signup-title">Sign Up</h2>
        <hr class="star-light">
          <div class="row">
            <div class="col-md-6 i-am-centered">
              
            <!--  <form action ="signup.php" method="post"> -->
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
                
                <div id="badEmail" class="row" style="display:none;">
                    <div class="col-md-12">
                      <div class="alert alert-danger">
                          <strong>Warning!</strong> You must provide a valid email address
                      </div>  
                    </div>
                  </div>
                  
                  <div id="unknownEmail" class="row" style="display:none;">
                    <div class="col-md-12">
                      <div class="alert alert-warning">
                          <strong>Warning!</strong> You must provide a valid college email address
                      </div>  
                    </div>
                  </div>
                <div class="form-group">
                  <p class="signup-p">Email</p>
                  <input name="Email" id="Email" class="form-control input-lg" placeholder="Email Address" required tabindex="4">
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
                          <input type="radio" name="student">
                          Secondary Level
                        </label>
                        <label class="radio-inline2">
                          <input type="radio" name="student">
                          Third Level
                        </label>
                        <label class="radio-inline3">
                          <input type="radio" name="student">
                          Mature
                        </label>
                      </div>
                      
                    </div>
                  </div>
                  
                  <div id="badCollege" class="row">
                    <div class="col-md-12">
                      <div class="alert alert-danger">
                          <strong>Warning!</strong> You must provide the details of the college.
                      </div>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <select id="college" class="drop-down-menu">
                        <option value="college">Select College</option>
                        <option value="trinity">Second Level</option>
                        <option value="trinity">Mature Student</option>
                        <option value="nci">NCI</option>
                        <option value="dcu">DCU</option>
                        <option value="trinity">Trinity College</option>
                        <option value="ucd">UCD</option>
                      </select>
                    </div>
                  </div>
                  <hr class="colorgraph">
                  <div class="row">
                    <div class="col-md-6">
                       <input type="submit" value="Register" class ="btn btn-primary btn-block btn-lg" tabindex="7">
                     </div>
                     <button onclick="validate();">Test Validate</button>
                     <div class="col-md-6">
                       <a href="login.php" class="btn btn-success btn-block btn-lg">Log In</a>
                     </div>
                  </div>
        <!--      </form>   -->
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
