<?php

	error_reporting(E_ALL); 
	ini_set('display_errors',1); 

	include('dbcon.php');


	//POST ���� �о�´�.
	$userID = isset($_POST['userID']) ? $_POST['userID'] : ''; //�̸��� ������
	$order_id = isset($_POST['order_id']) ? $_POST['order_id'] : ''; //�̸��� ������
	$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

	if ($userID != "" ){ 

    $sql="select productName, productPrice, classNum from USERBASKET where userID='$userID' and order_id='$order_id'";
    $stmt = $con->prepare($sql);
    $stmt->execute();
 
    if ($stmt->rowCount() == 0){

        echo "'";
        echo $userID;
        echo "'�� ã�� �� �����ϴ�.";
    }
	else{

   		$data = array(); 

        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){

        	extract($row);

			//data�迭 ����
            array_push($data, 
                array('productName'=>$row["productName"],
				'productPrice'=>$row["productPrice"],
				'classNum'=>$row["classNum"],
            ));
        }


        if (!$android) {
            echo "<pre>"; 
            print_r($data); 
            echo '</pre>';
        }else
        {
            header('Content-Type: application/json; charset=utf8');
            $json = json_encode(array("webnautes"=>$data), JSON_PRETTY_PRINT+JSON_UNESCAPED_UNICODE); //�ѱ���� ����
            echo $json;
        }
    }
}
else {
    echo "�˻��� ���̵� �Է��ϼ��� ";
}

?>

<?php

$android = strpos($_SERVER['HTTP_USER_AGENT'], "Android");

if (!$android){
?>

<html>
   <body>
   
      <form action="<?php $_PHP_SELF ?>" method="POST">
         ���̵�: <input type = "text" name = "userID" />
		 �ֹ���ȣ: <input type = "text" name = "order_id" />
		 <input type = "submit" />
      </form>
   
   </body>
</html>
<?php
}

   
?>