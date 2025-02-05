<?php include('../loginheader.php');

// $sql ="SELECT * FROM apartments";
// $query = $dbConn->prepare($sql);
// $query->execute();
// $result = $query->fetchAll();
?>
<br><br>

<div class="container"><!-- start of container for rental form-->

      <div class="row">
        <div class="col">
        <div class="bg-light-subtle text-black border border-primary-subtle p-3 mb-3">
        <form class="form" action="insert.php" method="post">
    <h4>This form is only for the rental that are not applied from the website!!</h4> 
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
        <select name="apartment_name" class="form-select form-select-lg" autocomplete="off">
                            <option  selected disabled>Choose apartment</option>
                            <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments";
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?>
                            <option value="<?php echo $value['apartment_name'];?>"><?php echo $value['apartment_name'];?></option>
                            <?php }
                        ?>
                        </select>
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
            <input type="date" name="expiry_date" class="form-control" id="expiry_date" placeholder="MM/YY" required>
        </div>
        <div class="col-md-3">
            <label for="cvv" class="form-label">CVV</label>
            <input type="password" name="cvv" class="form-control" id="cvv" required>
        </div>
    </div>
        <button class="btn btn-outline-primary btn-sm" type="submit" name="submit" value="submit">Book Now</button>
  
</form>

        </div>
      </div>
</div><!-- end of container for rental form-->