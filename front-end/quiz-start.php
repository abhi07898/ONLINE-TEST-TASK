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
$sess_id = $_SESSION['sess_id'];
include 'config.php';
include 'header.php';
global $total_page;


?>

<div class="sess-info">Best Of LUCK  Mr. <b><?php echo $_SESSION['admin'] ;?></b>:) Start your quiz now-- if you are not ready then click to logout button for next attempt<a href="logout.php" class="quiz-btn-css ">LOGOUT</a></div>
<?php
$id = $_GET['id'];
$limit = 1;
if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page=1;
}
$offset = ($page-1)*$limit;
?>
<?php 
$sql1 = "SELECT * FROM question WHERE `exam_id`='$id'";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0) { 
    $total_records =  $result1->num_rows;
    $total_page = ceil($total_records/$limit);
}
if ($page > $total_page) {
    header('location:result.php');
}
$sql = "SELECT * FROM question WHERE `exam_id`='$id' LIMIT {$offset}, {$limit}";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
        <form action="ans_insert.php?page=<?php echo $page+1;?>&id=<?php echo $id;?>" method="POST">
            <input type="hidden" value="<?php echo $sess_id; ?>" id="sess_id" name="sess_id">
            <input type="hidden" value="<?php echo $row['exam_id']?>" id="exam_id" name="exam_id">
                <div id="question">
                    Question : <?php echo $row['que_title']?> ?
                    <input type="hidden" value="<?php echo $row['que_title']?>" id="que_title" name="que_title">
                </div>
                <?php 
                $user_ans=0;
                $sqlquery = "SELECT * FROM answer WHERE `session_id`='$sess_id' and `que_title`='".$row['que_title']."'" ;
                $resultquery = $conn->query($sqlquery);
                if ($resultquery->num_rows > 0) {                        
                    while ($rowquery = $resultquery-> fetch_assoc()) {
                        $user_ans = $rowquery['your_ans'];
                    }
                }

                ?>
            <div id="options">               
                <input type="radio" name="opt" class="opt" <?php if($user_ans==1) : ?> checked
               <?php endif ; ?>value="1"><?php echo $row['ans1']?><br>
                <input type="hidden" value="<?php echo $row['ans1']?>" id="ans_1" name="ans_1">
                <input type="radio" name="opt" class="opt" <?php if($user_ans==2) : ?> checked
               <?php endif ; ?> value="2"><?php echo $row['ans2']?><br>
                <input type="hidden" value="<?php echo $row['ans2']?>" id="ans_2" name="ans_2">
                <input type="radio" name="opt" class="opt" <?php if($user_ans==3) : ?> checked
               <?php endif ; ?> value="3"><?php echo $row['ans3']?><br>
                <input type="hidden" value="<?php echo $row['ans3']?>" id="ans_3" name="ans_3">
                <input type="radio" name="opt" class="opt" <?php if($user_ans==4) : ?> checked
               <?php endif ; ?> value="4"><?php echo $row['ans4']?><br>
                <input type="hidden" value="<?php echo $row['ans4']?>" id="ans_4" name="ans_4">
                <input type="hidden" value="<?php echo $row['ans_option']?>" id="ans_option" name="ans_option">
                <?php if ($page!= 1) : ?><a href='quiz-start.php?page=<?php echo ($page-1);?>&id=<?php echo ($id);?>' class="quiz-btn-css">PREV-QUESTION</a><?php endif; ?> 
                <?php if ($page!=$total_page) : ?><input type="submit" value="NEXT QUESTION" name="ans-submit" id="ans-submit" class = "quiz-btn-css"><?php endif; ?>
                <?php if ($page==$total_page) : ?><input type="submit" value="FINISH" name="ans-submit" id="ans-submit" class = "quiz-btn-css"><?php endif; ?>
                <br>
    	</form>
<?php 
    }
}
?>

<!-- start the code for pagination or navbar -->

<!-- fail when i tried to use AJAx here -->
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#ans-submit').on("click", function(e) {
            e.preventDefault();
            var sess = $('#sess_id').val();
            var examid = $('#exam_id').val();
            var quetitle = $('#que_title').val();
            var ans1 = $('#ans_1').val();
            var ans2 = $('#ans_2').val();
            var ans3 = $('#ans_3').val();
            var ans4 = $('#ans_4').val();
            var correctans = $('#ans_option').val();
            var yourans = $('input:radio[name=opt]:checked').val();         
            $.ajax({ 
                url : 'ans_insert.php',
                type : 'POST',                
                // data : {esess_id:sess, eexam_id:examid, eque_title:quetitle, eans_1:ans1, eans_2:ans2, eans_3:ans3, eans_4:ans4, ecorrect_ans:correctans, eyour_ans:yourans },
                success: function(data){
                }
            });
        });           
    });
</script> -->


<?php include 'footer.php';?>