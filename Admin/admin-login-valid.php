<?php
include 'config.php';
$username_err = $password_err = $incorrect= '';
$username = $password = '';
if (isset($_POST ['login'])) {
    if (empty($_POST['username'])) {
        $username_err = "Required Field";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $password_err = "Required Field";
    } else {
        $password = $_POST['password'];
    }
    if ($username_err=='' and $password_err == '') {
        $sql = "SELECT * FROM   admin WHERE `username` = '" . $username . "' AND `password`='" . $password . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            while ($row = $result-> fetch_assoc()) {
                $_SESSION['admin'] = $row['username'];  
                          
                header('location:admin-job.php');            
            }
        } else {
            $incorrect =  "login failled 'hey you are entered wrong username or password '";
        }
        $conn->close();
    }    
} 
?>