<?php
session_start();
 
 include '../Ayurveda/Connection.php';



 $proid="";
  $proid=$_GET['catid'];
  $query=mysqli_query($con,"select * from doctor where Doctor_ID='$proid'");
  if(mysqli_affected_rows($con)>0){
    $row=mysqli_fetch_array($query);
    
   }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ayurveda</title>
    
  <!--booststrap-->
  <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="Assets/css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="Assets/css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
</head>
<body>
    
</body>
</html>
<?php


?>
<br><br>
<br>
<div class="container">
<div class="row">
    
    <div class="col-sm-2"></div>
    
   <div class="col-sm-8">
       
<h2 style="text-align:center;" class="bg-primary">Appointment Process Page</h2>

<br><br>
   <form action="payment-proccess.php" method="POST" name="instamojo_payment">
  <div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
    <input type="text" class="form-control" placeholder="Enter Patient Name" name="name" required="">
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
    <input type="text" class="form-control" placeholder="Amount" name="amount"  value="<?php echo $row[3]; ?>"required="">
  </div>
</div>
<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
    <input type="text" class="form-control" placeholder="Phone" name="phone" required="">

  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
    <input type="email" class="form-control" placeholder="Email" name="email" required="">
  </div>
  
</div>
<div class="form-group contact-forms">

    
  <textarea class="form-control" placeholder="Enter Patient Problem" required="" name="Address"></textarea>
</div>

<button type="submit"  class="btn btn-primary" name="contact" >Proceed to Payment</button>
</form>
</div>
<div class="col-sm-2"></div>
</div>
</div>