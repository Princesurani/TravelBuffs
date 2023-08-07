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
<?php
include 'dbconnect.php';
$con = getcon();
if (isset($_GET["id"])) {
    $query = "select * from places where title='" . $_GET['id'] . "'";
    $res = mysqli_query($con, $query);
    if ($row = $res->num_rows > 0) {
?>

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Welcome to Travelbuff. A blog for coding enthusiasts">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

            <link rel="stylesheet" href="../fotter.css" />
            <link rel="stylesheet" href="dest.css">
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

                .list {
                    min-width: 870px;
                }

                * {
                    margin: 0;
                    padding: 0;
                    font-family: Cambria;
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
                            <a class="nav-link" href="../Home.php">Home <span class="sr-only">(current)</span></a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Explore
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Places.php">Places</a>
                                <a class="dropdown-item" href="Beaches.php">Beaches</a>
                                <a class="dropdown-item" href="Mountain.php">Mountains</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="../Packages.php">Packages</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../About.php">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../Contact.php">Contact Us</a>
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

            <!-- Login Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Login to Travelbuff</h5>
                        </div>
                        <div class="modal-body">
                            <form name="form1" action="1-resume.html">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" Required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <input type="submit" class="btn btn-primary" onclick="return check1();"></input>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sign Up Modal -->
            <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Get an Travelbuff Account</h5>
                        </div>
                        <div class="modal-body">
                            <form name="form2" action="1-resume.html">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" Required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password2">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmpassword">
                                </div>

                                <input type="submit" class="btn btn-primary" onclick="return check2();"></input>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
            ?>

                    <div class="pics">
                        <img style=" hieght: 1000px;" src="<?php echo $row["img"]; ?>" alt="Golden golden_temple" class="responsive">
                    </div>
                    <h1 class="head">
                        <?php echo $row["title"]; ?>
                    </h1>
                    <div class="links">
                        <a href="#" class="btnd">Website</a>
                        <a href="#" class="btnd">Directions</a>

                    </div>
                    <div class="info">
                        <p>
                            <?php echo $row["desc1"]; ?>

                        </p>
                        <p>
                            <?php echo $row["desc2"]; ?>
                        </p>
                    </div>
                    <div class="contain">


                        <div class="other">
                            <ul>
                                <li class="list">
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Best time to visit</h2>
                                    <p>
                                        <?php echo $row["timevisit"]; ?>
                                    </p>
                                </li>
                                <li class="list">
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Things to be taken care</h2>
                                    <p>
                                        <?php echo $row["care"]; ?>
                                    </p>
                                </li>
                                <li class="list">
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Plan your trip</h2>
                                    <p>
                                        <?php echo $row["plan"]; ?>
                                    </p>
                                </li>
                                <li class="list">
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Things to do</h2>
                                    <p>
                                        <?php echo $row["todo"]; ?>
                                    </p>
                                </li>
                                <li class="list">
                                    <input type="checkbox" checked>
                                    <i></i>
                                    <h2>Transportation</h2>
                                    <p>
                                        <?php echo $row["transp"]; ?>
                                    </p>
                                </li>
                            </ul>
                        </div>

                        <?php
                        echo $row['map'];
                        ?>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.506478601354!2d74.87429621510816!3d31.619980281336847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39197ca8f667bd97%3A0x604384897626248e!2sSri%20Harmandir%20Sahib!5e0!3m2!1sen!2sin!4v1646575949257!5m2!1sen!2sin" width="500" height="430" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                    </div>
    <?php
                }
            } else {
                echo "<h1 align='center'>No Places Found</h1>";
            }
        }
    }
    ?>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="./Home.php">Home</a></li>
                        <li><a href="./About.php">About Us</a></li>
                        <li><a href="./Explores/Places.php">Explore</a></li>
                        <li><a href="./Packages.php">Packages</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Collaborations</h4>
                    <ul>
                        <li><a href="">Travel xp</a></li>
                        <li><a href="">Nomadic Matt</a></li>
                        <li><a href="">Vivanta World</a></li>
                        <!-- <li><a href="">item 4</a></li> -->
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contacts</h4>
                    <ul>
                        <li><a href="">Phone no. 1</a></li>
                        <li><a href="">Phone no. 1</a></li>
                        <li><a href="">Email 1</a></li>
                        <li><a href="">Email 2</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Socials</h4>
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        </body>

</html>