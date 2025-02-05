<?php include('header.php');?>
<br>
<div class="container"><!--start of container-->
<div class="row g-3">
    <div class="col-md-6">
    <div class="p-3 text-primary-emphasis bg-light-subtle border border-primary-subtle rounded-3">
    <h3>Properties to Rent</h3>
    Search area
    <form class="d-flex" action="search.php"  method="post">
       
        <input class="form-control me-2" name="pname"  type="search" placeholder="Enter location" aria-label="Search">
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
<br>

<?php include('footer.php')?>

       