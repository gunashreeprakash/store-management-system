<?php
	
	$Product_name = $_POST['Product_name'];
	$Quantity = $_POST['Quantity'];
	$Price = $_POST['Price'];

	// Database connection
	$conn = new mysqli('localhost','root','','beru_naturals');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into products(Product_name,Quantity,Price) values( ?, ?,?)");
		$stmt->bind_param("sii",$Product_name, $Quantity, $Price);
		$execval = $stmt->execute();
		echo $execval;
		echo "Product added successfully...";
		$stmt->close();
		$conn->close();
	}
?>