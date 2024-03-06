<!-- header starts here -->
<?php 
include('./dbconnection.php');
  include('./mainInclude/header.php');
?>
<!-- header ends here -->

<!-- cource page banner starts here -->
<div class="container-fluidd bg-dark">
    <div class="row">
      <img src="images/courses.jpg" alt="cources" style="height: 450px; width: 100%;object-fit:cover; box-shadow:100px; ">
    </div>
</div>
<!-- cource page banner ends here -->

<div class="container mt-5">
  <?php
     if(isset($_GET['cource_id'])){
         $cource_id = $_GET['cource_id'];
         $_SESSION['cource_id'] = $cource_id;
         $sql = "SELECT * FROM course WHERE cource_id = '$cource_id'";
         $result = $conn->query($sql);
         $row = $result->fetch_assoc();
     }
?>
<div class="row">
    <div class="col md-4">
       <img src="<?php echo str_replace('..','.', $row['course_img']) ;?>" alt="" class="card-img-top">
    </div>
    <div class="col-md-8">
      <div class="card-body">
         <h5 class="card-title">Course Name : <?php echo $row['course_name'] ; ?></h5>
         <p class="card-text">Description : <?php echo $row ['course_desc']  ;?></p>
         <p class="card-text">Duration : <?php echo $row ['course_duration'] ; ?></p>
         <form action="checkout.php" method="post">
         <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row ['course_original_price']  ;?></del></small><span class="font-weight-bolder">&#8377 <?php echo $row ['course_price'] ; ?></span></p><br><br>
         <input type="hidden" name="id" id="" value="<?php echo $row['course_price'] ?>">
         <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button>
         </form>
      </div>
    </div>
</div>

<div class="container">
  <div class="row">
  <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th scope="col">Lesson No.</th>
          <th scope="col">Lesson Name.</th>
        </tr>
      </thead>
      <tbody>
    <?php
        $sql = "SELECT * FROM lesson";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $sum = 0;
            while($row = $result->fetch_assoc()){
                $sum++;
                if($cource_id == $row['cource_id']){
                    echo '<tr>
                    <th scope="row">'.$sum.'</th>
                    <th>'.$row['lesson_name'].'</th>
                    </tr>';
                }
               
            }
        }
    ?> 
    </tbody>
    </table>
  </div>
</div>

</div>