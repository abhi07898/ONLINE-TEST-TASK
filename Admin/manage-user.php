<?php include 'header.php'; ?>
        <div id="admin-login">
            <form action="" method='post'> 
                <table id='manage-exam-css'>
                    <tr style="color:white; background-color:black">
                        <th class="mng-exam-td">ID</th>
                        <th class="mng-exam-td">USER NAME</th>
                        <th class="mng-exam-td">PASSWORD</th>
                        <th class="mng-exam-td">QUALIFICATION</th>
                        <th class="mng-exam-td">E-Mail</th>
                        <th class="mng-exam-td">Action</th>
                        
                    </tr>
                
                       
                      
                        <?php
                        include 'config.php';
                        $sql = "SELECT * FROM   user ";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                        ?>
                        <tr>
                        <td class="mng-exam-td"><?php echo $row['UID']?></td>
                        <td class="mng-exam-td"><?php echo $row['USERNAME']?></td>
                        <td class="mng-exam-td"><?php echo $row['PASSWORD']?></td>
                        <td class="mng-exam-td"><?php echo $row['QUALIFICATION']?></td>
                        <td class="mng-exam-td"><?php echo $row['E-MAIL']?></td>
                        <td class="mng-exam-td"><a href="user-delete.php?id=<?php echo $row['UID'];?>">DELETE</a></td>
                        </tr>
                        <?php 
                            }
                        }
                        ?>
                </table>     
                       
                  
                  
               
            </form>
        </div>
<?php include 'footer.php'; ?>