<?php
include 'config.php';
include 'header.php';?>
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