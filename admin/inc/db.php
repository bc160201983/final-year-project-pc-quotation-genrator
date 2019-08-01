<?php

define('HOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'pc_quotation_generator');


$conn = mysqli_connect(HOST, DBUSER, DBPASS, DBNAME);

if(!$conn){
	die("Could not connect to database" .  mysqli_connect_error());
}else{
	//echo "connected successfully";
}

?>