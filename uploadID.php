<?php
$user_name = "root";
$user_pass = "";
$host_name = "localhost";
$db_name = "careu";

$conn = mysqli_connect($host_name,$user_name,$user_pass,$db_name);

if($conn){
    $image = $_POST["image"];
    $name = $_POST["name"];
    $id = "3";
    $sql = "insert into idphoto(userId,idPhoto) values ('$id','$name')";
    $upload_path = "upload/$name.jpg";

    if(mysqli_query($conn,$sql)){
        file_put_contents($upload_path,base64_decode($image));
        echo json_encode(array('response'=>'image uploaded successfully'));
    }
    else{
        echo json_encode(array('response' => 'Image upload failed'));
    }
}
else{
    echo json_encode(array('response'=>'connection fail'));
}
?>