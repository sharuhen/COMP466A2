<?php
$pageTitle ="Login";
include 'header.php';

?>

<!-- login form -->

<section>
	<div>
		<h1 class="heading">Login</h1>
	</div>
	<div class="form">
  <form action="login_exec.php" method="POST" onsubmit ="validateEmail()">
    <label>Email ID</label>
    <input type="email" placeholder="Email ID" id="email" name="email" >
    <label>Password</label>
    <input type="password"  placeholder="Password" name="password" id="password">
    <input type="submit" value="Login" name="save" >
   
  </form>
</div>

</section>
<div class="create"> 
  <p class="error"><?= (!empty($_GET['msg'])) ? $_GET['msg']:"";?></p>
<a href="signup.php" class="account">Create an account!</a>
</div>
</body>
</html>