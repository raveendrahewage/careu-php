<?php
require "conn.php";

$userName = $_POST['userName'];
$password = $_POST['password'];
$status  = "1";
$mysql_qry = "select * from servicerequester where username like '$userName' and password like '$password' and status like '$status' ";
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result)>0){
    echo "login success";
}
else{

	$mysql_qry = "select * from servicerequester where username like '$userName' and password like '$password' and status like '0' ";
	$result = mysqli_query($conn,$mysql_qry);
	if(mysqli_num_rows($result)>0){
		echo "Please Wait until admin aprove";
	}else{
		echo "User login failed";
	}

    
}
?>