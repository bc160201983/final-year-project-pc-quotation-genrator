<?php 
include '../admin/inc/init.php';
global $conn;
//print_r($_POST);

if (isset($_POST) && !empty($_POST)) {
	$sql = "SELECT item_id, price FROM items WHERE item_id=".$_POST['item_id']." AND status = 'publish'";
	$result = mysqli_query($conn, $sql);

	if (!$result) {
		die("Query Failed ". mysqli_error($conn));
	}else{
		while ($row = mysqli_fetch_assoc($result)) {
			
			
			$price = $row['price'];
			
		}

		echo $price;

	}
}

	
	
	

	



?>