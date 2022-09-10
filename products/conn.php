<?php
	$Product_ID = $_POST['Product_ID']
	$Product_name = $_POST['Product_name'];
	$Quantity = $_POST['Quantity'];
	$Cost_price = $_POST['Cost_price'];

	// Database connection
	$conn = new mysqli('localhost','root','','beru_naturals');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into products(Product_ID,Product_name,Quantity,Cost_price) values(?, ?, ?,?)");
		$stmt->bind_param("isii", $Product_ID,$Product_name, $Quantity, $Cost_price);
		$execval = $stmt->execute();
		echo $execval;
		echo "Product added successfully...";
		$stmt->close();
		$conn->close();
	}
?>