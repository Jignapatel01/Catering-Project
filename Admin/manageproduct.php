<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="overflow:auto;">
                    <h4 class="card-title">Manage All Product</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table id="cattable" class="table table-striped" >
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Category_Name </th>
                          <th> SubCategory_Name </th>
                          <th> Product_Name </th>
                          <th> Product_Photo </th>
                          <th> Price </th>
                          <th> Added_Date</th>
                          <th> Description </th>
                          <th> Action </th>
                                                    
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($joinpro as $row)
                        {
                            ?>
                        <tr>
                           <td> <?php echo $row["pro_id"];?> </td>
                          <td> <?php echo $row["Category_Name"];?> </td>
                          <td> <?php echo $row["SubCategory_Name"];?> </td>
                          <td> <?php echo $row["Product_Name"];?> </td>
                          <td> <?php echo $row["Product_Photo"];?> </td>
                          <td> <?php echo $row["Price"];?> </td>
                          <td> <?php echo $row["Added_date"];?> </td>
                          <td> <?php echo $row["Description"];?> </td>
                          
                          <td><a href="<?php echo $mainurl;?>Admin-manageproduct?deleteproduct=<?php echo $row["pro_id"];?>" class= "btn btn-danger btn-sm"><span class=" bi bi-trash"  ></span></a> |
                            <a href="<?php echo $mainurl;?>Admin-manageproduct?editp_id=<?php echo $row["pro_id"];?>" class= "btn btn-info btn-sm"><span class=" bi bi-pencil"  ></span></a></td>
                              </tr>
                       <?php
                        }
                        ?>       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

<script>
   $(document).ready(function () {
    $('cattble').DataTable();
});
</script>