<?php
require_once("connect.php");

if (isset($_POST["register"])){
session_start();
$first_name=$_POST["first_name"];
$second_name =$_POST["second_name"];
$email =$_POST["email"];
$_SESSION["username"] = $_POST["username"];
$username = $_SESSION["username"];
$password =$_POST["password"];
$date_of_birth =$_POST["date_of_birth"];
$gender =$_POST["gender"];
$user_type =$_POST["user_type"];

$sql = "INSERT INTO tbluserdetails(first_name, second_name, email, username, 
password, date_of_birth, gender, user_type)VALUES('$first_name','$second_name','$email',
'$username','$password','$date_of_birth','$gender','$user_type')";

echo setData($sql);
 header("location:havana.php");

}
?>