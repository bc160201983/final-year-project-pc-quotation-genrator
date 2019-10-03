<?php include 'inc/header.php'; ?>


<?php

session_start();

if (!$_SESSION['user_id']) {
  redirect_to("login.php");
}
if (isset($_GET['id'])) {
  $item_edit_id = escape_string(trim($_GET['id']));
}

$title = "";
$cat_id = "";
$brand_id = "";
$description = "";
$price = "";
$status = "";



$errors = array();
$success = array();
$allowTypes = array('jpg','png','jpeg','gif');
$target_dir = "images/";
if (isset($_POST['update-submit'])) {
      $title = escape_string($_POST['title']);
      $cat_id = escape_string($_POST['item_cat']);
      $brand_id = escape_string($_POST['item_brand']);
      $description = escape_string(htmlspecialchars($_POST['item_description']));
      $price = escape_string($_POST['item_price']);
      $status = escape_string($_POST['status']);
      $image_names = $_FILES['images']['name'];
      if (empty($image_names)) {
        $sql = "SELECT * FROM items WHERE item_id=".$item_edit_id."";
        $select_image = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($select_image)) {
            $image_names = $row['image'];
        }
      }
      
      
    if (empty($title) || empty($cat_id) || empty($brand_id) || empty($image_names) || empty($description) || empty($price) || empty($status)) {
          $errors[] = "Fill the required Fields";
      }else{
                     
                              $targetFilePath = $target_dir . $image_names;
                  
                              move_uploaded_file($_FILES['images']['tmp_name'], $targetFilePath);
                              $result = updated_item($item_edit_id,$title, $cat_id, $brand_id, $image_names, $description, $price, $status);
                                if (!$result) {
                                    $errors[] = die("Query Failed " . mysqli_error($conn));                                  
                                  }else{
                                    $success[] = "Item Updated";
                                  }
                       
                      
      }
}


  $row = get_items_by_id($item_edit_id);

    $id = $row['item_id'];
    $title = $row['item_title'];
    $edit_cat_id = $row['cat_id'];
    $edit_brand_id = $row['man_id'];
    $description = $row['description'];
    $imageNames = $row['image'];
    $price = $row['price'];
    $status = $row['status'];

  
  

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
            <a href="index.php">Dashboard</a>
          </li>
           <li class="breadcrumb-item">
            <a href="items.php">Items</a>
          </li>
          <li class="breadcrumb-item active">Edit Items</li>
        </ol>

<div class="container">

  <div class="row">
    <div class="col-lg-8">
      <?php
        if (isset($errors)) {
          foreach ($errors as $error) {
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
          }
        }

        if (isset($success)) {
          foreach ($success as $value) {
            echo '<div class="alert alert-success" role="alert">'.$value.'</div>';
          }
        }
      ?>
      <form method="POST" id="myForm" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1"><h3>Title</h3></label>
    <input type="text" class="form-control" id="item_title" name="title" value="<?php echo $title; ?>" aria-describedby="emailHelp" placeholder="Item Title">
    <span id="error_title"></span>
  </div>
  
  <div class="row" style="margin-top: 15px;">
    <div class="col-sm-6">
        <div class="form-group">
          
          <select name="item_cat" id="item_cat" class="form-control">

            <option>~~Select Category~~</option>
          <?php
            $result = get_all_categories();
            if (!$result) {
              echo "Error:" . "<br>" . mysqli_error($conn);
            }else{
              while ($row = mysqli_fetch_assoc($result)) {
                $cat_id = $row['cat_id'];
                $cat_name = $row['cat_name'];           
          ?>               
                <option <?php if ($cat_id == $edit_cat_id) {
                  echo "selected";
                } ?> value='<?php echo $cat_id ?>'><?php echo $cat_name ?></option>
              <?php
              }
              }
              ?>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">

            <select name="item_brand" id="item_brand" class="form-control">
              <option>~~Select Brand~~</option>
              <?php
                $result =  get_all_brands();
                if (!$result) {
                  echo "Error:" . "<br>" . mysqli_error($conn);
                }else{
                  while ($row = mysqli_fetch_assoc($result)) {
                    $brand_id = $row['id'];
                    $brand_name = $row['name'];
              ?>
                
                <option <?php if($brand_id == $edit_brand_id){echo "selected";} ?> value='<?php echo $brand_id; ?>'><?php echo $brand_name ?></option>
                <?php
                }
                }
                ?>
            </select>
        </div>
    </div>
</div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><h3>Description</h3></label>
    <textarea name="item_description" id="item_description" class="form-control item_description" rows="15"><?php echo $description; ?></textarea>
  </div>
  </div>
<div class="col-lg-4">
  <div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Add Image</div>
  <div class="card-body text-dark">
    
    <div class="form-group">

    <input type="file" class="form-control" multiple="" name="images" id="images" value="Select Images">  
    </div>
    <?php
       
        
          echo '<img src="images/'.$imageNames.'" height="100" width="100">';
        
    ?>
     
  </div>
</div>
<div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Save</div>
  <div class="card-body text-dark">
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><h3>Price</h3></label>
    <input value="<?php echo $price; ?>" name="item_price" type="number" id="item_price" class="form-control" style="width: max-content">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1"><h3>Status</h3></label>
      <select name="status" id="item_status" class="form-control" style="width: max-content">
       
        
        <?php
          switch ($status) {
            case 'draft':
              echo '<option selected value="draft">Draft</option>
        <option value="publish">Publish</option>';
              break;
              case 'publish':
              echo '<option value="draft">Draft</option>
        <option selected value="publish">Publish</option>';
              break;
            
            default:
              echo '<option value="draft">Draft</option>
        <option value="publish">Publish</option>';
              break;
          }
        ?>
      </select>
  </div>
  <div class="form-group">
    <input type="submit" class="form-control btn btn-primary" name="update-submit" id="submit" value="Update">
  </div>
  </div>
</div>
</form>
  
    </div>

  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

  tinymce.init({selector:'textarea'});


});


</script>
           <!-- Sticky Footer -->
      <?php include 'inc/footer.php'; ?>