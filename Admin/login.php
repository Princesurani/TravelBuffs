<?php
include 'C:\xampp\htdocs\Project\Explores\dbconnect.php';
$con = getcon();

session_unset();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Travel Buffs</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/Project/assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/Project/assets/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="/Project/assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/Project/assets/css/style.css">
</head>

<body class="sidebar-light">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo text-center">
                <img src="/Project/images/logo.png" alt="logo">
              </div>
              <h6 class="font-weight-light">Login to continue.</h6>
              <form class="pt-3" action="login.php" method="post">
                <div class="form-group">
                  <input type="uname" class="form-control form-control-lg" id="uname" name="uname" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="pass" name="pass" placeholder="Password">
                </div>
                <div class="mt-3">
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.php">Login</a> -->
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="lgbtn">
                    <a href=""> Login </a></button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>


  <?php
  $sql = "SELECT * FROM admin";
  $res = mysqli_query($con, $sql);
  if ($res->num_rows == 1) {
    while ($row = $res->fetch_assoc()) {

      if (isset($_POST['lgbtn'])) {
        if (($_POST['pass'] == $row['password']) && ($_POST['uname'] == $row['username'])) {
          session_start();
          $_SESSION['adminlogin'] = true;
          $_SESSION['usrname'] = $_POST['uname'];
          header("location: index.php");
        } else {
          echo "Invalid username or password";
          // header("location: login.php");
        }
      } else {
        echo "Enter username and password";
        // header("location: login.php");
      }
    }
  }

  ?>

  <!-- plugins:js -->
  <script src="/Project/assets/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/Project/assets/js/Chart.min.js"></script>
  <script src="/Project/assets/js/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/Project/assets/js/off-canvas.js"></script>
  <script src="/Project/assets/js/hoverable-collapse.js"></script>
  <script src="/Project/assets/js/template.js"></script>
  <script src="/Project/assets/js/settings.js"></script>
  <script src="/Project/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/Project/assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>