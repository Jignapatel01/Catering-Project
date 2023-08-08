<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" style="overflow:auto;">
                    <h4 class="card-title">Manage All contacts</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:5%;"> Id </th>
                          <th style="width:15%;"> FirstName </th>
                          <th style="width:15%;"> LastName </th>
                          <th style="width:20%;"> Email </th>
                          <th style="width:15%;"> Photo </th>
                          <th style="width:15%;"> Gender </th>
                          <th style="width:15%;"> Phone </th>
                          <th style="width:20%;"> State </th>
                          <th style="width:5%;"> City </th>
                          <th style="width:15%;"> Registerd_Date_Time </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($shwcustomer as $row)
                        {
                            ?>
                        <tr>
                          <td> <?php echo $row["c_id"];?> </td>
                          <td> <?php echo $row["FirstName"];?> </td>
                          <td> <?php echo $row["LastName"];?> </td>
                          <td> <?php echo $row["Email"];?> </td>
                          <td> <img src="../<?php echo $row["Photo"];?>" width="50px" height="100px"> </td>
                          <td> <?php echo $row["Gender"];?> </td>
                          <td> <?php echo $row["Phone"];?> </td>
                          <td> <?php echo $row["state_id"];?> </td>
                          <td> <?php echo $row["city_id"];?> </td>
                          <td> <?php echo $row["Registerd_date_time"];?></td>
                          <td><a href="<?php echo $mainurl;?>Admin-managecustomer?deletecustomer=<?php echo $row["c_id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></a></td>
                              </tr>
                       <?php
                        }
                        ?>       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>