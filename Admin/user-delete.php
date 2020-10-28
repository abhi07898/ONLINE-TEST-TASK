<?php 
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE `UID` = '$id'";
if ($conn->query($sql)===true) {
    echo "Record deleted";
    header('location:manage-user.php');
} else {
    echo "error during deleting";
}
?>