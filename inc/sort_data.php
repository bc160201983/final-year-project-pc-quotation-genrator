<?php
include '../admin/inc/init.php';

global $conn;
//print_r($_POST);


    //$whereSQL = $orderSQL = '';

	if (isset($_POST['from']) && isset($_POST['to'])) {
		$whereSQL = "WHERE price BETWEEN '".$_POST['from']."' AND '".$_POST['to']."' AND status='publish'";
		$orderSQL = " ORDER BY price ASC ";

		$sql = "SELECT * FROM items $whereSQL $orderSQL";
		$result = mysqli_query($conn, $sql);
		$rowCount = mysqli_num_rows($result);
		if ($rowCount > 0) {
			# code...

			showData($result);

		}else{
	        echo '<center><h3>Product(s) not found</center></h3>';
	    }
	}

	

 if (isset($_POST['brandVal'])) {
    	$whereSQL = "WHERE man_id=".$_POST['brandVal']." AND status='publish'";
		$orderSQL = " ORDER BY price ASC ";

		$sql = "SELECT * FROM items $whereSQL $orderSQL";
		$result = mysqli_query($conn, $sql);
		$rowCount = mysqli_num_rows($result);
		if ($rowCount > 0) {
			# code...

			showData($result);

		}else{
	        echo '<center><h3>Product(s) not found</center></h3>';
	    }
    }

   
	


	

function showData($result)
	{
	
	confirm_query($result);

	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['item_id'];
		$title = $row['item_title'];
		$image = $row['image'];
		$price = $row['price'];

		$output = '<div class="col-lg-4 col-md-6">
		<div class="single-product">
		<img class="img-fluid" src="admin/images/'.$image.'" alt="">
		<div class="product-details">
		<h6><a class="item-details" href="item-detail.php?id='.$id.'" aria-expanded="false"
		aria-controls="beauttyProduct">'.$title.'</a></h6>
		<div class="price"><h6><strong>Rs.</strong>'.$price.'</h6></div></div></div></div>';

		echo $output;
	}

	}



?>