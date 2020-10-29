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
session_start();
if ($_SESSION['admin']=='') {
    header('location:index.php');
}
include 'header.php';
$id = $_GET['id'];
$title = $_GET['title'];
$ques = $_GET['ques'];
$right = $_GET['right'];
$wrong = $_GET['wrong'];

?>
        <div id="admin-login">
            <form action="exam-update.php" method = 'post'>
                <input type="hidden" value='<?php echo $id?>' name = 'id'>
                <input type="text" placeholder="please eneter the exam name" name="exam-name" class="inp-css" size="55" value ="<?php echo $title; ?>"> <br>
                <input type="text" placeholder="please eneter the amount of total question" name="exam-question" class="inp-css" size="55" value ="<?php echo $ques; ?>">  <br>
                <input type="text" placeholder="please eneter the value of right question marks" name="exam-right" class="inp-css" size="55" value ="<?php echo $right; ?>"> <br>
                <input type="text" placeholder="please eneter the value of wrong question marks" name="exam-wrong" class="inp-css" size="55" value ="<?php echo $wrong; ?>"> <br>
                
                <input type="submit" value="UPDATE" class='link-css'>         
            </form>
        </div>

<?php include 'footer.php'?>