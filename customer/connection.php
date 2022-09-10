<?php
	
	$Customer_name = $_POST['Customer_name'];
	$Phone_no = $_POST['Phone_no'];
	$Address = $_POST['Address'];

	// Database connection
	$conn = new mysqli('localhost','root','','beru_naturals');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer(Customer_name,Phone_no,Address) values(?, ?, ?)");
		$stmt->bind_param("sssssi", $Customer_name, $Phone_no, $Address);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>