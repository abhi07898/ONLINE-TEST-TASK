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
include 'header.php'; ?>

<div class="sess-info">Best Of LUCK  Mr. <b><?php echo $_SESSION['admin'] ;?></b>:) Start your quiz now-- if you are not ready then click to logout button for next attempt<a href="logout.php" class="ans-btn-css ">LOGOUT</a></div>
<?php
$id = $_GET['id'];
$limit = 1;
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page=1;
}
$offset = ($page-1)*$limit;

$sql = "SELECT * FROM question WHERE `exam_id`='$id' LIMIT {$offset}, {$limit}";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
    <input type="hidden" value="<?php echo $row['exam_id']?>" id="exam_id" name="exam_id">
    	<div id="question">
            Question : <?php echo $row['que_title']?> ?
            <input type="hidden" value="<?php echo $row['que_title']?>" id="que_title" name="que_title">
    	</div>
    	<div id="options">
    	<!-- <form action="" method="POST"> -->
            <input type="radio" name="opt" class="opt" value="1"><?php echo $row['ans1']?><br>
            <input type="hidden" value="<?php echo $row['ans1']?>" id="ans1" name="ans1">
            <input type="radio" name="opt" class="opt" value="2"><?php echo $row['ans2']?><br>
            <input type="hidden" value="<?php echo $row['ans2']?>" id="ans2" name="ans2">
            <input type="radio" name="opt" class="opt" value="3"><?php echo $row['ans3']?><br>
            <input type="hidden" value="<?php echo $row['ans3']?>" id="ans3" name="ans3">
            <input type="radio" name="opt" class="opt" value="4"><?php echo $row['ans4']?><br>
            <input type="hidden" value="<?php echo $row['ans4']?>" id="ans4" name="ans4">
            <input type="hidden" value="<?php echo $row['ans_option']?>" id="ans_option" name="ans_option">
    		<input type="submit" value="SUBMIT" name="ans-submit" id="ans-submit" class = "ans-btn-css">
    	</div><br>
    	<!-- </form> -->
<?php 
    }
}
?>

<!-- start the code for pagination or navbar -->
<?php 
$sql1 = "SELECT * FROM question WHERE `exam_id`='$id'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) { 
     $total_records =  $result1->num_rows;
    $total_page = ceil($total_records/$limit);
    echo '<ul>';
    if ($page > 1) {
        echo '<li class="li-css"><a href="quiz-start.php?page='.($page-1).'&id='.$id.'" class="a-css">PREV-QUESTION</a></li>';	
    }
    // for ($i=1; $i<=$total_page; $i++) {
    //     echo '<li class="li-css"><a href="quiz-start.php?id='.$id.'&page='.$i.'" class="a-css">'.$i.'</a></li>';
    //   }
    if ($total_page > $page) {
        echo '<li class="li-css"><a href="quiz-start.php?page='.($page+1).'&id='.$id.'" class="a-css">NEXT-QUESTION</a></li>';
    }
    echo '</ul>';
}
?>
<script type="text/javascript">
    $(document).ready(function(){
        
       
    //    $.ajax({
    //        url:insert-quiz.php;
    //        type:"POST";
    //        data :{}
    $('#ans-submit').click(function(){
        var name = "hello";
        var your_ans = $('.opt').val();
            document.write(name);
        document.write(your_ans);
        })
       
        
           
    })
</script>
<?php include 'footer.php';?>