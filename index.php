<?php 
 session_start();
  ?>
 <!DOCTYPE html>
<?php include('header.php');?>


<br><br>
<section id="slider">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider with Text Overlay</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .carousel-caption {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
      padding: 25px;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="container">
  <center>
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/apartment1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Beautiful Apartment</h5>
            <p>Experience the best stay with amazing views and amenities.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/apartment10.png" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Spacious Living Room</h5>
            <p>Relax in a modern and comfortable space.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/apartment4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5>Elegant Design</h5>
            <p>Enjoy luxury and style in every detail.</p>
          </div>
        </div>
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
  </center>
</div>


</section>
<div class="container"><!--start of container-->



<section id="welcome" class="my-5">
        <div class="container">
            <div class="row">
                <div> 
                <center>
                <h2>Find your Dream Home!</h2>
            Welcome to Prime Space for finding quality apartments that suit your lifestyle and budget. Whether you’re looking for a cozy studio, a spacious three-bedroom, or something in between, we have a wide variety of rental options in all the best neighborhoods.        
              </div>
                         </center>
            <div class="row">
            <div class="col-md-6 p-3">
            <div class="p-1" style="color: black; background-color: #ecf0f1; border: 1px solid #909497; border-radius: 0.3rem;">
                  <p class="intro">  Why Choose Us?
<ul>
    <li>Prime Locations: Find apartments in top neighborhoods with easy access to public transportation, shopping, dining, and entertainment.</li>
    <li>Wide Range of Options: From modern high-rise apartments to charming garden-style communities, we offer a selection that fits your needs.</li>
    <li>Flexible Lease Terms: We offer a variety of lease options to suit your lifestyle—whether you need short-term flexibility or a long-term home.</li>
    <li>Quality and Comfort: Enjoy spacious floor plans, modern amenities, and professionally managed properties to ensure a comfortable living experience.</li>

    </ul></p>
         </div>
               </div>
               <div class="col-md-6 p-3">
                    
             <img src="img/family.jpg" class="img-fluid"   alt="family" style="border: 2px solid black; border-radius: 10px;"> 
                </div>
            </div>
       </div>
           </div><!-- end of container-->
<br><br><br>
        <div class="container">
        <h2>Apartment for everyneed</h2>

        <div class="row g-4">
            <div class="col px-lg-3 px-md-5">
           <div class="card" style="width: 18rem; height: 300px;">
           <img src="img/petFriendly.jpg" class="card-img-top img-fluid" alt="petFriendly" style="height: 200px; object-fit: cover;">
                               <div class="card-body">
                        <p class="card-text">
                            <h5>Pet Friendly</h5>
                        </p>
                    </div>
            </div>
        </div>
        <div class="col px-lg-3 px-md-5">
           <div class="card" style="width: 18rem; height: 300px;">
           <img src="img/familyFriendly.png" class="card-img-top img-fluid" alt="familyFriendly" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">
                         <h5> Family Friendly</h5>
                        </p>
                    </div>
            </div>
        </div>

        <div class="col px-lg-3 px-md-5">
           <div class="card" style="width: 18rem; height: 300px;">
            
           <img src="img/instantBookable.jpg" class="card-img-top img-fluid" alt="instantBookable" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <p class="card-text">
                            <h5>Instantly Rentable</h5>
                        </p>
                    </div>
            </div>
        </div>
</div>
</div><!--end of row-->
</div><!-- end of container-->
<br><br>

<div class="container"><!--start of container--><!-- creating apartment list-->
<div class="row g-3">
<?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments WHERE apartment_id=1";
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?>
                     <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                        <img class="card-img-top" img src="img/<?php echo $value['apartment_img']; ?>" class="card-img-top" alt="apartment" alt="Title">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $value['apartment_name']?></h5>
          <span class="fs-5 badge bg-light text-dark fw-normal">starting from $ <strong><?php echo $value['price'];?></strong></span>
       
                            <p class="card-text">
                            <?php echo $value['title']?><br>
                                Address:<strong><?php echo $value['address']?></strong></p>
                            <div class="d-grid gap-2">
                            <a type="button" class="btn btn-outline-info btn-sm" href="apartment_details.php?apartment_id= <?php echo $value['apartment_id'];?>">Visit</a>                           
                         </div>
                        </div>
                          </div>
                              </div>
                                 <?php
                                     }
                                     ?>
                        <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments WHERE apartment_id=2";
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?> 
                             <div class="col-lg-4 col-md-4 col-12">
                    <div class="card" >
                        <img class="card-img-top" img src="img/<?php echo $value['apartment_img']; ?>" class="card-img-top" alt="apartment" alt="Title">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $value['apartment_name']?></h5>
          <span class="fs-5 badge bg-light text-dark fw-normal">starting from $ <strong>1400</strong></span>
       
                            <p class="card-text">
                            <?php echo $value['title']?><br>
                                Address:<strong><?php echo $value['address']?></strong></p>
                            <div class="d-grid gap-2">
                            <a type="button" class="btn btn-outline-info btn-sm" href="apartment_details.php?apartment_id= <?php echo $value['apartment_id'];?>" >Visit</a>
                        </div>
                        </div>
                          </div>
                             </div>
                             <?php
                                     }
                                          ?>
                             <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments WHERE apartment_id=3";
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?>
                             <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" img src="img/<?php echo $value['apartment_img']?>" class="card-img-top" alt="apartment" alt="Title">
                        <div class="card-body">
                        <h5 class="card-title"><?php echo $value['apartment_name']?></h5>

          <span class="fs-5 badge bg-light text-dark fw-normal">starting from $ <strong>1400</strong></span>
       
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
    </div><!--end of row-->
     <br><br>

     <svg style="display: none;"><!--Define the arrow-->
        <symbol id="arrow-right" viewBox="0 0 16 16">
            <path fill="currentColor" d="M9.5 3.5a.5.5 0 0 1 .5.5v2H14a.5.5 0 0 1 0 1H10v2.5a.5.5 0 0 1-1 0V7H2a.5.5 0 0 1 0-1h7V4a.5.5 0 0 1 .5-.5z"/>
        </symbol>
    </svg>

    <div class="row">

      <div class="col-md-3">
      <strong>In the City</strong><img src="img/city1.jpg" class="img-fluid" height=60 width=60 alt="city"><br>
      <strong>Experience life amidst the energy and activity.</strong>

      </div>

      <div class="col-md-3">
      <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="londonProperties.php">
      <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
      London properties for rent

      </a>
      <br>
      <br>

      <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="manchesterProperties.php">
            <svg class="bi" aria-hidden="true" width="16" height="16" fill="currentColor">
                <use href="#arrow-right"></use>
            </svg>
            Manchester properties for rent
        </a>
        <br>
      <br>

        <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="cambridgeProperties.php">
            <svg class="bi" aria-hidden="true" width="16" height="16" fill="currentColor">
                <use href="#arrow-right"></use>
            </svg>
           Cambridge properties for rent
        </a>
      </div>
      <div class="col-md-3">
      <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="liverpoolProperties.php">
            <svg class="bi" aria-hidden="true" width="16" height="16" fill="currentColor">
                <use href="#arrow-right"></use>
            </svg>
            Liverpool properties for rent
        </a>
        <br>
      <br>

        <a class="icon-link icon-link-hover" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="edinburghProperties.php">
            <svg class="bi" aria-hidden="true" width="16" height="16" fill="currentColor">
                <use href="#arrow-right"></use>
            </svg>
            Edinburgh properties for rent
        </a>
        <br>
      <br>

        
      </div>
      <div class="col-md-3">
       
       </div>
    </div><!--end of row-->
            </div><!-- end of container-->

    


















</div><!--end of container-->
</body>
<br>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.js' integrity='sha512-GTHq28lFyjvEmJ5HcqINJlsDRfYe7v0v6Ru7X8FyOUSngYz+KJs6v3iMiMxGN1z07sbd3zKH0H4WZ3sZMHUPHw==' crossorigin='anonymous'></script>

<?php include('footer.php')
?>