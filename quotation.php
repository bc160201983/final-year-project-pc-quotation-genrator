<?php include 'inc/header.php'; ?>

	<!-- Start Header Area -->
	<?php include 'inc/header-nav.php'; ?>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Quotation Generator</h1>
					<nav class="d-flex align-items-center">
						<!-- <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php">All Items<span class="lnr lnr-arrow-right"></span></a> -->
						<!-- <a href="category.html">Fashon Category</a> -->
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div style="margin-top: 20px;" class="container">
		<center>
		<form style="width: 500px;">
		  <div class="form-group">
		    
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
		  </div>
		  <div class="form-group">
		    
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		  </div>
		  <div class="form-group">
		    
		    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Date">
		  </div>
		</form>
	</center>

	<table class="table table-bordered">
  <thead>
    <tr>
      <th class="table-primary" scope="col">Component</th>
      <th class="table-primary" scope="col">Selection</th>
      <th class="table-primary" scope="col">QUANTITY</th>
      <th class="table-primary" scope="col">Per Item Price</th>
      <th class="table-primary" scope="col">Total Price</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th class="table-primary" scope="col">Total Price</th>
      <th class="table-primary" scope="col"></th>
    </tr>
  </tfoot>
  <tbody>
  	<?php

  		$result  = get_all_categories();
  		if (!empty($result)) {
  			while ($row = mysqli_fetch_assoc($result)) {
  				$cat_id = $row['cat_id'];
  				$cat_name = $row['cat_name'];
  			
  		?>
  	
  	<tr>
 	
  	<td><?php echo $cat_name; ?></td>
  	<td>
  		<select class="form-control">
  			<option>~~ Select <?php echo $cat_name; ?> ~~</option>
  	
  	<?php
  		$itemResult = get_items_by_cat_id($cat_id);
  		$itemCount = mysqli_num_rows($itemResult);
  		if ($itemCount > 0) {
  			while ($itemRow = mysqli_fetch_assoc($itemResult)) {
  				$items_id = $itemRow['item_id'];
  				$items_title = $itemRow['item_title'];
  		?>
  				<option value="<?php echo $items_id; ?>"><?php echo substr($items_title,0, 50); ?></option>;
  		<?php
  			}
  		}else{
  			echo "<option>No Product avilabe</option>";
  		}

  	?>
  	</select>

  	<td><input class="form-control"c type="text" name=""></td>
	  <td><input class="form-control" type="text" name="" readonly></td>
	  <td><input class="form-control" type="text" name="" readonly></td>
  	</td>
</tr>
	<?php
  				}		
  		}

?>
				
  	

  </tbody>
</table>
	</div>

	

	<?php include 'inc/footer.php'; ?>