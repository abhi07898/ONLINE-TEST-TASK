<?php include 'header.php'; 
$id = $_GET['id'];
$question = $_GET['question'];
$ans1 = $_GET['ans1'];
$ans2 = $_GET['ans2'];
$ans3 = $_GET['ans3'];
$ans4 = $_GET['ans4'];
$ans_option = $_GET['ans_option'];
?>
        <div id="admin-login">
            <br><br>
            <form action="question-update.php" method='post'> 
                <table>
                <tr>
                       <td><label for="question-title">EXAM NAME</label></td>
                       <td><select name="exam-id">
                        <?php
                        include 'config.php';
                        $sql = "SELECT * FROM   exam ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row['exam_id'];?>"><?php echo $row['title'];?></option>
                        <?php 
                            }
                        }
                        ?>
                       </select> </td>
                       
                   </tr>
                   <input type="hidden" value='<?php echo $id;?>' name = 'id'>
                   <tr>
                       <td><label for="question-tile">QUESTION TITLE</label></td>
                       <td><input type="text" name="question-title" value = '<?php echo $question;?>'></td>
                   </tr>
                  
                   <tr>
                        <td><label for="option-1">OPTION - 1:</label></td>
                        <td><input type="text" name="option-1" value = '<?php echo $ans1;?>'></td>
                    </tr>
                    <tr>
                        <td><label for="option-2">OPTION - 2:</label></td>
                        <td><input type="text" name="option-2" value = '<?php echo $ans2;?>'></td>
                    </tr>
                    <tr>    
                        <td><label for="option-3">OPTION - 3:</label></td>
                        <td><input type="text" name="option-3" value = '<?php echo $ans3;?>'></td>
                    </tr>
                    <tr>
                        <td><label for="option-4">OPTION - 4:</label></td>
                        <td><input type="text" name="option-4" value = '<?php echo $ans4;?>'></td>
                    </tr>
                    <tr>
                       <td><label for="right-answer-option">RIGHT ANSWER OPTION</label></td>
                       <td><input type="number" name="right-answer-option" value = '<?php echo $ans_option;?>'></td>
                   </tr>
                </table>
                <br><br>
                <input type="submit" value="UPDATE-QUESTION" class='link-css'><br><br>
                
               
            </form>
        </div>
<?php include 'footer.php'; ?>