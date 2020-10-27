<?php
include 'config.php';
$exam_id = $que_title = $ans1 = $ans2 = $ans3 = $ans4 = $ans_option = '';
$exam_id_err = $que_title_err = $ans1_err = $ans2_err = $ans3_err = $ans4_err = $ans_option_err = '';
if (isset($_POST['submit'])) {
    if (empty($_POST['exam-id'])) {
        $exam_id_err = "Required Field";
    } else {
        $exam_id = $_POST['exam-id'];
    }
    if (empty($_POST['question-title'])) {
        $que_title_err = "Required Field";
    } else {
        $que_title = $_POST['question-title'];
    }
    if (empty($_POST['option-1'])) {
        $ans1_err = "Required Field";
    } else {
        $ans1 = $_POST['option-1'];
    }
    if (empty($_POST['option-2'])) {
        $ans2_err = "Required Field";
    } else {
        $ans2 = $_POST['option-2'];
    }
    if (empty($_POST['option-3'])) {
        $ans3_err = "Required Field";
    } else {
        $ans3 = $_POST['option-3'];
    }
    if (empty($_POST['option-4'])) {
        $ans4_err = "Required Field";
    } else {
        $ans4 = $_POST['option-4'];
    }
    if (empty($_POST['right-answer-option'])) {
        $ans_option_err = "Required Field";
    } else {
        $ans_option = $_POST['right-answer-option'];
    }
    if ($exam_id_err =='' and $que_title_err=='' and $ans1_err =='' and $ans2_err =='' and $ans3_err =='' and $ans4_err=='' and $ans_option_err=='') {
        $sql  = "INSERT INTO question (`exam_id` , `que_title`, `ans1`, `ans2`,`ans3`,`ans4`,`ans_option`) 
        VALUES ('$exam_id', '$que_title', '$ans1', '$ans2', '$ans3', '$ans4', '$ans_option')";
        if ($conn->query($sql) === true) {
            echo "Record inserted Successfully";
            header('location:question-add.php');
        } else {
            echo "Error " . $conn->error;
        }
    }
    
    
}

?>