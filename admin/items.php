

<?php

 if (isset($_GET['source'])) {
   $source = $_GET['source'];
 }else{
  $source = "";
 }

switch ($source) {
  case 'add_item':
    include 'inc/add_item.php';
    break;
  
  default:
    include 'inc/view_all_items.php';
    break;
}


?>