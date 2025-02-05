
<?php 
include('header.php');
include("backend/connect.php");

  
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $cus_id = $_POST['cus_id'];

$sql ="SELECT * FROM rental_records WHERE cus_id='$cus_id'";
$query = $dbConn->prepare($sql);
$query->execute();
$result = $query->fetchAll();
}
?>
<br><br>

<div class="container">
  <div class="row">
    <div class="col">
    <div class="bg-light-subtle text-black border border-primary-5 p-3 mb-3">
    <form class="form" action="" method="post">
     <h2>Your Rental is confirmed!!</h2>
     <h3>This is your rental confirmation!!</h3>
<div class="row mb-3">
    <div class="col-md-6">
        <label for="name" class="form-label">Full name</label>
        <input type="text" class="form-control" id="name" name="name"  value="<?php echo $result[0]['name']; ?>" disabled>
    </div>
    <div class="col-md-6">
        <label for="cus_id" class="form-label">Customer ID</label>
        <input type="text" name="cus_id" class="form-control" id="cus_id" value="<?php echo $result[0]['cus_id']; ?>" disabled>
    </div>
</div>

<div class="row mb-3">
<div class="col-md-6">  
        <label for="date" class="form-label">Move In date</label>
        <input type="date" class="form-control" id="moveIn_date" name="moveIn_date"  value="<?php echo $result[0]['moveIn_date']; ?>"aria-describedby="emailHelp" disabled>
    </div>
    <div class="col-md-6">
        <label for="date" class="form-label">Move out date</label>
        <input type="date" class="form-control" id="moveOut_date" value="<?php echo $result[0]['moveOut_date']; ?>"aria-describedby="emailHelp" disabled>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="adult" class="form-label">Adult</label>
        <input type="number" name="adult" class="form-control" id="adult"  value="<?php echo $result[0]['adult']; ?>"  disabled>
    </div>
    <div class="col-md-6">
        <label for="apartment_name" class="form-label">Apartment Name</label>
        <input type="text" name="apartment_name" value="<?php echo $result[0]['apartment_name']; ?>" class="form-control" id="apartment_name" disabled>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $result[0]['phone']; ?>" disabled>
    </div>
    <div class="col-md-6">
        <label for="exampleInputemail" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputemail" value="<?php echo $result[0]['email']; ?>"  disabled>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
    <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments Inner JOIN rental_records where apartments.apartment_name=rental_records.apartment_name AND rental_records.cus_id='$cus_id'";
     
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?> 
      
<div class="card mb-3"  style="max-width: 800px;">
  <div class="row g-2">
    <div class="col-md-5">
      <img src="img/<?php echo $value['apartment_img'];?>" style="height: 100%; width: 100%;" alt="400X400">
    </div>

    <div class="col-md-7 col-sm-6">
      <div class="card-body">
      
        <h5 class="card-title"><?php echo $value['apartment_name'];?></h5>
        <strong> <?php echo $value['bedroom']?> Bed Flat to rent $<?php echo $value['price']?> pm</strong>
        <p class="card-text"><small class="text-body-secondary"><?php echo $value['title'];?></small></p>
        <strong>Located at: <?php echo $value['address'];?></strong><br>
       
      </div>
    </div>

  </div>
</div><!--end of row-->
<?php }?>
</div><!-- end of card-->
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <label for="phone" class="form-label"><h3>Total</h3></label>
       
    </div>
    <div class="col-md-6">
        
        <input type="email" name="email" class="form-control" id="exampleInputemail" value="<?php echo $value['price'];?>"  disabled>
    </div>
</div>

</form>

        </div>
      </div>
</div><!-- end of container for rental form-->
</div>



<?php include('footer.php');
?>
