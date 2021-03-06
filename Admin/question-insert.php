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
$total_question;
$count_id;
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

    $sql1 = "SELECT * FROM exam WHERE `exam_id` = '$exam_id'";
    $result1 = $conn->query($sql1);
    while ($row = $result1->fetch_assoc()) {
        $total_question = $row['total_question'];
    }
    $sql2 = "SELECT * FROM question WHERE `exam_id` = '$exam_id'";
    $result2 = $conn->query($sql2);
    $count_id = $result2->num_rows;
   
    if ($count_id == $total_question) {
        header('location:exam-add.php');
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