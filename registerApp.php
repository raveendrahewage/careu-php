<?php
require "conn.php";

$username = $_POST['userName'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$nicNumber = $_POST['nicNumber'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$dateOfBirth = $_POST['dateOfBirth'];
$phoneNumber = $_POST['phoneNumber'];

$mysql_qry = "insert into servicerequester(userName,password,firstName,lastName,nicNumber,gender,email,address,dateOfBirth,phoneNumber)
               values ('$username','$password','$firstName','$lastName','$nicNumber','$gender','$email','$address','$dateOfBirth','$phoneNumber')";
if($conn->query($mysql_qry) === TRUE){
    echo "Registration successful";
}
else{
    echo "Error :".$mysql_qry."<br>".$conn->error;
} 
$conn->close();
?>