<?php 

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "todo_list";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connection_error){
	die("Connection failed: " . $conn->connection_error);
}


?>
