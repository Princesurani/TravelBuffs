<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to Travelbuff. A blog for coding enthusiasts">

    <!-- Bootstrap CSS -->
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

        .text{
            margin-top:20px;
            font-family: Cambria;
        }
        
        .container{
            max-width: 1300px;
        }

        .imgb{
            width:120px;
            height: 35px;
        }

        .blogHead{
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
        }
        .imgBlog{
            width: 100%;
            height: 500px;
            border-radius: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .blog{
            margin:0 auto;
            width: 90%;
            text-align: center;
        }

        .blogD{
            background: lightgrey;
            /* margin: 0 auto; */
            
        }
    </style>

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
                    <a class="nav-link" href="About.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="mx-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-primary" data-toggle="modal" data-target="#signupModal">SignUp</button>
            </div>
        </div>
    </nav>


    <hr/>
    
    <div class="blog">

    
    <h1 class="blogHead">Title of the blog</h1>
    <img src="images/abtusCar.jpg" alt="related Image" class="imgBlog">
    <p style="text-align: left;">date author</p>
    
    <p class="blogD" id="d1">Description 1</p>
    <p class="blogD" id="d2">Description 2</p>
    </div>



















    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Heading 1</h4>
                    <ul>
                        <li><a href="">item 1</a></li>
                        <li><a href="">item 2</a></li>
                        <li><a href="">item 3</a></li>
                        <li><a href="">item 4</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Heading 2</h4>
                    <ul>
                        <li><a href="">item 1</a></li>
                        <li><a href="">item 2</a></li>
                        <li><a href="">item 3</a></li>
                        <li><a href="">item 4</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Heading 3</h4>
                    <ul>
                        <li><a href="">item 1</a></li>
                        <li><a href="">item 2</a></li>
                        <li><a href="">item 3</a></li>
                        <li><a href="">item 4</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Heading 4</h4>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <p>Ⓒ copyright reserved</p>
    </footer>

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

</html>