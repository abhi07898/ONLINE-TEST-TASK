<?php 
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM exam WHERE `exam_id` = '$id'";
if ($conn->query($sql)===true) {
    echo "Record deleted";
    header('location:exam-manage.php');
} else {
    echo "error during deleting";
}
?>