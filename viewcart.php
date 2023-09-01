

<section id="content">
    <div class="card container p-2">
    <div class="card-header bg-white"><h4><span>Shopping Cart</span></h2></h4></div>
    <div class="card-body">
      <div class="row">
            <?php     
             if(!isset($_SESSION["c_id"]))
               {
             ?>
                <div class="col-md-7 mt-3 ms-5" >
                    <center>
                <img src="<?php echo $baseurl;?>img/emptycart1.png"  alt="" class="w-100" >
                </center>
                </div>  

                <div class="col-md-2 " style="margin-top:18%;">
                    <center>
                       <a href="login"><button type="submit" name="login" value="Sign In" class=" btn btn-md btn-primary mt-5 border rounded-pill" >Sign In Here>></button></a>
                    </center>
                </div>  
            </div>  
                <?php
                }
                else
                {
                ?>
                 <table class="table table-responsive">
                    <tr align="center">
                    <th></th>
                    <th>Product</th>
                    <th>username</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                </tr>
                <?php
                    foreach($shwcart as $row)
                    {
                    ?>       
                    <tr align="center">
                    
                        <td><img src="admin/<?php echo $row["Product_Photo"];?>" style="width:150px; height:150px"></td>
                        <td><?php echo $row["Product_Name"];?></td>
                        <td><?php echo $row["FirstName"];?></td>
                        <td><input type="hidden" id="price" name="price"  style="border:none;width:70px;" class=" text-primary ms-auto"  readonly><h6 class="text-secondary mt-2">Rs.<?php echo $row["Price"];?></h6></td>
                        <td><input type="number" id='qty' name="qty" value="1" onchange="crttotal()"  min="1" max="10"  class="form-control w-50"></td>
                        <td><input type="hidden" name="subtotal" id="total"><h6 class="mt-2"><?php echo $row["subtotal"];?> </h6></td>

                        <td><a href="<?php echo $mainurl;?>view-cart?deletecart=<?php echo $row["pro_id"];?>"><i class="bi bi-trash fs-4 text-danger"></i></a></td>
                    </tr>
                    <?php 
                    }
                    ?>
        </table>                                                 
    </div>

    
    <div class="card-footer bg-white shadow p-3">
    
        <div class="row">
            <div class="col-md-6">
                <p><i class="bi bi-geo-alt fs-2"></i> Delivery pin code</p>
                <div class="input-group p-1 w-50">
                    <input type="text" name="pincode" placeholder="Enter your pincode" class="form-control">
                    <span class="input-group-text bg-primary text-white">Submit</span>
    
                </div> 
                </div>
    
                <div class="col-md-6">
                <h4>Total₹   <span class="float-end fs-6"><?php echo $totsum[0]["sum_total"]; ?> </span></h4>

                    <b>Grand Total₹ <span class="float-end"> <?php echo $totsum[0]["sum_total"]; ?> </span></b>
                    <p>Inclusive of all the applicable taxes</p>
                    
                    <a href="<?php echo $mainurl;?>menu-item"><button type="submit" name="shopping" class="btn  btn-primary text-white btn-md w-50">Continue Shopping</button></a>
                    <a href="<?php echo $mainurl;?>checkout"><button type="submit" name="checkout" class="btn  btn-primary text-white btn-md w-25 ms-5">Checkout</button></a>
                
                </div>
    
            </div>
        </div>
    
    
    </div>
    <?php
     }
     ?>
        
   
    </div>
    </section>
    
    <script>
      

            function crttotal()
        {
             var price=document.getElementById("price").value;
             var qty=document.getElementById("qty").value;
             var tot=price*qty;

             document.getElementById("total").innerHTML=tot;
            
        }
    
            //    $.ajax({
            //         type:'POST',
            //         url :'viewcart',
            //         // contentType:False,
            //         // processData:False,
            //         data:{
            //             price:price,
            //             qty:qty,
                        
            //         },
            //         success: function(response){
            //             documnet.getElementById("subtotal").value=response;    
            //         }

            //     });

            // });


        



//         $(document).ready(function(){

// $.ajax({
//   type:'post',
//   url:'store_items.php',
//   data:{
//     qty:"qty"
//   },
//   success:function(response) {
//     document.getElementById("total_items").value=response;
//   }
// });



    </script>
