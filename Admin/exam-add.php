<?php include 'header.php'; ?>
<br><br>
        <a href="exam-manage.php" class="link-css">MANAGE EXAM</a> <br><br><br>
        <div id="admin-login">
            <form action="exam-insert.php" method = 'post'>
               
                <input type="text" placeholder="please eneter the exam name" name="exam-name" class="inp-css" size="55"> <br>
                <input type="text" placeholder="please eneter the amount of total question" name="exam-question" class="inp-css" size="55">  <br>
                <input type="text" placeholder="please eneter the value of right question marks" name="exam-right" class="inp-css" size="55"> <br>
                <input type="text" placeholder="please eneter the value of wrong question marks" name="exam-wrong" class="inp-css" size="55"> <br><br><br>
                
                <input type="submit" value="SUBMIT" class="link-css">    <br><br><br>     
            </form>
        </div>

<?php include 'footer.php'; ?>