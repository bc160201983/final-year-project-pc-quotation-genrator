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
          <li class="breadcrumb-item active">Reports</li>
        </ol>



<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Generate Reports
           
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Item</th>
                    <th>User Name</th>
                    <th>Quantity</th>
                   
                    <th>Price</th>
                    
                  </tr>
                </thead>
                <tfoot>
                 <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Item</th>
                    <th>User Name</th>
                    <th>Quantity</th>
                   
                    <th>Price</th>
                    
                  </tr>
                </tfoot>
                
                <tbody>
                	<?php
                		$sql = "SELECT * FROM report";
                		$result = mysqli_query($conn, $sql);
                		$rowCount = mysqli_num_rows($result);
                		if ($rowCount > 0) {
                			while ($row = mysqli_fetch_assoc($result)) {
                				$id = $row['report_id'];
                				$date = $row['date'];
                				$customer_name = $row['customer_name'];
                				$item_id = $row['item_id'];
                				$qty = $row['qty'];
                				$amount = $row['amount'];

                				?>

                				<tr>
               						<td><?php echo $id; ?></td>
               						<td><?php echo date('d-m-Y', strtotime($date)); ?></td>
                   					<td><?php echo $item_id; ?></td>
                   					<td><?php echo $customer_name; ?></td>
               						<td><?php echo $qty; ?></td>
               						<td><?php echo $amount; ?></td>
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