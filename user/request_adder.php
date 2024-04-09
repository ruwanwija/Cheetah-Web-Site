<?php

		require_once("../config.php");

		$dimention_length = $_POST['length'];
		$dimention_width = $_POST['width'];
		$dimention_height = $_POST['height'];
		$sender_date = $_POST['sender-date-input'];
		$sender_time_from = $_POST['sender-start-time'];
		$sender_time_to = $_POST['sender-end-time'];
        $receiver_date = $_POST['receiver-date-input'];
		$receiver_time_from = $_POST['receiver-start-time'];
		$receiver_time_to = $_POST['receiver-end-time'];
		$address_street = $_POST['street'];
        $address_city = $_POST['city'];
        $contact_no = $_POST['phone'];

		$request_adder_query = "INSERT INTO request(request_no,parcel_length,parcel_width,	parcel_height,sender_date,sender_from,sender_to,receiver_date,receiver_from,receiver_to,sender_street,sender_city,contact_no)VALUES('','$dimention_length','$dimention_width','$dimention_height','$sender_date','$sender_time_from','$sender_time_to','$receiver_date','$receiver_time_from','$receiver_time_to','$address_street','$address_city',' $contact_no')";
		
		$return_query = mysqli_query($conn, $request_adder_query);

        if($return_query){
            echo "Done";
            header("location:pickup_request.php");
        }
        else{
            echo "Somthing Went Wrong";
        }

	  ?>