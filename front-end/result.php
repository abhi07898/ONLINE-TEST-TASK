<?php
session_start();
include 'header.php';
include 'config.php';
$sess_id =  $_SESSION['sess_id']; 
$sess_name = $_SESSION['admin'];
?>
<table id="result-table">
    <tr id="tr-css1">
        <th class="td-css">NAME</th>
        <th class="td-css">QUESTION</th>
        <th class="td-css">OPT-1</th>
        <th class="td-css">OPT-2</th>
        <th class="td-css">OPT-3</th>
        <th class="td-css">OPT-4</th>
        <th class="td-css">CORRECT-ANS</th>
        <th class="td-css">YOUR-ANS</th>
    </tr>

<?php
$sql = "SELECT * FROM answer WHERE `session_id`='$sess_id' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
    <tr class='tr-css'>
    <td class="td-css"><?php echo $sess_name;?></td>
    <td class="td-css"><?php echo $row['que_title'];?></td>
    <td class="td-css"><?php echo $row['ans1'];?></td>
    <td class="td-css"><?php echo $row['ans2'];?></td>
    <td class="td-css"><?php echo $row['ans3'];?></td>
    <td class="td-css"><?php echo $row['ans4'];?></td>
    <td class="td-css"><?php echo $row['true_ans'];?></td>
    <td class="td-css"><?php echo $row['your_ans'];?></td>   
    </tr>   
<?php 
    }
}
?>
</table>
<?php include 'footer.php';?>