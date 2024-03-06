<?php
if(!isset($_SESSION)){
    session_start();
}
// include('header.php');
include('dbconnection.php');



// if (isset($_POST['ORDERID']) && count($_POST['TXNAMOUNT'])>0 )
// 	{ 
//            $order_id = $_POST['ORDERID'];
// 		   $stu_email = $_POST['stuLogemail'];
// 		   $cource_id = $_POST['cource_id'];
// 		   $status = $_POST['STATUS'];
// 		   $respmsg = $_POST['RESPMSG'];
// 		   $amount = $_POST['TXNAMOUNT'];
// 		   $date = $_POST['TXNDATE'];

// 		   $sql = "INSERT INTO courseorder(order_id,stu_email,cource_id,status,respmsg,amount,order_date) VALUES ('$order_id', '$stu_email','$cource_id', '$status','$respmsg' ,' $amount ', '$date')";
//            echo "<b>Transaction status success</b>";
// 		//    if($conn->query($sql) == TRUE){
// 		// 	   echo "Redirecting to my profile.....";
// 		// 	   echo "<script> setTimeout(() => {
// 		// 		   window.location.href = '../Student/myCourse.php';},1500);</script>";
//         //            echo "<b>Transaction status success</b>";
// 		//    }
//     }
//     else {
// 	echo "<b>Transaction status Fail</b>";
// 	//Process transaction as suspicious.
// //}
// }


?>


<style>
   body{
       margin-top: 150px; 
       width: auto;
   }
   
   form{
       border: 2px solid black;
       padding: 20px;
       padding-left: 20px;
       width: 40%; 
       display: inline-block;
       margin-left: 30%; 
       margin-right: 10%;
       text-align: left;
       /* background-color: lightgray; */
       /* word-spacing: 30%; */
       font-weight: bold;
   }

   input{
       width: 60%;
       height: 5%;
       border: 1px solid black;
   }

   input[type=text]{
       font-weight: bold;
       border: 1px solid black;
       width: 80%;
   }

   
   h3{
       text-align: center;
       margin-left: 100%;
       margin-right: 100%;
       margin: auto;
       font-weight: bold;
   }

   .btn{
       background-color: red;
       border-radius: 4px;
   }
</style>

<body>
    
<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Complete Payment</h3>
    <form action="action.php" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required><br>
          </div>
          <h4 class="text-center lead">Select Payment Mode</h4>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Select Payment Mode-</option><br>
              <!-- <option value="cod">Cash On Delivery</option> -->
              <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option>
            </select>
          </div><br>
          <div class="form-group">
            <input type="submit" name="submit" id="order" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
</div>
</body>

