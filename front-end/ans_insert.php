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
if (isset($_POST['ans-submit'])) {
    $page = $_GET['page'];
    $id = $_GET['id'];
    $sess = $_POST['sess_id'];
    $examid = $_POST['exam_id'];
    $quetitle = $_POST['que_title'];
    $ans1 = $_POST['ans_1'];
    $ans2 = $_POST['ans_2'];
    $ans3 = $_POST['ans_3'];
    $ans4 = $_POST['ans_4'];
    $correctans = $_POST['ans_option'];
    $yourans = $_POST['opt'];

                
    $sqldelete = "DELETE FROM answer  WHERE `session_id`='$sess' and `que_title`='$quetitle' ";
    if ($conn->query($sqldelete)==true) {
        echo "Record deleted";

    } else {
        echo "error during deleting";
    }
                            
   
    

    $sql = "INSERT INTO answer (`session_id`,	`exam_id`,	`que_title`,	`ans1`,	`ans2`,	`ans3`,	`ans4`,	`true_ans`,	`your_ans`) 
            VALUES ('$sess', '$examid', '$quetitle', '$ans1', '$ans2', '$ans3', '$ans4', '$correctans', '$yourans')";
    if ($conn->query($sql) === true) {
         header('location:quiz-start.php?page='.$page.'&id='.$id.'');
      
    } else {
            echo "Error " . $conn->error;
    }

}

?>