<?php

    require "dbconn.php";

    $query = "SELECT * FROM dms_admin";
    $result = mysqli_query($conn, $query);

    if (isset($_GET['admin_info'])) {

        $admin_id = $_GET['admin_info'];
        $admin = $conn->query("SELECT * FROM dms_admin WHERE admin_id=$admin_id") or die($conn->error);;
        $row = $admin->fetch_array();

        $admin_id = $row['admin_id'];   
        $admin_password = $row['admin_password'];
        $admin_firstname = $row['admin_firstname'];
        $admin_lastname = $row['admin_lastname'];
    }
    
    if (isset($_POST['update_admin'])) {
        $admin_id = $_POST['admin_id'];   
        $admin_password = $_POST['admin_password'];
        $admin_firstname = $_POST['admin_firstname'];
        $admin_lastname = $_POST['admin_lastname'];

        $conn->query("UPDATE dms_admin SET admin_id='$admin_id', admin_password='$admin_password', admin_firstname='$admin_firstname',admin_lastname='$admin_lastname' WHERE admin_id ='$admin_id'")  or die($conn->error);;
        header('location: ./DMS_AdminAdminsPage.php');
    }
?>