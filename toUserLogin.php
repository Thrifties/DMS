<?php
	session_start();
	require "dbconn.php";

	if(isset($_SESSION["user_emailadd"]) && isset($_SESSION["user_password"])){
		header("Location: DMS_LoginPage.php");
		exit();
	}	
	$user_emailadd = $_POST["user_emailadd"];
	$user_password= $_POST["user_password"];
	$query = "SELECT * FROM dms_user WHERE user_emailadd='$user_emailadd'and user_password='$user_password'";
	$result = mysqli_query($conn,$query);
	$count =  mysqli_num_rows($result);
        
	if($count==1){
	    $_SESSION['user_emailadd'] = $user_emailadd;
        $_SESSION['user_password'] = $user_password;
		header("Location: DMS_UserHomepage.php");
		die;
	}

	else{
        echo ("<script>alert('Wrong Credentials. Login failed.')</script>");
		header("refresh: 0; url=DMS_LoginPage.php");
	}
	mysqli_close($conn);
?>