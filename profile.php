<?php
 session_start();
 
if(!isset($_SESSION['Login_ID'])){
  header("Location: index.php");
 }
?>
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

  <title>DSC &nbsp; | Dashboard</title>
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
          <li class="nav-item px-lg-2 active"> <a class="nav-link" href="dashboard.php"> <span
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

  <div class="py-5 text-center bg-primary" style="min-height: 100vh;height: 100%;">
    <div class="container text-white py-4">
      <div class="row py-4">
        <div class="mx-auto col-lg-10">
          <h4 class="display-6 mb-4 ">About</h4>
        </div>
      </div>
    </div>
    
    <div class="container">
    <div class="main-body">
    
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                   <i class="fas fa-user-circle fa-10x"></i> 
                    <div class="mt-3">
                      <h4>
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
                      </h4>
                      <p class="text-secondary mb-1"> 
                      <?php
                    $conn = mysqli_connect("localhost", "root", "", "dsc");
                    if (!$conn) {
                       echo "Unable to connect to DB: " . mysqli_error();
                       exit;
                    }
                    $sql = "SELECT Profession
                       FROM   users
                       WHERE ID = '".$_SESSION['Login_ID']."'";
                       $result = mysqli_query($conn,$sql);
                   if (!$result) {
                      echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
                      exit;
                   }
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['Profession'];
                  }
                  mysqli_free_result($result);
                  ?>
                      </p>
                      <p class="text-muted font-size-sm">(
                      <?php
                    $conn = mysqli_connect("localhost", "root", "", "dsc");
                    if (!$conn) {
                       echo "Unable to connect to DB: " . mysqli_error();
                       exit;
                    }
                    $sql = "SELECT Post
                       FROM   users
                       WHERE ID = '".$_SESSION['Login_ID']."'";
                       $result = mysqli_query($conn,$sql);
                   if (!$result) {
                      echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
                      exit;
                   }
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['Post'];
                  }
                  mysqli_free_result($result);
                  ?>
                      )</p>
                      <button class="btn btn-block btn-outline-primary" data-toggle="modal" data-target="#ChangePassword">Change Password</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
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
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "dsc");
                    if (!$conn) {
                       echo "Unable to connect to DB: " . mysqli_error();
                       exit;
                    }
                    $sql = "SELECT Email
                       FROM   users
                       WHERE ID = '".$_SESSION['Login_ID']."'";
                       $result = mysqli_query($conn,$sql);
                   if (!$result) {
                      echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
                      exit;
                   }
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo $row['Email'];
                  }
                  mysqli_free_result($result);
                  ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      -
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      -
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      -
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="modal fade" id="ChangePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-fluid" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Change Password</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form class="form-signin"  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div class="modal-body">
            <div class="form-group">
              <input type="password" name="Old_Password" id="Old_Password" class="form-control" placeholder="Old Password">
            </div>
            <div class="form-group">
              <input type="password" name="New_Password" id="New_Password" class="form-control" placeholder="New Password">
            </div>
            <div class="form-group">
              <input type="password" name="Re-Password" id="Re_Password" class="form-control" placeholder="Re-Enter Password">
              <small style="color: red;" id="editpasscheck"></small>
            </div>
          
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="changepass" class="btn btn-primary">Change</button>
          </div>
          </form>
        </div>
        <!--/.Content-->
      </div>
    </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="myjs.js"></script>
  <script>
       window.setTimeout(function(){
        $('#centralModal').modal('toggle');
       }, 500); 
    </script>


<?php 
     if(!empty($_POST)){
        
        $ID = $_SESSION['Login_ID'];
        $Password = $_POST['Old_Password'];
        $New_Password = $_POST['New_Password'];
         
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $change = 0;
        
        $conn = mysqli_connect("localhost", "root", "", "dsc");
        if (!$conn) {
           echo "Unable to connect to DB: " . mysqli_error();
           exit;
        }
        $sql = "SELECT Password
           FROM   users
           WHERE ID = '".$_SESSION['Login_ID']."'";
           $result = mysqli_query($conn,$sql);
       if (!$result) {
          echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
          exit;
       }
      while ($row = mysqli_fetch_assoc($result)) {
        if ($row['Password'] == $Password) {
            $change = 1;
        }
         
      }
      mysqli_free_result($result);

        if ($change == 1) {
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "dsc" );
         
        if(! $conn ) {
           die('Could not connect: ' . mysqli_error());
        }
        

        $sql = 'UPDATE `users` SET `Password`="'.$New_Password.'" WHERE `ID` = "'.$ID.'"';
           
        $retval = mysqli_query( $conn, $sql);
        
        if(! $retval ) {
           die('Could not enter data: ' . mysqli_error($conn));
        }
        mysqli_close($conn);
        
        echo '<div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
           <strong>Password Updated successfully</strong>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
        </div>';
        }else{
          
        echo '<div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <strong>Old-Password was incorrect</strong>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
         </div>';
        }
     }else{

     }
    ?>
</body>

</html>