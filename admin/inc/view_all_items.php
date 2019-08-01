<?php include 'inc/header.php'; ?>

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
                    <th>Discription</th>
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
                    <th>Discription</th>
                    <th>Price</th>
                    <th>Status</th>
                    <td>Action</td>
                  </tr>
                </tfoot>
                <?php

                  $result = get_all_items();
                  if (!$result) {
                    die("Query Failed" . mysqli_error($conn));
                  }else{
                    while ($row = mysqli_fetch_assoc($result)) {
                        print_r($row);  


                    }
                  }


                ?>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>55555555</td>
                    <td>Publish</td>
                    <td>
                      
                      <a href="#" class="btn btn-primary">EDIT</a>|
                      <a href="#" class="btn btn-danger">DELETE</a>
                    </td>
                  </tr>
                  
                 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>






           <!-- Sticky Footer -->
      <?php include 'inc/footer.php'; ?>