
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