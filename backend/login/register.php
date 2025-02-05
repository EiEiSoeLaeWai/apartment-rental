
<?php
    
    // include("header.php");
     include("../../backend/connect.php");


 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
       $name = $_POST['name'];
    
      $email = $_POST['email'];
      $password = $_POST['password'];

  



$sql = "INSERT INTO users(name,email,password) VALUES(:name,:email,:password)";
$query = $dbConn->prepare($sql);
$query->execute(array(
    ':name' => $name,
    ':email' => $email,
    ':password' => $password,
   
));
header('location:signin.php');
 }
 include('../adminheader.php');






// mysqli_close($con);
?>

<div class="container">

    <section class="myform-area">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="form-area login-form">
                              <div class="form-content">
                                  <h2>Prime Space-Your Dream Home</h2>
                                 <img src="../../img/apartment3.jpg" alt="This is image" height="300"      width="100%"> 
                                

                              </div>
                              <div class="form-input">
                                  <h2>Register Form</h2>
                                  <form action="register.php" method="post">
                                      <div class="form-group">
                                          <input type="text" name="name"  id="" required>
                                          <label>Name</label>
                                      </div>
                                      <div class="form-group">
                                          <input type="email" name="email"  id="" required>
                                          <label>email</label>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" name="password"  id="" required>
                                          <label>Password</label>
                                      </div>
                                      <div class="myform-button">
                                    
                                           <button class="myform-btn" name="submit" value="submit">Register</button>
                      
                                      </div>
                                    
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>










</div><!--end of container-->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.js' integrity='sha512-GTHq28lFyjvEmJ5HcqINJlsDRfYe7v0v6Ru7X8FyOUSngYz+KJs6v3iMiMxGN1z07sbd3zKH0H4WZ3sZMHUPHw==' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.js' integrity='sha512-GTHq28lFyjvEmJ5HcqINJlsDRfYe7v0v6Ru7X8FyOUSngYz+KJs6v3iMiMxGN1z07sbd3zKH0H4WZ3sZMHUPHw==' crossorigin='anonymous'></script>





