
<?php
    

        $name     = $_POST['name'];
	    $userid   =  $_POST['userId'];
	    $email    =$_POST['email'];
	    $password =  $_POST['pass'];
        $usertype = $_POST['userType'];

        if(isset($_POST['submit'])){
        $conn = mysqli_connect('localhost', 'root', '', 'mini_project');
    
        $query = "INSERT INTO userinfo (Name, UserId, Email, Password, UserType) VALUES ('$name', '$userid', '$email', '$password','$usertype')";

        if(empty($name) || empty( $userid ) || empty($email ) || empty( $password) || empty($usertype))
        {

            echo "Invalid";
        }
        else
        {

            $result = mysqli_query($conn, $query);
            header('location: login.php');
        }
       
    }
    else
    {
    	echo "sorry!!";
    }
?>