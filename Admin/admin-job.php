<?php 
session_start();

include 'header.php'; ?>
        <div id="admin-login">
           <marquee scrollamount="10"> <h2>Hello Mr <?php echo $_SESSION['admin']['username'] ;?> Welcome tO this Admin Pannel
        you can easily <b> "add manage update and delete "</b> <i>Exam and Questions with multiple options and manage user also </i>on clicking </h2></marquee>
            <form action=""> 
                <table id='admin-job-table'>
                    <tr>
                        <td><a href="exam-add.php" class="link-css">ADD EXAM</a></td>                       
                        <td><a href="question-add.php" class="link-css">ADD QUESTION</a> 
                        <td><a href="" class="link-css">USER</a>
                    </tr>
                </table>              
            </form>
        </div>

<?php include 'footer.php'; ?>