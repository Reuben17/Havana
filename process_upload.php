<?php
require_once("connect.php");

if (isset($_POST["addFood"],$_FILES["food_image"])) {

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
	$sql ="INSERT INTO tblfooddetails(food_name, imageoriginalname, imagepathname, food_price)VALUES
	('$food_name','$original_file_name','$new_name','$food_price')";

setData($sql);
	header("location:view.php");
}
}
?>