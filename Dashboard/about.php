<?php
 session_start();
 
if(!isset($_SESSION['Login_ID'])){
  header("Location: ../");
 }
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/jpg" href="../image/favicon.ico">

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <link href="../css/mycss.css" rel="stylesheet">

  <title>DSC &nbsp; | About</title>
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="../">
      <img src="../image/DSC_Logo.png" height="30" alt="DSC"> <span class="ml-3 font-weight-bold">DCS</apan>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
        data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav mr-auto pl-lg-4">
          <li class="nav-item px-lg-2 "> <a class="nav-link" href="./"> <span
                class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Dashboard</a> </li>
          <li class="nav-item px-lg-2" active> <a class="nav-link" href="about.php"><span
                class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>About</a> </li>
          <li class="nav-item px-lg-2"> <a class="nav-link" href="feedback.php"><span
                class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Feedback</a> </li>

        </ul>
        <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
          <li class="nav-item"> <a class="nav-link" href="#">
              <i class="fab fa-twitter"></i><span class="d-lg-none ml-3">Twitter</span>
            </a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">
              <i class="fab fa-facebook"></i><span class="d-lg-none ml-3">Facebook</span>
            </a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">
              <i class="fab fa-instagram"></i><span class="d-lg-none ml-3">Instagram</span>
            </a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">
              <i class="fab fa-linkedin"></i><span class="d-lg-none ml-3">Linkedin</span>
            </a> </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--The html below this line is for display purpose only-->

  <div class="py-5 text-center text-white bg-primary" style="min-height: 100vh;height: 100%;">
    <div class="container py-5">
      <div class="row py-5">
        <div class="mx-auto col-lg-10">
          <h4 class="display-6 mb-4 ">About</h4>
          
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../js/myjs.js"></script>

</body>

</html>