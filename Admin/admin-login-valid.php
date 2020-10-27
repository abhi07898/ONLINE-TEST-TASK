<?php
include 'config.php';
if (isset($_POST ['login'])) {
    $username = isset($_POST['username'])?$_POST['username']:'';
    $password = isset($_POST['password'])?$_POST['password']:'';
    echo $username;

    $sql = "SELECT * FROM   admin WHERE `username` = '" . $username . "' AND `password`='" . $password . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        while ($row = $result-> fetch_assoc()) {
            $_SESSION['admin'] = $username;
            header('location:admin-job.php'); 
           
        }
    } else {
        echo "login failled";
    }
    $conn->close();
} 
?>