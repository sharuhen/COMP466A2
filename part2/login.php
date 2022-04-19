<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-learning</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>

  <header>
    <div class="container">
      <div class="navigation_bar">
<div class="logo">
       <a href="index.php">
         <img src="./images/e-learning.png" alt="" width="260">
       </a>
     </div>

     <div class="header_right_data">
       <a href="login.php" class="my_button">Log in</a>
       <a href="signup.php" class="my_button">Sign up</a>
     </div>


     </div>

     </div>
  </header>

  <section style="padding: 20px 0px; textalign: center;">
    <div class="container">
      <div class="signup">
        <h1 style="text-align: center;">Log in form</h1>

        <form name="myform" action="login_check.php" method="post" onsubmit="return myValidate()">

          <div class="my_form">
            <label for="emailAddr">Email ID</label> <br>
            <input type="email" id="email" name="email" value=""><br>
            <span id="emailid" class="text-danger"> </span>
          </div>

          <div class="my_form">
            <label for="yourpassword">Password</label> <br>
            <input type="password" name="password" value=""><br>
            <span id="passwordloc" class="text-danger"> </span>
          </div>


          <div class="my_form">
            <button type="submit" class="" id="submit" value="register" onclick="myValidate()">Log in</button>
          </div>
<p class="error"><?= (!empty($_GET['msg'])) ? $_GET['msg']:"";?></p>
          <a href="Signup.html">Create an Account</a>

        </form>
      </div>
    </div>
  </section>

  <footer>
    <h6>© 2022 E-learning. All Rights Reserved.</h6>
  </footer>

<script src="./js/login.js"></script>

  </body>
</html>
