<?php 
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
                $_SESSION['admin'] = array('username'=>$row['USERNAME']) ;  
                          
                header('location:exam-option.php');            
            }
        } else {
            $incorrect =  "login failled 'hey you are entered wrong username or password '";
        }
        $conn->close();
    } 
} 
?>