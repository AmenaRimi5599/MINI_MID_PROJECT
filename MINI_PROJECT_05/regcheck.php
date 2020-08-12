
<?php
    if(isset($_POST['submit'])){
    	$conn = mysqli_connect('localhost', 'root', '', 'mini_project');

        $name     = $_POST['name'];
	    $userid   =  $_POST['userId'];
	    $email    =$_POST['email'];
	    $password =  $_POST['pass'];
        $usertype = $_POST['userType'];
    
        $query = "INSERT INTO userinfo (Name, UserId, Email, Password, UserType) VALUES ('$name', '$userid', '$email', '$password','$usertype')";
        $result = mysqli_query($conn, $query);

        header('location: login.php');
    }
    else
    {
    	echo "sorry!!";
    }
?>