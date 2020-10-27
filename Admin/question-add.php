<?php include 'header.php'; ?>
        <div id="admin-login">
            <br><br><br>
            <a href="question-manage.php" class="link-css">QUESTION MANAGE</a>
            <br><br><br>
            <form action="question-insert.php" method='post'> 
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
                        <option value="<?php echo $row['exam_id'];?>"><?php echo $row['title'];?></option>
                        <?php 
                            }
                        }
                        ?>
                       </select> </td>
                       
                   </tr>
                   <tr>
                       <td><label for="question-tile">QUESTION TITLE</label></td>
                       <td><input type="text" name="question-title"></td>
                   </tr>
                  
                   <tr>
                        <td><label for="option-1">OPTION - 1:</label></td>
                        <td><input type="text" name="option-1"></td>
                    </tr>
                    <tr>
                        <td><label for="option-2">OPTION - 2:</label></td>
                        <td><input type="text" name="option-2"></td>
                    </tr>
                    <tr>    
                        <td><label for="option-3">OPTION - 3:</label></td>
                        <td><input type="text" name="option-3"></td>
                    </tr>
                    <tr>
                        <td><label for="option-4">OPTION - 4:</label></td>
                        <td><input type="text" name="option-4"></td>
                    </tr>
                    <tr>
                       <td><label for="right-answer-option">RIGHT ANSWER OPTION</label></td>
                       <td><input type="number" name="right-answer-option"></td>
                   </tr>
                </table>
                <br><br><input type="submit" value="ADD-OPTION" class="link-css">
                <br><br><br><br>
                
               
            </form>
        </div>
<?php include 'footer.php'; ?>