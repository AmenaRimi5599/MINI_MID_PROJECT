<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>
<body>
	<form>
		
			<table border="1" cellspacing="0" cellpadding="5" align="center">
				<tr>
					<td align="center" colspan="2"><h3>Profile</h3></td>
				</tr>
				<tr>
					<td>ID</td>
					
					<td><?=$_COOKIE['userId']?></td>
				</tr>
				<tr>
					<td>NAME</td>
					
					<td><?=$_COOKIE['name']?></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					
					<td><?=$_COOKIE['email']?></td>
				</tr>
				<tr>
					<td>USER TYPE</td>
					
					<td><?=$_COOKIE['userType']?></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<?php
                        if($_COOKIE['userType']=="Admin"){
                        ?>
                        <a href="admin.php" align="center">GO Home</a>
                        <?php
                        }
                        else{
                        ?>
                        <a href="user.php" align="center">GO Home</a>
                        <?php
                        }
                        ?>
					</td>
				</tr>
			</table>
		
	</form>
</body>
</html>