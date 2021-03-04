<?php
 session_start();

 $_SESSION['Login_code'] = '0';
?>
<?php 
echo $_POST['Email'];
if(!empty($_POST)){
    //Login
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

     $conn = mysqli_connect("localhost", "root", "", "dsc");

     if (!$conn) {
        echo "Unable to connect to DB: " . mysqli_error();
        exit;
     }

    // Query
    $sql = "SELECT ID,Email,Password
        FROM   users
        WHERE Email = '".$Email."'";

    $result = mysqli_query($conn,$sql);

    if (!$result) {
       echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
       exit;
    }

    if (mysqli_num_rows($result) == 0) {
       echo "No rows found, nothing to print so am exiting";
       exit;
    }

   while ($row = mysqli_fetch_assoc($result)) {
       if($Password == $row['Password']){
        header("Location: dashboard.php");
        $_SESSION['Login_ID'] = $row['ID'];
        $_SESSION['Login_code'] = 1;
       }else{
        header("Location: index.php");
        $_SESSION['Login_code'] = 0;
       }

      
   }

    mysqli_free_result($result);

     }else{
         header("Location: index.php");
         $_SESSION['Login_code'] = 2;
     }


 ?>    
