<?php
session_start();
require('config.php');


$myusername = $_POST["username"];
$mypassword = $_POST["password"];

$sql = "SELECT * FROM user WHERE username='$myusername' and password='$mypassword'";

$result = mysqli_query($conn, $sql);

$rows=mysqli_fetch_assoc($result);

$user_name=$rows["username"];
$ID=$rows["id"];
$password=$rows["password"];
$user_level=$rows["level"];

$count=mysqli_num_rows($result);

if($count==1){

$_SESSION["Login"] = "YES";
$_SESSION["USER"] = $user_name;
$_SESSION["id"] = $ID;
$_SESSION["PASS"] = $password;
$_SESSION["LEVEL"] =$user_level;


if($_SESSION['LEVEL'] == 1) {
    require('admin_main.php');
}
elseif($_SESSION['LEVEL'] == 2) {
    
      require('manager_main.php');
}
elseif($_SESSION['LEVEL'] == 3) {

      require('staff_main.php');
}
else { echo "Undefined"; }

// require('index.php');

} else {

$_SESSION["Login"] = "NO";
// header("Location: index.php");
}

mysqli_close($conn);

?>