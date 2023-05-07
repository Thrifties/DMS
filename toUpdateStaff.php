<?php

    require "dbconn.php";

    $query = "SELECT * FROM dms_staff";
    $result = mysqli_query($conn, $query);

    if (isset($_GET['staff_info'])) {

        $staff_id = $_GET['staff_info'];
        $staff = $conn->query("SELECT * FROM dms_staff WHERE staff_id=$staff_id");
        $row = $staff->fetch_array();

        $staff_id = $row['staff_id'];   
        $staff_password = $row['staff_password'];
        $staff_firstname = $row['staff_firstname'];
        $staff_lastname = $row['staff_lastname'];
    }
    
    if (isset($_POST['update_staff'])) {
        $staff_id = $_POST['staff_id'];   
        $staff_password = $_POST['staff_password'];
        $staff_firstname = $_POST['staff_firstname'];
        $staff_lastname = $_POST['admin_lastname'];

        $conn->query("UPDATE dms_staff SET staff_id='$staff_id', staff_password='$staff_password', staff_firstname='$staff_firstname',staff_lastname='$staff_lastname' WHERE staff_id='$staff_id'");
        header('location: ./DMS_AdminStaffsPage.php');
    }
?>