<?php
	require "dbconn.php";
// Specify the directory to save uploaded files
$target_dir = "uploads/";

// Loop through each uploaded file
foreach ($_FILES["fileUpload"]["error"] as $key => $error) {
  if ($error == UPLOAD_ERR_OK) {
    // Generate a unique filename for the uploaded file
    $filename = uniqid() . "_" . basename($_FILES["fileUpload"]["name"][$key]);

    // Move the uploaded file to the specified directory on the server
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"][$key], $target_dir . $filename)) {
      echo "File uploaded successfully: " . $filename . "<br>";
    } else {
      echo "Error uploading file: " . $filename . "<br>";
    }
  }
}
?>
