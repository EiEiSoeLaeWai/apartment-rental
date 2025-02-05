<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Space- Ei Ei Soe Lae Wai</title>
    <link rel="stylesheet"  href="css/styles.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.css' integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
 
</head> 
<body>
   
<header>     
    
        
          
        <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
           
          

                  <div class="container-fluid">
                  <strong>Prime Space</strong>
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutUs.php">About Us</a>
                            </li>
                            
                           
                            <li class="nav-item">
                                <a class="nav-link active" href="toRent.php">To Rent</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="shareReview.php">Review</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="contactus.php">For landlord</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="availability.php">Availability</a>
                            </li>
                        </ul>
                        <form class="d-flex" action="search.php"  method="post">
        <input class="form-control me-2" name="pname"  type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" value=Search type="submit">Search</button> 
        <?php 
        if(!empty($_SESSION['email'])){
            ?>
          <a href='/backend/login/logout.php' class='ms-2 btn btn-info head'>Logout</a>
      <?php
        }else{
            ?>
        <a href="/backend/login/signin.php" class="ms-2 btn btn-primary head">Login</a>
<?php
        }
        ?>
      </form>
            </div>
              </div>
   
</nav>
</header>