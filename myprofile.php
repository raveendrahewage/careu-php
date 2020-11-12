<?php 
require  "conn.php";
$userName = $_GET['userName'];

$stmt = $conn->prepare("SELECT userName, firstName,lastName,email,phoneNumber ,nicNumber FROM servicerequester WHERE userName='$userName';");
 $stmt->execute();
  $stmt->bind_result($userName,$firstName,$lastName,$email,$phoneNumber,$nicNumber);

$product = array();

while ($stmt->fetch()) {
 	$temp = array();
 	$temp['userName'] = $userName;
 	$temp['firstName'] = $firstName;
 	$temp['lastName'] = $lastName;
 	$temp['email'] = $email;
 	$temp['phoneNumber'] = $phoneNumber;
 	$temp['nicNumber']=$nicNumber;
 	array_push($product, $temp);
 }
echo json_encode($product);


?>