<?php include ('header.php') ;
?>
<br>
<div class="container">
    
    <div class="row">
    <?php 
    include("backend/connect.php");

    $sql ="SELECT * FROM images  JOIN apartments WHERE images.apartment_id = apartments.apartment_id AND apartments.apartment_id='".$_GET['apartment_id']."'";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    // $result = mysqli_query($conn,$sql);
?>
        <div class="col-md-6">
   
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
  <?php
        foreach($result as $key => $value){
       
       ?>
    <div class="carousel-item active">
      <img src="img/<?php echo $value['image_name'];?>" class="d-block w-100" alt="...">
    </div>
    <?php
     }
    ?>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
        <div class="col-md-6">
         <p>
            <ul>
                <li>
               <h6>Private room in rental unit</h6> 
                You have your own room and share the kitchen and bathroom with the other tenants. 
                </li>
                <li>
                    <h6>Certificate of residence</h6>
                    Upon move-in, the landlord will issue a certificate of residence.
                </li>
                <li>
                    <h6>Cancellation policy</h6>
                    You can receive a full refund, minus the cancellation processing fee, if you cancel up to 14 days prior to the move-in date.                </li>
                <li>
                    <h6>Perfect for home office </h6>
                    A designated office area for comfortable remote work.
                </li>
                
            </ul>
         </p>
</div>
        </div><!--end of row-->
    </div><!--end of container-->
    <br>

    <div class="container"><!-- start of container-->
    <?php 

include("backend/connect.php");

$sql ="SELECT * FROM apartments WHERE apartment_id='".$_GET['apartment_id']."'";
 $query = $dbConn->prepare($sql);
 $query->execute();
 $result = $query->fetchAll();
?>
        <div class="row">
        
            <div class="col-md-8">
                <h3> <?php echo $result[0]['bedroom']?> Bed Flat to rent $<?php echo $result[0]['price']?> pm</h3>

            <h4>Rooms and Sleeping Arrangement</h4>

<?php echo $result[0]['title'];?><br>
     <?php echo $result[0]['bedroom']?> Bedrooms<img src="img/bedroom.jpg" alt="bedroom" width="80" height="80">

     <?php echo $result[0]['bathroom']?> Bathrooms <img src="img/bathroom.png" alt="bathroom" width="60" height="60">

     Living room<img src="img/livingRoom.jpg" alt="bedroom" width="80" height="80">

</p>
<hr class="featurette-divider">
            <h3>About <?php echo $result[0]['apartment_name'];?></h3>
        <p> <?php echo $result[0]['info'];?>
        </div>
    

            <div class="col-md-4">
            <iframe src="<?php echo $result[0]['map'];?>" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div><!--end of row-->

    </div><!--end of container-->
<br>
<div class="container">
<?php

include("backend/connect.php");

$sql ="SELECT * FROM ameneties";
 $query = $dbConn->prepare($sql);
 $query->execute();
 $result = $query->fetchAll();
?>
    <div class="row"><!-- start of row-->
    <h3>Ameneties</h3>
    <?php
        foreach($result as $key => $value){
       
       ?>
        <div class="col-md-4">
            <img src="img/<?php echo $value['ameneties_img']?>" width=80 height=80><?php echo $value['ameneties_name']?>
        </div>
        <?php
    }?>
    
    </div><!-- end of row-->
    <hr class="featurette-divider" style="width: 100%; height: 2px; margin: 10px auto;">

<div class="row">
    <h3>Rules to know</h3>
    
    <?php 
    include("backend/connect.php");

    $sql ="SELECT * FROM rules INNER JOIN rules_apartment JOIN apartments WHERE rules.rules_id = rules_apartment.rules_id AND apartments.apartment_id=rules_apartment.apartment_id AND  apartments.apartment_id='".$_GET['apartment_id']."'";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    // $result = mysqli_query($conn,$sql);
?>

<?php
        foreach($result as $key => $value){
       
       ?>
        <div class="col-md-8">
      <img src="img/<?php echo $value['rule_img']; ?>" alt="rules" width="80" height="80"> <?php echo $value['rule_name'] ?>

        </div>
        <?php
        }?>
        <strong>Tenants need to rent at least one month and first month rent need to pay when they submit the rental form..</strong>
    </div><!-- end of row-->
</div><!-- end of container-->
<br>
<div class="container">
<div class="container bg-light-subtle text-dark py-2 px-2 rounded-5 shadow-lg mb-2">
        <h3 class="text-center mb-3">First Check Available to Rent </h3>
      
        <form action="check.php" method="post">
            <input name="activity" value="camping" type="text" class="visually-hidden">
                <div class="input-group input-group-lg mb-4">
                    <div class="form-floating">
                        <input name="moveIn_date" type="date" class="form-control form-control-lg" placeholder="mm/dd/yyyy" autocomplete="off" required value="None">
                        <label for="date"><img width="24" height="24" src="https://img.icons8.com/color/48/calendar--v1.png" alt="calendar--v1"/>Move In Date</label>
                    </div>

                    <div class="form-floating">
                        <input name="moveOut_date" type="date" class="form-control form-control-lg" placeholder="mm/dd/yyyy" autocomplete="off" required value="None">
                        <label for="date"><img width="24" height="24" src="https://img.icons8.com/color/48/calendar--v1.png" alt="calendar--v1"/>Move Out Date</label>
                    </div>

                    <!-- <div class="form-floating">
                        <input name="address" type="text" class="form-control form-control-lg" placeholder="Enter your address" min="1" autocomplete="off">
                        <label for="guests"><img width="24" height="24" src="https://img.icons8.com/fluency-systems-regular/48/user.png" alt="user"/>Location</label>
                    </div> -->

                    <div class="form-floating">
                        
                            <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments WHERE apartment_id='".$_GET['apartment_id']."'";
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
       
       ?>
                           <input type="text" name="apartment_id" placeholder="mm/dd/yyyy" autocomplete="off" required value="<?php echo $result[0]['apartment_id']; ?>" class="form-control" >
                           
                        <label for="pitch_type"><img width="24" height="24" src="https://img.icons8.com/color/48/tent.png" alt="tent"/><?php echo $result[0]['apartment_name']; ?></label>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary head">Check Availability</button>
                </div>
        </form>
</div>
</div><!--end of container-->
<div class="container"><!-- start of container for rental form-->
<?php 

include("backend/connect.php");

$sql ="SELECT * FROM apartments WHERE apartment_id='".$_GET['apartment_id']."'";
 $query = $dbConn->prepare($sql);
 $query->execute();
 $result = $query->fetchAll();
?>
      <div class="row">
        <div class="col">
        <div class="bg-light-subtle text-black border border-primary-subtle p-3 mb-3">
        <form class="form" action="backend/formInsert.php" method="post">
    <h4>Fill the form to rent <?php echo $result[0]['apartment_name']; ?></h4> 
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6">
            <label for="cus_id" class="form-label">Customer ID</label>
            <input type="text" name="cus_id" class="form-control" id="cus_id">
        </div>
    </div>

    <div class="row mb-3">
    <div class="col-md-6">
            <label for="date" class="form-label">Move in Date</label>
            <input type="date" class="form-control" id="moveIn_date" name="moveIn_date" aria-describedby="emailHelp">
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label">Move out Date</label>
            <input type="date" class="form-control" id="moveOut_date" name="moveOut_date" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="adult" class="form-label">Adult</label>
            <input type="number" name="adult" class="form-control" id="adult">
        </div>
        <div class="col-md-6">
            <label for="apartment_name" class="form-label">Apartment Name</label>
            <input type="text" name="apartment_name" value="<?php echo $result[0]['apartment_name']; ?>" class="form-control" id="apartment_name">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="phone">
        </div>
        <div class="col-md-6">
            <label for="exampleInputemail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputemail">
        </div>
    </div>
     <!-- Payment Section -->
    <h5>Payment Information</h5>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="card_number" class="form-label">Card Number</label>
            <input type="text" name="card_number" class="form-control" id="card_number" required>
        </div>
        <div class="col-md-3">
            <label for="expiry_date" class="form-label">Expiration Date</label>
            <input type="text" name="expiry_date" class="form-control" id="expiry_date" placeholder="MM/YY" required>
        </div>
        <div class="col-md-3">
            <label for="cvv" class="form-label">CVV</label>
            <input type="password" name="cvv" class="form-control" id="cvv" required>
        </div>
    </div>

    <?php if(isset($_SESSION['email'])): ?>
        <button class="btn btn-outline-primary" type="submit" name="submit" value="submit">Rent Now</button>
    <?php else: ?>
        <a class="btn btn-outline-primary" href="backend/login/signin.php" type="button">Rent Now</a>
    <?php endif; ?>
</form>

        </div>
      </div>
</div><!-- end of container for rental form-->



    <div class="container">
    <hr class="featurette-divider">
    <h3>Similar listings</h3>
        <div class="row g-3">
    <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments where city_id= 1";
     
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?> 
                <div class="col-lg-4 col-md-3 col-12">
                <div class="card" >
                  <a href="apartment_details.php?apartment_id= <?php echo $value['apartment_id'];?>" alt="This is image">
               <img src="img/<?php echo $value['apartment_img'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                <p class="card-text">
                    <strong> <?php echo $value['bedroom']?> Bed Flat to rent $<?php echo $value['price']?> pm</strong>
                    <?php echo $value['apartment_name'];?></p>
                    </a>
  </div>
</div>
                             </div>
                             <?php
                                     }
                                          ?>
                             
    </div>
    </div>
                                    </div>
<br><br>


<?php include('footer.php')
?>