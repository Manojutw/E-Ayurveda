
<?php
$row2="";
$blog=mysqli_query($con,"select * from Blog order by Blog_ID desc limit 7");
if(mysqli_affected_rows($con)>0){
while($row2=mysqli_fetch_array($blog)){


?>
<div class="container">

     <div class="row">
    
     
       <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
       <img src="../Ayurveda/Picture/<?php echo $row2[4];?>" class="card-img-top" style="height: 300px;width: 400px;" alt="">
       <br><br>
       </div>
       
       <!-- <div class="col-sm-2"></div> -->
     
       <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
       <div class="card">
          
          <div class="card-body">
            <h4 class="card-title text-center" style="font-weight:bold;"><?php echo $row2[1];?></h4>
            <h4 class="card-subtitle"><?php echo $row2[2];?></h4>
            
            <p class="card-text"><?php echo $row2[3];?></p>
             <!-- <a href="" class="card-link">Read More</a> -->
          </div>
        </div>
       </div>
      
     </div>
</div>
<?php
  }
}  

?>
