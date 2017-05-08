<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link rel = "stylesheet"
      type = "text/css"
      href = "register.css"
/>
<script type="text/javascript" src = "register.js"></script>

</head>
<body onload="startTime()">
  <header>
  <h1 class="storename">Shoe Shack</h1>
  <img class="logo" src="sneaker.png" alt="Banner" height="70px" width="70px" />
  <div id="clockbox" style="color: white;"></div>
  </header>
<h1>Register here:</h1>
<h3><u>User Information:</u></h3>
<form  method="post" action="" onsubmit="">
  First name:<br><input type="text" name="finame" id="fname"><br>
  Last name: <br><input type="text" name="laname" id="lname"><br>
  E-mail Address: <br><input type = "text" name="e-mail" id="email"><br>
  Phone number:<br> <input type = "text" name="phnumber" id="pnumber"><br><br>
<hr>
<h3><u>Password:</u></h3>
Password:<br><input type="password" name="passw" id="pass"><br>
Confirm Password: <br><input type="password" name="cpassw" id="cpass"><br><br><br>
<input type="submit" name="submit" value="Submit" id="submit">
</form>
<footer>
  <ul class="bottom">
              <li class="bootom1"><a href="about.html">About</a></li>
              <li class="bottom2"><a href="jobs.html">Jobs/Careers</a></li>
              <li class ="bottom3"><a href="contact.html">Contact</a></li>
              <li class="bottom4"><a href="legal.html">Legal</a></li>
          </ul>
  <b class="copyright">Copyright (c) 2016 Copyright Holder All Rights Reserved.</b>
</footer>
<?php
function passLength($password){
  echo  '<script type="text/javascript">submitting();</script>';
  $password = isset( $_POST["passw"]) ? $_POST["passw"] : "";
if(isset( $_POST["passw"])){
if (strlen($password) < 8){
  $message = "This password is less than 8 characters!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    return false;
}
else
{
    echo ""; // here we will put another function after server-side verification is done.
}
}
else {
}
}
passLength($_POST["passw"]);

?>
</body>
</html>
