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
$id = $_GET['id'];
$sql = "DELETE FROM question WHERE `question_id` = '$id'";
if ($conn->query($sql)===true) {
    echo "Record deleted";
    header('location:question-manage.php');
} else {
    echo "error during deleting";
}
?>