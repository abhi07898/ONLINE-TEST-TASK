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
        <div id="admin-login">
            <form action="" method='post'> 
                <table id='manage-exam-css'>
                    <tr style="color:white; background-color:black">
                        <th class="mng-exam-td">Question</th>
                        <th class="mng-exam-td">Total_question</th>
                        <th class="mng-exam-td">Right-marks</th>
                        <th class="mng-exam-td">Wrong-marks</th>
                        <th class="mng-exam-td">Action</th>
                        
                    </tr>
                
                       
                      
                        <?php
                        include 'config.php';
                        $sql = "SELECT * FROM   exam ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
                        <tr>
                        <td class="mng-exam-td"><?php echo $row['title']?></td>
                        <td class="mng-exam-td"><?php echo $row['total_question']?></td>
                        <td class="mng-exam-td"><?php echo $row['right_marks']?></td>
                        <td class="mng-exam-td"><?php echo $row['wrong_marks']?></td>
                        <td class="mng-exam-td"><a href="exam-edit.php?id=<?php echo $row['exam_id']; ?>&title=<?php echo $row['title']; ?>&ques=<?php echo $row['total_question']; ?>&right=<?php echo $row['right_marks']; ?>&wrong=<?php echo $row['wrong_marks']; ?>">Edit</a> <br><a href="exam-delete.php?id=<?php echo $row['exam_id'];?>">DELET</a></td>
                        </tr>
                        <?php 
                            }
                        }
                        ?>
                </table>     
                       
                  
                  
               
            </form>
        </div>
<?php include 'footer.php'; ?>