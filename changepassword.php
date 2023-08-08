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
    <a href="<?php echo $mainurl;?>/change-password" class="dropdown-item">Change Password</a>
    <a href="<?php echo $mainurl;?>manage-profile?deldata<?php echo $prof[0]["c_id"];?>" onclick="return confirm('Are you sure to remove your account?')" class="dropdown-item">Delete Account</a>
    <a href="<?php echo $mainurl;?>?logout-here" class="dropdown-item">Logout</a><ul>
 </div>


<div class="col-md-7">
<div class="h3 mt-5" align="center">Change Password</div>
<form method="post" enctype="multipart/form-data">

 
    <div class="row">
        <div class="col-md-10 mt-md-2 mt-3 p-3 mx-auto">
            <!-- <label >Old Password</label> -->
            <input type="password" name="opass" placeholder="Enter Old Password" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 mt-md-2 p-3 mt-3 mx-auto">
            <!-- <label >New Password</label> -->
            <input type="password" name="npass" placeholder="Enter New Password" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 mt-md-2 p-3 mt-3 mx-auto">
            <!-- <label >Confirm Password</label> -->
            <input type="password" name="cpass" placeholder="Enter Confirm Password"class="form-control" required>
        </div>
      </div>

    <input type="submit" name="chngpass" class="btn btn-primary mt-3 " value="Submit" style="width:20%;margin-left: 40%;">
   <br>   

   </div>
</form>
        </div>
</div>
       