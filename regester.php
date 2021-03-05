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
  <?php 
function uniqidReal($lenght) {
    // uniqid gives 13 chars, but you could adjust it to your needs.
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $lenght);
}
$Random_ID = uniqidReal(4);
$Final_ID = '0000';
$Check = 0;

while($Final_ID == '0000') {
$conn = mysqli_connect("localhost", "root", "", "webhizzy");

if (!$conn) {
   echo "Unable to connect to DB: " . mysqli_error();
   exit;
}

// Query
$sql = "SELECT ID
   FROM   users";

$result = mysqli_query($conn,$sql);

if (!$result) {
  echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
  exit;
}

if (mysqli_num_rows($result) == 0) {
  echo "<br> No rows found, nothing to print so am exiting";
}

while ($row = mysqli_fetch_assoc($result)) {
    if($Random_ID == $row['ID']){
        $Random_ID = uniqidReal(4);
        $Check = 1;
    }
}
if($Check ==0 ){
    $Final_ID =$Random_ID;
}

mysqli_free_result($result);
}
?>
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
    <div class="container text-center text-white py-4">
      <div class="mx-auto col-lg-10">
        <h3 class="display-5 mb-4 ">Welcome to Regestration Office 😉</h3>
      </div>
    </div>
    <div>
      <div class="bg-white rounded mx-auto d-block" style="max-width: 25%; min-width: 320px;">
        <div class="pl-3 pr-3 pt-3">
          <form class="form-signin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h1 class="h3 mb-3 font-weight-normal">Regester</h1>
            <div class="form-group">
              <input type="text" name="First_Name" class="form-control" placeholder="Enter First Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="Middle_Name" class="form-control" placeholder="Enter Middle Name" >
            </div>
            <div class="form-group">
              <input type="text" name="Last_Name" class="form-control" placeholder="Enter Last Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email" required>
            </div>
            <div class="form-group">
              <select name="Profession" class="form-control" required>
                <option value="">Select Profession</option>
                <option value="Doctor">Doctor</option>
                <option value="Office">Office Work</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" name="Post" class="form-control" placeholder="Enter Post" required>
            </div>
            <button type="submit" style="background-color: #0030ff;" class="btn btn-primary btn-block">Regester</button>
          </form>
        </div>
        <br>
        <div class="p-3 text-center" style="height: 57px; background-color: #e9ecef;">
          <a href="index.php">
            <p>Log In</p>
          </a>
        </div>
        <div style="height: 10px; background-color: #0030ff;">
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="myjs.js"></script>
  <script>
    window.setTimeout(function () {
      $('#centralModal').modal('toggle');
    }, 500); 
  </script>


  <?php 
     if(!empty($_POST)){
        $ID = $Final_ID;
        $First_Name = ucfirst(strtolower($_POST['First_Name']));
        $Middle_Name = ucfirst(strtolower($_POST['Middle_Name']));
        $Last_Name = ucfirst(strtolower($_POST['Last_Name']));
        $Email = $_POST['Email'];
        $Profession = $_POST['Profession'];
        $Post = $_POST['Post'];
        $Password = uniqidReal(8);
         
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "dsc" );
        
        if(! $conn ) {
           die('Could not connect: ' . mysqli_error());
        }
        

        $sql = 'INSERT INTO users'. 
           '(`ID`, `First_Name`, `Middle_Name`, `Last_Name`, `Profession`, `Post`, `Email`,`Password`) '.
           'VALUES ("'.$ID.'", "'.$First_Name.'", "'.$Middle_Name.'", "'.$Last_Name.'", "'.$Profession.'", "'.$Post.'", "'.$Email.'", "'.$Password.'")';
           
        $retval = mysqli_query( $conn, $sql);
        
        if(! $retval ) {
           die('Could not enter data: ' . mysqli_error($conn));
        }
        
        echo '<div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title w-100" id="myModalLabel">Regestered</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
               Email<strong>'.$Email.'</strong> Password: <strong>'.$Password.'</strong>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>';
        
        mysqli_close($conn);

     }else{

     }
    ?>
</body>

</html>