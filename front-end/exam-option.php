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
if ($_SESSION['admin'] == '') {
    header('location:index.php');
}
include 'config.php';
include 'header.php';?>
<br><br>
<a href="logout.php" class="ans-btn-css ">LOGOUT</a><br><br>
<div class='sess-info'>Hello Mr. <?php echo $_SESSION['admin'];?>Welcome to Exam Portal</div>
<table id="quiz-table">
<?php $sql = "SELECT * FROM exam";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
	<tr>
		<td class = "quiz-td"><a href="#"></a><?php echo $row['title']?></td>
		<td class = "quiz-td"><a href="quiz-start.php?id=<?php echo $row['exam_id']?>" class ="quiz-link">START QUIZ</a></td>
		<td class = "quiz-td"><a href="quiz-instruction.php?id=<?php echo $row['exam_id']?>&que=<?php echo $row['total_question']?>&right=<?php echo $row['right_marks']?>&wrong=<?php echo $row['wrong_marks']?>" class ="quiz-link">INSTRUCTION</a></td>
	</tr>

<?php 
	}
}
?>
</table>

<?php include 'footer.php';?>