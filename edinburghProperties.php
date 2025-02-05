<?php include('header.php');?>
<br>

<div class="container"><!--start of container-->
  <div class="row">
<div class="col-md-8">
<?php
         include('backend/connect.php');
         $sql ="SELECT * FROM apartments where city_id=2";
     
         $query = $dbConn->prepare($sql);
         $query->execute();
         $result = $query->fetchAll();
        foreach($result as $key => $value){
       
       ?> 
      
<div class="card mb-3"  style="max-width: 800px;">
  <div class="row g-2">
    <div class="col-md-5">
      <img src="img/<?php echo $value['apartment_img'];?>" style="height: 100%; width: 100%;" alt="400X400">
    </div>

    <div class="col-md-7 col-sm-6">
      <div class="card-body">
      
        <h5 class="card-title"><?php echo $value['apartment_name'];?></h5>
        <strong> <?php echo $value['bedroom']?> Bed Flat to rent $<?php echo $value['price']?> pm</strong>
        <p class="card-text"><small class="text-body-secondary"><?php echo $value['title'];?></small></p>
        <strong>Located at: <?php echo $value['address'];?></strong><br>
        <a href="apartment_details.php?apartment_id= <?php echo $value['apartment_id'];?>" type="button" class="btn  btn-primary btn-md" style="float: right;">Visit</a>
      </div>
    </div>

  </div>
</div><!--end of row-->
<?php }?>
</div><!-- end of card-->

  <div class="col-md-4">
  <div class="card text-bg-light mb-3" >
  <div class="card-header">Currently available to rent in Edinburgh</div>
  <div class="card-body">
    <h5 class="card-title">All houses to rent in Edinburgh</h5>
   
    <a href="oneBedroom_edinburgh.php"><p class="card-text"> 1 Bed Flat to rent <br></a>
    <a href="twoBedroom_edinburgh.php">                      2 Bedroom Flat to rent<br></a>
    </p>
  
    
  </div>
</div>
<div class="mapouter"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=London&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" style="width: 370px; height: 350px;"></iframe><style>.mapouter{display:table;}.gmap_canvas{overflow:hidden;position:relative;height:350px;width:390px;background:#fff;}</style><a href="https://www.taxuni.com/south-dakota-sales-tax/">South Dakota Sales Tax</a><style>.gmap_canvas iframe{position:relative !important;z-index:2 !important;}.gmap_canvas a{color:#fff !important;position:absolute !important;top:0 !important;left:0 !important;z-index:0 !important;}</style></div></div>


</div>
</div><!-- end of main row-->
        </div><!--end of container-->
<br>

<?php include('footer.php');?>