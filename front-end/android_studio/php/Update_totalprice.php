<?php 
    $con = mysqli_connect("localhost", "knormal", "knormal@0102", "knormal");
    mysqli_query($con,'SET NAMES utf8');

	$userID = $_POST["userID"];
	$order_id = $_POST["order_id"];
	$total_price = $_POST["total_price"];

	$sql = "UPDATE USERORDER SET order_date= now(), total_price='$total_price' where order_id = '$order_id' and userID = '$userID'";

	$response = array();
	$response["success"] = mysqli_query($con, $sql);

	if($response["success"]) {
		echo "����!!";
	}
	else {
		echo "����!!";
	}

    echo json_encode($response);

?>