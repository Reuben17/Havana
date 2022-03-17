<?php
include_once 'connect.php';
$link = connect();

$orderNo = $_POST["orderNo"];
$sql = "DELETE FROM tblorderdetails WHERE order_no='$orderNo'";
if (mysqli_query($link, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
header("location:havana.php")
?>