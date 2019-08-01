<?php

include 'init.php';

	if (!empty($_FILES['file'])) {

		$message ="";
		
		$target_dir = '../images/'; 
		$file_name = basename($_FILES["file"]["name"]);
	    $target_file = $target_dir . $file_name;

	    move_uploaded_file($_FILES['file']['tmp_name'], $target_file);

	    echo json_encode([
	    	'uploaded' => $target_file
	    ]); 



	} else {



		echo json_encode(['error'=>'No files found for upload.']); 



	}



?>