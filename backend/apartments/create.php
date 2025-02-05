<?php include('../loginheader.php');


?>
<br><br>

<div class="container"><!-- start of container for rental form-->

      <div class="row">
        <div class="col">
        <div class="bg-light-subtle text-black border border-primary-subtle p-3 mb-3">
        <form class="form" action="insert.php" method="post">
    <h4>Add more apartments</h4> 
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="apartment_name" class="form-label">Apartment Name</label>
            <input type="text" class="form-control" id="apartment_name" name="apartment_name">
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>
    </div>

    <div class="row mb-3">
    <div class="col-md-6">
    <label for="apartment_name" class="form-label">Apartment Details</label>
            <textarea class="form-control" placeholder="Enter apartment details" id="info" name="info" style="height: 100px"></textarea>

        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Location map link</label>
            <input type="text" class="form-control" id="map" name="map" aria-describedby="emailHelp">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        
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
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="" class="form-label">Room arangement</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="col-md-6">
        <!-- <label for="name">Name :</label>
        <input type="text" name="name" id="name" required value="">
        <label for="image">Image :</label>
        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required value=""> -->
        </div>
    </div>
     
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="" class="form-label">Number of bedroom</label>
            <input type="number" name="bedroom" class="form-control" id="bedroom" required>
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Number of bathroom</label>
            <input type="number" name="bathroom" class="form-control" id="bathroom" placeholder="MM/YY" required>
        </div>
       
    </div>
        <button class="btn btn-outline-primary btn-sm" type="submit" name="submit" value="submit">Add</button>
        <a href="index.php" type="button" class="btn btn-outline-primary btn-sm" type="submit" name="submit"  value="submit">Back to list</a>

</form>

        </div>
      </div>
</div><!-- end of container for rental form-->