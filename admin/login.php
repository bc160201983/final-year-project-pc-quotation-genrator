<?php include 'inc/header.php'; ?>


<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header("Location: index.php");
}


$errors = array();

if (isset($_POST['btn'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    if ($username == "") {
      $errors[] = "Username is required";
    }

    if ($password == "") {
      $errors[] = "Password is required";
    }
  }else{

    $query = "SELECT * FROM `users` WHERE user_name = '$username'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 1){
      $password = md5($password);
      $maimQuery = "SELECT * FROM `users` WHERE user_name = '$username' AND user_password = '$password'";
      $mainResult = mysqli_query($conn, $maimQuery);
      if(mysqli_num_rows($mainResult) == 1){
        $row = mysqli_fetch_assoc($mainResult);
        $user_id = $row['user_id'];

        //set session
        $_SESSION['user_id'] = $user_id;
        header("Location: index.php");
      }else{
        $errors[] = "Incorrect username/password combination";
      }
    }else{

      $errors[] = "Username dosenot exists";
    }
  }
}



?>



 <div class="container">
  <?php

                if ($errors) {
                  foreach ($errors as $key => $value) {
                    echo '<div class="alert alert-danger"><strong>' . $value .'</strong></div>';
                  }
                }

              ?>
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Enter Username" required="required" autofocus="autofocus">
              <label for="inputEmail">Enter Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
                  <input name="btn" type="submit" class="btn btn-primary btn-block">
        </form>
         </div>
    </div>
  </div>
    <!-- Sticky Footer -->
      <?php include 'inc/footer.php'; ?>