<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <link href="mycss.css" rel="stylesheet">

  <title>DSC &nbsp; | Log In</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
    <div class="container"> <a class="navbar-brand d-flex align-items-center" href="index.php">
        <span class="ml-3 font-weight-bold">DCS</apan>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
        data-target="#navbar4">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="navbar4">
        <ul class="navbar-nav mr-auto pl-lg-4">
          <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span
                class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>About</a> </li>
          <li class="nav-item px-lg-2"> <a class="nav-link" href="#"><span
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
  <div class="py-5 text-center bg-primary" style="min-height: 100vh;height: 100%;">
    <div class="container text-center text-white py-5">
      <div class="mx-auto col-lg-10">
        <h1 class="display-4 mb-4 ">Welcome to software UI </h1>
      </div>
    </div>
    <br>
    <div>
      <div class="bg-white rounded mx-auto d-block" style="max-width: 25%; min-width: 320px;">
        <div class="pl-3 pr-3 pt-3">
          <form class="form-signin" method="POST" action="dashboard.php">
            <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
                <!-- Checkbox -->
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                  <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
              </div>

              <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
              </div>
            </div>
            <button type="submit"style="background-color: #0030ff;"
              class="btn btn-primary btn-block">Log In</button>
          </form>
        </div>
        <br>
        <div class="p-3 text-center" style="height: 57px; background-color: #e9ecef;">
          <p> Click on Login to go to Dashboard</p>
        </div>
        <div style="height: 10px; background-color: #0030ff;">

        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="myjs.js"></script>

</body>

</html>