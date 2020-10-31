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
include 'config.php';
if (isset($_POST['last-submit'])) {
    $name = $_POST['login_name'];
    $totalque = $_POST['total_que'];
    $attemptque = $_POST['attempt_que'];
    $correctans = $_POST['correct_ans'];
    $rightmarks = $_POST['right_marks'];
    $wrongmarks = $_POST['wrong_marks'];
    $gain = $_POST['gain'];
    $status = $_POST['status'];
  

    $sql  = "INSERT INTO result (`name`, `total_ques`,	`attempt`,	`correct_ans`,	`right_marks`,	`wrong_marks`,	`gain`,	`status`) 
        VALUES ('$name', '$totalque', '$attemptque', '$correctans', '$rightmarks', '$wrongmarks', '$gain', '$status') " ;
    if ($conn->query($sql) === true) {
        header('location:result.php');
    }
}

?>