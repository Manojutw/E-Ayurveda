
<?php
include '../Ayurveda/Connection.php';
$row4="";
$product=mysqli_query($con,"select * from doctor order by doctor_ID desc limit 6");
if(mysqli_affected_rows($con)>0){
while($row4=mysqli_fetch_array($product)){


?>

<div class="container">
<div class="row">
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">

     <img src="../Ayurveda/Picture/<?php echo $row4[2];?>" class="img-fluid" style="height: 300px;width: 400px;" alt="">
  </div>
  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
    <div class="card">
        
          <div class="card-body">
             <h4 class="card-title " style="font-weight:bold;"><?php echo $row4[1];?></h4>
             <h6 style="font-weight:bold; color:orange;" >Experiences
          <span style="font-weight:bolder; color:black "><?php echo $row4[4];?></h6></span>
          </div>
          <div class="product-rating">
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star"></i>
                <span>4.2</span>
                <div class="product-price">
                  <p class="last-price">Fee : <span><?php echo $row4[3]; ?></span></p>
                  
                </div>
          </div>
          <div class="product-detail">
            <ul>
            <li>Specialist:<span style="font-weight:bold;" ><?php echo $row4[5]; ?></span></li>

              <li>Perferred Timing:<span><?php echo $row4[6]; ?></span></li>
              <li>Service:<span>All over the India</span></li>
              <!-- <li>Shipping fee:<span>Rs.49</span></li> -->
            </ul>
          </div>

          <div class="purchase-info">
            <a href="appointmentdetail.php?catid=<?php echo $row4[0]; ?>" class="btn btn-success">Get Appointments</a>
          </div>
          <div class="social-links">
            <p style="font-size:16px; font-weight:bold; color:black;" >Share At:</p>
            <a href=""><i class="fa fa-facebook-f"></i></a>
            
            <a href=""><i class="fa fa-twitter"></i></a>
            
            <a href=""><i class="fa fa-instagram"></i></a>
            
            <a href=""><i class="fa fa-whatsapp"></i></a>
            
            <a href=""><i class="fa fa-pinterest"></i></a>
          </div>
                   
  </div>
 
              
</div>
</div> 
<?php
  }
}
?>