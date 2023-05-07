<?php

require "dbconn.php";


 if (isset ($_POST['Upload'])) {
    $admin_id = $_POST['admin_id'];
	$admin_password = $_POST['admin_password'];
    $admin_firstname = $_POST['admin_firstname'];
	$admin_lastname = $_POST['admin_lastname'];
                
    $query = "INSERT INTO dms_admin (admin_id,admin_password,admin_firstname,admin_lastname)
    VALUES ('$admin_id','$admin_password','$admin_firstname','$admin_lastname')";

    if(mysqli_query($conn,$query)){
        echo ("<script>alert('Admin Added.')</script>");
        header("Location: DMS_AdminHomepage.php");
    } else {
        echo ("<script>alert('Adding Admin failed.')</script>");
        header("Location: DMS_AdminAdminsPage.php");
    }
 }
    mysqli_close($conn);

?>