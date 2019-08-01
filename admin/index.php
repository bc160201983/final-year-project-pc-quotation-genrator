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
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <?php
                  $result = total_items();
                  if(!$result){
                    echo "<div class='mr-5'>No item Found</div>";
                  }else{
                    $num_rows = mysqli_fetch_assoc($result)["totalItems"];
                    echo "<div class='mr-5'>".$num_rows." Total Items</div>";
                  }
                ?>
               
              </div>
              <a class="card-footer text-white clearfix small z-1" href="items.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <?php 
                $result = total_categories();
                  if (!$result) {
                    echo '<div class="mr-5">No category Found</div>';
                  }else{
                    $total_cat = mysqli_fetch_assoc($result)["totalCategory"];
                    echo '<div class="mr-5">'.$total_cat.' Total Categories!</div>';
                  }
                ?>
                
              </div>
              <a class="card-footer text-white clearfix small z-1" href="categories.php">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <?php 
                $result = total_brand();
                  if (!$result) {
                    echo '<div class="mr-5">No Brand Found</div>';
                  }else{
                    $total_cat = mysqli_fetch_assoc($result)["totalBrand"];
                    echo '<div class="mr-5">'.$total_cat.' Total Brands!</div>';
                  }
                ?>
                
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php include 'inc/footer.php'; ?>