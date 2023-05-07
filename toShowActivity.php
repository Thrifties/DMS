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
?>