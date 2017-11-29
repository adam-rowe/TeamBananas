<?php
//database details
$servername = "192.168.0.2";
$username = "marlyn";
$password = "Iz5lHo4g";
$port = "3306";
$dbname = "gopagoda";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $port, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT User_id, First_Name, Last_Name FROM Users";
$result = mysqli_query($conn, $sql);



//http://webcheatsheet.com/php/connect_mysql_database.php
//echo "User Id ".$row["User_id"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"].;

?>

