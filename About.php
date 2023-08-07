<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header("location: landing.php");
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to Travelbuff. A blog for coding enthusiasts">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

        .navbar-brand{
            font-size: 25px;
        }

        .imgb{
            width:120px;
            height: 35px;
        }
        
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <!-- <a class="navbar-brand" href="#">Travel buffs</a> -->
        <a class="navbar-brand" href="#">
        <img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo0MywidyI6MTI1MCwiZnMiOjM0LCJmZ2MiOiIjRjJGNUY5IiwiYmdjIjoiIzFCMkQ0NCIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link active" href="About.php">About</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>


            </ul>
            <?php
            
                // if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
                if(!isset($_SESSION['loggedin'])){
                    header("location: logint.php");
                    exit;
                }
                else 
                {
                    echo '<div class="mx-2">
                    <a href="logint.php"><button class="btn btn-primary">'.$_SESSION["username"].'</button></a>
                        
                    </div>';
                }
            ?>
        </div>
    </nav>
    
    <hr/>
    <h2 class="text-center mt-4" style=" font-family: Cambria; font-weight:bold;" >The ultimate Guide to the world's creative neighborhoods</h2>
    <hr/>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm">
                <img src="images/logo.png" class="m-3" alt="logo" style="height:360px; width:650px; border-radius:10px; "/>
            </div>
            <div class="col-sm">
                <p class="mt-3" style="line-height: 40px;"> Hi, We are <b><u>Travel Buffs, an ultimate guide to explore the world.</u></b> <br>Have you ever said to yourself one of the following?:<br>

                "How do I find the money to travel? It seems too expensive for me." <br>
                "Where do I find the best travel deals?”<br>
                "How do I save money on flights, accommodation, and other big expenses?"<br>
                "How do I plan my trip?"<br>
                "How do I stay safe and healthy?"<br>
                "How do I maximize my time?"<br>
                "I want to travel more, but I don't know the first step."</p>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            
            <div class="col-sm">
                <h2 class="text-center m-3" style="font-family: Cambria; font-weight:bold;"> Make your best tour plan with us</h2>
                <h5 style="font-family: Cambria; font-weight:bold;" class="m-3 mt-5">Select your plan by exploring the world virtually</h5>
                <p class="m-3">
                    Get the best time to visit the place <br>
                    know the things to be taken care <br>
                    plan your trip <br>
                    And the very important thing, affordable Transportation and stay<br>
                </p>
                <button type="button" class="btn btn-dark m-3"><a href="./Explores/Places.php" style="text-decoration:none; color:white;">Explore</a></button>
                <button type="button" class="btn btn-dark m-3"><a href="./Packages.php" style="text-decoration:none; color:white;">Packages</a></button>
            </div>
            <div class="col-sm">
                <img src="images/abtusCar.jpg" class="m-3" alt="logo" style="height:350px; width:550px; border-radius:10px; "/>
            </div>
        </div>
        </div>


    <?php require 'footer.php' ?>
    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
