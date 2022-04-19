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

  <section id="mysignup">
    <div class="container">
      <div class="signup">
        <h1 style="text-align: center;">Sign up</h1>
        <form name="myform" action="signup_save.php" method="post" onsubmit="return validate()">

          <div class="my_form">
            <label for="name">Student name</label> <br>
            <input type="text" name="name" value=""><br>
            <span id="nameloc" class="text-danger"> </span>
          </div>

          <div class="my_form">
            <label for="emailAddr">Email ID</label> <br>
            <input type="email" id="emailAddr" name="emailAddr" value=""><br>
            <span id="emailid" class="text-danger"> </span>
          </div>

          <div class="my_form">
            <label for="yourpassword">Password</label> <br>
            <input type="password" name="yourpassword" value=""><br>
            <span id="passwordloc" class="text-danger"> </span>
          </div>

          <div class="my_form">
            <label for="confirmpassword">Confirm Password</label> <br>
            <input type="password" name="confirmpassword" value=""> <br>
            <span id="passwordcon" class="text-danger"> </span>
          </div>

          <div class="my_form">
            <button type="submit" class="" id="submit" name="save">Submit</button>
          </div>

        </form>
      </div>
    </div>
  </section>

  <footer>
    <h6>© 2022 E-learning. All Rights Reserved.</h6>
  </footer>

  <script src="./js/signup.js">  </script>

  </body>
</html>
