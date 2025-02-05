<?php include('header.php');?>
<br><br>

<div class="container">
<div class="container bg-light-subtle text-dark py-2 px-2 rounded-5 shadow-lg mb-2">
        <h3 class="text-center mb-3">Prime Space Check Available to Rent </h3>
      
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
                        <input name="address" type="text" class="form-control form-control-lg" placeholder="1" min="1" autocomplete="off" required value="1">
                        <label for="guests"><img width="24" height="24" src="https://img.icons8.com/fluency-systems-regular/48/user.png" alt="user"/>Location</label>
                    </div> -->

                    <div class="form-floating">
                        <select name="apartment_id" class="form-select form-select-lg" autocomplete="off">
                            <option  selected disabled>Choose apartment</option>
                            <?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments";
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?>
                            <option value="<?php echo $value['apartment_id'];?>"><?php echo $value['apartment_name'];?></option>
                            <?php }
                        ?>
                        </select>
                       
                        <label for="pitch_type"><img width="24" height="24" src="https://img.icons8.com/color/48/tent.png" alt="tent"/> Apartment name</label>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary head">Check Availability</button>
                </div>
        </form>
</div>
</div><!--end of container-->
<div class="container"><!--start of container-->
<div class="row g-3">
    <div class="col-md-6">
    <div class="p-3 text-primary-emphasis bg-light-subtle border border-primary-subtle rounded-3">
    <h3>Properties to Rent</h3>
    Search area
    <form class="d-flex" action="search.php"  method="post">
       
        <input class="form-control me-2" name="pname"  type="search" placeholder="Search" aria-label="Search">
        <input type="submit" class="btn btn-outline-primary" value="Search" class="head">
</form>
<br>
        <h4>Feel good places and stunning spaces</h4>
        <p>Discover timeless exteriors and modern open plan living. </p>
        <img src="img/london.png" class="img-fluid" alt="This is image">
    </div>
   
      
</div>
    <div class="col-md-6">
    <div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=London&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 630px; height: 400px;"></iframe><style>.mapouter{display:table;}.gmap_canvas{overflow:hidden;position:relative;height:400px;width:550px;background:#fff;}</style><a href="https://www.taxuni.com/california-property-tax/">California Property Tax</a><style>.gmap_canvas iframe{position:relative !important;z-index:2 !important;}.gmap_canvas a{color:#fff !important;position:absolute !important;top:0 !important;left:0 !important;z-index:0 !important;}</style></div></div>
   
    </div>
</div>
</div><!--end of container-->
<br><br>
<div class="container"><!--start of container--><!-- creating apartment list-->
<div class="row g-3">
<?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments WHERE city_id=1";
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
                       
    </div><!--end of row-->
     <br><br>

<div class="container"><!--start of container-->
<div class="row">
    <div class="col">
        <center>
        <h3>More properties to rent..</h3></center>
        </div>
</div><!--end of row-->
<br>
<svg style="display: none;"><!--Define the arrow-->
        <symbol id="arrow-right" viewBox="0 0 16 16">
            <path fill="currentColor" d="M9.5 3.5a.5.5 0 0 1 .5.5v2H14a.5.5 0 0 1 0 1H10v2.5a.5.5 0 0 1-1 0V7H2a.5.5 0 0 1 0-1h7V4a.5.5 0 0 1 .5-.5z"/>
        </symbol>
    </svg>

    <div class="row">

      <div class="col-md-3">
     <h4>Explore UK regions

     Move anywhere in the UK</h4> 
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

</div><!--end of container-->

                                    </div>
                                    <br><br>

<?php include('footer.php');?>