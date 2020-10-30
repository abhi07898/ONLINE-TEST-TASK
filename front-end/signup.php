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
include 'header.php';
include 'signup-insert.php';
$error = array();?>
<div>
	<div id="login-content">
	    <?php
		if (sizeof($error) > 0) {
			foreach ($error as $values) {
					echo $values['msg'];
			}
		}
		?> 
		<form action="" method="POST">
		<table id="login-table">
		<tr>
			<td class="table-td">USER NAME :</td>
			<td class="table-td"><input type="text" name="username"class="inp-css" value='<?php echo $username;?>'></td>
			<td><span> <?php echo $username_err;?></span></td>
		</tr>
		<tr>
			<td class="table-td">PASSWORD :</td>
			<td class="table-td"><input type="password" name="password" class="inp-css"></td>
			<td><span> <?php echo $password_err;?></span></td>
		</tr>
		<tr>
			<td class="table-td"> RE-PASSWORD :</td>
			<td class="table-td"><input type="password" name="re-password" class="inp-css"></td>
			<td><span> <?php echo $repassword_err;?></span></td>
		</tr>
		<tr>
			<td class="table-td"> HIGHEST QUALIFICATION :</td>
			<td class="table-td"><input type="text" name="qualification" class="inp-css"></td>
			<td><span> <?php echo $qualification_err;?></span></td>
		</tr>
		<tr>
			<td class="table-td"> E-Mail :</td>
			<td class="table-td"><input type="text" name="email" class="inp-css"></td>
			<td><span> <?php echo $email_err;?></span></td>
		</tr>
	

		<tr>
			<td class="table-td" colspan="2"><input type="submit" name="register" value="REGISTER YOURSELF" class="btn-css"></td>
			
		</tr>
	</table>
		</form>
	</div>

	<div id="signup-img-css">
		<img src="img/online.png">
	</div>
		
</div>



<br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'?>