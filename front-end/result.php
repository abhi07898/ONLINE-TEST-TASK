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
include 'header.php';
include 'config.php';
$sess_id =  $_SESSION['sess_id']; 
$sess_name = $_SESSION['admin'];
?>
<div  class='sess-info'>Hii Mr  <?php echo $_SESSION['admin'];?> The Whole result of your EXAM is below in a proper way</div>
<table id="result-table-one">
    <tr id="tr-css">
        <th class="result-td-css">NAME</th>
        <th class="result-td-css">QUESTION</th>
        <th class="result-td-css">OPT-1</th>
        <th class="result-td-css">OPT-2</th>
        <th class="result-td-css">OPT-3</th>
        <th class="result-td-css">OPT-4</th>
        <th class="result-td-css">CORRECT-ANS</th>
        <th class="result-td-css">YOUR-ANS</th>
    </tr>

<?php
$sql = "SELECT * FROM answer WHERE `session_id`='$sess_id' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
    <tr class='result-tr'>
    <td class="result-td-css"><?php echo $sess_name;?></td>
    <td class="result-td-css"><?php echo $row['que_title'];?></td>
    <td class="result-td-css"><?php echo $row['ans1'];?></td>
    <td class="result-td-css"><?php echo $row['ans2'];?></td>
    <td class="result-td-css"><?php echo $row['ans3'];?></td>
    <td class="result-td-css"><?php echo $row['ans4'];?></td>
    <td class="result-td-css"><?php echo $row['true_ans'];?></td>
    <td class="result-td-css"><?php echo $row['your_ans'];?></td>   
    </tr>   
<?php 
    }
}
?>
</table>
<?php 
$sqll = "SELECT * FROM answer WHERE `session_id`='$sess_id'";
$resultt = $conn->query($sqll);
$total_question = $resultt->num_rows; 
echo $total_question;
?>
<?php 
$sql1 = "SELECT * FROM answer WHERE `session_id`='$sess_id'  and `your_ans`!= 0";
$result1 = $conn->query($sql1);
$total_question_attemped_by = $result1->num_rows; 
echo $total_question_attemped_by;
?>
<?php 
$sql2 = "SELECT * FROM answer WHERE `session_id`='$sess_id'  and `your_ans`= `true_ans`";
$result2 = $conn->query($sql2);
$correct_ans = $result2->num_rows; 
echo $correct_ans;
?>
<?php 
$sql3 = "SELECT `exam_id` FROM answer WHERE `session_id`='$sess_id'";
$result3 = $conn->query($sql2);
if ($result3->num_rows > 0) {
    while ($row3 = $result3->fetch_assoc()) {
        $exam_id = $row3['exam_id'];
    }
} 
echo $exam_id;
?>
<?php 
$sql4 = "SELECT * FROM exam WHERE `exam_id`='$exam_id'";
$result4 = $conn->query($sql4);
if ($result4->num_rows > 0) {
    while ($row4 = $result4->fetch_assoc()) {
        $positive_marks= $row4['right_marks'];
        $negative_marks = $row4['wrong_marks'];
    }
} 
echo $positive_marks;
echo $negative_marks;
?>
<div  class='sess-info'>Hii Mr  <?php echo $_SESSION['admin'];?> It's Your how much you gain number and how the number are distributed ?</div>
<form action="insert-result.php" method="POST">
    <input type="hidden" name='login_name' value="<?php echo $sess_name;?>">
    <table id='result-table-one'>
        <tr id='result-tr'>
            <th class='result-td-css'>DESCRIPTION</th>
            <th class='result-td-css'>VALUE</th>
        </tr>
        <tr class='result-tr'>
            <td class='result-td-css'>Total Number of Questions :</td>
            <td class='result-td-css'><?php echo $total_question; ?></td>
            <input type="hidden" name="total_que" value="<?php echo $total_question; ?>">
        </tr>
        <tr class='result-tr'>
            <td class='result-td-css'>Attempted question by you :</td>
            <td class='result-td-css'><?php echo $total_question_attemped_by; ?></td>
            <input type="hidden" name="attempt_que" value="<?php echo $total_question_attemped_by; ?>">
        </tr>
        <tr class='result-tr'>
            <td class='result-td-css'>Correct Answer  :</td>
            <td class='result-td-css'><?php echo $correct_ans; ?></td>
            <input type="hidden" name="correct_ans" value="<?php echo $correct_ans; ?>">
        </tr>
        <tr class='result-tr'>
            <td class='result-td-css'>Marks per correct Answer :</td>
            <td class='result-td-css'><?php echo $positive_marks; ?></td>
            <input type="hidden" name="right_marks" value="<?php echo $positive_marks; ?>">
        </tr>
        <tr class='result-tr'>
            <td class='result-td-css'>Negative Marking :</td>
            <td class='result-td-css'><?php echo $negative_marks; ?></td>
            <input type="hidden" name="wrong_marks" value ="<?php echo $negative_marks; ?>">
        </tr>
        <tr class='result-tr'>
            <td class='result-td-css'>Total Gain Marks :</td>
            <?php $Total_gain = ($correct_ans * $positive_marks) -(($total_question_attemped_by - $correct_ans) * $negative_marks)?>
            <td class='result-td-css'><?php echo $Total_gain; ?> </td>
            <input type="hidden" name="gain" value="<?php echo $Total_gain; ?>">
        </tr>
        <tr class='result-tr'>
            <td class='result-td-css'>Exam Result-Status :</td>
            <td class='result-td-css'>
                <?php
                if ($Total_gain > $Total_gain/33.33 ) {
                    echo "PASS"; 
                } else {
                    echo "FAIL";
                }
                ?></td>
                <input type="hidden" name="status" value="PASS">
                       </tr>
        
    </table>
    <br><br><br>
    <div class='sess-info'>please click on submit button for submit the whole detail and  success the EXAM <input type="submit" value="CLICK FOR SUBMIT THE EXAM" name="last-submit" class="quiz-btn-css ">
</div>
    
</form>

<br><br><br>
<a href="logout.php" class="quiz-btn-css ">LOGOUT</a>
<?php include 'footer.php';?>