<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="overflow:auto;">
                    <h4 class="card-title">Manage All SubCategory</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table id="cattable" class="table table-striped" >
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Category_Name </th>
                          <th> SubCategory_Name </th>
                          <th> Added_Date</th>
                          <th> Action </th>
                                                    
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($joinsubcat as $row)
                        {
                        ?>
                        <tr>
                          <td> <?php echo $row["subcat_id"];?> </td>
                          <td> <?php echo $row["Category_Name"];?> </td>
                          <td> <?php echo $row["SubCategory_Name"];?> </td>
                          <td> <?php echo $row["Added_date"];?> </td>
                          <td><a href="<?php echo $mainurl;?>Admin-managesubcategory?deletesubcat_id=<?php echo $row["subcat_id"];?>" class= "btn btn-danger btn-sm"><span class=" bi bi-trash"  ></span></a> |
                            <a href="<?php echo $mainurl;?>Admin-editsubcategory?editsubcat=<?php echo $row["subcat_id"];?>" class= "btn btn-info btn-sm"><span class=" bi bi-pencil"  ></span></a></td>
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