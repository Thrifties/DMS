<?php
	require "dbconn.php";
	if(isset($_GET['deleteid'])){
		$activities_number=$_GET['deleteid'];

		$query="DELETE FROM dms_activities WHERE activities_number = '$activities_number'";
		$result = mysqli_query($conn,$query);;

		if($result)
        {
            echo "<script>alert('Activity deleted successfully.');</script>";
			header("refresh: 0; url=DMS_AdminActivitiesPage.php");
        }
		else{
			die(mysqli_error($conn));
			
		}
	}
?>