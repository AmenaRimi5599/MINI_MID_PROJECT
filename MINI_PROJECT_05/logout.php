<?php
    session_start();
	session_destroy();
	setcookie('status', "OK", time()-60, '/');
	header('location: home.php');
?>