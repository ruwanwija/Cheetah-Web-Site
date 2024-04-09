<?php

		require_once("../config.php");

		$parcel_type = $_POST['parcelType'];
		$parcel_description = $_POST['description'];
		$parcel_receiver = $_POST['receiverName'];
		$receiver_contact_no = $_POST['contact'];
		$parcel_address = $_POST['address'];
		$parcel_city = $_POST['city'];
		$parcel_province = $_POST['province'];

		$parcel_adder_query = "INSERT INTO parcel(tracking_no,parcel_type,parcel_description,parcel_receiver,parcel_contact_no,parcel_address,parcel_city,parcel_province)VALUES('','$parcel_type','$parcel_description','$parcel_receiver','$receiver_contact_no','$parcel_address','$parcel_city','$parcel_province')";
		
		$return_query = mysqli_query($conn, $parcel_adder_query);

        if($return_query){
            echo "Done";
            header("location:newparcel.php");
        }
        else{
            echo "Somthing Went Wrong";
        }

	  ?>