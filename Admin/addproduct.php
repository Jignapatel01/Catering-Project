<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Admin Add Product </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>dashboard">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card ms-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Product</h4>
                    <br>
                    <form class="forms-sample" method="post" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <select name="catnm" class="form-control" id="exampleInputUsername1" Required>
                            <option value=""> --select category--</option>
                            <?php
                               foreach($showcat as $showcat1)
                               {
                                ?>
                                <option value="<?php echo $showcat1['category_id'];?>"><?php echo $showcat1['Category_Name'];?> </option>

                            <?php
                               }
                               ?>

                        </select>

                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">SubCategory Name</label>
                        <select name="subcatnm" class="form-control" id="exampleInputUsername1" Required>
                            <option value=""> --select subcategory--</option>
                            <?php
                               foreach($showsubcat as $showsubcat1)
                               {
                                
                                ?>
                                <option value="<?php echo $showsubcat1['subcat_id'];?>"><?php echo $showsubcat1['SubCategory_Name'];?> </option>

                            <?php
                               }
                               ?>

                        </select>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputUsername1">Product Name</label>
                        <input type="text" name="pnm" class="form-control" id="exampleInputUsername1" placeholder="Product Name*" Required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product image</label>
                        <input type="file" name="pimg" class="form-control" id="exampleInputUsername1" Required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Product price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputUsername1" placeholder="Product price*" Required>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Added_Date</label>
                        <input type="date" name="pdate" class="form-control" id="exampleInputEmail1"Required >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1"> Description</label>
                        <textarea  id="" cols="30" rows="5" name="pdesc" class="form-control" id="exampleInputPassword1"></textarea>
                      </div>
                      
                      <button type="submit" name="Addpro" class="btn btn-gradient-primary me-2">Add Product</button>
                      <button class="btn btn-light">Reset</button>
                    </form>
                  </div>
                </div>
              </div>