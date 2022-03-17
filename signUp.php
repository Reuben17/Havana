<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8">
<title>Sign Up For Havana</title>
<link rel="stylesheet" type="text/css" href="havanaCSS.php">
</head>
<body>
<div class="div1">
<ul>
  <li><a href="havana.php">HOME</a></li>
  <li><a href="news.php">NEWS</a></li>
  <li><a href="#contact">CONTACT</a></li>
  <li><a href="about.php">ABOUT</a></li>
  <li><a href="Login.php">LOG IN</a></li>
  <li><a href="signUp.php">SIGN UP</a></li>
</ul>	
</div>

<div class = "divloginandsignup">
<div class = "divsignup" style="width:500px; margin:0 auto;">
<form action = "process_register.php" method="post">
<br>	
<label for="first_name">First Name:</label>
<br>
<input type="text" name="first_name" id="first_name">
<br>	
<label for="second_name">Second Name:</label>
<br>
<input type="text" name="second_name" id="second_name">
<br>
<label for="email">E-mail Address:</label>
<br>
<input type="email" name="email" id="email">
<br>	
<label for="username">Username:</label>
<br>
<input type="text" name="username" id="username">
<br>
<label for="password">Password:</label>
<br>
<input type="password" id="password"  name="password">
<br>
<label for="date_of_birth">Date of Birth:</label>
<br>
<input type="date" name="date_of_birth" id="date_of_birth">
<br>
<label for="gender">Gender:</label>
<br>
  <input list="gender" name="gender">
  <datalist id="gender">
<option value="Male"> 
<option value="Female"> 
</datalist>
<br>
<label for="user_type">Usertype:</label>
<br>
  <input list="user_type" name="user_type">
  <datalist id="user_type">
<option value="Administrator"> 
<option value="Customer"> 
</datalist>
<br>
<br>
<input type="reset" name="message" value="reset">
<input type="submit" name="register" value="sign up" id="register">
<br>
</form>
</div>
</div>

<div class="div6" id="contact">
<p>Imara Daima,Embakasi</p>	
<p>+254729504432</p>
<p>Havana@gmail.com</p>
<p>P.O.BOX 21456-88287</p>
</div>
</body>
</html>