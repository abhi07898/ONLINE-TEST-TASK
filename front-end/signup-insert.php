<?php
include 'config.php';
$error = array();
$username = $password = $repassword = $qualification = $email = $contact = $dsnt_match= ''; 
$username_err = $password_err = $repassword_err = $qualification_err = $email_err = $contact_err = ''; 
if(isset($_POST['register'])) {
	if (empty($_POST['username'])) {
		$username_err = 'Field is Required';
	} else {
		$username = $_POST['username'];
	}
	if (empty($_POST['password'])) {
		$password_err = 'Field is Required';
	} else {
		$password = $_POST['password'];
	}
	if (empty($_POST['re-password'])) {
		$repassword_err = 'Field is Required';
	} else {
		$repassword = $_POST['re-password'];
	}
	if (empty($_POST['qualification'])) {
		$qualification_err = 'Field is Required';
	} else {
		$qualification = $_POST['qualification'];
	}
	if (empty($_POST['email'])) {
		$email_err = 'Field is Required';
	} elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === true) {
            $email_err = "enter valid email";
        } else {
            $email = $_POST['email'];
        }
	}
	
print_r($_POST);
	if ($username_err == '' and $password_err == '' and $repassword_err == '' and  $qualification_err == '' and $email_err == '' and $contact_err == '') {		
		if ($password !== $repassword) {
			$password_err = "password does not matched";
			$error[] = array('input' => 'password', 'msg' => "password did not matched ");
			} else {
			$sql = "SELECT `USERNAME`, `E-MAIL` FROM user";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if ($row['USERNAME'] == $username) {                             
						$error[] = array('input' => 'username', 'msg' => 'this name is already registered');
					} elseif ($row['E-MAIL'] == $email) {                        
						$error[] = array('input' => 'email', 'msg' => 'this email is already registered');
					}
				}
			}
		    if (sizeof($error) == 0) {
		        $sql  = "INSERT INTO user (`USERNAME` , `PASSWORD`, `QUALIFICATION`, `E-MAIL`) 
		        VALUES ('$username', '$repassword', '$qualification','$email')";
		        if ($conn->query($sql) === true) {
		            echo "<script> alert ('you are login successfully')</script>";
		            // header('location:index.php');
		        } else {
		            // echo "Error " . $conn->error;
		        }
		    } else {
		    	echo "<script> alert ('your name or email are already registered')</script>";
		    } 
		}
	}

?>