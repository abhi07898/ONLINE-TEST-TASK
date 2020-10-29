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
include 'exam-insert.php';

?>
<br><br>
        <a href="exam-manage.php" class="link-css">MANAGE EXAM</a> <br><br><br>        
        <div id="admin-login">
            <form action="" method = 'post'>               
                <input type="text" placeholder="please eneter the exam name" name="exam-name" class="inp-css" size="55"> 
                <?php
                if (sizeof($error) > 0) {
                    foreach ($error as $values) {
                            echo $values['msg'];
                    }
                }
                ?>  <br>
                <input type="text" placeholder="please eneter the amount of total question" name="exam-question" class="inp-css" size="55">  <br>
                <input type="text" placeholder="please eneter the value of right question marks" name="exam-right" class="inp-css" size="55"> <br>
                <input type="text" placeholder="please eneter the value of wrong question marks" name="exam-wrong" class="inp-css" size="55"> <br><br><br>
                
                <input type="submit" value="SUBMIT" class="link-css" name='submit'>    <br><br><br>     
            </form>
        </div>
<?php include 'footer.php'; ?>