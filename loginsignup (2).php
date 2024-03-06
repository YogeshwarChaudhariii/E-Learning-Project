<!-- header starts here -->
<?php 
include('./mainInclude/header.php');
include('./dbconnection.php');
//   include('./mainInclude/header.php');
?>
<!-- header ends here -->

cource page banner starts here
<div class="container-fluidd bg-dark">
    <div class="row">
      <img src="images/courses.jpg" alt="cources" style="height: 450px; width: 100%;object-fit:cover; box-shadow:100px; ">
    </div>
</div>
<!-- cource page banner ends here -->



<div class="container jumbotorn mb-5" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-4">
       <h5 class="mb-3">If Already Registered || Login</h5>
       <form role="form" id="stuLoginForm">
         <div class="form-group">
           <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email" class="form-control" placeholder="Email" name="stulogemail" id="stuLogEmail">
         </div><br>
         <div class="form-group">
           <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label><small id="statusLogMsg1"></small><input type="password" class="form-control" placeholder="Password" name="stulogPass" id="stuLogPass">
         </div><br>
         <button class="btn btn-primary" id="stuLogBtn" type="button" onclick="checkStuLogin()">Login</button>
       </form><br>
       <small id="statusLogMsg"></small>
    </div>
    <div class="col-md-6 offset-md-1">
       <h5 class="mb-3">New User || Sign Up</h5>
       <form role="form" id="stuRegForm">
         <div class="form-group">
           <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><small id="statusMsg1"></small><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
         </div><br>
         <div class="form-group">
           <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label><small id="statusMsg2"></small><input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
         </div><br>
         <div class="form-group">
           <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">Password</label><small id="statusMsg3"></small><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
         </div><br>
         <button class="btn btn-primary" id="signup" type="button" onclick="addStu()">Sign Up</button>
       </form><br>
       <small id="successmsg"></small>
    </div>
  </div>
</div>

<?php 

//   include('./contact.php');
?>

<?php 

  include('./mainInclude/footer.php');
?>