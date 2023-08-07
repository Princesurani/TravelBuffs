<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
if (!isset($_SESSION['loggedin'])) {
    header("location: landing.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include 'C:\xampp\htdocs\Project\Explores\dbconnect.php';
$con = getcon();
if (isset($_GET["id"])) {
    $query = "select * from packageinfo where title='" . $_GET['id'] . "'";
    $qr = "select * from packages where title = '" . $_GET['id'] . "'";
    $ans = mysqli_query($con, $qr);
    $res = mysqli_query($con, $query);
    if ($row = $res->num_rows > 0) {
?>

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Travel Buffs</title>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="stylesheet" href="fotter.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
            <style>
                .navbar {
                    padding-top: 10px;
                    padding-bottom: 10px;
                    font-family: Cambria;
                    font-size: 18px;
                }

                .navbar-brand {
                    font-size: 25px;
                }

                table {
                    margin: 5px;
                    margin-bottom: 10px;
                }

                th,
                td {
                    width: 150px;
                    text-align: center;
                }

                .pkgdis th,
                .pkgdis td {
                    padding: 10px;
                    width: 200px;
                }

                .imgb {
                    width: 120px;
                    height: 35px;
                }
            </style>
        </head>

        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo0MywidyI6MTI1MCwiZnMiOjM0LCJmZ2MiOiIjRjJGNUY5IiwiYmdjIjoiIzFCMkQ0NCIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Home.php
                    ">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Explore
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./Explores/Places.php">Places</a>
                                <a class="dropdown-item" href="./Explores/Beaches.php
                        ">Beaches</a>
                                <a class="dropdown-item" href="./Explores/Mountain.php
                        ">Mountains</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active " href="Packages.php
                    ">Packages</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="About.php
                    ">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="Contact.php
                    ">Contact Us</a>
                        </li>


                    </ul>
                    <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form> -->
                    <div class="mx-2">
                        <button class="btn btn-primary"><?php echo $_SESSION['username']; ?></button>
                        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#signupModal">SignUp</button> -->
                    </div>
                </div>
            </nav>

            <?php
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
            ?>
                    <div class="cont">
                        <!-- <img style="width:100%; height:500px;" src="https://thedispatch.blob.core.windows.net/thedispatchimages/2021/07/1614248377_1.jpg" alt="Kashmir"> -->
                        <img style="width:100%; height:500px;" src="<?php echo $row['image']; ?>" alt="image">
                        <div style="font-family: Cambria; align-items: center; ">


                            <h3>Best Route</h3><br><br>
                            <table class="sfgt">
                                <tr>
                                    <th>Start from</th>
                                    <th>Going to</th>
                                </tr>
                                <tr>
                                    <td><?php echo $row['startfrom']; ?></td>
                                    <td><?php echo $row['goingto']; ?></td>
                                </tr>
                            </table>
                            <br><br>
                            <h3>Overview</h3><br><br>
                            <table class="info">
                                <tr>
                                    <th>Budget</th>
                                    <th>Destinations</th>
                                    <th>Hotel Catagories</th>

                                </tr>
                                <tr>
                                    <td><?php echo $row['lowbud']; ?>K to <?php echo $row['highbud']; ?>K</td>
                                    <td><?php echo $row['destno']; ?></td>
                                    <td>3 star to 5 star</td>
                                </tr>
                        <?php
                    }
                } else {
                    echo "<h2>Not Found</h2>";
                }
                        ?>
                            </table>
                            <br><br>
                            <center>
                                <h2>Packages Available</h2>
                            </center>
                            <table class="pkgdis">
                                <tr>
                                    <th>Charges</th>
                                    <th>Duration</th>
                                    <th>#</th>
                                </tr>
                                <?php
                                if ($ans->num_rows > 0) {
                                    while ($tp = $ans->fetch_assoc()) {
                                ?>
                                        <tr>
                                            <td><?php echo $tp['cost']; ?>K</td>
                                            <td><?php echo $tp['duration']; ?></td>
                                            <td> <button class="btn btn-primary">Buy</button></td>
                                        </tr>
                                <?php
                                    }
                                } else {
                                    echo "<h2>No packages found</h2>";
                                }
                                ?>
                            </table>

                        </div>


                    </div>
                    <p style="margin-top: 20px;">*All charges are per person</p>




                    <?php require 'footer.php' ?>
            <?php
        }
    } else {
        echo "<h2>Not found</h2>";
    }
            ?>
        </body>

</html>