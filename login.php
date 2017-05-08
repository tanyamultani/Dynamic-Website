<!DOCTYPE html>
<html>
<head>
<title>Register</title>

<link rel = "stylesheet"
      type = "text/css"
      href = "login.css"
/>
<script type="text/javascript" src = "login.js"></script>

</head>
<body onload="startTime()">

  <header>
  <h1 class="storename">Shoe Shack</h1>
  <img class="logo" src="sneaker.png" alt="Banner" height="70px" width="70px" />
  <div id="clockbox" style="color: white;"></div>
  </header>
  <h1>Register here:</h1>
  <h3><u>Login here:</u></h3>

  <form  method="post" action="">
    E-mail Address:<br><input type = "text" name="e-mail" id="email"><br><br>
    Password:<br><input type="password" name="passw" id="pass"><br><br>
    <input type="submit" name="submit" value="Submit" id="submit" onclick="submitting()">
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
