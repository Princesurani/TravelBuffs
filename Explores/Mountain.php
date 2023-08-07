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

  <link rel="stylesheet" href="/Project/fotter.css">
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

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img class="mx-2 imgb" src="https://see.fontimg.com/api/renderfont4/YdKj/eyJyIjoiZnMiLCJoIjo0MywidyI6MTI1MCwiZnMiOjM0LCJmZ2MiOiIjRjJGNUY5IiwiYmdjIjoiIzFCMkQ0NCIsInQiOjF9/VHJhdmVsQnVmZnM/countryside.png" alt="Lettering fonts"></a>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="/Project/Home.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Explore
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Places.php">Places</a>
            <a class="dropdown-item" href="Beaches.php">Beaches</a>
            <a class="dropdown-item" href="Mountain.php">Mountains</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project/Packages.php">Packages</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/Project/About.php">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/Project/Contact.php">Contact Us</a>
        </li>


      </ul>
      
      
    </div>
  </nav>

 

  <h1>Mountain page</h1>

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