 <?php

require_once('connect.php');
$link = connect();
$sql = "SELECT * FROM tblfooddetails";
$result =mysqli_query($link,$sql);
$test = getData($sql);

?>

<!DOCTYPE html>
<html>
 <head>
 <title>Menu</title>
 <link rel="stylesheet" type="text/css" href="havanaCSS.php">
 </head>
<body>
<div class="div1">
<ul>
  <li><a href="havana.php">HOME</a></li>
  <li><a href="news.php">NEWS</a></li>
  <li><a href="#contact">CONTACT</a></li>
  <li><a href="about.php">ABOUT</a></li>
  <li><a href="login.php">LOG IN</a></li>
  <li><a href="signUp.php">SIGN UP</a></li>
</ul> 
</div>

<?php 
if (mysqli_num_rows($result) > 0) {
?>
  <table class="menu" id="menuTable">
  
  <thead class="menu">
    <th class="menu">Food Name</th>
    <th class="menu">Food Image</th>
    <th class="menu">Food Price</th>
  </thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td class="menu"><?php echo $row["food_name"]; ?></td>
    <td class="menu" id="menuImages"> <img src="<?php echo $row["imagepathname"]; ?>" height = "200px" width = "100%" style="display:block;" ></td>
    <td class="menu"><?php echo $row["food_price"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";

}
?>

<div class="div6" id="contact">
<p>Imara Daima,Embakasi</p> 
<p>+254729504432</p>
<p>Havana@gmail.com</p>
<p>P.O.BOX 21456-88287</p>
</div>



</body>
</html>
