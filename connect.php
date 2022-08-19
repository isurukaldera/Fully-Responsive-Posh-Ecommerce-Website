
<?php
	$YourName = $_POST['YourName'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];
	$ConfirmPassword = $_POST['ConfirmPassword'];
	$Mobilenumber = $_POST['Mobilenumber'];


	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Sign in(YourName, Email, Password,ConfirmPassword,Mobilenumber) values(?, ?, ?, ?, ?, )");
		$stmt->bind_param("ssssi", $YourName, $Email, $Password, $ConfirmPassword, $Mobilenumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>