<?php

    require "dbconn.php";

    $query = "SELECT * FROM dms_activities";
    $result = mysqli_query($conn, $query);

    if (isset($_GET['activity_info'])) {

        $activities_number = $_GET['activity_info'];
        $activity = $conn->query("SELECT * FROM dms_activities WHERE activities_number=$activities_number") or die($conn->error);
        $row = $activity->fetch_array();

        $activities_number = $row['activities_number'];   
        $activities_description = $row['activities_description'];
        $activities_topic = $row['activities_topic'];
        $activities_datesubmission = $row['activities_datesubmission'];
        $activities_uploader = $row['activities_uploader'];
        $activities_fileuploads = $row['activities_fileuploads'];
    }
    
    if (isset($_POST['update_activity'])) {
        $activities_number = $_POST['activities_number'];   
        $activities_description = $_POST['activities_description'];
        $activities_topic = $_POST['activities_topic'];
        $activities_datesubmission = $_POST['activities_datesubmission'];
        $activities_uploader = $_POST['activities_uploader'];
        $activities_fileuploads = $_POST['activities_fileuploads'];

        $conn->query("UPDATE dms_activities SET activities_number='$activities_number', activities_description='$activities_description', activities_topic='$activities_topic',activities_datesubmission='$activities_datesubmission', activities_uploader='$activities_uploader', activities_fileuploads='$activities_fileuploads' WHERE activities_number='$activities_number'") or die($conn->error);

        header('location: ./DMS_AdminActivitiesPage.php');
    }
?>