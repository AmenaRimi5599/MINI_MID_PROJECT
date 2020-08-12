<?php
  session_start();

  if($_COOKIE['status'] == "OK"){ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>USER Page</title>
</head>
<body>
	<form>
			<table width="50%" border="1" cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td align="center"><h1>Welcome User!</h1>
				</td>
			</tr>
			<tr>
				<td align="center">
					<p><a href="user_profile.php"> Profile</a></p>
					<p><a href="userchange_password.php">Change Password</a></p>
					<p><a href="login.php">logout</a></p>
				</td>
			</tr>
			

		
		</table>
	</form>
</body>
</html>
<?php
  }else{
    header('location: login.php');
  }
?>