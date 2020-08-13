<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
  
</head>
<body >
	<form action="logcheck.php" method="post" >
  <fieldset >
    <legend>LOGIN</legend>
    <table width="40%" cellspacing="5">
      <tr>
        <td>User Id</td>
        <td>: <input type="text" name="userId"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>: <input type="Password" name="pass"></td>
      </tr>
    </table>
    <input type="checkbox" name="remember">Remember Me
    <hr><br>
    <input type="submit" name="submit" value="login">
    <a href="home.php">Home</a>
  </fieldset>
</form>
</body>
</html>