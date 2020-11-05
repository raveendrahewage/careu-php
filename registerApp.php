<?php
require "conn.php";

$username = $_POST['userName'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$nicNumber = $_POST['nicNumber'];
// $gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
// $dateOfBirth = $_POST['dateOfBirth'];
 $phoneNumber = $_POST['phoneNumber'];
$gender = $_POST['gender'];

$dbday = $_POST['dateOfBirth'];
$time = strtotime($dbday);
// $newformat = date('Y-m-d',$time);
$dateOfBirth =  date('Y-m-d',$time);

$mysql_qry = "select * from servicerequester where username like '$username' ";

$result = mysqli_query($conn,$mysql_qry);

if (mysqli_num_rows($result)>0) {
	echo "Already Used User_name please use another one";
}else{
	$mysql_qry = "select * from serviceRequester where  nicNumber like '$nicNumber'";
	$result = mysqli_query($conn,$mysql_qry);
		if (mysqli_num_rows($result)>0) {
			echo "Already Created Account using this ID";
		}else{
			$mysql_qry = "insert into serviceRequester (userName,password,firstName,lastName,nicNumber,gender,email,address,dateOfBirth,phoneNumber)
               values ('$username','$password','$firstName','$lastName','$nicNumber','$gender','$email','$address','$dateOfBirth','$phoneNumber')";
					if($conn->query($mysql_qry) === TRUE){
					    echo "Registration successful";
					}
					else{
					    echo "Error :".$mysql_qry."<br>".$conn->error;
					} 


		}

}





// $mysql_qry = "insert into serviceRequester (userName,password,firstName,lastName,nicNumber,gender,email,address,dateOfBirth,phoneNumber)
//                values ('$username','$password','$firstName','$lastName','$nicNumber','$gender','$email','$address','$dateOfBirth','$phoneNumber')";
// if($conn->query($mysql_qry) === TRUE){
//     echo "Registration successful";
// }
// else{
//     echo "Error :".$mysql_qry."<br>".$conn->error;
// } 
$conn->close();
?>