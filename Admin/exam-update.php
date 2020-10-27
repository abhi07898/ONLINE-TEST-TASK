<?php 
include 'config.php';
$id = $_POST['id'];
$exam_name = $_POST['exam-name'];
$total_ques = $_POST['exam-question'];
$right_marks = $_POST['exam-right'];
$wrong_marks = $_POST['exam-wrong'];

$sql = "UPDATE exam SET `title` = '$exam_name' , `total_question`='$total_ques', `right_marks`='$right_marks', `wrong_marks`='$wrong_marks' WHERE `exam_id`='$id'";
if ($conn->query($sql) === true) {
    echo "Record updated successfully";
    header('location:exam-manage.php');     
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
?>