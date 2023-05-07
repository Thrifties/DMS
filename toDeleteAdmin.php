<?php
	require "dbconn.php";
	if(isset($_GET['deleteid'])){
		$admin_id=$_GET['deleteid'];

		$query="DELETE FROM dms_admin WHERE admin_id = '$admin_id'";
		$result = mysqli_query($conn,$query);;

		if($result)
        {
            echo "<script>alert('Admin deleted successfully.');</script>";
			header("refresh: 0; url=DMS_AdminAdminsPage.php");
        }
		else{
			die(mysqli_error($conn));
			
		}
	}
?>