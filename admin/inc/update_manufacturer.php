
<?php

session_start();

if (!$_SESSION['user_id']) {
  redirect_to("login.php");
}
	if (isset($_GET)) {
		$id = escape_string($_GET['edit']);
		//echo $id;

		$result = get_brand_by_id($id);
		while ($row = mysqli_fetch_assoc($result)) {
			$brand_name = $row['name'];
		}
	}

	if (isset($_POST['update-brand'])) {
		$name = escape_string($_POST['title']);
		$result = update_brand($id, $name);
		if(!$result){
			echo "Error: " . "<br>" . mysqli_error($conn);
		}else{
			redirect_to('manufacturer.php?u=success');
		}
	}	

?>
<form method="post" accept="#" style="margin-top: 25%;">
						<div class="input-group mb-3">
						  <input value="<?php echo $brand_name; ?>" type="text" name="title" class="form-control" placeholder="Category Title" aria-label="Recipient's username" aria-describedby="button-addon2">
						  <div class="input-group-append">
						    <button class="btn btn-outline-secondary" name="update-brand" type="submit" id="button-addon2">Update Brand</button>
						  </div>
						</div>
</form>