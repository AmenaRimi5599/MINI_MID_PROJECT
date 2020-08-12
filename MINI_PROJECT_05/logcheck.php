

<?php

if(isset($_POST['submit'])){
    $conn = mysqli_connect('localhost', 'root', '', 'mini_project');

        if(empty( $_POST['userId']) || empty($_POST['pass'])){
            echo "Invalid";
        }
        else{
           	$userId 	= $_POST['userId'];
		    $password 	= $_POST['pass'];

            $query = "SELECT * FROM userinfo WHERE UserId = '$userId' AND Password = '$password'";
            $result = mysqli_query($conn, $query);
      
            while( $row = mysqli_fetch_assoc($result) ){
                
                $Cname     =$row['Name'];
                $Cuserid   =$row['UserId'];
                $Cemail    = $row['Email'];
                $Cpassword = $row['Password'];
                $CuserType = $row['UserType'];

                if(($userId == $Cuserid) && ($password == $Cpassword)){
                    if($CuserType == 'Admin'){
                        $user = ['name'=> $Cname,'userId'=>$Cuserid,'email'=> $Cemail,'pass'=> $Cpassword, 'userType'=>$CuserType];

            
                        $_SESSION['name']   = $Cname;
                        $_SESSION['userId'] =$Cuserid;
                        $_SESSION['email']      = $Cemail;
                        $_SESSION['pass']       = $password;
                        $_SESSION['userType']   = $CuserType;
                        $_SESSION['user']       = $user;

            
                    
                        setcookie('name', $Cname, time()+3600, '/');
                        setcookie('userId', $userid, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('pass', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');

                        $_SESSION['status']  = "Ok";
                        setcookie('status', "OK", time()+3600, '/');
            
                        echo "Cookie set.";
                        header('location: admin.php');
                    }
                    else if($CuserType == 'User'){
                       $user = ['name'=> $Cname,'userId'=>$Cuserid,'email'=> $Cemail,'pass'=> $Cpassword, 'userType'=>$CuserType];


            
                        $_SESSION['name']   = $Cname;
                        $_SESSION['userId'] =$Cuserid;
                        $_SESSION['email']      = $Cemail;
                        $_SESSION['pass']       = $password;
                        $_SESSION['userType']   = $CuserType;
                        $_SESSION['user']       = $user;

            
                    
                        setcookie('name', $Cname, time()+3600, '/');
                        setcookie('userId', $userid, time()+3600, '/');
                        setcookie('email', $Cemail, time()+3600, '/');
                        setcookie('pass', $Cpassword, time()+3600, '/');
                        setcookie('userType', $CuserType, time()+3600, '/');

                        $_SESSION['status']  = "Ok";
                        setcookie('status', "OK", time()+3600, '/');
            
                        echo "Cookie set.";
                        header('location: user.php');
                    }
                }
     
            } 
        }
    }  
else
{
    echo "sorry!!";
}
?>