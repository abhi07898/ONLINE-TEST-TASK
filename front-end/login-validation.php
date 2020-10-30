<?php
/**
 * Template File Doc Comment
 * 
 * PHP version 7
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <author@domain.com>
 * @license  https://opensource.org/license/MIT MIT License
 * @link     https://localhost/ 
 */
session_start();
include 'config.php';
$username = $password = $incorrect = '';
$name_err = $password_err = '';
if(isset($_POST['login'])) {
	if(empty($_POST['username'])) {
		$name_err = "Field is required";
	} else {
		$username = $_POST['username'];
	}
	if(empty($_POST['password'])) {
		$password_err = "Field is required";
	} else {
		$password = $_POST['password'];
	}

	if ($name_err=='' and $password_err == '') {
        $sql = "SELECT * FROM   user WHERE `USERNAME` = '" . $username . "' AND `PASSWORD`='" . $password . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            while ($row = $result-> fetch_assoc()) {
                $_SESSION['admin'] = $row['USERNAME'];
                $_SESSION['sess_id'] = uniqid();  
                          
                header('location:exam-option.php');            
            }
        } else {
            $incorrect =  "login failled 'hey you are entered wrong username or password '";
           }
        $conn->close();
    } 
} 
?>