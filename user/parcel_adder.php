<?php

		require_once("../config.php");

		$parcel_type = $_POST['parceltype'];
		$parcel_description = $_POST['description'];
		$parcel_receiver = $_POST['name'];
		$receiver_contact_no = $_POST['number'];
		$parcel_address = $_POST['address'];
		$parcel_city = $_POST['city'];
		$parcel_province = $_POST['province'];

		$parcel_adder_query = "INSERT INTO parcel(tracking_no,parcel_type,parcel_description,parcel_receiver,parcel_contact_no,parcel_address,parcel_city,parcel_province)VALUES('','$parcel_type','$parcel_description','$parcel_receiver','$receiver_contact_no','$parcel_address','$parcel_city','$parcel_province')";
		
		$return_query = mysqli_query($conn, $parcel_adder_query);

        if($return_query){
            echo "Done";
            header("location:Add_New_parcel.php");
        }
        else{
            echo "Somthing Went Wrong";
        }

	  ?>