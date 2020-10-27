<?php include 'header.php'; ?>
        <div id="admin-login">
            <form action="" method='post'> 
                <table id='manage-question-css'>
                    <tr style="color:white; background-color:black">
                        <th class = 'mng-que-td'>Question</th>
                        <th class = 'mng-que-td'>ans1</th>
                        <th class = 'mng-que-td'>ans2</th>
                        <th class = 'mng-que-td'>ans3</th>
                        <th class = 'mng-que-td'>ans4</th>
                        <th class = 'mng-que-td'>Correct Answer</th>
                        <th class = 'mng-que-td'>Action</th>
                        
                    </tr>
                
                       
                      
                        <?php
                        include 'config.php';
                        $sql = "SELECT * FROM   question ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
                        <tr class = 'mng-que-tr'>
                        <td class = 'mng-que-td'><?php echo $row['que_title']?></td>
                        <td class = 'mng-que-td'><?php echo $row['ans1']?></td>
                        <td class = 'mng-que-td'><?php echo $row['ans2']?></td>
                        <td class = 'mng-que-td'><?php echo $row['ans3']?></td>
                        <td class = 'mng-que-td'><?php echo $row['ans4']?></td>
                        <td class = 'mng-que-td'><?php echo $row['ans_option']?></td>
                        <td class = 'mng-que-td'><a href="question-edit.php?id=<?php echo $row['question_id']; ?>&question=<?php echo $row['que_title']; ?>&ans1=<?php echo $row['ans1']; ?>&ans2=<?php echo $row['ans2']; ?>&ans3=<?php echo $row['ans3']; ?>&ans4=<?php echo $row['ans4']; ?>&ans_option=<?php echo $row['ans_option']; ?>">Edit</a> <br><a href="question-delete.php?id=<?php echo $row['question_id'];?>">DELET</a></td>
                        </tr>
                        <?php 
                            }
                        }
                        ?>
                </table>     
                       
                  
                  
               
            </form>
        </div>
<?php include 'footer.php'; ?>