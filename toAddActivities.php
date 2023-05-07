<?php

require "dbconn.php";


 if (isset ($_POST['Upload'])) {
    $activities_number = $_POST['activities_number'];
	$activities_description = $_POST['activities_description'];
    $activities_topic = $_POST['activities_topic'];
	$activities_datesubmission = $_POST['activities_datesubmission'];
	$activities_uploader = $_POST['activities_uploader'];
    $activities_fileuploads = $_POST['activities_fileuploads'];

    $activities_fileuploads = $_FILES['activities_fileuploads'];
    $fileName = $_FILES['activities_fileuploads']['name'];
    $fileTmpName = $_FILES['activities_fileuploads']['tmp_name'];
    $fileSize = $_FILES['activities_fileuploads']['size'];
    $fileError = $_FILES['activities_fileuploads']['error'];
    $fileType = $_FILES['activities_fileuploads']['type'];

    $fileExt = explode ('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx', 'txt');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0 ) {
            if ($fileSize < 5000000) {
                $fileDestination = 'FileUploads/' . $fileName;
                
                $query = "INSERT INTO dms_activities (activities_number,activities_description,activities_topic,activities_datesubmission,activities_uploader,activities_fileuploads)
                VALUES ('$activities_number','$activities_description','$activities_topic', '$activities_datesubmission', '$activities_uploader','$activities_fileuploads')";
                

                if(mysqli_query($conn,$query)){
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: DMS_AdminActivitiesPage.php");
                }
                else{
                    header("Location: DMS_AdminAddActivitiesPage.php");
                }
                
            } else {
                echo "File size too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
    } else {
        echo "You cannot upload files of this type!";
    }
}
    mysqli_close($conn);
?>