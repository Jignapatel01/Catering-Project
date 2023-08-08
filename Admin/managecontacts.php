
<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage All contacts</h4>
                    <p class="card-description"> <a href="<?php echo $mainurl;?>">Home </a>
                        <!-- <code>.table-bordered</code> -->
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width:5%;"> Id </th>
                          <th style="width:15%;"> FirstName </th>
                          <th style="width:20%;"> Email </th>
                          <th style="width:15%;"> Phone </th>
                          <th style="width:20%;"> Message </th>                                                   
                          <th style="width:20%;"> Action </th>                                                   
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach($shwdata as $row)
                        {
                            ?>
                        <tr>
                          <td> <?php echo $row["contact_id"];?> </td>
                          <td> <?php echo $row["Name"];?> </td>
                          <td> <?php echo $row["Email"];?> </td>
                          <td> <?php echo $row["Phone"];?> </td>
                          <td> <?php echo $row["Message"];?> </td>

                          <td><a href="<?php echo $mainurl;?>Admin-managecontact?deletcontactid=<?php echo $row["contact_id"];?>" class="btn btn-sm btn-danger"><i class="bi bi-trash"></a></td>
                              </tr>
                       <?php
                        }
                        ?>       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>