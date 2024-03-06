<!-- header starts here -->
<?php
include('./dbconnection.php');
//   include('./mainInclude/header.php');

session_start();
if (!isset($_SESSION['stuLogemail'])) {
  echo "<script>location.href='loginsignup.php'</script>";
} else {
  header("Pragma: no-cache");
  header("Cache-Control: no-cache");
  header("Expires: 0");
  $stu_email = $_SESSION['stuLogemail'];
?>

  <!-- header ends here -->

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="GENERATOR" content="Evrsoft First Page">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootsrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Checkout</title>
  </head>


  <style>
        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border-left: 5px solid red;
            background-color: gray;
        }
        body{
          /* border: 1px solid black; */
          margin: 0px;
          margin-left: 0px;
          padding: 0px;
          /* background-color: lightgray; */
          padding-top: 25px;
        }
    
        h1
        {
            font-weight: bolder;
            text-decoration: underline;
        }
        form
        {
            /* border: 2px solid black; */
            width: 100%;
            color: black;
            font-weight: bold;
            /* font-size: 25px; */
            text-align: left;
        }
        
        th
        {
            border: 2px solid black;
            background-color: darkolivegreen;
            color: black;
        }
        
        
        td
        {
            border:  solid black;
        }
    </style>

  <body>

   <div class="container">
      <div class="row">
        <div class="col-sm-6 offset-sm-3 jumbotron">
           <h3 class="mb-5">Welcome to online learning Payment Page</h3>
           <form action="./PaytmKit/pgRedirect.php" method="post">
              <div class="form-group row">
                 <label for="ORDER_ID" class="col-sm-4 col-form-label">
                   Order Id
                 </label>
                 <div class="col-sm-8">
                 <input tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" class="form-control" id="ORDER_ID" value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="CUST_ID" class="col-sm-4 col-form-label">
                   Studdent Email
                 </label>
                 <div class="col-sm-8">
                 <input tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" class="form-control" id="CUST_ID" value="<?php  if(isset($stu_email)){echo $stu_email;} ?>" readonly>
                 </div>
              </div>
              <div class="form-group row">
                 <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">
                  Amount
                 </label>
                 <div class="col-sm-8">
                 <input type="text" title="TXN_AMOUNT" tabindex="10" name="TXN_AMOUNT" class="form-control" value="<?php if(isset($_POST['id'])){echo $_POST['id'];} ?>" readonly>
                 </div>
              </div>
              <div class="form-group row">
                 <div class="col-sm-8">
                 <input type="hidden"  id="INDUSTRY_TYPE_ID" class="form-control"  tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="RETAIL" readonly>
                 </div>
              </div>
              <div class="form-group row">
                 <div class="col-sm-8">
                 <input type="hidden" id="CHANNEL_ID" class="form-control" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
                 </div>
              </div>
              <div class="text-center">
              <input value="CheckOut" type="submit"	onclick="" class="btn btn-primary" style="width: 50%;">
              <a href="./cources.php" class="btn btn-secondary">Cancel</a>
              </div>
           </form>
           <small class="form-text text-muted">Note : Complete Payment by Clicking Checkout Button</small>
        </div>
      </div>
   </div>

  </body>

  </html>

<?php
}
?>