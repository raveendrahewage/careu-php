<?php
require  "conn.php";
 $username = $_POST['username'];
 // $username="1599";




 
	$mysql_qry_relation = "select userId from servicerequester where username like '$username' and status like '1'";
	$result = mysqli_query($conn,$mysql_qry_relation);
	$row=$result->fetch_assoc();
	$userId = (int) $row['userId'];

	$relative1 = $_POST['relative1'];
	$relative1Number = $_POST['relative1Number'];
	// $relative1 = "Damish";
	// $relative1Number = "0776560118";
	$flag = 0;
	if($relative1Number != NULL){
		$mysql_query = "insert into relative (userId,name,phoneNumber) values ($userId,'$relative1','$relative1Number')";
		$conn->query($mysql_query);
		// if($conn->query($mysql_query) === TRUE){
		//     echo "relative1";
		// }
		// else{
		//     echo "Error :".$mysql_query."<br>".$conn->error;
		// } 
		$flag++;
		}

		$relative2 = $_POST['relative2'];
		$relative2Number = $_POST['relative2Number'];

	if($relative2Number != NULL){
		$mysql_query = "insert into relative (userId,name,phoneNumber) values ($userId,'$relative2','$relative2Number')";
		$conn->query($mysql_query);
		// if($conn->query($mysql_query) === TRUE){
		//     echo "relative1";
		// }
		// else{
		//     echo "Error :".$mysql_query."<br>".$conn->error;
		// } 
		$flag++;
		}

		$relative3 = $_POST['relative3'];
		$relative3Number = $_POST['relative3Number'];

	if($relative3Number != NULL){
		$mysql_query = "insert into relative (userId,name,phoneNumber) values ($userId,'$relative3','$relative3Number')";
		$conn->query($mysql_query);
		// if($conn->query($mysql_query) === TRUE){
		//     echo "relative1";
		// }
		// else{
		//     echo "Error :".$mysql_query."<br>".$conn->error;
		// }
		$flag++; 
		}
		

	echo "Sucessfully add the Relatives";



?>