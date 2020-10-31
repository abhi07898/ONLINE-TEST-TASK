<?php
session_start();
include 'header.php';
include 'config.php';
?>
<div class='sess-info'>Hello Mr. <?php echo $_SESSION['admin'];?> If you have done any test rather than it. it will show in below table </div>

<?php include 'footer.php'?>