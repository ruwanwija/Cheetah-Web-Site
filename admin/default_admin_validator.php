<?php
require_once("../config.php");

$user_name = $_POST['email'];
$user_password = $_POST['password'];


$user_login_query = "SELECT user_password, user_name FROM users WHERE user_email = 'ruwanwijayasundara@gmail.com' && user_password = '1234'";

$return_query = mysqli_query($conn, $user_login_query);

if($return_query){
    $result = mysqli_fetch_assoc($return_query);
    if($result['user_password'] == $user_password){
        echo "Done";
        $_SESSION['current_user_name'] = $result['user_name'];
        header("location:admin signup.php");
    }
    else{
        echo "Incorrect Email or Password!!!";
    }
}
else{
    echo "Somthing Went Wrong in Login";
}

?>