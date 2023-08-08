<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage All Category</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:5%;"> Id </th>
                          <th style="width:15%;"> Category_Name </th>
                          <th style="width:15%;">Action</th>
                         
                                                    
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($showcat as $row)
                        {
                            ?>
                        <tr>
                          <td> <?php echo $row["category_id"];?> </td>
                          <td> <?php echo $row["Category_Name"];?> </td>                                        
                          
                          <td><a href="<?php echo $mainurl;?>Admin-managecategory?deletaddcat_id=<?php echo $row["category_id"];?>" class= "btn btn-danger btn-sm "><span class=" bi bi-trash btn-md"  ></span></a> |
                            <a href="<?php echo $mainurl;?>Admin-editcategory?edit=<?php echo $row["category_id"];?>" class= "btn btn-info btn-sm "><span class=" bi bi-pencil"  ></span></a></td>
                              </tr>
                       <?php
                        }
                        ?>       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>