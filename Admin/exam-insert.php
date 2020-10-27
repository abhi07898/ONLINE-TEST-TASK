<?php
include 'config.php';
echo "hello";
$exam_name = $_POST['exam-name'];
$total_ques = $_POST['exam-question'];
$right_marks = $_POST['exam-right'];
$wrong_mark = $_POST['exam-wrong'];

$sql  = "INSERT INTO exam (`title` , `total_question`, `right_marks`, `wrong_marks`) 
VALUES ('$exam_name', '$total_ques', '$right_marks','$wrong_mark')";
if ($conn->query($sql) === true) {
    echo "Record inserted Successfully";
    header('location:question-add.php');
} else {
    echo "Error " . $conn->error;
}

?>