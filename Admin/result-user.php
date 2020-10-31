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
?>
<div class='sess-info'>Hello Mr. <?php echo $_SESSION['admin'];?> This is the list of your all user's Result</div>

<table id="result-table-one">
    <tr id="tr-css">
        <th class="result-td-css">NAME</th>
        <th class="result-td-css">Total-Question</th>
        <th class="result-td-css">Attempt-Question</th>
        <th class="result-td-css">Correct-Ans</th>
        <th class="result-td-css">Marks-Per-Question</th>
        <th class="result-td-css">Negative-Marking</th>
        <th class="result-td-css">Gain</th>
        <th class="result-td-css">Status</th>
    </tr>

<?php
$sql = "SELECT * FROM result";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
    <tr class='result-tr'>
    <td class="result-td-css"><?php echo $row['name'];?></td>
    <td class="result-td-css"><?php echo $row['total_ques'];?></td>
    <td class="result-td-css"><?php echo $row['attempt'];?></td>
    <td class="result-td-css"><?php echo $row['correct_ans'];?></td>
    <td class="result-td-css"><?php echo $row['right_marks'];?></td>
    <td class="result-td-css"><?php echo $row['wrong_marks'];?></td>
    <td class="result-td-css"><?php echo $row['gain'];?></td>
    <td class="result-td-css"><?php echo $row['status'];?></td>   
    </tr>   
<?php 
    }
}
?>
</table>

<?php include 'footer.php'?>