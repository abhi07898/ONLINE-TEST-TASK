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
if (isset($_POST['submit'])) {
    $error= array();
    $exam_name = $_POST['exam-name'];
    $total_ques = $_POST['exam-question'];
    $right_marks = $_POST['exam-right'];
    $wrong_mark = $_POST['exam-wrong'];
    $sql1= "SELECT `title` FROM  exam";
    $result = $conn->query($sql1);
    while ($row = $result->fetch_assoc()) {
        if ($row['title']== $exam_name) {
            $error[] = array('input'=>'exam name', 'msg'=> 'the data alreday exist with same name of exam_name(or test name)');
        }
    }
    if (sizeof($error) == 0) {
        $sql  = "INSERT INTO exam (`title` , `total_question`, `right_marks`, `wrong_marks`) 
        VALUES ('$exam_name', '$total_ques', '$right_marks','$wrong_mark')";
        if ($conn->query($sql) === true) {
            echo "Record inserted Successfully";
            header('location:exam-manage.php');
        } else {
            echo "Error " . $conn->error;
        }
    } else {
        
    } 


}
?>