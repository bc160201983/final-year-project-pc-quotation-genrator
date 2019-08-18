<?php include 'inc/header.php'; ?>

	<!-- Start Header Area -->
	<?php include 'inc/header-nav.php'; ?>
	<!-- End Header Area -->
	<?php
		if (isset($_GET['id'])) {
			$item_id = $_GET['id'];

			$row = get_items_by_id($item_id);

			$title = $row['item_title'];
			$cat_id = $row['cat_id'];
			$brand_id = $row['man_id'];
			$image = $row['image'];
			$description = $row['description'];
			$price = $row['price'];
			$status = $row['status'];
		}
	?>
		<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Product Details Page</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">Shop<span class="lnr lnr-arrow-right"></span></a>
						<a href="item-detail.php?id=<?php echo $item_id; ?>">product-details</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	<div class="product_image_area" style="margin-bottom: 50px;">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
							<img class="img-fluid" src="admin/images/<?php echo $image; ?>" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="#" alt="">
						</div>
						<div class="single-prd-item">
							<img class="img-fluid" src="#" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $title; ?></h3>
						<h2><strong>Rs.</strong><?php echo number_format($price); ?></h2>
						<ul class="list">
							<?php
								$result = get_gategory_by_id($cat_id);
								while ($row = mysqli_fetch_assoc($result)) {
									echo '<li><a class="active" href="category.php?id='.$row['cat_id'].'"><span>Category</span> : '.$row['cat_name'].'</a></li>';
								}
							?>
							
							<!-- <li><a href="#"><span>Availibility</span> : In Stock</a></li> -->
						</ul>
						<p><?php echo htmlspecialchars_decode($description); ?></p>
				<!-- 		<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div> -->
					<!-- 	<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->




	
	

	<?php include 'inc/footer.php'; ?>