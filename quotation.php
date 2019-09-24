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
      <th class="table-primary" scope="col"><input class="form-control" id="total" type="text" name="" readonly></th>
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
  	
  	<tr>
 	
  	<td><?php echo $cat_name; ?></td>
  	<td>
  		<select id="selectItems<?php echo $r; ?>" onchange="getProductData(<?php echo $r; ?>)">
  			<option>~~ Select Item ~~</option>
  	
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

  	<td><input class="form-control" id="qty<?php echo $r; ?>" type="number" name="" min="1"></td>
	  <td><input class="form-control" id="price<?php echo $r; ?>" type="text" name="" readonly></td>
	  <td><input class="form-control" id="totalPrice<?php echo $r; ?>" type="text" name="" readonly></td>
  	</td>
</tr>
	<?php
  				}		
  		}

?>
				
  	

  </tbody>
</table>
	</div>

	<script type="text/javascript">
		function getProductData(row = null){
				if (row) {
					var item_id = $("#selectItems"+row).val();
					console.log(item_id);
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
								console.log(response);

								var totalArray = [];

								$("#qty"+row).val(1);
								$("#price"+row).val(response);
								var total = Number(response) * 1;
								total = total.toFixed(2);
								$("#totalPrice"+row).val(total);

								totalArray.push(total);
								console.log(totalArray);

								$("#total").val(total);


								$("#qty"+row).keyup(function(){
									var total = Number($("#price"+row).val()) * Number($("#qty"+row).val());
									total = total.toFixed(2);
									$("#totalPrice"+row).val(total);
									$("#totalPrice"+row).val(total);;
									
								});

								
								
							}
						});

					}
				}
			}

			function getTotal(row = null){
				var total = Number($("#price"+row).val()) * Number($("#qty"+row).val());
				total = total.toFixed(2);
				$("#totalPrice"+row).val(total);
			}
		// 	}
		// $(document).ready(function(){
		// 	//var item_id_array = [];
			
		// 	// function getProductData(row = null){
		// 	// 	if (row) {
		// 	// 		var item_id = $("#selectItems"+row).val();
		// 	// 		console.log(item_id);
		// 	// 	}
		// 	// }


		// });


		// function getItemInfo(id){
		// 	//var dataArray = [];
		// 	$.post('inc/get_item_info.php',{id:id},function(data){
					
					
		// 		 if (data != "") {
				
					
		// 			console.log(data);

		// 		$("#price"+id).val(data);
		// 		// 	$(".qty").keyup(function(){
		// 		// 		numQty = parseInt($(this).val());
		// 		// 		numPrice = parseInt(parseData.price);
		// 		// 		var totalPrice = numQty * numPrice;
		// 		// 		$("#totalPrice").val(totalPrice);
		// 		// 		console.log(totalPrice + " " + numQty + " " + numPrice);
		// 		// 	});
		// 		// 	console.log(parseData.price);
		// 		 }else{
		// 		 	console.log("Error");
		// 		 }
				
		// 	});
		// }

	</script>

	

	<?php include 'inc/footer.php'; ?>