<?php
	require "dbconn.php";

	if (isset ($_POST['Submit']))
    $user_username=$_POST['user_username'];
	$user_tertiaryschool = $_POST['user_tertiaryschool'];
	$user_tertiaryschoolyeargraduated = $_POST['user_tertiaryschoolyeargraduated'];
	$user_secondaryseniorschool = $_POST['user_secondaryseniorschool'];
	$user_secondaryseniorschoolyeargraduated = $_POST['user_secondaryseniorschoolyeargraduated'];
	$user_secondaryjuniorschool = $_POST['user_secondaryjuniorschool'];
	$user_secondaryjuniorschoolyeargraduated = $_POST['user_secondaryjuniorschoolyeargraduated'];
	$user_primaryschool = $_POST['user_primaryschool'];
	$user_primaryschoolyeargraduated = $_POST['user_primaryschoolyeargraduated'];

    $query = "INSERT INTO dms_educationalbackground (user_username,user_tertiaryschool,user_tertiaryschoolyeargraduated,user_secondaryseniorschool,user_secondaryseniorschoolyeargraduated,user_secondaryjuniorschool,user_secondaryjuniorschoolyeargraduated,user_primaryschool,user_primaryschoolyeargraduated)
	VALUES ('$user_username','$user_tertiaryschool','$user_tertiaryschoolyeargraduated','$user_secondaryseniorschool','$user_secondaryseniorschoolyeargraduated','$user_secondaryjuniorschool','$user_secondaryjuniorschoolyeargraduated','$user_primaryschool','$user_primaryschoolyeargraduated')";

        if(mysqli_query($conn,$query)){
		echo ("<script>alert('Information Added.')</script>");
        header("Location: DMS_UserHomepage.php");
        }
        else{
		echo ("<script>alert('Adding Information failed.')</script>");
        header("Location: DMS_EducationalBackgroundPage.php");
        }

	mysqli_close($conn);
    
?>