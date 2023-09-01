       <!-- Menu Start -->
 
       <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
              
                        <li class="nav-item">         
                            <a  data-bs-toggle="tab"  data-bs-target="#tab-1" href="tab-1">
                            <div class="ps-3">
                                <a href="<?php echo $mainurl;?>menu?breakfast=<?php echo $showcat[0]["category_id"];?>" class="d-flex align-items-center text-start mx-3 ms-0 p-3 active">   
                                <div> 
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                </div>
                                <div>
                               <small class="text-body d-block">Popular</small>
                               <h6 class="mt-n1 mb-0 d-block">Breakfast</h6></div>
                            </a>
                            </div>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a  data-bs-toggle="tab"  data-bs-target="#tab-2" href="">
                            <div class="ps-3">
                                <a href="<?php echo $mainurl;?>menu?breakfast=<?php echo $showcat[1]["category_id"];?>" class="d-flex align-items-center text-start mx-3 ms-0 p-3 active"> 
                                <div>
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6></div>
                                </a>  
                                </div>
                            </a>
                        </li>

                        <li class="nav-item">
                        <a  data-bs-toggle="tab"  data-bs-target="#tab-3" href="">
                            <div class="ps-3">
                                <a href="<?php echo $mainurl;?>menu?breakfast=<?php echo $showcat[2]["category_id"];?>" class="d-flex align-items-center text-start mx-3 ms-0 p-3 active"  > 
                                <div>
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                </div>
                                <div>
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6></div>
                                </a>
                                </div>
                            </a>
                        </li>
                    </ul>
                
       

                    <div class="tab-content">
                                         
                     <div id="tab-1" class="tab-pane fade show p-0 active">
                           <div class="row g-4">
                            
                             <?php
                                   foreach($shwlist as $row)
                                  {
                                    ?>
                                    
                                <div class="col-lg-6">
                                <form method="post">
                                    <input type="hidden" name="pro_id" value="<?php echo $row["pro_id"];?>"> 
                                    <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="Admin/<?php echo $row["Product_Photo"];?>" alt="" style="width: 130px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $row["Product_Name"]; ?></span>
                                                <b class="text-primary ms-auto">Rs.<input type="number" name="subtotal" value="<?php echo $row["Price"];?>" style="border:none;width:70px;" class=" text-primary ms-auto"  readonly></b>
                                                <?php 
                                                    if(!isset($_SESSION["c_id"]))
                                                    {
                                                    ?>
                                                    <button type="button" class="btn btn-sm btn-primary" onclick='return confirm(this.value)'>Add</button>
                                                      
                                                    <?php 
                                                    }
                                                    else 
                                                    {
                                                    ?>
                                                    <button type="submit" name="addtocart" class="btn btn-sm btn-primary">Add</button>
                                                    <?php 
                                                    }
                                                    ?>
                                            </h5>
                                        </div>
                                    </div>
                                                </form>
                                </div>
                                                
                               <?php
                                }
                                ?>
                              
                            </div>
                        </div>

                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php
                                 foreach($shwlist as $row)
                                    {
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="Admin/<?php echo $row["Product_Photo"];?>" alt="" style="width: 130px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $row["Product_Name"]; ?></span>
                                                <b class="text-primary ms-auto">Rs.<input type="number" name="subtotal" value="<?php echo $row["Price"];?>" style="border:none;width:70px;" class=" text-primary ms-auto"  readonly></b>
                                                <?php 
                                                    if(!isset($_SESSION["c_id"]))
                                                    {
                                                    ?>
                                                    <button type="button" class="btn btn-sm btn-primary" onclick='return confirm(this.value)'>Add</button>
                                                      
                                                    <?php 
                                                    }
                                                    else 
                                                    {
                                                    ?>
                                                    <button type="submit" name="addtocart" class="btn btn-sm btn-primary">Add</button>
                                                    <?php 
                                                    }
                                                    ?>
                                            </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                               <?php
                                }
                                ?>
                                
                            </div>
                        </div>


                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php
                                 foreach($shwlist as $row)
                                    {
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="Admin/<?php echo $row["Product_Photo"];?>" alt="" style="width: 130px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $row["Product_Name"]; ?></span>
                                                <b class="text-primary ms-auto">Rs.<input type="number" name="subtotal" value="<?php echo $row["Price"];?>" style="border:none;width:70px;" class=" text-primary ms-auto"  readonly></b>
                                                <?php 
                                                    if(!isset($_SESSION["c_id"]))
                                                    {
                                                    ?>
                                                    <button type="button" class="btn btn-sm btn-primary " onclick='return confirm(this.value)'>Add</button>
                                                      
                                                    <?php 
                                                    }
                                                    else 
                                                    {
                                                    ?>
                                                    <button type="submit" name="addtocart" class="btn btn-sm btn-primary">Add</button>
                                                    <?php 
                                                    }
                                                    ?>
                                            </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                               <?php
                                }
                                ?>
                            </div>           
                            


                        </div>
                       
                       


                </div>
                
            </div>
               
            </div>
        </div>


        
        <!-- Menu End -->
<script>
// book your seat

function confirm()
{
    <button type="button" class="btn-close" aria-label="Close"></button>
    alert('want to Add your Order Login to continue..')
    window.location='login';
}

</script>
