<?php
require_once("../config.php");

$admin_name = $_POST['username'];
$admin_password = $_POST['password'];


$admin_login_query = "SELECT admin_password, admin_name FROM admin WHERE admin_email = '$admin_name'";

$return_query = mysqli_query($conn, $admin_login_query);

if($return_query){
    $result = mysqli_fetch_assoc($return_query);
    if($result['admin_password'] == $admin_password){
        echo "Done";
        $_SESSION['current_admin_name'] = $result['admin_name'];
        header("location:useraccount.php");
    }
    else{
        echo "Incorrect Email or Password!!!";
    }
}
else{
    echo "Somthing Went Wrong in Login";
}

?>