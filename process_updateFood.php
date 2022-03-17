<?php
include_once 'connect.php';
$link = connect();

require_once("connect.php");

if (isset($_FILES["food_image"])) {

session_start();
$id = $_SESSION["id"];
$food_name = $_POST["food_name"];
$food_image = $_FILES["food_image"];
$food_price = $_POST["food_price"];


$original_file_name = $_FILES["food_image"]["name"];
$file_tmp_location = $_FILES["food_image"]["tmp_name"];

$file_type = substr($original_file_name,strpos($original_file_name,'.'),strlen(
	$original_file_name));

$file_path = "assets/";

$new_file_name = time().$file_type;
$new_name =  $file_path.$new_file_name;

if(move_uploaded_file($file_tmp_location, $file_path.$new_file_name)){

$sql ="UPDATE tblfooddetails SET food_name='$food_name', imageoriginalname='$original_file_name', imagepathname='$new_name',
food_price ='$food_price' WHERE id='$id'";	

if (mysqli_query($link, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
}
}
echo $id;
header("location:view.php");
?>