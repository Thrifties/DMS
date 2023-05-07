<?php
	$conn = mysqli_connect("localhost","root","");
	if(!mysqli_select_db($conn,"db_dms")) 
	{
		die("connection error");
	}
?>