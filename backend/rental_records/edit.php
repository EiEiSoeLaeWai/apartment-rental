<?php include('../loginheader.php');
 include('../../backend/connect.php');
$sql = "SELECT * FROM rental_records WHERE id='".$_GET['id']."'";
$query  = $dbConn->prepare($sql);
$query->execute();
$result=$query->fetchAll();
?>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto ">
        <div class="bg-light-subtle text-black border border-primary-subtle p-3 mb-3">
        <form action="update.php?id=<?php echo $_GET['id'];?>" method="post">                
        <div class="mb-3">
                  <label for="" class="form-label">Customer ID</label>
                  <input type="text"
                    class="form-control" name="cus_id" value="<?php echo $result[0]['cus_id']?>" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Full Name</label>
                  <input type="text"
                    class="form-control" name="name" value="<?php echo $result[0]['name']?>" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Email</label>
                  <input type="text"
                    class="form-control" name="email" value="<?php echo $result[0]['email']?>" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Number of people</label>
                  <input type="text"
                    class="form-control" name="adult" value="<?php echo $result[0]['adult']?>" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="mb-3">
                <label for="date" class="form-label">Move in Date</label>
                <input type="date" class="form-control" id="moveIn_date" name="moveIn_date"  value="<?php echo $result[0]['moveIn_date']?>"aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="date" class="form-label">Move Out Date</label>
                <input type="date" class="form-control" id="moveOut_date" name="moveOut_date"  value="<?php echo $result[0]['moveOut_date']?>"aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Apartment Name</label>
                  <input type="text"
                    class="form-control" name="apartment_name" value="<?php echo $result[0]['apartment_name']?>" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
                <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $result[0]['phone']?>">
                </div>
<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
