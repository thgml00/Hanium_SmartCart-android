<?php 
    $con = mysqli_connect("localhost", "knormal", "knormal@0102", "knormal");
    mysqli_query($con,'SET NAMES utf8');

	$userID = $_POST["userID"];
	$order_id = $_POST["order_id"];
	$productName = $_POST["productName"];

	$sql = "INSERT INTO CHECKLIST (userID, order_id, productName) VALUES ('$userID','$order_id','$productName')";

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