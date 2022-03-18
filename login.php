<?php

$UserName = "Meissa";
$badPassword = "Password";

session_start();

$User = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
$Pass = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);

if(strlen($User) > 20 ||  strlen($User) > 20){
	header('Location: index.php');
}else{
	if(isset($_SESSION['uname'])){
		header('Location: Home.php');
	}
	else
	{
		if(($User == $UserName) && ($Pass == $badPassword)){
			$_SESSION['uname'] = $UserName;
			header('Location: Home.php');
		}
		else{
			$Message=urlencode("PLEASE LOG IN.");
	        header("Location: index.php?Message=".$Message);
		
		}
	}
}



?>
