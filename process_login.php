<?php
require_once("connect.php");
$link = connect();

session_start();

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] =$_POST["password"];
$username =$_SESSION["username"];
$password=$_SESSION["password"];

$sql1 = "SELECT password FROM tbluserdetails WHERE username = '$username'";
$result1 =mysqli_query($link,$sql1);

$sql2 = "SELECT user_type FROM tbluserdetails WHERE username = '$username'";
$result2 =mysqli_query($link,$sql2);

$i=0;
  while($row = mysqli_fetch_array($result1)) {
 if ( $password ==  $row["password"]) {
  	  while($row = mysqli_fetch_array($result2)) {

if ($row["user_type"] == "Administrator"){
 header("location:view.php");
 exit;	
 }
 else if ($row["user_type"] == "Customer"){
  header("location:individualView.php");
  exit;	
}
}
}
else {
Header( "Location: login.php?success=0" );
}
}

?>