<?php include 'inc/header.php'; ?>


<?php
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
      // if (isset($_FILES['images']['name'])) {
      //     $image = $_FILES['images']['name'];
      // }else{
      //   $image = "";
      // }
      $description = htmlspecialchars(trim($_POST['item_description']));
      $price = escape_string($_POST['item_price']);
      $status = escape_string($_POST['status']);
      $image_names = $_FILES['images']['name'];
      
    if (empty($title) || empty($cat_id) || empty($brand_id) || empty($image_names[0]) || empty($description) || empty($price) || empty($status)) {
          $errors[] = "Fill the required Fields";
      }else{
            $imageNameString = implode(",", $image_names);
            if (count($image_names) > 5) {
              $errors[] = "files can not be greater then 5";
            }else{
              for ($i=0; $i <count($_FILES['images']['name']); $i++) {
                    if ($_FILES['images']['size'][$i] > 5000000) {
                       $errors[] = "file size must be less then 5mb";
                     }else{
                      $filename = basename($_FILES['images']['name'][$i]);
                      $targetFilePath = $target_dir . $filename;
                      $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                      if (in_array($fileType, $allowTypes)) {
                        if (move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath)) {
                            $result = insert_item($title, $cat_id, $brand_id, $imageNameString, $description, $price, $status);
                              if (!$result) {
                                  $errors[] = die("Query Failed " . mysqli_error($conn));                                  
                                }else{
                                  $success[] = "Item Inserted successfully";
                                }
                            break;
                        }else{
                          $errors[] = "Upload Failed";
                          break;
                        }
                      }else{
                        $errors[] = "You can only upload image Type 'jpg','png','jpeg','gif'";
                        break;
                  }
                } 

              }
            }
      }
}

if (isset($_GET['id'])) {
  $item_edit_id = $_GET['id'];

  $item_by_id = get_items_by_id($item_edit_id);
  print_r($item_by_id);
  
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
            <a href="index.php">Dashboard</a>
          </li>
           <li class="breadcrumb-item">
            <a href="items.php">Items</a>
          </li>
          <li class="breadcrumb-item active">Add Items</li>
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
                <option value='<?php echo $cat_id ?>'><?php echo $cat_name ?></option>
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
                
                <option value='<?php echo $brand_id; ?>'><?php echo $brand_name ?></option>
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
    <input type="file" class="form-control" multiple="" name="images[]" id="images" value="Select Images">
    <span id="error_multiple_files"></span>
</div>
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