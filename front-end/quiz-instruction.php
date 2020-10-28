<?php include 'header.php';
$que = $_GET['que'];
$marks_right = $_GET['right'];
$marks_wrong = $_GET['wrong'];
?>
<p>exam instruction : this all are a dummy text - for exam instruction--
Due to the outbreak of COVID-19 in India, one of the most important guidelines that candidates should follow on the NEET exam day is to maintain proper distance and wear a face mask on the exam day. To maintain social distancing and avoid overcrowding on the NEET 2020 exam day, candidates will be allotted time-slots and they must report to the exam centre accordingly. The exam venue will be disinfected before and after each shift.</p>
<table id="quiz-table">
	<tr>
		<td class="quiz-td"> The total no of quiestions - </td>
		<td class="quiz-td"> <?php echo $que;?> </td>
	</tr>
	<tr>
		<td class="quiz-td"> Each question marks when you correct it (positive marking)</td>
		<td class="quiz-td"> <?php echo $marks_right;?>  </td>
	</tr>
	<tr>
		<td class="quiz-td"> Each question marks when you wrong it(negative marking)</td>
		<td class="quiz-td"> <?php echo $marks_wrong;?>  </td>
	</tr>
	<tr>
		<td class="quiz-td"><a href="quiz-start.php" class="quiz-link">Start Your Journey</a></td>
		<td class="quiz-td"><a href="exam-option.php" class="quiz-link">Back </a></td>
	</tr>
</table>
<?php include 'footer.php';?>