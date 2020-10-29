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
include 'question-insert.php';
?>
        <div id="admin-login">
            <br><br><br>
            <a href="question-manage.php" class="link-css">QUESTION MANAGE</a>
            <br><br><br>
            <form action="" method='post'> 
                <table>
                <tr>
                       <td><label for="question-tile">EXAM NAME</label></td>
                       <td><select name="exam-id">
                        <?php
                        include 'config.php';
                        $sql = "SELECT * FROM   exam ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row['exam_id'];?>"><?php echo $row['title'];?></option><span class='span-css'><?php echo $exam_id_err ;?></span>
                                <?php
                            }
                        }
                        ?>
                       </select> </td>
                       
                   </tr>
                   <tr>
                       <td><label for="question-tile">QUESTION TITLE</label></td>
                       <td><input type="text" name="question-title" value="<?php echo $que_title ;?>"><span class='span-css'><?php echo $que_title_err ;?></span></td>
                   </tr>
                  
                   <tr>
                        <td><label for="option-1">OPTION - 1:</label></td>
                        <td><input type="text" name="option-1" value="<?php echo $ans1 ;?>"><span class='span-css'><?php echo $ans1_err ;?></span></td>
                    </tr>
                    <tr>
                        <td><label for="option-2">OPTION - 2:</label></td>
                        <td><input type="text" name="option-2" value="<?php echo $ans2 ;?>"><span class='span-css'><?php echo $ans2_err ;?></span></td>
                    </tr>
                    <tr>    
                        <td><label for="option-3">OPTION - 3:</label></td>
                        <td><input type="text" name="option-3" value="<?php echo $ans3 ;?>"><span class='span-css'><?php echo $ans3_err ;?></span></td>
                    </tr>
                    <tr>
                        <td><label for="option-4">OPTION - 4:</label></td>
                        <td><input type="text" name="option-4" value="<?php echo $ans4 ;?>"><span class='span-css'><?php echo $ans4_err ;?></span></td>
                    </tr>
                    <tr>
                       <td><label for="right-answer-option">RIGHT ANSWER OPTION</label></td>
                       <td><input type="number" name="right-answer-option" value="<?php echo $ans_option ;?>"><span class='span-css'><?php echo $ans_option_err ;?></span></td>
                   </tr>
                </table>
                <br><br><input type="submit" value="ADD-OPTION" class="link-css" name='submit'>
                <br><br><br><br>
                
               
            </form>
        </div>
<?php include 'footer.php'; ?>