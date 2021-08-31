 
<?php

include '../Ayurveda/Connection.php';
$row3="";
$product=mysqli_query($con,"select * from product order by Product_ID desc limit 6");
if(mysqli_affected_rows($con)>0){
while($row3=mysqli_fetch_array($product)){


?>
<style>

img {
opacity: 0.8;

}
img:hover {
  opacity: 1;
}
.last-price{
  font-size: 15px;
  font-weight: bold;
  color: black;
}
.last-price span {
  color: #256eff;
}
.product-detail{
  text-transform: capitalize;
  color: #12263a;
  padding-bottom: 0.6rem;

}
.product-detail p{
  font-size: 0.9rem;
  padding:0.3rem;
  opacity: 0.8;
}
.product-detail ul{
  margin:1rem 0;
  font-size: 0.9rem;
}
.product-detail ul li{
  padding:0.3rem;
  margin:0;
  list-style: none;
  font-weight: 600;
  opacity: 0.9;
  margin:0.4rem 0;


  
}
.product-detail ul li span{
  font-weight: 400;
}
.purchase-info{
  margin:1rem;
}
.purchase-info .btn{
cursor: pointer;
color:#FFF;
}
.social-links{
  display:flex;
  align-items:center;
}
.social-links a{
  display:flex;
  align-items:center;
  justify-content:center;
  width:32px;
  height:32px;
  color:#000;
  border-radius: 50%;
  text-decoration: none;
  font-size:0.8rem;

}
.social-links a:hover{
  background-color: #000;
  border-color: transparent;
  color: #fff;
  font-size: 14px;
}

</style>

<div class="container">
<div class="row">
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">

     <img src="../Ayurveda/<?php echo $row3[5];?>" class="img-fluid" style="height: 300px;width: 400px;" alt="">
  </div>
  <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
    <div class="card">
        
          <div class="card-body">
             <h4 class="card-title " style="font-weight:bold;"><?php echo $row3[1];?></h4>
             <h6 style="font-weight:bold; color:orange;" >About the Product</h6>
          <p style="display:contents;"><?php echo $row3[2];?>
          </div>
          <div class="product-rating">
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star checked" style="color:orange;"></i>
                <i class="fa fa-star"></i>
                <span>4.2</span>
                <div class="product-price">
                  <p class="last-price">New price : <span><?php echo $row3[3]; ?></span></p>
                  
                </div>
          </div>
          <div class="product-detail">
            <ul>
              <li>Available:<span>in stock</span></li>
              <li>Shipping:<span>All over the India</span></li>
              <!-- <li>Shipping fee:<span>Rs.49</span></li> -->
            </ul>
          </div>

          <div class="purchase-info">
            <a href="buyerdetail.php?catid=<?php echo $row3[0]; ?>" class="btn btn-success">Buy now</a>
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
