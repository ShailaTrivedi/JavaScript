<?php
	//Create Connection
	$con = mysqli_connect('localhost','root','');
 
	if(!$con)
	{
	echo 'Not connected to Server';
	}	
	if(!mysqli_select_db($con,'appointment_data_table'))
	{
		echo 'Database not Selected';
	}
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$services = $_POST['services'];
	$phone = $_POST['phone'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$message = $_POST['message'];
	
	$sql = "INSERT INTO appointment_data_table (first_name,last_name,services,phone,date,time,message) VALUES ('$first_name','$last_name','$services','$phone','$date','$time','$message')";
	
	if(!mysqli_query($con,$sql))
	{
		echo "Not Inserted";
	}
	else
	{
		echo "Inserted";
	}
	//header("refresh:1; url=index.php");


?>

