<?php 
$username = $password = $error = '';
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
	
	// echo $name_err;
	// if($name_err = '' and $password_err = '') {
	// 	echo "now fine ";
	// }
}
?>