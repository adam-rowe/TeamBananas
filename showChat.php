<?php
$servername = "127.0.0.1";
$username = "adam_rowe";
$password = "Iz5lHo4g";
$port = "3306";
$dbname = "TeamBananas";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $port, $dbname);


                $query = "SELECT * FROM chatroom";
                $run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($run)) {
                
            ?>
                
                <p>
                    
                    <span id="name_color"><?php echo $row['name'],':';?></span> <!--take name from database -->
                    <span id="text_color"><?php echo $row['message'];?></span>
                    <span id="time"><?php echo date('G:i a', strtotime($row['time']));?> </span>
                </p>
                
              <?php  }
             


?>