<?php 
$pageTitle ="Create Account";
include 'header.php';

include 'config.php';

if(isset($_POST['save'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
 


      $stmt = $pdo->prepare("INSERT INTO users (email_id, password, confirm_password) VALUES ( '$email', '$password', '$password2')");
      
      $stmt->execute();

    }


?>
 
<!-- login form -->

<section>
  <div>
    <h1 class="heading">Signup</h1>
  </div>
  <div class="form" >
  <form action="signup_save.php" method="POST" name="myForm" onsubmit="return validateForm()">
    <label>Name</label>
    <input type="text" placeholder="Your name" id="name" name="name">
    <label>Email ID</label>
    <input type="email" placeholder="Email ID" id="email" name="email">

    <label>Password</label>
    <input type="password"  placeholder="Password"  id="pswd1" name="password"> 
    <label> Confirm Password</label>
     
    <input type="password"  placeholder=" Confirm Password" id="pswd2" name="password2">
    <input type="submit" value="Sign up" name="save" >
    
  </form>

</div>
<div class="create"> 
<a href="login.php" class="account">Already have an account!</a>
</div>
</section>
<script type="text/javascript" src="js/signup.js"></script>
</body>
</html>

