<?php
include 'include/sidebar.php';
include 'include/Header.php';
include 'Connection.php';
?>
  
  
                
  <div class="container">
  <br>
  <br><br><br>
  <div class="row">
    <br>
  <h1><a class="btn btn-success"href ="addproduct.php"style="float:right; font-size :18px;">Add Product</a></h1>
    <div class="col-sm-2"></div>
   <br>
                   <div class="col-sm-10">
                   <h1 style="text-align:center";>View Product</h1>
                   <br>
                  <div class="table table-responsive">
                    <table class="table table-striped ">
                      <thead class="thead-dark">
                        <tr> 
                          <th>S.No</th>
                          <th>Product ID</th>
                          <th>Product Name</th>
                          <th>Product Description</th>
                          <th>Product Cost</th>
                          <th>Validity</th>
                          <th>Product Image</th>
                          <th>Manufactured Date</th>
                          <th>Category ID</th>
                          <th>Action</th>
                        </tr>
                       </thead>
      
                        <tbody>
                                       <?php
                                       $query=mysqli_query($con,"select * from product");
                                       if(mysqli_affected_rows($con)>0){
                                          $i=1;
                                          while($row=mysqli_fetch_array($query)){

                                      
                                       ?>
                                        <tr>
                                           <td><?php echo $i; ?></td>
                                           <td><?php echo $row[0]; ?></td>
                                           <td><?php echo $row[1]; ?></td>
                                           <td ><?php echo substr($row[2],0,30).'.......Read More' ;?></td>
                                           <td><?php echo $row[3];?></td>
                                           <td><?php echo $row[4]; ?></td>
                                           <td><img src="<?php echo $row[5];?>" class="img-thumbnail" width="200px"></td>
                                           <td><?php echo $row[6]; ?></td>
                                           <td><?php echo $row[7]; ?></td>

                                           <td> <a href="Editproduct.php?catid=<?php echo $row[0];?>"> <i style="color:blue;" class='fas fa-edit'></i></a> |<a href="CRUD_Product.php?proid=<?php echo $row[0];?>"> <i style="color:red;" class='fas fa-trash'></i></a></td>
                                        </tr>
                                        <?php
                                        $i++;
                                          }
                                        }
                                        else {
                                        echo "Data Not Found";
                                        }
                                        ?>
                                    </tbody>
    </table>
   </div>
 
    </div>
    <!-- <div class="col-3"></div> -->
  </div>

</div> 

                


 
<?php
  include 'include/Footer1.php';
?>