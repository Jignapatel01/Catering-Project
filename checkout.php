<section id="content">
<div class="mt-5 container-fluid p-5">
<h4 class="ms-5"><span>Checkout</span></h2></h4>
<h6 class="ms-5 text-danger"><span>Fill all required field(*)</span></h2></h6>
<div class="row">
<div class="col-md-6 ms-5 ">

<form method="post" id="frm" action="<?php echo $action; ?>" name="payuForm" enctype="multipart/form-data">

<!-- <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
<input type="hidden" name="hash" value="<?php echo $hash ?>"/>
<input type="hidden" name="txnid" value="<?php echo $txnid ?>" /> -->

<!-- <div class="form-group col-md-12 col-xs-12 mt-2">
<input name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" class="form-control" placeholder="Enter Ammount *" />
</div> -->
<div class="form-group col-md-12 col-xs-12 mt-2">
<input type="text" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="Firstname *"  class="form-control">
</div>

<div class="form-group col-md-12 col-xs-12 mt-2">
<input type="text" name="lname" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" placeholder="Lastname *" class="form-control">
</div>

<div class="form-group col-md-12 col-xs-12 mt-2">
<input type="text" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="Email *" class="form-control">
</div>


<div class="form-group col-md-12 col-xs-12 mt-2">
<input type="text" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="Mobile *"  class="form-control">
</div>

<div class="form-group col-md-12 col-xs-12 mt-2">
<textarea name="productinfo" class="form-control" placeholder="Product Info *"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea>
</div>

<!-- payment success url -->
<input type="hidden" name="surl" value="<?php echo $mainurl;?>PaymentSuccess" size="64" />
<!-- payment failure url -->
<input type="hidden" name="furl" value="<?php echo $mainurl;?>PaymentFailure" size="64" />

<input type="hidden" name="service_provider" value="payu_paisa" size="64" />



<div class="form-group mt-3">
<select name="state"  required class="form-control">
<option value="">-select state-</option>
<?php
foreach($shwstate as $shwstate1)
{ 
?>
<option value="<?php echo $shwstate1["state_id"];?>"><?php echo $shwstate1["StateName"];?></option>
<?php 
}
?> 
</select> 
</div>



<div class="form-group mt-3">
<select name="city"  required class="form-control">
<option value="">-select city-</option>
<?php
foreach($shwcity as $shwcity1)
{ 
?>
<option value="<?php echo $shwcity1["city_id"];?>"><?php echo $shwcity1["CityName"];?></option>
<?php 
}
?> 
</select> 
</div>


</div>




<div class="col-md-4 ms-5 shadow">
<div class="card-body">

<table class="table table-responsive">

<?php 
foreach($shwcart as  $row)
{
?>
<tr align="center">

<td><img src="Admin/<?php echo $row["Product_Photo"];?>" style="width:50px; height:50px"></td>
<td><?php echo $row["Product_Name"];?></td>


<td><input type="number" name="qty" min="1" max="10" value="1" class="w-50"></td>
<td><?php echo $row["subtotal"];?></td>

</tr>
<?php 
}
?>
</table>


</div>
<div class="card-footer bg-white shadow p-3">
<div class="row">
<div class="col-md-12">
<h4>Total₹   <span class="float-end fs-6"><?php echo $totsum[0]["sum_total"]; ?> </span></h4>

<b>Grand Total₹ <span class="float-end"> <?php echo $totsum[0]["sum_total"]; ?> </span></b>
<p>Inclusive of all the applicable taxes</p>
<!-- <?php 
if(!$hash) 
{ 
?> -->
<a href="https://rzp.io/l/fHuSI5F71F"><button type="button" name="checkout" class="btn btn-primary text-white btn-lg w-100">Place Order Now >></button></a>
<!-- <?php 
}
?> -->

</div>

</div>
</div>


</div>
</div>
</div>

</div>
</div>

</div>
</div>
</div>
</div>
</section>
<!-- form validator -->