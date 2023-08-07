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
  <title>Travel Buffs</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/Project/assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/Project/assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/Project/assets/css/dataTables.bootstrap4.css">
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
          <a class="navbar-brand brand-logo" href="index.html"><img src="/Project/images/logo.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/Project/images/logo.png" alt="logo"/></a>
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
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addpackage.php">
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
            <!-- <a class="nav-link" href="table.html"> -->
            <a class="nav-link" href="table.php">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Table</span>
            </a>
          </li>
		  <!-- <li class="nav-item"> -->
            <!-- <a class="nav-link" href="login.html"> -->
            <!-- <a class="nav-link" href="login.php">
              <i class="mdi mdi-airplay menu-icon"></i>
              <span class="menu-title">Login</span>
            </a>
          </li> -->
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">  

        <div class="content-wrapper"> 
          <div class="card"> 
            <div class="card-body"> 
              <h2 class="text-center m-5"><b>Destination Information</b></h2>
              <!-- <h2 class="card-title text-center">Destinations Information</h2> -->
              <div class="row"> 
                <div class="col-12"> 
                  <div class="table-responsive"> 
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>#</th>
                            <th>Title</th>
                            <th>Site</th>
                            <th>Direction</th>
                        
                            <th>Desc1</th>
                            <th>Desc2</th>
                            <th>Time to Visit</th>
                            <th>Care</th>
                            <th>to do</th>
                            <th>plan</th>
                            <th>Transportation</th>
                            <!-- <th>Map</th> -->
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $qr = "SELECT * FROM places";
                        $res = mysqli_query($con,$qr);
                        
                            if($res->num_rows> 0)
                            {
                                while($row = $res->fetch_assoc())
                                {
                                    ?>
                                    <tr>
                                        <!-- <td></td> -->
                                        <td><a href="#">Edit</a></td>
                                        <td><a href="#">Delete</a></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td><?php echo $row['site'] ?></td>
                                        <td><?php echo $row['direction'] ?></td>
                                        <td><?php echo $row['desc1'] ?></td>
                                        <td><?php echo $row['desc2'] ?></td>
                                        <td><?php echo $row['timevisit'] ?></td>
                                        <td><?php echo $row['care'] ?></td>
                                        <td><?php echo $row['todo'] ?></td>
                                        <td><?php echo $row['plan'] ?></td>
                                        <td><?php echo $row['transp'] ?></td>
                                        <!-- <td></td> -->
                                    </tr>
                                    <?php 
                                }

                            }
                        
                        ?>
                      </tbody>
                    </table>
                  </div> 
				</div> 
              </div> 
            </div>
          </div> 
                          </div>


          <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h2 class="text-center m-5"><b>Package Information</b></h2>
              <!-- <h2 class="card-title text-center">Destinations Information</h2> -->
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>#</th>
                            <th>#</th>
                            <th>Title</th>
                            <th>Start from</th>
                            <th>Going to</th>
                            <th>lower budget</th>
                            <th>higher budget</th>
                            <th>no of destinations</th>
                            <th>short desc</th>
                            
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $qr = "SELECT * FROM packageinfo";
                        $res = mysqli_query($con,$qr);
                        
                            if($res->num_rows> 0)
                            {
                                while($row = $res->fetch_assoc())
                                {
                                    ?>
                                    <tr>
                                        <!-- <td></td> -->
                                        <td><a href="#">Edit</a></td>
                                        <td><a href="#">Delete</a></td>
                                        <td><?php echo $row['title'] ?></td>
                                        <td><?php echo $row['startfrom'] ?></td>
                                        <td><?php echo $row['goingto'] ?></td>
                                        <td><?php echo $row['lowbud'] ?></td>
                                        <td><?php echo $row['highbud'] ?></td>
                                        <td><?php echo $row['destno'] ?></td>
                                        <td><?php echo $row['dis'] ?></td>
                                        
                                    </tr>
                                    <?php 
                                }

                            }
                        
                        ?>
                      </tbody>
                    </table>
                  </div>
				        </div>
              </div>
            </div>
          </div>
		    </div>
          <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h2 class="text-center m-5"><b>Contact Requests</b></h2>
              <!-- <h2 class="card-title text-center">Destinations Information</h2> -->
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <!-- <th>#</th> -->
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Query</th>
                            <th>About the Requester</th>
                            <th>Their Concern</th>
                        
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $qr = "SELECT * FROM contactus";
                        $res = mysqli_query($con,$qr);
                        
                            if($res->num_rows> 0)
                            {
                                while($row = $res->fetch_assoc())
                                {
                                    ?>
                                    <tr>
                                        <!-- <td></td> -->
                                      
                                        <td><a href="#">Delete</a></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><?php echo $row['query'] ?></td>
                                        <td><?php echo $row['about'] ?></td>
                                        <td><?php echo $row['concern'] ?></td>
                                    
                                        
                                    </tr>
                                    <?php 
                                }

                            }
                        
                        ?>
                      </tbody>
                    </table>
                  </div>
				        </div>
              </div>
            </div>
          </div>
		    </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
  <script src="/Project/assets/js/jquery.dataTables.js"></script>
  <script src="/Project/assets/js/dataTables.bootstrap4.js"></script>
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
  <!-- <script src="/Project/assets/js/data-table.js"></script> -->
  <!-- End custom js for this page-->
</body>
</html>