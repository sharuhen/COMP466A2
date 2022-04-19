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

  <section id="our_courses" style="padding: 20px 0px;">
    <div class="container">
      <div class="courses">
        <h1 class="main-heading">Course List</h1>
         <br>
         <br>
 <div class="" style="float: right;">
           <a href="add_course.php" class="my_button">Create a new course</a>
           <a href="add_topic.php" class="my_button">Create a new topic</a>
         </div>
        <h1>Our Courses</h1>
        <br />
        <table>
          <thead>
            <tr>
              <th>Course Name</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result as $course) {?>
            <tr>
              <td><?php echo $course->course_name;?></td>
              <td><?php echo $course->course_desc;?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
       
      </div>
    </div>
  </section>

  <footer>
    <h6>© 2022 E-learning. All Rights Reserved.</h6>
  </footer>

  </body>
</html>
