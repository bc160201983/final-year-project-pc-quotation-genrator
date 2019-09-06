<?php
include '../admin/inc/init.php';;

if (isset($_POST) && $_POST != "") {
	


	$sql = "SELECT * FROM items WHERE man_id = ".$_POST['brand']." AND status = 'publish'";
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