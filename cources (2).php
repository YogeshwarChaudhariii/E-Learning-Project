<!-- header starts here -->
<?php 
include('./dbconnection.php');
  include('./mainInclude/header.php');
?>
<!-- header ends here -->

<!-- cource page banner starts here -->
<div class="container-fluidd bg-dark">
    <div class="row">
      <img src="images/courses.jpg" alt="cources" style="height: 650px; width: 100%;object-fit:cover; box-shadow:100px; ">
    </div>
</div>
<!-- cource page banner ends here -->


 <!-- start All cources here -->
 </div>
<div class="container mt-5">
  <h1 class="text-center" style="font-weight: bold;">All Courses</h1>
  <div class="row mt-4" >
       <?php
             $sql = "SELECT * FROM course ";
             $result = $conn->query($sql);
             if($result->num_rows > 0){
               while($row = $result->fetch_assoc()){
                 $cource_id = $row['cource_id'];
                 echo '<div class="col-sm-4 mb-4">
                 <a href="coursedetail.php?cource_id='.$cource_id.'" class="btn" style="text-align: left; padding:0px;"> 
                    <div class="card">
                       <img src="'.str_replace('..','.',$row['course_img']).'" class="card-image-too" alt="Loading.." style="width: 352px; height: 200px;">
                       <div class="card-body">
                        <h5 class="card-title">'.$row['course_name'].'</h5>
                        <p class="card-text">'.$row['course_desc'].'</p>
                       </div>
                       <div class="card-footer">
                        <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span></p>
                        <a href="coursedetail.php?cource_id='.$cource_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                       </div>
                    </div>
                 </a>
               </div>';
               }
             }
       ?>
       
  </div>
</div>
  <!-- ends All cources here -->

<!-- payment status starts here -->
<?php
// include('paymentStatus.php');
?>
<!-- payment status ends here -->


<!-- Contact Us starts here -->
<?php
include('contactUs.php');
?>
<!-- Contact us ends here -->

<!-- including footer from footer.php file -->
<?php

  include('./mainInclude/footer.php');
  ?>
  <!-- including footer from footer.php file -->