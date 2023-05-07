<?php
	session_start();
	require "dbconn.php";

	if(isset($_SESSION["admin_id"]) && isset($_SESSION["admin_password"])){
		header("Location: DMS_AdminLogin.php");
		exit();
	}	
	$admin_id = $_POST["admin_id"];
	$admin_password= $_POST["admin_password"];
	$query = "SELECT * FROM dms_admin WHERE admin_id='$admin_id'and admin_password='$admin_password'";
	$result = mysqli_query($conn,$query);
	$count =  mysqli_num_rows($result);
        
	if($count==1){
	    $_SESSION['admin_id'] = $admin_id;
        $_SESSION['admin_password'] = $admin_password;
		header("Location: DMS_AdminHomepage.php");
		die;
	}

	else{
        echo ("<script>alert('Wrong Credentials. Login failed.')</script>");
		header("refresh: 0; url=DMS_AdminLogin.php");
	}
	mysqli_close($conn);
?>