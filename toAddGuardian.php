<?php
	require "dbconn.php";

	if (isset ($_POST['Submit']))
    $user_username=$_POST['user_username'];
	$user_guardian_name = $_POST['user_guardian_name'];
	$user_guardian_relationship = $_POST['user_guardian_relationship'];
	$user_guardian_address = $_POST['user_guardian_address'];
	$user_guardian_contactnum = $_POST['user_guardian_contactnum'];

        $query = "INSERT INTO dms_guardian (user_username,user_guardian_name,user_guardian_relationship,user_guardian_address,user_guardian_contactnum)
		VALUES ('$user_username','$user_guardian_name','$user_guardian_relationship','$user_guardian_address','$user_guardian_contactnum')";

        if(mysqli_query($conn,$query)){
            echo ("<script>alert('Information Added.')</script>");
            header("Location: DMS_UserHomepage.php");
        } else {
		    echo ("<script>alert('Adding Information failed.')</script>");
            header("Location: DMS_GuardianPage.php");
        }
	mysqli_close($conn);
    
?>