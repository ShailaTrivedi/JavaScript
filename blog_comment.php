
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

$sql="INSERT INTO blog_comment_data_table(name,email,website,message) VALUES ('$_POST[name]','$_POST[email]','$_POST[website]','$_POST[message]')";

if ($conn->query($sql) == TRUE) {
	
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


?>
