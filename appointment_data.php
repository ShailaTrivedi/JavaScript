
<?php
//Create Connection
$conn = new mysqli('localhost','root','');

//Check Connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "DB connected successfully";

//this will select the Database sample_db	

mysqli_select_db($conn,"hospital_db");

echo "\n DB is selected as Test successfully";

//create INSERT query

$sql="INSERT INTO appointment_data_table(first_name,last_name,services,phone,date,time,message) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[services]','$_POST[phone]','$_POST[date]','$_POST[time]','$_POST[message]')";

if ($conn->query($sql) == TRUE) {
	
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

header("refresh:5; url=index.php");
?>
