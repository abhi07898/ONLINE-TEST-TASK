<?php include 'header.php';
include 'login-validation.php';?>
<div id="login-content">
	<form action="" method="POST">
		<table id="login-table">
			<tr>
				<td class="table-td">USER NAME :</td>
				<td class="table-td"><input type="text" name="username" class="inp-css" value="<?php echo $username ; ?>"><?php echo $name_err ;?> </td>
				<td></td>
			</tr>
			<tr>
				<td class="table-td">PASSWORD :</td>
				<td class="table-td"><input type="password" name="password" class="inp-css"><?php echo $password_err ; ?></td>
				<td>	<?php echo $incorrect ; ?></td>
				
			</tr>
			<tr>
				<td class="table-td"><input type="submit" name="login" value="LOGIN" class="btn-css"></td>
				<td class="table-td"><a href="signup.php" class="btn-css"> SIGNUP</a></td>
			</tr>
		</table>
	</form>
</div>
<div id="img-css">
    <img src="img/online.png">
</div>

<?php include 'footer.php';?>