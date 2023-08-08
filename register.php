<!-- login start -->
 
<div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                 
<div class="col-md-7 bg-dark d-flex align-items-center mx-auto">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Register</h5>
                        <h1 class="text-white mb-4 mx-auto">Register</h1>
                        <form method="post" enctype="multipart/form-data">
                            <div class="row g-3">

                            <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="text" name="fnm" class="form-control"  placeholder="Your FirstName" required>
                                        <label for="FirstName">Your First Name</label>
                                    </div>
                                </div>
 
                                <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="text" name="lnm" class="form-control"  placeholder="Your LastName" required>
                                        <label for="FirstName">Your Last Name</label>
                                    </div>
                                </div>
           
                                <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="email" name="email" class="form-control"  placeholder="Your Email" required>
                                        <label for="Email">Your Email</label>
                                    </div>
                                </div>

                                <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="password" name="pass" class="form-control"  placeholder="password" required>
                                        <label for="password">Your Password</label>
                                    </div>
                                </div>

                                <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="file" name="img" class="form-control" >
                                        <label for="photo">Photo</label>
                                    </div>
                                </div>

                                    <div class="row">
                                    <div class="col-md-10 mt-md-2 mt-3  ">
                                    <label>Male : </label>
                                    <input type="radio" name="gender" value="male">
                                    <label>Female : </label>
                                    <input type="radio" name="gender" value="female" >
                                </div>
                            </div>
    

                                <div class="col-mx-9 p-3">
                                    <div class="form-floating">
                                        <input type="text" name="phn" class="form-control"  placeholder="Phone Number" required>
                                        <label for="phone number">Phone Number</label>
                                    </div>
                                </div>

     <div class="col-mx-9 p-3">
        <div class="form-floating">
        <select name="state" class="form-control">
        <option value=""> --select State--</option>
      <?php
    
      foreach($shwstate as $shwstate1)
          { 
          ?>
           <option value="<?php echo $shwstate1["state_id"];?>"> <?php echo $shwstate1["StateName"]; ?> </option> 
          <?php 
          }
          ?> 
      </select>
        </div>
  </div>

  <div class="col-mx-9 p-3">
        <div class="form-floating">

    <select name="city" class="form-control">
      <option value="" > --select City--</option>
    <?php
  
    foreach($shwcity as $shwcity1)
        { 
        ?>
         <option value="<?php echo $shwcity1["city_id"];?>"> <?php echo $shwcity1["CityName"]; ?> </option> 
        <?php 
        }
        ?> 
    </select>
    </div>
</div>


    <input type="submit" name="submit" class="btn btn-primary mt-3 " value="Submit" style="width:20%;margin-left: 38%;">



</form>
        </div>
        

    </div>

  
</div>




