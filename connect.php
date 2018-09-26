<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"restaurant");

	

	if(mysqli_connect_errno())
	{
		echo"connection is not established".
		mysqli_connect_errno();
	}

	
?>