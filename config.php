<?php
$server = "localhost";
$database = "cheetah_db";
$user = "root";
$password = "";

$conn = mysqli_connect($server, $user, $password, $database);

if($conn){
        echo "";
        session_start();
}
else{
        echo "Something went wrong!!";
}
?>