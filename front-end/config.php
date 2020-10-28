
<?php
$error = array();
$srever_name = "localhost:1306" ;
$user_name = "root" ;
$password = "admin";
$dbname = "online_test";
$conn = new mysqli($srever_name, $user_name, $password, $dbname) ;
if ($conn->connect_error) {
    die("Connection failled " . $conn->connect_error);
}

?>