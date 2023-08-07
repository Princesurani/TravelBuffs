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
            <a class="nav-link" href="addplace.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Places</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Packages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addplacedis.php">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Add Place Description</span>
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
            <h1 class="card-title ml10">Add Package</h1>
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <form class="forms-sample" action="addpackage.php" method="post">
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                      <label for="cost">Cost</label>
                      <input type="number" class="form-control" id="cost" name="cost" placeholder="cost of the package per person in thousands">
                    </div>
                    <div class="form-group">
                      <label for="dr">Duration</label>
                      <input type="text" class="form-control" id="dr" name="dr" placeholder="duration">
                    </div>


                    <button type="submit" name="btnsubmit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light" type="reset">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

          </div>




          <?php

          if (isset($_POST['btnsubmit'])) {
            $title = $_POST['title'];
            $cost = $_POST['cost'];
            $duration = $_POST['dr'];


            $query = "INSERT INTO `packages`(`title`,`cost`,`duration`) VALUES ('$title','$cost','$duration')";
            $ans = mysqli_query($con, $query);
            if (!$ans) {
              echo "Error in inserting places";
            } else {
              echo "Package added successfully";
            }
          }
          ?>


          <div class="content-wrapper">
            <div class="row">
              <h1 class="card-title ml10">Add Package Information</h1>
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <form class="forms-sample" action="addpackage.php" method="post">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php if (isset($_POST['btnsubmit'])) {
                                                                                                                      echo $title;
                                                                                                                    } else {
                                                                                                                      echo "";
                                                                                                                    } ?>">
                      </div>
                      <div class="form-group">
                        <label for="img">image</label>
                        <input type="text" class="form-control" id="img" name="img" placeholder="Path of the image">
                      </div>
                      <div class="form-group">
                        <label for="sf">Start from</label>
                        <input type="text" class="form-control" id="sf" name="sf" placeholder="starting location of the route">
                      </div>
                      <div class="form-group">
                        <label for="gt">Going to</label>
                        <input type="text" class="form-control" id="gt" name="gt" placeholder="final location of the route">
                      </div>
                      <div class="form-group">
                        <label for="lb">Lower Budget</label>
                        <input type="number" class="form-control" id="lb" name="lb" placeholder="budget">
                      </div>
                      <div class="form-group">
                        <label for="hb">Higher Budget</label>
                        <input type="number" class="form-control" id="hb" name="hb" placeholder="budget">
                      </div>
                      <div class="form-group">
                        <label for="no">No of Destinations to be covered</label>
                        <input type="number" class="form-control" id="no" name="no" placeholder="number">
                      </div>
                      <div class="form-group">
                        <label for="sd">Short Description</label>
                        <input type="text" class="form-control" id="sd" name="sd" placeholder="short description">
                      </div>


                      <button type="submit" name="btnsubmit1" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light" type="reset">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

            </div>

            <?php

            if (isset($_POST['btnsubmit1'])) {
              $title = $_POST['title'];
              $img = $_POST['img'];
              $sf = $_POST['sf'];
              $gt = $_POST['gt'];
              $lb = $_POST['lb'];
              $hb = $_POST['hb'];
              $no = $_POST['no'];
              $sd = $_POST['sd'];


              $qr = "INSERT INTO `packageinfo`(`title`, `image`, `startfrom`, `goingto`, `lowbud`, `highbud`, `destno`, `dis`) VALUES ('$title','$img','$sf','$gt',$lb,$hb,$no,'$sd') ";
              $res = mysqli_query($con, $qr);
              if (!$res) {
                echo "Error in inserting intp packageinfo";
              } else {
                echo "Package added successfully";
              }
            }
            ?>
          </div>
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