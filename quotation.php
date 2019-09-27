<?php include 'inc/header.php'; ?>

	<!-- Start Header Area -->
	<?php include 'inc/header-nav.php'; ?>
	<!-- End Header Area -->
<?php

// $errors = array();

// if (isset($_POST['btn'])) {
// 	$username = $_POST['username'];
// 	$email = $_POST['email'];
// 	$date = $_POST['date'];
// 	if (empty($username) || empty($email) || empty($date)) {
// 		$errors[] = "Please fill the required fileds";
// 	}else{
		


// 	}
	
	
// }


?>



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
		<?php
			if (isset($errors)) {
				foreach ($errors as $error) {
					echo '<div style="width: fit-content;margin: 0px auto;display: block;margin-bottom: 10px;" class="alert alert-danger" role="alert">'.$error.'</div>';
				}
			}
		?>
		
		<form method="post" action="receipt.php">
			<div style="width: 500px;margin: 0px auto;display: block;">
		  <div class="form-group">
		    
		    <input type="text" class="form-control" id="name" name="username" aria-describedby="emailHelp" placeholder="Enter name">
		  </div>


		  <div class="form-group">
		    
		    <input type="date" class="form-control" id="datepicker" name="date">
		  </div>
		</div>

	<table class="table table-bordered" id="productTable">
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
      <th class="table-primary" scope="col"><input class="form-control" id="total" type="text" name="totalAmount" readonly></th>
    </tr>
    <tr>
      <th></th>
      <th></th>
      <th></th>
      <th></th>
      <!-- <th class="table-primary" scope="col">Total Price</th> -->
      <th class="table-primary" scope="col"><input class="btn btn-primary" id="total" type="submit" name="btn"></th>
    </tr>
  </tfoot>
  <tbody>
  	<?php

  		static $r = 0;
  		$result  = get_all_categories();
  		if (!empty($result)) {
  			while ($row = mysqli_fetch_assoc($result)) {
  				$cat_id = $row['cat_id'];
  				$cat_name = $row['cat_name'];
  				
  			$r++;
  		?>
  	
  	<tr id="row<?php echo $r; ?>">
  		
 	
  	<td><?php echo $cat_name; ?></td>
  	<td>
  		<select name="selectItems[]" id="selectItems<?php echo $r; ?>" onchange="getProductData(<?php echo $r; ?>)">
  			<option selected='true' disabled='disabled'>~~ Select Item ~~</option>
  	
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
  			echo "<option selected='true' disabled='disabled'>No Product avilabe</option>";
  		}

  	?>
  	</select>

  	<td><input onkeyup="getTotal(<?php echo $r; ?>)" class="form-control" id="qty<?php echo $r; ?>" type="number" name="qty[]" min="1"></td>
	  <td><input class="form-control" id="price<?php echo $r; ?>" type="text" name="price[]" readonly></td>
	  <td><input class="form-control" id="totalPrice<?php echo $r; ?>" type="text" name="totalPrice[]" readonly></td>

  	</td>
</tr>
	<?php
  				}		
  		}

?>
		
  	

  </tbody>
</table>
</form>
	
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			
		});

		function getProductData(row = null){
				if (row) {
					var item_id = $("#selectItems"+row).val();
					//console.log(item_id);
					if (item_id == "") {
						$("#qty"+row).val("");
						$("#price"+row).val("");
						$("#totalPrice"+row).val("");
					}else{

						$.ajax({
							url: 'inc/get_item_info.php',
							type: 'post',
							data: {item_id : item_id},
							dataType: 'json',
							success:function(response){
								//console.log(response);

								//var totalArray = [];

								$("#qty"+row).val(1);
								$("#price"+row).val(response);
								var total = Number(response) * 1;
								total = total.toFixed(2);
								$("#totalPrice"+row).val(total);
								totalAmount();
						
								
								
							}
						});

					}
				}
			}

			function getTotal(row = null){
				if (row) {
					var total = Number($("#price"+row).val()) * Number($("#qty"+row).val());
					total = total.toFixed(2);
					$("#totalPrice"+row).val(total);
					totalAmount();
				}else {
					alert('no row !! please refresh the page');
				}
							
			}

			function totalAmount(){
				var tableProductLength = $("#productTable tbody tr").length;
				
				
				totalAmountPrice = 0;
				for(x = 0; x < tableProductLength; x++) {
						var tr = $("#productTable tbody tr")[x];
						var count = $(tr).attr('id');
						count = count.substring(3);

						totalAmountPrice = Number(totalAmountPrice) + Number($("#totalPrice"+count).val());
					}

					totalAmountPrice = totalAmountPrice.toFixed(2);
					//console.log(totalAmountPrice);

					$("#total").val(totalAmountPrice); 
			}


	</script>

	

	<?php include 'inc/footer.php'; ?>