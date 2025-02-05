<?php 
include('header.php');

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    include("backend/connect.php");

    $moveIn_date = $_POST['moveIn_date'];
    $moveOut_date = $_POST['moveOut_date'];
    $apartment_id = $_POST['apartment_id'];

    // Query for unavailable apartments
    $unavailableSQL = "SELECT * FROM apartments INNER JOIN rental_records WHERE apartments.apartment_name = rental_records.apartment_name AND apartment_id = '$apartment_id'  AND rental_records.moveIn_date= '$moveIn_date' ";

    $unavailableQuery = $dbConn->prepare($unavailableSQL);
    $unavailableQuery->execute();
    $unavailableApartments = $unavailableQuery->fetchAll();

    // Query for available apartments
    $availableSQL =  "SELECT * FROM apartments JOIN rental_records WHERE apartments.apartment_name = rental_records.apartment_name AND rental_records.moveIn_date != '$moveIn_date' AND moveOut_date != '$moveOut_date' ";
    $availableQuery = $dbConn->prepare($availableSQL);
    $availableQuery->execute();
    $availableApartments = $availableQuery->fetchAll();
?>
    
<!-- Unavailable Apartments Section -->
<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <h2 class="text-center">Unavailable Apartments</h2>
            <br>
            
        </div>
    </div>
    <div class="row g-3">
        <?php if (count($unavailableApartments) > 0): ?>
            <?php
         include('backend/connect.php');
         $sql ="SELECT moveOut_date FROM rental_records INNER JOIN apartments WHERE apartments.apartment_name = rental_records.apartment_name AND apartments.apartment_id= '$apartment_id'"; 
     
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
       ?> 
            <h4>This apartment will not be free until <?php echo $result[0]['moveOut_date'];?></h4>
            <?php foreach($unavailableApartments as $apartment): ?>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="img/<?php echo $apartment['apartment_img']; ?>" style="height: 200px; object-fit: cover;" alt="apartment">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $apartment['apartment_name']; ?></h5>
                            <span class="fs-5 badge bg-light text-dark fw-normal">starting from $ <strong><?php echo $apartment['price']; ?></strong></span>
                            <p class="card-text">
                                <?php echo $apartment['title']; ?><br>
                                Address: <strong><?php echo $apartment['address']; ?></strong>
                            </p>
                            <div class="d-grid gap-2">
                                <a href="apartment_details.php?apartment_id=<?php echo $apartment['apartment_id']; ?>" class="btn btn-outline-info btn-sm">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">All apartments are available on this date.</p>
        <?php endif; ?>
    </div>
</div>

<!-- Available Apartments Section -->
<div class="container">
    <div class="row">
        <div class="col-12 py-5">
            <h2 class="text-center">Available Apartments</h2>
        </div>
    </div>
    <div class="row g-3">
        <?php if (count($availableApartments) > 0): ?>
            <?php foreach($availableApartments as $apartment): ?>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="img/<?php echo $apartment['apartment_img']; ?>" style="height: 200px; object-fit: cover;" alt="apartment">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $apartment['apartment_name']; ?></h5>
                            <span class="fs-5 badge bg-light text-dark fw-normal">starting from $ <strong><?php echo $apartment['price'];?></strong></span>
                            <p class="card-text">
                                <?php echo $apartment['title']; ?><br>
                                Address: <strong><?php echo $apartment['address']; ?></strong>
                            </p>
                            <div class="d-grid gap-2">
                                <a href="apartment_details.php?apartment_id=<?php echo $apartment['apartment_id']; ?>" class="btn btn-outline-info btn-sm">Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">No apartments are available on this date.</p>
        <?php endif; ?>
    </div>
</div>

<?php 
include('footer.php'); 
} 
?>
