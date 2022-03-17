<?php
include_once 'connect.php';
$link = connect();

if (isset($_POST["checkout"])){
session_start();
$username = $_SESSION["username"];
}

$sql ="UPDATE tblorderdetails SET status='complete'
where username = '$username'";

if (mysqli_query($link, $sql)) {
  header("location:havana.php");
} else {
  echo "Error updating record: " . mysqli_error($link);
}

?>