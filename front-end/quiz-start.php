<?php include 'header.php';
include 'config.php';
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
    	<div id="question">
    		Question : <?php echo $row['que_title']?> ?
    	</div>
    	<div id="options">
    	<form action="" method="POST">
    		<input type="radio" name="opt" value="1"><?php echo $row['ans1']?> <br>
    		<input type="radio" name="opt" value="2"><?php echo $row['ans2']?> <br>
    		<input type="radio" name="opt" value="3"><?php echo $row['ans3']?> <br>
    		<input type="radio" name="opt" value="4"><?php echo $row['ans4']?> <br>
    		<input type="submit" value="SUBMIT" name="ans-submit" class = "ans-btn-css">
    	</div><br>
    	</form>
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
        echo '<li class="li-css"><a href="quiz-start.php?page='.($page-1).'&id='.$id.'" class="a-css">BACK</a></li>';	
    }
    // for ($i=1; $i<=$total_page; $i++) {
    //           echo '<li class="li-css"><a href="quiz-start.php?id='.$id.'&page='.$i.'" class="a-css">'.$i.'</a></li>';
    //   }
    if ($total_page > $page) {
        echo '<li class="li-css"><a href="quiz-start.php?page='.($page+1).'&id='.$id.'" class="a-css">FORWORD</a></li>';
    }
    echo '</ul>';
}
?>
<?php include 'footer.php';?>