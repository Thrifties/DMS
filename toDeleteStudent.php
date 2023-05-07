<?php
	require "dbconn.php";
	if(isset($_GET['deleteid'])){
		$user_studentnum=$_GET['deleteid'];

		$query="DELETE FROM dms_user WHERE user_studentnum = '$user_studentnum'";
		$result = mysqli_query($conn,$query);;

		if($result)
        {
            echo "<script>alert('Student deleted successfully.');</script>";
			header("refresh: 0; url=DMS_AdminStudentsPage.php");
        }
		else{
			die(mysqli_error($conn));
			
		}
	}
?>