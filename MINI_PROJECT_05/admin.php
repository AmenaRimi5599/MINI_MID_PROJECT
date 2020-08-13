<?php
  session_start();

  if($_COOKIE['status'] == "OK"){ 
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN Page</title>
</head>
<body>
	<form>
		
			<table border="1" cellspacing="0" cellpadding="5" align="center" width="40%">
			<tr>
				<td align="center"><h1>Welcome <?=$_COOKIE['name']?>!</h1>
				</td>
			</tr>
			<tr>
				<td align="center" height="30%">
					<p><a href="profile.php"> Profile</a></p>
					<p><a href="change_password.php">Change Password</a></p>
					<p><a href="view_users.php">View Users</a></p>
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