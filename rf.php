<?php
$Name = $_POST['Name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','dream123','db');
if($conn->connect_error){
  die("Connection Failed : ". $conn->connect_error);
	}
else {
	$stmt = $conn->prepare("insert into registration(Name,age,gender,email,phone,password) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sissis",$Name,$age,$gender,$email,$phone,$password);
  $stmt->execute();
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
	}
?>
