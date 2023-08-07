<?php
include 'C:\xampp\htdocs\Project\Explores\dbconnect.php';
$con = getcon();

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Travel Buffs Admin</title>
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
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>

        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="/Project/images/logo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/Project/images/logo.png" alt="logo" /></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">Travel Buffs</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="login.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>

          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/Project/Admin/index.php">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Project/Admin/form.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Form</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Project/Admin/table.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Table</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="/Project/Admin/login.php">
              <i class="mdi mdi-airplay menu-icon"></i>
              <span class="menu-title">Login</span>
            </a>
          </li> -->

        </ul>
      </nav>

      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <h1 class="card-title ml10">Add places</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" action="admin.php" method="post">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <!-- <div class="form-group">
                      <label>Image upload</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label for="img">Image</label>
                      <input type="text" class="form-control" id="img" name="img" placeholder="image path">
                    </div>
                    <div class="form-group">
                      <label for="site">Site</label>
                      <input type="text" class="form-control" id="site" name="site" placeholder="url">
                    </div>
                    <div class="form-group">
                      <label for="dir">Direction</label>
                      <input type="text" class="form-control" id="dir" name="dir" placeholder="url">
                    </div>
                    <div class="form-group">
                      <label for="pkg">Package</label>
                      <input type="text" class="form-control" id="pkg" name="pkg" placeholder="url">
                    </div>
                    <div class="form-group">
                      <label for="desc1">Description - 1</label>
                      <textarea class="form-control" id="desc1" name="desc1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="desc2">Description - 2</label>
                      <textarea class="form-control" id="desc2" name="desc2" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="timevisit">Time to visit</label>
                      <input type="text" class="form-control" id="timevisit" name="timevisit" placeholder="text">
                    </div>
                    <div class="form-group">
                      <label for="care">Care to be taken</label>
                      <input type="text" class="form-control" id="care" name="care" placeholder="text">
                    </div>
                    <div class="form-group">
                      <label for="plan">Plan</label>
                      <input type="text" class="form-control" id="plan" name="plan" placeholder="text">
                    </div>
                    <div class="form-group">
                      <label for="todo">Things to do</label>
                      <input type="text" class="form-control" id="todo" name="todo" placeholder="text">
                    </div>
                    <div class="form-group">
                      <label for="transp">Transportation</label>
                      <input type="text" class="form-control" id="transp" name="transp" placeholder="text">
                    </div>
                    <div class="form-group">
                      <label for="map">Map</label>
                      <input type="text" class="form-control" id="map" name="map" placeholder="url">
                    </div>

                    <button type="submit" name="btnsubmit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

          </div>

        </div>

        <?php

        if (isset($_POST['btnsubmit'])) {
          $title = $_POST['title'];
          $img = $_POST['img'];
          $site = $_POST['site'];
          $dir = $_POST['dir'];
          $pkg = $_POST['pkg'];
          $desc1 = $_POST['desc1'];
          $desc2 = $_POST['desc2'];
          $timevisit = $_POST['timevisit'];
          $care = $_POST['care'];
          $todo = $_POST['todo'];
          $plan = $_POST['plan'];
          $transp = $_POST['transp'];
          $map = $_POST['map'];


          $query = "INSERT INTO `places`(`title`,`image`) VALUES ('$title','$img')";
          $ans = mysqli_query($con, $query);
          if (!$ans) {
            echo "Error in inserting intp places";
          } else {
            $qr = "INSERT INTO `readmore`(`img`, `title`, `site`, `direction`, `package`, `desc1`, `desc2`, `timevisit`, `care`, `plan`, `todo`, `transp`, `map`) VALUES ('$img','$title','$site','$dir','$pkg','$desc1','$desc2','$timevisit','$care','$plan','$todo','$transp','$map')";

            $res = mysqli_query($con, $qr);
            if (!$res) {
              echo "Error in inserting into";
            } else {
              echo "inserted successfully";
            }
          }
        }
        ?>


        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 - All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

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