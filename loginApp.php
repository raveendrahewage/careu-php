<?php
require "conn.php";

$userName = $_POST['userName'];
$password = $_POST['password'];
$mysql_qry = "select * from servicerequester where username like '$userName' and password like '$password' ";
$result = mysqli_query($conn,$mysql_qry);
if(mysqli_num_rows($result)>0){
    echo "login success";
}
else{
    echo "User login failed";
}
?>