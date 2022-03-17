<?php
include_once 'connect.php';
$link = connect();

session_start();
$id = $_SESSION["id"];
$first_name =$_POST["first_name"];
$second_name =$_POST["second_name"];
$email =$_POST["email"];
$_SESSION["username"] = $_POST["username"];
$username =$_POST["username"];
$password =$_POST["password"];
$date_of_birth =$_POST["date_of_birth"];
$gender =$_POST["gender"];
$user_type =$_POST["user_type"];

$sql ="UPDATE tbluserdetails SET first_name='$first_name', second_name='$second_name', email='$email',
username ='$username',password='$password', date_of_birth='$date_of_birth', gender='$gender', user_type = '$user_type'
 WHERE id='$id'";

if (mysqli_query($link, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
header("location:view.php");

?>