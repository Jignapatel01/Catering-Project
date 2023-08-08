<!-- <?php
    if(!isset($_SESSION["s_id"]))
    {
        echo "<script>
            window.location='/login';
        </script>";
    }

?> -->
<div class="container-fluid mt-5">
  
<div class="row">
    <div class="col-md-4 mt-5 ms-5 ">
    <a href="<?php echo $mainurl;?>">Welcome : <?php echo $_SESSION["fnm"];?></a>
    <a href="<?php echo $mainurl;?>manage-profile" class="dropdown-item">Manage Profile</a>
    <a href="<?php echo $mainurl;?>manage-order" class="dropdown-item">Manage Order</a>
    <a href="<?php echo $mainurl;?>change-password" class="dropdown-item">Change Password</a>
    <a href="<?php echo $mainurl;?>manage-profile?deldata<?php echo $prof[0]["c_id"];?>" onclick="return confirm('Are you sure to remove your account?')" class="dropdown-item">Delete Account</a>
    <a href="<?php echo $mainurl;?>?logout-here" class="dropdown-item">Logout</a><ul>
 </div>

 
<div class="col-md-7">
<div class="h3 mt-3" align="center">Manage Profile</div>
<form method="post"  enctype="multipart/form-data">

 <div class="row">
        <div class="col-md-10 mt-md-3 mt-3 mx-auto">
        <img src="<?php echo $prof[0]["Photo"];?>" class="img-fluid" style="width:400px; height:180px">
        <br><br>
      <input type="file" name="img" required class="form-control"> 
      </div>  
 </div>

    <div class="row">
        <div class="col-md-10 mt-md-3 mt-3 mx-auto">
            <label >Email</label>
            <input type="email" name="email" value="<?php echo $prof[0]["Email"];?>" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 mt-md-3 mt-3 mx-auto">
            <label>Phone Number</label>
            <input type="text" name="phn" value="<?php echo $prof[0]["Phone"];?>" class="form-control" required>
        </div>
    </div>

    

        <div class="row">
        <div class="col-md-10 mt-md-3 mt-4 mx-auto">
         <select name="state"  required class="form-control">
             <option value="">-select state-</option>
             <?php
             foreach($shwstate as $shwstate1)
             { 
                if($prof[0]["state_id"]==$shwstate1["state_id"])
                {
            ?>

            <option value="<?php echo $prof[0]["state_id"];?>" selected='selected'><?php echo $prof[0]["StateName"];?></option>

            <?php 
                }
                else 
                {
                    ?>

            <option value="<?php echo $shwstate1["state_id"];?>"><?php echo $shwstate1["StateName"];?></option>
            <?php 
            }
        }
            ?> 
         </select> 
         </div>
    </div>


    <div class="row">
        <div class="col-md-10 mt-md-3 mt-4 mx-auto">
         <select name="city"  required class="form-control">
             <option value="">-select city-</option>
             <?php
             foreach($shwcity as $shwcity1)
             { 
                if($prof[0]["city_id"]==$shwcity1["city_id"])
                {
            ?>

            <option value="<?php echo $prof[0]["city_id"];?>" selected='selected'><?php echo $prof[0]["CityName"];?></option>

            <?php 
                }
                else 
                {
                    ?>

            <option value="<?php echo $shwcity1["city_id"];?>"><?php echo $shwcity1["CityName"];?></option>
            <?php 
            }
        }
            ?> 
         </select> 
         </div>
    </div>
     
   <input type="submit" name="update" class="btn btn-primary mt-3 " value="Update Profile" style="width:20%;margin-left: 40%;">
   <br>   

   </div>
</form>
        </div>
</div>
       