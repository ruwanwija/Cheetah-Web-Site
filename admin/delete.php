<?php

		require_once("../config.php");
        if(isset($_GET['deleteid'])){
            $id = $_GET['deleteid'];

            $query = "DELETE FROM parcel WHERE id = '$id'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "Record deleted successfully.";
            } else {
                echo "Error: " . mysqli_error($conn);
}
            }
         