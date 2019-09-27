<?php
include 'admin/inc/init.php';
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


	


$errors = array();

if (isset($_POST['btn'])) {
	$username = $_POST['username'];
	$date = $_POST['date'];
	$item_id = $_POST['selectItems'];
	$qty =  array_values(array_filter($_POST['qty']));
	$price =  array_values(array_filter($_POST['price']));
	$totalPrice =  array_values(array_filter($_POST['totalPrice']));
	if (empty($username) || empty($date)) {
		$errors[] = "Please fill the required fileds";
	}else{

for ($i=0; $i < count($item_id); $i++) { 
$sql = "INSERT INTO `report`(`date`, `customer_name`, `item_id`, `qty`, `amount`) VALUES ('".$date."','".$username."',".$item_id[$i].",".$qty[$i].", ".$price[$i].")";
			
			$result = mysqli_query($conn, $sql);
			
		}

		if (!$result) {
				die("Query Failed " . mysqli_error($conn));
			}
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Incoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/invoice.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
    	<a style="text-decoration:none;" id="goBack" href="quotation.php" class="btn btn-primary">Go Back</a>
      <div id="logo">
        <img src="img/invoice-logo.png">
      </div>
      
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">Date</th>
            <th class="desc">Item</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        	<?php
        		if (isset($_POST['btn'])) {
        			
        			for ($i=0; $i < count($_POST['selectItems']); $i++) { 
        				$sql = "SELECT * FROM items WHERE item_id = ".$_POST['selectItems'][$i]."";
        				$item_result = mysqli_query($conn, $sql);
        				while ($row = mysqli_fetch_assoc($item_result)) {
        					$item_title = $row['item_title'];
        					
        					?>
					<tr>
		            <td class="service"><?php echo $_POST['date']; ?></td>
		            <td class="desc"><?php echo $item_title; ?></td>
		            <td class="unit"><?php echo $price[$i]; ?></td>
		            <td class="qty"><?php echo $qty[$i]; ?></td>
		            <td class="total"><?php echo "Rs.".$totalPrice[$i]; ?></td>
		          </tr>


        					<?php


        				}
        			}
        				

        		}
        	?>
          
          
          
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total"><?php if(isset($_POST['btn'])) echo "Rs.". $_POST['totalAmount'] ?></td>
          </tr>
          <tr>
          	
          		<!-- <td colspan="0" class="grand total"><input onclick="printTrigger()" id="genPdf" class="btn btn-primary" type="submit" name="genPdf" value="Genrate PDF"></td>	 -->
          	  	
          </tr>

        </tbody>
      </table>

    </main>
   <!--  <script type="text/javascript">
    		function printTrigger() {
    			window.print();
    			var button1 =  document.getElementById('goBack');
    			button1.style.display = "block";
    			button1.style.display = "none";
		 //    var myWindow=window.open(this);
			//     //myWindow.document.write("<p>This is 'myWindow'</p>");
			    
			//     myWindow.document.close();
			// myWindow.focus();
			// myWindow.print();
			// myWindow.close();
		}
    </script> -->
  </body>
</html>