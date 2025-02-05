<?php
    include('header.php');
    ?>

<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <h2 class="text-center">Book Your Dream Home Now!!</h2>
        </div>
    </div>
 <?php
    include('backend/connect.php');
    $sql = "SELECT * FROM apartments WHERE apartments.address  LIKE '%".$_POST['pname']."%'";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    // var_dump($result);
?>

    <div class="row g-3">

    
        <?php
        foreach($result as $key => $value){
       
       ?>
             <div class="col-lg-4 col-md-4 col-12">
             <div class="card">
                        <img class="card-img-top img-fluid" img src="img/<?php echo $value['apartment_img']?>"  style="height: 200px; object-fit: cover;" alt="apartment" alt="Title">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $value['apartment_name']?></h5>

          <span class="fs-5 badge bg-light text-dark fw-normal">starting from $ <strong><?php echo $value['price']?></strong></span>
       
                            <p class="card-text">
                            <?php echo $value['title']?>
                            <br>
                            Address:<strong><?php echo $value['address']?></strong></p>
                            <div class="d-grid gap-2">
                            <a href="apartment_details.php?apartment_id= <?php echo $value['apartment_id'];?>" type="button" class="btn btn-outline-info btn-sm">Visit</a>
                        </div>
                        </div>
                          </div>
                             </div>
                             <?php
                                     }?>
    
    </div>
     
   <br>

        </div>
<?php include('footer.php');?>