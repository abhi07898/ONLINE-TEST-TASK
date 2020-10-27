<?php 
include 'config.php';
$id  = $_POST['id'];
$exam_id = $_POST['exam-id'];
$que_title = $_POST['question-title'];
$ans1 = $_POST['option-1'];
$ans2 = $_POST['option-2'];
$ans3 = $_POST['option-3'];
$ans4 = $_POST['option-4'];
$ans_option = $_POST['right-answer-option'];
$sql = "UPDATE question SET `exam_id`= '$exam_id' , `que_title`='$que_title', `ans1`='$ans1', `ans2`='$ans2', `ans3`='$ans3', `ans4`='$ans4', `ans_option`='$ans_option' WHERE `question_id`='$id'";
if ($conn->query($sql) === true) {
    echo "Record updated successfully";
    header('location:question-manage.php');     
  } else {
    echo "Error updating record: " . $conn->error;
  }
?>