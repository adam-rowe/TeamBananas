<?php
//database details
$servername = $_SERVER['DATABASE1_NAME'];
$username = $_SERVER['DATABASE1_USER'];
$password = $_SERVER['DATABASE1_PASS'];
//$port = "3306";
$dbname = $_SERVER['DATABASE1_HOST'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT User_id, First_Name, Last_Name FROM Users";
$result = mysqli_query($conn, $sql);



//http://webcheatsheet.com/php/connect_mysql_database.php
//echo "User Id ".$row["User_id"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"].;

?>

