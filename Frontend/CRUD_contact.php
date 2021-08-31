<?php
include '../Ayurveda/Connection.php';

if(isset($_POST['contact'])){
   $First_name=$_POST['First_name'];
   $last_name=$_POST['last_name'];
   $phone=$_POST['phone'];
   $email=$_POST['email'];
   $message=$_POST['message'];
  $query = mysqli_query($con,"INSERT INTO customer_query( FIRST_name, LAST_name, email, phone, message, created_date) VALUES ('$First_name','$last_name','$phone','$email','$message',now())");
  if(mysqli_affected_rows($con)>0){
     header("Location:index.php?res=1");
    
  }
   else{  
        echo 'error'.mysqli_error($con);
   
    }
}    

?>