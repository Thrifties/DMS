<?php
	require "dbconn.php";
	if(isset($_GET['deleteid'])){
		$staff_id=$_GET['deleteid'];

		$query="DELETE FROM dms_staff WHERE staff_id = '$staff_id'";
		$result = mysqli_query($conn,$query);;

		if($result)
        {
            echo "<script>alert('Staff deleted successfully.');</script>";
			header("refresh: 0; url=DMS_AdminStaffsPage.php");
        }
		else{
			die(mysqli_error($conn));
			
		}
	}
?>