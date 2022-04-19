<?php
require'config.php';
//get all course
$query = $conn->prepare("select * from courses");
$query->execute();
$courseList = $query->fetchAll(PDO::FETCH_OBJ);

//check form is submitted
if(isset($_POST['save'])){
  $courseType = $_POST['courseType'];
  $topicDetails = $_POST['topicDetails'];
  $topicName = $_POST['topicName'];
  $query1 = $conn->prepare("insert into course_topics (course_id, topic_name, description) values ('$courseType', '$topicName', '$topicDetails')");
  $query1->execute();
  header("location:course_list.php");
}
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
       <a href="index.html">
         <img src="./images/e-learning.png" alt="" width="260">
       </a>
     </div>

     <div class="header_right_data">
       <a href="login.html" target="_blank" class="my_button">Log in</a>
       <a href="Signup.html" target="_blank" class="my_button">Sign up</a>
     </div>

     </div>

     </div>
  </header>

  <section style="padding: 20px 0px; textalign: center;">
    <div class="container">
      <div class="signup">
        <h1 style="text-align: center;">Create a new topic:</h1>

        <form name="myform" action="#" method="post" onsubmit="return Validate()">

          <div class="my_form">
            <label for="courseType">Course type</label> <br>
            <select id="courseType" name="courseType">
                  <option value="">Select a course</option>
                  <?php foreach ($courseList as $course) {?>
                  <option value="<?php echo $course->id;?>"><?php echo $course->course_name;?></option>
                <?php }?>
                  
            </select> <br>

            <span id="texcourseType" class="text-danger"> </span>
          </div>
           <div class="my_form">
            <label for="courseName">Topic Name</label> <br>
            <input type="text" id="topicName" name="topicName" value=""><br>
            <span id="topicTex" class="text-danger"> </span>
          </div>

          <div class="my_form">
            <label for="topicDetails">Topic details</label> <br>
            <textarea name="topicDetails" id="topicDetails" rows="10" cols="30"></textarea><br>
            <span id="topicDetTex" class="text-danger"> </span>
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

  <script src="./js/createtopic.js"> </script>

  </body>
</html>
