<?php



function get_all_categories(){
	global $conn;

	$query = "SELECT * FROM categories";
	$result = mysqli_query($conn,$query);
	confirm_query($result);

	return $result;

}

function create_Category($title){
	global $conn;
	 //$timestamp = date("Y-m-d H:i:s");
	$sql = "INSERT INTO `categories`(`cat_name`) VALUES ('".$title."')";

	$result = mysqli_query($conn, $sql);
	return $result;
	// if(!$result)
	// {
	// 	return "Error: " . $sql . "<br>" . mysqli_error($conn);
	// }else{
	// 	return $result;
	// }

	
}

function get_gategory_by_id($id){
	global $conn;

	$query = "SELECT * FROM categories WHERE cat_id=".$id." ";
	$result = mysqli_query($conn,$query);
	confirm_query($result);

	return $result;

}

function get_gategory_by_id_fetch($id){
	global $conn;
	$data = array();

	$query = "SELECT * FROM categories WHERE cat_id=".$id." ";
	$result = mysqli_query($conn,$query);

	confirm_query($result);
	while ($row = mysqli_fetch_assoc($result)) {
		$data = $row;
	}

	return $data;

}


function confirm_query($result){
	global $conn;
	if (!$result) {
		die(mysqli_error($conn));
	}
}

function update_category($id, $title){
	global $conn;

	$sql = "UPDATE `categories` SET cat_name ='".$title."' WHERE cat_id = ".$id." ";
	$result = mysqli_query($conn, $sql);
	return $result;
}

function delete_category($id){
	global $conn;
	$sql = "DELETE FROM `categories` WHERE cat_id=".$id." ";
	$result = mysqli_query($conn, $sql);
	return $result; 
}

function total_categories(){
	global $conn;

	$sql = "SELECT count(*) as totalCategory FROM categories";
	$result = mysqli_query($conn, $sql);
	return $result;
}

// brands

function total_brand(){
	global $conn;

	$sql = "SELECT count(*) as totalBrand FROM manufacturer";
	$result = mysqli_query($conn, $sql);
	return $result;
}
function get_all_brands(){
	global $conn;

	$query = "SELECT * FROM manufacturer";
	$result = mysqli_query($conn,$query);


	return $result;

}

function create_brand($name){
	global $conn;
	 //$timestamp = date("Y-m-d H:i:s");
	$sql = "INSERT INTO `manufacturer` (`name`) VALUES ('".$name."')";

	$result = mysqli_query($conn, $sql);
	return $result;
	// if(!$result)
	// {
	// 	return "Error: " . $sql . "<br>" . mysqli_error($conn);
	// }else{
	// 	return $result;
	// }

	
}

function get_brand_by_id($id){
	global $conn;

	$query = "SELECT * FROM `manufacturer` WHERE id=".$id." ";
	$result = mysqli_query($conn,$query);


	return $result;

}

function get_brand_by_id_fetch($id){
	global $conn;
	$data = array();

	$query = "SELECT * FROM `manufacturer` WHERE id=".$id." ";
	$result = mysqli_query($conn,$query);
	confirm_query($result);
	while ($row = mysqli_fetch_assoc($result)) {
		$data = $row;
	}

	return $data;

}


function update_brand($id, $title){
	global $conn;

	$sql = "UPDATE `manufacturer` SET name ='".$title."' WHERE id = ".$id." ";
	$result = mysqli_query($conn, $sql);
	return $result;
}


function delete_brand($id){
	global $conn;
	$sql = "DELETE FROM `manufacturer` WHERE id=".$id." ";
	$result = mysqli_query($conn, $sql);
	return $result; 
}


function escape_string($string)
{
	global $conn;

	return mysqli_real_escape_string($conn, $string);

}

function redirect_to($url){
	return header('Location:' . $url);
	exit();
}

// items

function total_items(){
	global $conn;

	$sql = "SELECT count(*) as totalItems FROM items";
	$result = mysqli_query($conn, $sql);
	return $result;
}

function total_items_by_category($cat_id){
	global $conn;

	$sql = "SELECT count(*) as totalItems FROM items WHERE cat_id=".$cat_id."";
	$result = mysqli_query($conn, $sql);
	return $result;
}

function get_total_items(){
	global $conn;

	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn, $sql);
	return $result;
}

function insert_item($title, $cat_id, $brand_id, $image, $description, $price, $status){
	global $conn;
	$sql = "INSERT INTO `items`(`item_title`, `cat_id`, `man_id`, `image`, `description`, `price`, `status`) ";
	$sql .="VALUES ('".$title."', ".$cat_id.", ".$brand_id.", '".$image."', '".$description."', ".$price.", '".$status."')";
	$result =  mysqli_query($conn, $sql);
	return $result;
}


function get_all_items(){
	global $conn;
	$sql = "SELECT * FROM items";
	$result = mysqli_query($conn, $sql);
	return $result;
}
function get_all_items_by_publish(){
	global $conn;
	$sql = "SELECT * FROM items WHERE status = 'publish'";
	$result = mysqli_query($conn, $sql);
	return $result;
}

function get_items_by_id($id){
	global $conn;
	$data = array();
	$sql = "SELECT * FROM items WHERE item_id = ".$id."";
	$result = mysqli_query($conn, $sql);
	confirm_query($result);
	while ($row = mysqli_fetch_assoc($result)) {
		$data = $row;
	}

	return $data;
}

function get_items_by_cat_id($cat_id){
	global $conn;

	$sql = "SELECT * FROM items WHERE cat_id = ".$cat_id." AND status = 'publish'";
	$result = mysqli_query($conn, $sql);
	confirm_query($result);
	

	return $result;
}




function updated_item($id, $title, $cat_id, $brand_id, $image, $description, $price, $status){
	global $conn;
	$sql = "UPDATE `items` SET `item_title`='".$title."',`cat_id`=".$cat_id.",`man_id`=".$brand_id.",`image`='".$image."', ";
	 $sql .= "`description`='".$description."',`price`=".$price.",`status`='".$status."' WHERE item_id=".$id."";
	$result =  mysqli_query($conn, $sql);
	//confirm_query($result);
	return $result;
}
	



function upload_image($files)
{
	$target_dir = "../images/";
	$allowTypes = array('jpg','png','jpeg','gif');
	if (isset($files)) {
	
	$image_names = $files['images']['name'];

	$names = implode(",", $image_names);
	if (count($files['images']['name']) > 5) {
		echo "files can not be greater then 5";
	}else{
		for($i = 0; $i <= count($files['images']['name']); $i++) {
      $filename = basename($files['images']['name'][$i]);
      $targetFilePath = $target_dir . $filename;

        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowTypes)) {
            //ipload to server

          if (move_uploaded_file($files["images"]["tmp_name"][$i], $targetFilePath)) {
            	return $names;
            	break;
          }else{
            echo "can not upload file";
            break;
          }
        }else{
            echo "upload file type error";
            break;
        }


    }
	}
    }
	
}