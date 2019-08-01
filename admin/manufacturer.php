<?php include 'inc/header.php'; ?>

<?php

//$message[] = "";

if (isset($_POST['add-brand'])) {
	$name = escape_string($_POST['title']);
	echo $name;
	if(empty($name))
	{
		redirect_to('manufacturer.php?e=error');;

	}else
	{
		$result = create_brand($name);
		//echo $result;
		// if(!$result)
	// {
	// 	return "Error: " . $sql . "<br>" . mysqli_error($conn);
	// }else{
	// 	return $result;
	// }
		if(!$result){
			echo "Error: " . "<br>" . mysqli_error($conn);
		}else{
			redirect_to('manufacturer.php?s=success');
		}
	}
}

//delete brand
if(isset($_GET['delete'])){
	$delete_id = $_GET['delete'];
	//echo $delete_id;
	$result =  delete_brand($delete_id);
	if(!$result){
			echo "Error: " . "<br>" . mysqli_error($conn);
	}else{
		redirect_to('manufacturer.php?d=success');
	}
}



?>

<body id="page-top">

<!-- navbar top -->
<?php include 'inc/navbar-top.php'; ?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'inc/sidebar.php'; ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Brands</li>
        </ol>



<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Manage Manufacturer</div>
          <div class="card-body">
            
             
<div class="container">
            	<div class="row">
				<!-- Columns are always 50% wide, on mobile and desktop -->
					
					  <div class="col-6">
					  	<?php
					  		if(isset($_GET['e']) == 'error'){
					  			echo '<div class="alert alert-danger" role="alert">Please add Title</div>';
					  		}
					  		if(isset($_GET['s']) == 'success'){
					  			echo '<div class="alert alert-danger" role="alert">Manufacturer added Successfully</div>';
					  		}
					  		if (isset($_GET['u']) == 'success') {
					  			echo '<div class="alert alert-danger" role="alert">Manufacturer Updated Successfully</div>';
					  		}
					  		if(isset($_GET['d']) == 'success'){
					  			echo '<div class="alert alert-danger" role="alert">Manufacturer Deleted Successfully</div>';
					  		}
					  	?>
					  
						<form method="post" accept="#">
						<div class="input-group mb-3">
						  <input type="text" name="title" class="form-control" placeholder="Brand Name" aria-label="Recipient's username" aria-describedby="button-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" name="add-brand" type="submit" id="button-addon2">Add Brand</button>
						  </div>
						</div>
						</form>
						<?php
							if (isset($_GET['edit'])) {
								include 'inc/update_manufacturer.php';
							}
						?>
					</div>
					  <div class="col-6">

					  <div class="table-responsive">
					  <table class="table">
						  
						  <thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Title</th>
						      <th scope="col">ACTION</th>
						      
						      
						    </tr>
						  </thead>
						  <tbody>
						  	<?php
						  	$message = "";
						  		$result = get_all_brands();
						  		if(!$result)
						  		{
						  			$message = "Query Failed";
						  		}else{
						  			while ($row = mysqli_fetch_assoc($result)) {
						  				$id = $row['id'];
						  				$name = $row['name'];
						  				?>
						  				<tr>
										      <th scope="row"><?php echo $id ?></th>
										      <td><?php echo $name; ?></td>
										      <td><a href="manufacturer.php?edit=<?php echo $id; ?>" class="btn btn-primary">Edit</a> | <a href="manufacturer.php?delete=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
										      <td></td>
						    			</tr>

						  			<?php
						  			}
						  		}
						  	?>
						   
						  </tbody>
						</table>
					</div>
					</div>
					
				</div>
                      

                 </div>
          
        </div>






           <!-- Sticky Footer -->
      <?php include 'inc/footer.php'; ?>