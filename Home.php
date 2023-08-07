<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
if (!isset($_SESSION['loggedin'])) {
    header("location: landing.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to Travelbuff. A blog for coding enthusiasts">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="fotter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />


    <title>Travel buffs</title>

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

        .text {
            margin-top: 20px;
            font-family: Cambria;
        }

        .container {
            max-width: 1300px;
        }

        .imgb {
            width: 120px;
            height: 35px;
        }
    </style>

    <script>
        function check1() {
            var repass = /^[A_Za-z0-9._@-]{8,15}$/;
            var msg = "";



            if (form1.password.value.length == 0)
                msg += "Empty password ! ";
            else if (!repass.test(form1.password.value))
                msg += "invalid password  !\nPassword must have min 8 charcters and should containing uppqecase lowercase and special characters";

            if (msg != "") {
                alert(msg);
                return false;
            }
            return true;
        }

        function check2() {
            var repass2 = /^[A_Za-z0-9._@-]{8,15}$/;
            var msg2 = "";
            var pass1 = form2.password2.value;
            var pass2 = form2.confirmpassword.value;

            if (form2.password2.value.length == 0)
                msg2 += "Empty password ! ";
            else if (!repass2.test(form2.password2.value))
                msg2 += "invalid password!"
            else if (form2.confirmpassword.value.length == 0)
                msg2 += "Cofirm password is required!";
            else if (pass1 != pass2)
                msg2 += "Password doesn't match!";


            if (msg2 != "") {
                alert(msg2);
                return false;
            }
            return true;
        }
    </script>
</head>
<!-- <a href="https://www.fontspace.com/category/lettering"><img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo3MSwidyI6MTI1MCwiZnMiOjU3LCJmZ2MiOiIjRTlGNUZEIiwiYmdjIjoiIzE2Mjk0MiIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
        <a href="https://www.fontspace.com/category/lettering"><img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo3MSwidyI6MTI1MCwiZnMiOjU3LCJmZ2MiOiIjRkZGRkZGIiwiYmdjIjoiIzE2Mjk0MiJ9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a> -->

<body>
    <nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo0MywidyI6MTI1MCwiZnMiOjM0LCJmZ2MiOiIjRjJGNUY5IiwiYmdjIjoiIzFCMkQ0NCIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
        <!-- <a href="https://www.fontspace.com/category/lettering"><img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo3MSwidyI6MTI1MCwiZnMiOjU3LCJmZ2MiOiIjODhCN0RCIiwiYmdjIjoiIzE2Mjk0MiIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="Home.php">Home</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Explore
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./Explores/Places.php">Places</a>
                        <a class="dropdown-item" href="./Explores/Beaches.php">Beaches</a>
                        <a class="dropdown-item" href="./Explores/Mountain.php">Mountains</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="Packages.php">Packages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="About.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>
            </ul>


            <?php


            // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
            if (!isset($_SESSION['loggedin'])) {
                header("location: logint.php");
                exit;
            } else {
                echo '<div class="mx-2">
                    <a href="logint.php"><button class="btn btn-primary">' . $_SESSION["username"] . '</button></a>
                        
                    </div>';
            }
            ?>
        </div>
    </nav>



    <hr />
    <div class="container">
        <div id="carouselExampleCaptions" class=" carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://wallpaperaccess.com/full/706913.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Travelbuffs</h1>
                        <h3>Travel smarter, cheaper, longer Where do you want to go</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://wallpaperaccess.com/full/429865.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Travelbuffs</h1>
                        <h3>Travel smarter, cheaper, longer Where do you want to go</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://ze-robot.com/images/source/13302.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>Welcome to Travelbuffs</h1>
                        <h3>Travel smarter, cheaper, longer Where do you want to go</h3>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <hr />


    <div class="text">
        <h2 align="center" style="font-weight:bold;">Latest Blogs</h2>
    </div>


    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">How to sheduale your holidays</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">Pick your destination.Decide the duration of your trip.Book flights, train, or bus tickets, and accommodation.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="280" src="https://s3.envato.com/files/308446031/571A6539.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Expert</strong>
                        <h3 class="mb-0">How to become travel guider</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">Prospective tour guides should possess a minimum of a high school diploma or equivalent certificate.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="200" height="280" src="https://img.pikbest.com/01/31/12/73z888piCd4C.jpg-0.jpg!bw700" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php require 'footer.php' ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>