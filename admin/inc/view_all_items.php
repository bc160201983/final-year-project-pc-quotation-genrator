<?php include 'inc/header.php'; 

session_start();

if (!$_SESSION['user_id']) {
  redirect_to("login.php");
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
          <li class="breadcrumb-item active">Items</li>
        </ol>



<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Items
            <a style="float: right;" class="btn btn-primary" href="items.php?source=add_item">Add Item</a>

          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Image</th>
                   
                    <th>Price</th>
                    <th>Status</th>
                    <td>Action</td>
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Image</th>                    
                    <th>Price</th>
                    <th>Status</th>
                    <td>Action</td>
                  </tr>
                </tfoot>
                
                <tbody>
                  <?php

                  $result = get_all_items();
                  if (!$result) {
                    die("Query Failed" . mysqli_error($conn));
                  }else{
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['item_id'];
                        $title = $row['item_title'];
                        $cat_id = $row['cat_id'];
                        $brand_id = $row['man_id'];
                        $image = $row['image'];
                        $price = $row['price'];
                        $status = $row['status'];
                        //print_r($row);  
                  ?>

                    <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo substr($title, 0, 53); ?></td>
                    <td><?php
                            $catData = get_gategory_by_id_fetch($cat_id);
                            echo $catData['cat_name'];
                     ?></td>
                    <td><?php
                    $brandData = get_brand_by_id_fetch($brand_id);
                            echo $brandData['name']; 
                    
                    ?></td>
                    <td><?php 
                   
                    echo '<img src="images/'.$image.'" alt="" height="42" width="42">';
                    //print_r($imageArray); 
                    ?></td> 
                    <td><?php echo "<strong>Rs.</strong>" . number_format($price); ?></td>
                    <td><?php echo $status; ?></td>
                    <td>
                      
                      <a href="items.php?source=edit_item&id=<?php echo $id ?>" class="btn btn-primary">EDIT</a>|
                      <a href="#" class="btn btn-danger">DELETE</a>
                    </td>
                  </tr>

                  <?php
                    }
                  }


                ?>
                  
                  
                 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"><!-- Updated yesterday at 11:59 PM --></div>
        </div>


<script type="text/javascript">
  $(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>



           <!-- Sticky Footer -->
      <?php include 'inc/footer.php'; ?>