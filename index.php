<!-- header starts here -->
<?php
include('./mainInclude/header.php');
include('dbconnection.php')
?>
<!-- header ends here -->
<!-- background start here -->
<div class="container-field remove-vid-marg">
  <div class="vid-parent">
    <img src="images/front.jpg" alt="">
    <div class="vid-overlay"></div>
  </div>
  <!-- background ends here -->
<style>
    body{
      margin: 0px;
      padding: 0px;
    }
    .card{
      width: 30%;
      height: 30%;
      float: left;
      margin: 10px;
      padding: 20px;
      box-sizing: border-box;
      
    }
    .image{
      width: 30%;
      height: 30%;
    }
    .enroll{
      width: 20%;
      float: right;
      text-align: center;
    }
</style>
  <!-- middle content of page starts here -->
  <div class="vid-content">
    <h1 class="my-content">Welcome To Ninjas Coding</h1>
    <small class="my-content">"Talk Is Cheap Show Me The Code"</small><br>

    <?php
    if (!isset($_SESSION['is_login'])) {
      echo '<a href="#" class="btn btn-dark mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Start Coding</a>';
    } else {
      echo '<a class="btn btn-primary mt-3" href="Student/studentProfile.php">My Profile</a>';
    }
    ?>

  </div>

<!-- including footer from footer.php file -->
<?php
include('./mainInclude/footer.php');
?>
<!-- including footer from footer.php file -->