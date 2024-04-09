<?php

require_once("../config.php");

$admin_email = $_POST['email'];
$admin_password = $_POST['password'];
$admin_name = $_POST['name'];
$admin_number = $_POST['number'];
$admin_nic = $_POST['nic'];
$admin_address = $_POST['address'];
$admin_gender = $_POST['gender'];

$admin_adder_query = "INSERT INTO admin (admin_id,admin_email,admin_password,admin_name,admin_number,admin_nic,admin_address, admin_gender)VALUES ('', '$admin_email', '$admin_password', '$admin_name', '$admin_number', '$admin_nic', '$admin_address', '$admin_gender')";

$return_query = mysqli_query($conn, $admin_adder_query);

if($return_query){
    echo "Done";
    header("location:admin login.php");
}
else{
    echo "Somthing Went Wrong";
}

?>