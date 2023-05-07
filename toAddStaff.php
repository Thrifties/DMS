<?php

require "dbconn.php";


 if (isset ($_POST['Upload'])) {
    $staff_id = $_POST['staff_id'];
	$staff_password = $_POST['staff_password'];
    $staff_firstname = $_POST['staff_firstname'];
	$staff_lastname = $_POST['staff_lastname'];
                
    $query = "INSERT INTO dms_staff (staff_id,staff_password,staff_firstname,staff_lastname)
    VALUES ('$staff_id','$staff_password','$staff_firstname','$staff_lastname')";

    if(mysqli_query($conn,$query)){
        echo ("<script>alert('Staff Added.')</script>");
        header("Location: DMS_AdminHomepage.php");
    } else {
        echo ("<script>alert('Adding Staff failed.')</script>");
        header("Location: DMS_AdminStaffsPage.php");
    }
 }
    mysqli_close($conn);

?>