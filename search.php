<style type="text/css">
		.item-details{
			color: black;
		}

		.item-details:hover{
			color: #ffba00;
		}

	</style>



<?php include 'inc/header.php'; ?>

	<!-- Start Header Area -->
	<?php include 'inc/header-nav.php'; ?>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>You Search <?php if(isset($_GET['s'])) { echo "'" .$_GET['s'] . "'"; } ?></h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">All Items<span class="lnr lnr-arrow-right"></span></a>
						<!-- <a href="category.html">Fashon Category</a> -->
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->


<?php //include 'inc/sidebar-category.php'; ?>

<div class="container" style="margin-bottom: 50px;">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
					
				</div>
			
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				
				
				</div>
			
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row" id="output">
						<!-- single product -->
						<?php
							if (isset($_GET['s'])) {
								$search = $_GET['s'];
								$sql = "SELECT * FROM items WHERE item_title LIKE '%".$search."%'";
								$result = mysqli_query($conn, $sql);
										if (!$result) {
												die("Query Failed" . mysqli_error($conn));
											}else{
												$rowCount = mysqli_num_rows($result);
												if ($rowCount > 0) {
			
												while ($row = mysqli_fetch_assoc($result)) {
													$id = $row['item_id'];
								                        $title = $row['item_title'];
								                        $cat_id = $row['cat_id'];
								                        $brand_id = $row['man_id'];
								                        $image = $row['image'];
								                        $price = $row['price'];
								                        $status = $row['status'];
								                  ?>

								                  	<div class="col-lg-4 col-md-6">
													<div class="single-product">
														
														<img class="img-fluid" src="admin/images/<?php echo $image; ?>" alt="">
														
														<div class="product-details">
															<h6><a class="item-details" href="item-detail.php?id=<?php echo $id; ?>" aria-expanded="false" aria-controls="beauttyProduct"><?php echo $title; ?></a></h6>
															<div class="price">
																<h6><strong>Rs.</strong><?php echo $price; ?></h6>
																<!-- <h6 class="l-through">$210.00</h6> -->
															</div>
															
														</div>
													</div>
												</div>

								                 <?php

												}
												}else{
													echo "<h3>No Data Found</h3>";
												}
											}	

							}else{
								$result = get_all_items_by_publish();
				                  if (!$result) {
				                    die("Query Failed" . mysqli_error($conn));
				                  }else{
				                  		while ($row = mysqli_fetch_assoc($result)) {
				                  			$id = $row['item_id'];
					                        $title = $row['item_title'];
					                        $cat_id = $row['cat_id'];
					                        $brand_id = $row['man_id'];
					                        $image = $row['image'];
					                        $price = $row['price'];
					                        $status = $row['status'];	
					                 ?>
					                 <div class="col-lg-4 col-md-6">
										<div class="single-product">
											<img class="img-fluid" src="admin/images/<?php echo $image; ?>" alt="">
											<div class="product-details">
												<h6><a class="item-details" href="item-detail.php?id=<?php echo $id; ?>" aria-expanded="false" aria-controls="beauttyProduct"><?php echo $title; ?></a></h6>
												<div class="price">
													<h6><strong>Rs.</strong><?php echo $price; ?></h6>
													<!-- <h6 class="l-through">$210.00</h6> -->
												</div>
												
											</div>
										</div>
									</div>

					                 <?php
				                  		}
				                  }
							}
						?>
		</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				
				<!-- End Filter Bar -->
			</div>
		</div>
	
	

	<?php include 'inc/footer.php'; ?>