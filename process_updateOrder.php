<?php
include_once 'connect.php';
$link = connect();

if (isset($_POST["update"])) {
session_start();
$orderNumber = $_SESSION["orderNumber"];

$food_name = $_POST["food_name"];
$quantity = $_POST["quantity"];

$sql ="UPDATE tblorderdetails SET food_name='$food_name',quantity ='$quantity' WHERE order_no='$orderNumber'";	

if (mysqli_query($link, $sql)) {
  echo "Record updated successfully";
} 
else {
  echo "Error updating record: " . mysqli_error($conn);
}
header("location:havana.php");
}
?>
