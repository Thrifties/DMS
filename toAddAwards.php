<?php
	require "dbconn.php";

	if (isset ($_POST['Submit']))
    $user_username=$_POST['user_username'];
	$user_awarddescription = $_POST['user_awarddescription'];
	$user_awardsponsor = $_POST['user_awardsponsor'];
	$user_awarddategranted = $_POST['user_awarddategranted'];

        $query = "INSERT INTO dms_awards (user_username,user_awarddescription,user_awardsponsor,user_awarddategranted)
		VALUES ('$user_username','$user_awarddescription','$user_awardsponsor','$user_awarddategranted')";

        if(mysqli_query($conn,$query)){
            echo ("<script>alert('Information Added.')</script>");
            header("Location: DMS_UserHomepage.php");
        } else {
		    echo ("<script>alert('Registration failed.')</script>");
            header("Location: DMS_AwardsPage.php");
        }
	mysqli_close($conn);
?>