<?php
require 'config.php';
$query = $conn->prepare("select * from courses");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
?>
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

  <section id="sliders">
    <div class="slider">
      <img src="./images/elearning_banner.jpg" alt="">
    </div>
  </section>

  <section id="our_courses" style="padding: 20px 0px;">
    <div class="container">
      <div class="courses">
        <h1 class="main-heading">Welcome to <span class="yellow">E-Learning<span></h1>
         <br>
         <br>

        <h1>Our Courses</h1>
         <div class="courses_details">

           <div class="row">
            <?php foreach ($result as $course) {?>
             
             <div class="column">
                  <h1><?php echo $course->course_name;?></h1>
                  <p><?php echo $course->course_desc;?></p>
                  <a href="course_detail.php?id=<?php echo $course->id;?>" class="">Read More</a>
             </div>
           <?php }?>

             
           </div>

         </div>
      </div>
    </div>
  </section>

  <footer>
    <h6>© 2022 E-learning. All Rights Reserved.</h6>
  </footer>

  </body>
</html>
