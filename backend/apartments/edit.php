<?php include('../loginheader.php');

include('../../backend/connect.php');
$sql = "SELECT * FROM apartments WHERE apartment_id='".$_GET['apartment_id']."'";
$query  = $dbConn->prepare($sql);
$query->execute();
$result=$query->fetchAll();

?>
<br><br>

<div class="container"><!-- start of container for rental form-->

      <div class="row">
        <div class="col">
        <div class="bg-light-subtle text-black border border-primary-subtle p-3 mb-3">
        <form action="update.php?apartment_id=<?php echo $_GET['apartment_id'];?>" method="post">   
    <h4>Edit apartments info:</h4> 
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="apartment_name" class="form-label">Apartment Name</label>
            <input type="text" class="form-control" id="apartment_name" name="apartment_name"  value="<?php echo $result[0]['apartment_name']?>">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price" value="<?php echo $result[0]['price'];?>">
        </div>
    </div>

    <div class="row mb-3">
    <div class="col-md-6">
    <label for="apartment_name" class="form-label">Apartment Details</label>
            <textarea class="form-control" placeholder="Enter apartment details" id="info" name="info"  style="height: 100px"><?php echo $result[0]['info']?></textarea>

        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Location map link</label>
            <input type="text" class="form-control" id="map" name="map"  value="<?php echo $result[0]['map']?>" aria-describedby="emailHelp">
        </div>
    </div>

   
    <div class="row mb-3">
    <?php
$sql = "SELECT * FROM apartments WHERE apartment_id='".$_GET['apartment_id']."'";
$query  = $dbConn->prepare($sql);
$query->execute();
$result=$query->fetchAll();
?>
        <div class="col-md-6">
            <label for="" class="form-label">Room arangement</label>
            <input type="text" name="title" class="form-control"  id="title" value="<?php echo $result[0]['title']?>" >
        </div>
        <div class="col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" class="form-control"  value="<?php echo $result[0]['address']?>"id="address">

        </div>
    </div>
     
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="" class="form-label">Number of bedroom</label>
            <input type="number" name="bedroom" class="form-control" id="bedroom"  value="<?php echo $result[0]['bedroom']?>" required>
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Number of bathroom</label>
            <input type="number" name="bathroom" class="form-control" id="bathroom"  value="<?php echo $result[0]['bathroom']?>"placeholder="MM/YY" required>
        </div>
       
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
        <select name="city_id" class="form-select form-select-lg" autocomplete="off">
                            <option  selected disabled>Choose city</option>
                            <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM cities";
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?>
            <option value="<?php echo $value['city_id'];?>"><?php echo $value['city_name'];?></option>
                            <?php }
                        ?>
                        </select>
        </div>
        
        <div class="col-md-6">
       
        </div>
    </div>

        <button class="btn btn-outline-primary btn-sm" type="submit" name="submit"  value="submit">Edit</button>
        <a href="index.php" type="button" class="btn btn-outline-primary btn-sm" type="submit" name="submit"  value="submit">Back to list</a>

</form>

        </div>
      </div>
</div><!-- end of container for rental form-->