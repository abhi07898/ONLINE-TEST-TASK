<?php
include 'config.php';
echo "hello";

$exam_id = $_POST['exam-id'];
$que_title = $_POST['question-title'];
$ans1 = $_POST['option-1'];
$ans2 = $_POST['option-2'];
$ans3 = $_POST['option-3'];
$ans4 = $_POST['option-4'];
$ans_option = $_POST['right-answer-option'];
$sql  = "INSERT INTO question (`exam_id` , `que_title`, `ans1`, `ans2`,`ans3`,`ans4`,`ans_option`) 
VALUES ('$exam_id', '$que_title', '$ans1', '$ans2', '$ans3', '$ans4', '$ans_option')";
if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:question-add.php');
} else {
    echo "Error " . $conn->error;
}

?>