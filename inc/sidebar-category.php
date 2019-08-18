	<style type="text/css">
		.item-details{
			color: black;
		}

		.item-details:hover{
			color: #ffba00;
		}

	</style>
	<div class="container" style="margin-bottom: 50px;">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Browse Categories</div>
					<ul class="main-categories">
	
							<?php
						  	$message = "";
						  		$result = get_all_categories();
						  		if(!$result)
						  		{
						  			echo "Error: " . "<br>" . mysqli_error($conn);
						  		}else{
						  			while ($row = mysqli_fetch_assoc($result)) {
						  				$cat_id = $row['cat_id'];
						  				$cat_title = $row['cat_name'];
						  			
						  		?>
								  <li class="main-nav-list"><a href="category.php?id=<?php echo $cat_id; ?>" aria-expanded="false" aria-controls="beauttyProduct"><span
										 class="lnr lnr-arrow-right"></span><?php echo $cat_title; ?><span class="number">
										 	
										 </span></a>
									
								</li>
						  		<?php

						  			}
						  		}
						  	?>
			
					</ul>
				</div>
				<div class="sidebar-filter mt-50">
					<div class="top-filter-head">Product Filters</div>
					<div class="common-filter">
						<div class="head">Brands</div>
						<form action="#">
							<ul>
								<?php
									$result = get_all_brands();
									if (!$result) {
										die("Query Failed" . mysqli_error($conn));
									}else{
										while ($row = mysqli_fetch_assoc($result)) {
											$brand_id = $row['id'];
											$brand_title = $row['name'];
									?>
										<li class="filter-list"><input value="<?php echo $brand_id; ?>" class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple"><?php echo $brand_title; ?></label></li>

									<?php
										}
									}
								?>
								
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Price</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Price:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->
						<?php
							if (isset($_GET['id'])) {
								$catId = $_GET['id'];
								$result = get_items_by_cat_id($catId);
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

							}else{
								$result = get_all_items();
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
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting mr-auto">
						<select>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
							<option value="1">Show 12</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>
