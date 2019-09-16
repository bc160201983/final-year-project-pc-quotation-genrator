	<style type="text/css">
		.item-details{
			color: black;
		}

		.item-details:hover{
			color: #ffba00;
		}

	</style>

	<?php


	?>
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
										<li class="filter-list"><label><input value="<?php echo $brand_id; ?>" class="pixel-radio brands" type="radio" name="brand_id"><?php echo $brand_title; ?></label></li>

									<?php
										}
									}
								?>
								
							</ul>
				
					</div>
					 <input type="text" class="js-range-slider" name="my_range" value="" />

					<div style="margin-top: inherit;"  class="common-filter">
						<!-- <div class="head">Filter</div> -->
						<input id="filter" type="submit" value="Filter" name="submit" class="btn btn-primary btn-block">
					</div>
					
				</div>
			
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<form class="filter-form">
				<div class="filter-bar d-flex flex-wrap align-items-center">
					
					<div class="sorting mr-auto">
						<select name="show-data" id="limit-data">
							<option value="10">Show 10</option>
							<option value="20">Show 20</option>
							<option value="30">Show 30</option>
						</select>
					</div>
					</form>
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
					<div class="row" id="output">
						<!-- single product -->
						<?php
							if (isset($_GET['id'])) {
								$catId = $_GET['id'];
								$result = get_items_by_cat_id($catId);
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
<script type="text/javascript">
$(document).ready(function(){



	let my_range = $(".js-range-slider").ionRangeSlider({
		type: "double",
        grid: true,
        min: 0,
        max: 200000,
        from: 2000,
        to: 100000,
        prefix: "Rs",
        skin: "round",
	});

	var slider = $(".js-range-slider").data("ionRangeSlider");
	//var 
	
	//let my_range = $(".js-range-slider").data("ionRangeSlider");

		$(".brands").click(function(){
			var brandVal = $("input[name='brand_id']:checked").val();

			$.post("inc/sort_data.php", {brandVal:brandVal}, function(data){
				console.log(data);
				if (data) {
					$("#output").html(data);
				}
			});
		});

	$("#filter").click(function(){
	
	var from = slider.result.from;
	var to = slider.result.to;


		// console.log(from + " " + to +" " + brandVal);
		// console.log("bilal");

		$.post("inc/sort_data.php", {from:from, to:to}, function(data){
				console.log(data);
				if (data) {
					$("#output").html(data);
				}
		});
	});
});
</script>