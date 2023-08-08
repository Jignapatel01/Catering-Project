<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Admin SubCategory </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>dashboard">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Edit SubCategory</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card ms-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit SubCategory</h4>
                    <br>
                    <form class="forms-sample" method="post">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <select name="addcatnm" class="form-control" id="exampleInputUsername1" Required>
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
                        <input type="text" name="subcatnm" value="<?php echo $editdt[0]["SubCategory_Name"];?>" class="form-control" id="exampleInputUsername1" placeholder="Category Name*" Required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Added_Date</label>
                        <input type="date" name="addsubdate" value="<?php echo $editdt[0]["Added_date"];?>"  class="form-control" id="exampleInputEmail1"Required >
                      </div>
                                            
                      <button type="submit" name="updsubcat" class="btn btn-gradient-primary me-2">Update</button>
                      <button class="btn btn-light">Reset</button>
                    </form>
                  </div>
                </div>
              </div>