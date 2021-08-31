<?php
 include 'include/header.php';
 include '../Ayurveda/Connection.php';
?>

<?php
$row="";
$query=mysqli_query($con,"select * from home_page order by id desc");
if(mysqli_affected_rows($con)>0){
$row=mysqli_fetch_array($query);

}

?>
<?php
$row1="";
$query=mysqli_query($con,"select * from about_us order by id desc");
if(mysqli_affected_rows($con)>0){
$row1=mysqli_fetch_array($query);

}


?>

<!-- banner -->
    <div class="main-banner text-center">
      <div class="container">
        <div class="social-icons mb-lg-4 mb-3">
          <ul>
            <li class="facebook">
              <a href="#">
                <span class="fa fa-facebook"></span>
              </a>
            </li>
            <li class="twitter">
              <a href="#">
                <span class="fa fa-twitter"></span>
              </a>
            </li>
            <li class="rss">
              <a href="#">
                <span class="fa fa-rss"></span>
              </a>
            </li>
          </ul>
        </div>
        <div class="banner-right-txt">
          <h5 class="mb-sm-3 mb-2">
                <?php 
								   echo $row[1];
								?>
          </h5>
          <h4> 
                <?php 
								   echo $row[2];
								?>
          </h4>
        </div>
        <div class="slide-info-txt">
          <p>
                <?php 
								   echo $row[3];
								?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- //banner -->
  <!-- about -->
  <section class="about py-lg-4 py-md-4 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">  <?php 
								   echo $row1[1];
								?></h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>  <?php 
								   echo $row1[2];
								?>
        </p>
      </div>
      <div class="row">
        <div class="col-lg-5 video-info-img text-center position-relative">
          <div class="abut-img-w3l">
            <img src="Assets/images/bb1.jpg" alt="" class="img-fluid">
          </div>
          <div class="abut-img-two">
            <img src="Assets/images/bb2.jpg" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-7 left-abut-txt ">
          <div class="about-right-grid">
            <h2 class="mb-3">  <?php 
								   echo $row1[3];
								?></h2>
            <p> 
               <?php 
								   echo $row1[4];
								?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//about -->
  <!-- store-info -->
  <section class="store-info py-lg-4 py-md-4 py-sm-3 py-3">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-7 store-details">
          <h4 class="mb-3">Store Information</h4>
          <h6 class="mb-2">Since:1974</h6>
          <p>delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet, consectetur adipiscing
            elit sed do eiusmod delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet,
            consectetur delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor sit amet, consectetur
            adipiscing elit sed do eiusmod delectus reiciendis maiores alias consequatur aut.maiores alias Lorem ipsum dolor
            sit amet, consectetur</p>
          <div class="view-buttn mt-md-4 mt-3">
            <!-- <a href="#blog">Read More</a> -->
          </div>
        </div>

        <div class="col-lg-5 store-image-right">
          <img src="Assets/images/bb3.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  
  <!--//store-info -->
  
   <!-- Product  -->

 <section id="Product">
  
  
 <h3 class="title text-center mb-2">Product </h3>
        <?php include 'productretrieve.php'; ?>
  
  </section>
  

  <!-- Product end -->
  <!-- Appointment  -->
  <section id="Appointment">
  
  
  <h3 class="title text-center mb-2">Appointment</h> </h3>
  <p class="text-center ">Service 24x7 to get appointment</p>
         <?php include 'Appointmentretrieve.php'; ?>
   
   </section>
 
   <!-- End Appointment -->
   <!-- blog -->
 <div class="container">
   <div class="row">
    
     <!-- <div class="col-sm-2"></div> -->
     <div class="col-sm-12">
     <section class="blog py-lg-5 py-md-4 py-sm-3 py-3" id="blog">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">BLOG</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, natus? Delectus, totam distinctio? Ratione obcaecati beatae est dicta, fuga at.
        </p>
      </div>
      <div class="row">
        <?php include 'retrieveblog.php'; ?>
      
        
      
       <div class="row">
       
       
        </div>
      </div>
    </div>
  </section>

     </div>
     <!-- <div class="col-sm-2"></div> -->   </div>
 </div>
  <!--//blog -->
  <br><br><br><br>
  <section>
    <div class="container-fulid">
      <div class="address_mail_footer_grids">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1061.6343263348951!2d85.4047076328147!3d23.977392226363705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f49b7cfd8d4b8b%3A0x6ebaa635c7b58837!2sPanchayat%20Bhawan!5e0!3m2!1sen!2sin!4v1624378753238!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

  </section>
  <!-- contact -->
  <section class="contact py-lg-4 py-md-4 py-sm-3 py-3" id="contact">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <h3 class="title text-center mb-2">Get In Touch</h3>
      <div class="title-w3ls-text text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">
        <p>Contact us for Quick Reponse Service Available 24x7</p>
        </p>
      </div>
      <div class="contact-form">
        <form action="CRUD_contact.php" method="post">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="First Name" name="First_name" required="">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 form-group contact-forms">
              <input type="text" class="form-control" placeholder="Last Name" name="last_name" required="">
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
            <textarea class="form-control" placeholder="Meassage" required="" name="message"></textarea>
          </div>
          <button type="submit" class="btn sent-butnn btn-lg" name="contact">Send</button>
        </form>
      </div>
    </div>
    <section class="contact_area section_gap">
      <div class="container">
          <?php
              if(! empty($_GET['res'])){
                  $res=$_GET['res'];
                  if($res==1){
                      ?>
                      <div class="alert alert success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert">&times; </button>
                           <strong>Your Message has been sent successfully</strong>
                     
                      
                      </div>
                    
       <?php
         }
       }
       ?>
      </div>
    </section>
  </section>
  <?php
   include 'include/footer.php';
  ?>