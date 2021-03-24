<?php
 session_start();
 
if(!isset($_SESSION['Login_ID'])){
  $_SESSION['Login_code'] = 2;
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

  <title>DSC &nbsp; | Dashboard</title>
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
          <li class="nav-item px-lg-2 active"> <a class="nav-link" href="./"> <span
                class="d-inline-block d-lg-none icon-width"><i class="fas fa-home"></i></span>Dashboard</a> </li>
          <li class="nav-item px-lg-2"> <a class="nav-link" href="about.php"><span
                class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>About</a> </li>
          <li class="nav-item px-lg-2"> <a class="nav-link" href="feedback.php"><span
                class="d-inline-block d-lg-none icon-width"><i class="far fa-user"></i></i></span>Feedback</a> </li>


        </ul>
        <ul class="navbar-nav ml-auto mt-3 mt-lg-0">
          <li class="nav-item px-lg-2 dropdown d-menu">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false"><span class="d-inline-block d-lg-none icon-width"><i
                  class="far fa-caret-square-down"></i></span><i class="fas fa-user-circle"></i>
              <?php
                    $conn = mysqli_connect("localhost", "root", "", "dsc");
                    if (!$conn) {
                       echo "Unable to connect to DB: " . mysqli_error();
                       exit;
                    }
                    $sql = "SELECT First_Name,Middle_Name,Last_Name
                       FROM   users
                       WHERE ID = '".$_SESSION['Login_ID']."'";
                       $result = mysqli_query($conn,$sql);
                   if (!$result) {
                      echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
                      exit;
                   }
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['First_Name'].' '.$row['Middle_Name'].' '.$row['Last_Name'];
                  }
                  mysqli_free_result($result);
                  ?>
              <svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </a>
            <div class="dropdown-menu shadow-sm sm-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="profile.php">My Profile</a>
              <a class="dropdown-item" href="#">Messages</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!--The html below this line is for display purpose only-->

  <div class="py-5 text-center text-white bg-primary" style="min-height: 100vh;height: 100%;">
    <div class="container py-5">
      <div class="row py-5">
        <div class="mx-auto col-lg-10">
          <h4 class="display-6 mb-4 ">Welcome to Dashboard</h4>
          <table class="table table-striped">
            <thead style="background-color: #0030ff;">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Card Number</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
     // Display List

     $conn = mysqli_connect("localhost", "root", "", "dsc");

     if (!$conn) {
        echo "Unable to connect to DB: " . mysqli_error();
        exit;
     }

    // Query
    $sql = "SELECT Name,Card_No
        FROM   list
        ORDER BY Tab_ID DESC";    //the last entry will be at first spot

    $result = mysqli_query($conn,$sql);

    if (!$result) {
       echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
       exit;
    }

    if (mysqli_num_rows($result) == 0) {
       echo "No rows found, nothing to print so am exiting";
       exit;
    }

    $i = 1;
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<tr>
       <th scope="row">'.$i.'</th>
       <td>'.$row["Name"].'</td>
       <td>'.$row["Card_No"].'</td>
       <td>
        <div class="btn-group d-none d-md-flex justify-content-center">
          <a href="#" class="btn btn-warning" role="button">
          Delay
          </a>
          <a href="#" class="btn btn-info" role="button">
          Accept
          </a>
          <a href="#" class="btn btn-danger" role="button">
          Cancel
          </a>
        </div>
        <div class="dropdown  d-md-none">
          <button class="btn btn-success dropdown-toggle" type="button"
                  data-toggle="dropdown">
            Choose 
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a href="#" class="dropdown-item " style="background-color: #ffc107;">
            Delay
            </a>
            <a href="#" class="dropdown-item " style="background-color: #17a2b8;">
            Accept
            </a>
            <a href="#" class="dropdown-item " style="background-color: #dc3545;">
            Cancel
            </a>  
          </div>
        </div>
       </td>
     </tr>';
     $i++;
   }

    mysqli_free_result($result);
?>
            </tbody>
          </table>
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