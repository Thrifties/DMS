<?php
	require "dbconn.php";

	if (isset ($_POST['Submit'])) {
    $user_emailadd = $_POST['user_emailadd'];
    $user_password = $_POST['user_password'];
	$user_username = $_POST['user_username'];
	$user_studentnum = $_POST['user_studentnum'];
	$user_firstname = $_POST['user_firstname'];
	$user_middlename = $_POST['user_middlename'];
	$user_lastname = $_POST['user_lastname'];
	$user_birthdate = $_POST['user_birthdate'];
	$user_gender = $_POST['user_gender'];
	$user_contactnum = $_POST['user_contactnum'];
	$user_course = $_POST['user_course'];
	$user_specialization = $_POST['user_specialization'];
	$user_section = $_POST['user_section'];
                
                $query = "INSERT INTO dms_user (user_emailadd,user_password,user_username,user_studentnum,user_firstname,user_middlename,user_lastname,user_birthdate,user_gender,user_contactnum,user_course,user_specialization,user_section) VALUES ('$user_emailadd','$user_password','$user_username','$user_studentnum','$user_firstname','$user_middlename','$user_lastname','$user_birthdate','$user_gender','$user_contactnum','$user_course','$user_specialization','$user_section')";

                if(mysqli_query($conn,$query)){
					echo ("<script>alert('Registration Success!')</script>");
                    header("Location: DMS_LoginPage.php");
                }
                else{
					echo ("<script>alert('Registration failed.')</script>");
                    header("Location: DMS_RegistrationPage.php");
                }
            } 
	mysqli_close($conn);
?>