<?php
include '../admin/inc/init.php';


//print_r($_POST);

if (isset($_POST) && !empty($_POST)) {
	

	if (isset($_POST['brand_id'])  && isset($_POST['cat_id'])) {
			
			echo brand_cat($_POST['brand_id'], $_POST['cat_id']);
	}

	// if (isset($_POST['brand_id'])) {
	// 	$sql = "SELECT * FROM items WHERE man_id = ".$_POST['brand_id']." AND status ='publish'";
	// 	echo showData($sql);
	// }

}
print_r($_POST);

// if (isset($_POST['cat_id']) && !empty($_POST['cat_id'])) {
// 	if (isset($_POST['brand']) && $_POST['brand'] != 0) {
		
// 		$sql = "SELECT * FROM items WHERE man_id = ".$_POST['brands']." AND cat_id =".$_POST['cat_id']."";
// 		echo showData($sql);
// 	}
// }




// if (isset($_POST['brands']) && !empty($_POST['brands'])) {
	
// 	$sql = "SELECT * FROM items WHERE man_id = ".$_POST['brands']." AND status='publish'";
// 	echo showData($sql);


// }


// if (isset($_POST['options']['sort']) && !empty($_POST['options']['sort'])) {
	
// 	$sql = "SELECT * FROM items WHERE status ='publish' ORDER BY price ".$_POST['options']['sort']."";
// 	showData($sql);


// }
// if(isset($_POST['options']['default']) && $_POST['options']['default'] == 'default'){
// 	$sql = "SELECT * FROM items WHERE status = 'publish'";
// 	showData($sql);
// }

function showData($sql)
	{
	global $conn;


	$result = mysqli_query($conn, $sql);
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

	function brand_cat($brand, $cat){
		global $conn;
		$sql = "SELECT * FROM items WHERE cat_id = ".$_POST['cat_id']." AND man_id=".$_POST['brand_id']." AND status ='publish'";
		$result = mysqli_query($conn, $sql);
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