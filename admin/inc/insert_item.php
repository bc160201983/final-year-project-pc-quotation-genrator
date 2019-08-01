<?php
include 'init.php';

//print_r($_GET);
// print_r($_POST);
// print_r($_FILES['images']);

$target_dir = "images/";
$allowTypes = array('jpg','png','jpeg','gif');


if (isset($_POST['myFormData']) && isset($_FILES)) {
		
		$item_Data = explode(",", $_POST['myFormData']);
		$imageName = upload_image($_FILES);
		//print_r($item_Data);
		
			$title = $item_Data[0];
			$cat_id = $item_Data[1];
			$brand_id = $item_Data[2];
			$description = $item_Data[3];
			$price = $item_Data[4];
			$status = $item_Data[5];

		
$sql = "INSERT INTO `items`(`item_title`, `cat_id`, `man_id`, `image`, `description`, `price`, `status`) ";
$sql .="VALUES ('".$title."', ".$cat_id.", ".$brand_id.", '".$imageName."', '".$description."', ".$price.", '".$status."')";
	$result =  mysqli_query($conn, $sql);
	if (!$result) {
		$error = die("Query Failed " . mysqli_error($conn));
		echo json_encode(['Error' => $error]);
		
	}else{
		echo "Item Inserted successfully";
	}


}else{
	echo json_encode(["Error" => "no data found"]);
}



function upload_image($FILES)
{
	$target_dir = "../images/";
	$allowTypes = array('jpg','png','jpeg','gif');
	$image_names = $_FILES['images']['name'];

	$names = implode(",", $image_names);
	if (count($_FILES['images']['name']) > 5) {
		return "files can not be greater then 5";
	}else{
		for($i = 0; $i <= count($_FILES['images']['name']); $i++) {
      $filename = basename($_FILES['images']['name'][$i]);
      $targetFilePath = $target_dir . $filename;

        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowTypes)) {
            //ipload to server

          if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], $targetFilePath)) {
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
//empty($_FILES['images']['name']) ? "" : $_FILES['images']['name'];
// if (isset($_POST['item_name']) && isset($_POST['item_cat']) && isset($_POST['item_brand']) && isset($_POST['item_des']) isset($_POST['item_price']) && isset($_POST['item_status'])) {

// 	$item_name = escape_string($_POST['item_name']);
// 	$item_cat = escape_string($_POST['item_cat']);
// 	$item_brand = escape_string($_POST['item_brand']);
// 	$item_des = escape_string($POST['item_des']);
// 	$item_price = escape_string($_POST['item_price']);
// 	$item_status = escape_string($_POST['item_status']);

// 	if($_POST['item_id'] != ''){

// 		$sql = "UPDATE items SET item_title='".$item_name."', cat_id=".$item_cat.", man_id=".$item_brand.", ";
// 		$sql .="image_id=". 1 .", description='".$item_des."', price=".$item_price.", status='".$item_status."' WHERE item_id=".$_POST['item_id']." ";
// 		$result =  mysqli_query($conn, $sql);
// 		if(!$result){
// 			echo json_encode(['Error' => "Error:" . mysqli_error($conn)]);
// 		}
// 	}else{
// 	$sql = "INSERT INTO items (item_title, cat_id, man_id, image_id, description, price, status) ";
// 	$sql .="VALUES('".$item_name.", ".$item_cat.", ".$item_brand.", '". 1 ."', '".$item_des."', ".$item_price.", '".$item_status."' )";
// 		$result =  mysqli_query($conn, $sql);
// 		if(!$result){
// 			echo json_encode(['Error' => "Error:" . mysqli_error($conn)]);
// 		}
// 	}

// }

?>
