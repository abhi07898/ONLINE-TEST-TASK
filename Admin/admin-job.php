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
include 'header.php'; ?>
<a href="admin-logout.php">LOG-OUT</a>
        <div id="admin-login">
           <marquee scrollamount="10"> <h2>Hello Mr <?php echo $_SESSION['admin'] ;?> Welcome tO this Admin Pannel
        you can easily <b> "add manage update and delete "</b> <i>Exam and Questions with multiple options and manage user also </i>on clicking </h2></marquee>
            <form action=""> 
                <table id='admin-job-table'>
                    <tr>
                        <td><a href="exam-add.php" class="link-css">ADD EXAM</a></td>                       
                        <td><a href="question-add.php" class="link-css">ADD QUESTION</a> 
                        <td><a href="manage-user.php" class="link-css">USER</a>
                    </tr>
                </table>              
            </form>
        </div>

<?php include 'footer.php'; ?>