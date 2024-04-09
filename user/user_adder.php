<?php

require_once("../config.php");

$user_email = $_POST['email'];
$user_password = $_POST['password'];
$user_name = $_POST['name'];
$user_number = $_POST['number'];
$user_nic = $_POST['nic'];
$user_address = $_POST['address'];
$user_city = $_POST['city'];

$user_adder_query = "INSERT INTO users (user_id,user_email,user_password,user_name,user_contact_no,user_nic,user_address, user_city)VALUES ('', '$user_email', '$user_password', '$user_name', '$user_number', '$user_nic', '$user_address', '$user_city')";

$return_query = mysqli_query($conn, $user_adder_query);

if($return_query){
    echo "Done";
    header("location:login.php");
}
else{
    echo "Somthing Went Wrong";
}

?>