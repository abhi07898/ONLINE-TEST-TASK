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
include 'admin-login-valid.php';
?>
        <div id="admin-login">
            <form action="" method='post'> 
                <table id="index-table">
                    <tr>
                           <td><label for="username">USER NAME :</label></td>
                `           <td><input type="text" name="username" value = '<?php echo $username; ?>'><span><?php echo $username_err;?></span></td>   
                    </tr>
                    <tr>
                            <td><label for="password"> PASSWORD : </label></td>
                            <td><input type="password" name="password"><span><?php echo $password_err;?><?php echo $incorrect;?></span></td>
                    </tr>
                    <tr>
                       <td>
                            <input type="submit" name="login">
                        </td>
                    </tr>
                </table>              
            </form>
        </div>
        

        <?php include 'footer.php'; ?>