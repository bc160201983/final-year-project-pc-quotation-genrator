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
      <th class="table-primary" scope="col">NAME</th>
      <th class="table-primary" scope="col">PRODUCTS</th>
      <th class="table-primary" scope="col">QUANTITY</th>
      <th class="table-primary" scope="col">Per Item Price</th>
      <th class="table-primary" scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  	<td>Processor</td>
  	<td><select>
  		<option>PC</option>
  	</select>
  </td>
  <td><input class="form-control"c type="text" name=""></td>
  <td><input class="form-control" type="text" name="" readonly></td>
  <td><input class="form-control" type="text" name="" readonly></td>
  </tr>
  </tbody>
</table>
	</div>


	
	

	<?php include 'inc/footer.php'; ?>