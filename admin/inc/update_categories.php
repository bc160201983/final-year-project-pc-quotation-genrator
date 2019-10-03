<?php
session_start();

if (!$_SESSION['user_id']) {
  redirect_to("login.php");
}

	if (isset($_GET)) {
		$id = escape_string($_GET['edit']);
		//echo $id;

		$result = get_gategory_by_id($id);
		while ($row = mysqli_fetch_assoc($result)) {
			$cat_title = $row['cat_name'];
		}
	}

	if (isset($_POST['update-category'])) {
		$cat_title = escape_string($_POST['title']);
		$result = update_category($id, $cat_title);
		if(!$result){
			echo "Error: " . "<br>" . mysqli_error($conn);
		}else{
			redirect_to('categories.php?u=success');
		}
	}	

?>
<?php
					  		if(isset($_GET['u']) == 'success'){
					  			echo '<div class="alert alert-danger" role="alert">Category Updated Successfully</div>';
					  		}
					  	?>
<form method="post" accept="#" style="margin-top: 25%;">
						<div class="input-group mb-3">
						  <input value="<?php echo $cat_title; ?>" type="text" name="title" class="form-control" placeholder="Category Title" aria-label="Recipient's username" aria-describedby="button-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" name="update-category" type="submit" id="button-addon2">Update Category</button>
						  </div>
						</div>
</form>