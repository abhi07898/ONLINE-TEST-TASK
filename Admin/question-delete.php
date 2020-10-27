<?php 
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