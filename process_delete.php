<?php
include_once 'connect.php';
$link = connect();

$id = $_POST["id"];
$sql = "DELETE FROM tbluserdetails WHERE id='$id'";
if (mysqli_query($link, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
header("location:view.php");
?>