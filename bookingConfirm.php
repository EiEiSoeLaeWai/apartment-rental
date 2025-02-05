
<?php

    include('header.php');
?>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4">

        </div>
       <div class="col-md-4" >
       <div class="p-3 text-primary-emphasis bg-light-subtle border border-info-subtle rounded-5">
       <center><img width="100" height="100" src="https://img.icons8.com/nolan/64/send.png" alt="send"/></center>
       <h1 class="text-center">Your Booking is confirmed</h1>

       <h3 class="text-center">If you have questions or want to change your booking,</h3>
       <h3 class="text-center"> Please contact us within 48 hrs!!</h3>
       Check your rental confirmation!!
       <form action="specificCheck.php" method='POST'>
       <label for="cus_id" class="form-label">Customer ID</label>
       <input type="text" name="cus_id" class="form-control" id="cus_id" >
       <button class="btn btn-outline-primary" type="submit" name="submit" value="submit">Check Now</button>
        
       </form>
</div>
      
       </div>
    </div><!--end of row-->
</div><!--end of container-->

<br><br>


<?php include('footer.php');
?>