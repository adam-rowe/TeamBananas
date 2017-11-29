<?php
//database details



// Create connection
$conn = mysqli_connect('192.168.0.2', 'marlyn', 'Iz5lHo4g', 'gopagoda');


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT User_id, First_Name, Last_Name FROM Users";
$result = mysqli_query($conn, $sql);



//http://webcheatsheet.com/php/connect_mysql_database.php
//echo "User Id ".$row["User_id"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"].;

?>

