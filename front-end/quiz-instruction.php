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
include 'header.php';
$que = $_GET['que'];
$marks_right = $_GET['right'];
$marks_wrong = $_GET['wrong'];
?>
<br><br><a href="logout.php" class="ans-btn-css ">LOGOUT</a><br><br>
<div class="sess-info">Hello Mr. <?php echo $_SESSION['admin'] ;?> read these instructios carefully and be ready</div>
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
		<td class="quiz-td"><a href="" class="quiz-link">Start Your Journey to click on the button of back </a></td>
		<td class="quiz-td"><a href="exam-option.php" class="quiz-link">Back </a></td>
	</tr>
</table>
<?php include 'footer.php';?>