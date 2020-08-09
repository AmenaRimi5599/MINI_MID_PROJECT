<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>
	<form action="regCheck.php" method="post">
		<fieldset>
			<legend><b>REGISTRATION</b></legend>

		<table width="80%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td>ID</td>
				<td><input type="text" name="userId"></td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email">
					<abbr title="hint: sample@example.com"><b>i</b></abbr></td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="confirmPassword"></td>
			</tr>
			<tr>
				<td colspan="3"><hr/></td>
			</tr>
			<tr>
				<td colspan="3">
					User Type
			        <select name="userType">
			        	<option>Admin</option>
			        	<option>User</option>
			        </select>
				</td>
				<td></td>
			</tr>
			
		</table>
		<hr/>
		<input type="submit" value="Submit" name="submit">
		<a href="login.php">Login</a>
		</fieldset>
	</form>
</body>
</html> 