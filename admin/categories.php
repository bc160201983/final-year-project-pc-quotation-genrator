<?php include 'inc/header.php'; ?>

<?php

//$message[] = "";

if (isset($_POST['add-category'])) {
	$title = escape_string($_POST['title']);
	//echo $title;
	if(empty($title))
	{
		redirect_to('categories.php?e=error');;

	}else
	{
		$result = create_Category($title);
		//echo $result;
		// if(!$result)
	// {
	// 	return "Error: " . $sql . "<br>" . mysqli_error($conn);
	// }else{
	// 	return $result;
	// }
		if(!$result){
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}else{
			redirect_to('categories.php?s=success');
		}
	}
}

if(isset($_GET['delete'])){
	$delete_id = $_GET['delete'];
	//echo $delete_id;
	$result =  delete_category($delete_id);
	if(!$result){
			echo "Error: " . "<br>" . mysqli_error($conn);
	}else{
		redirect_to('categories.php?d=success');
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
          <li class="breadcrumb-item active">Categories</li>
        </ol>



<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Manage Categories</div>
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
					  			echo '<div class="alert alert-danger" role="alert">Category added Successfully</div>';
					  		}
					  		if (isset($_GET['u']) == 'success') {
					  			echo '<div class="alert alert-danger" role="alert">Category Updated Successfully</div>';
					  		}
					  		if(isset($_GET['d']) == 'success'){
					  			echo '<div class="alert alert-danger" role="alert">Category Deleted Successfully</div>';
					  		}
					  	?>
					  
						<form method="post" accept="#">
						<div class="input-group mb-3">
						  <input type="text" name="title" class="form-control" placeholder="Category Title" aria-label="Recipient's username" aria-describedby="button-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" name="add-category" type="submit" id="button-addon2">Add Category</button>
						  </div>
						</div>
						</form>
						<?php
							if (isset($_GET['edit'])) {
								include 'inc/update_categories.php';
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
						  		$result = get_all_categories();
						  		if(!$result)
						  		{
						  			echo "Error: " . "<br>" . mysqli_error($conn);
						  		}else{
						  			while ($row = mysqli_fetch_assoc($result)) {
						  				$cat_id = $row['cat_id'];
						  				$cat_title = $row['cat_name'];
						  				?>
						  				<tr>
										      <th scope="row"><?php echo $cat_id; ?></th>
										      <td><?php echo $cat_title; ?></td>
										      <td><a href="categories.php?edit=<?php echo $cat_id; ?>" class="btn btn-primary">Edit</a> | <a href="categories.php?delete=<?php echo $cat_id; ?>" class="btn btn-danger">Delete</a></td>
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