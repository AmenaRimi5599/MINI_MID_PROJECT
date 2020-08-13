
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
  
</head>
<body >
	<form action="password_check.php" method="post" >
  <fieldset >
    <legend>CHANGE PASSWORD</legend>
    <table width="40%" cellspacing="5">
      <tr>
        <td>Current Password</td>
        <td>: <input type="password" name="currpass"></td>
      </tr>
      <tr>
        <td>New Password</td>
        <td>: <input type="password" name="newpass"></td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td>: <input type="password" name="cpass"></td>
      </tr>
    </table>
    <hr><br>
    <input type="submit" name="submit" value="change">
    <a href="login.php">Home</a>
  </fieldset>
</form>
</body>
</html>