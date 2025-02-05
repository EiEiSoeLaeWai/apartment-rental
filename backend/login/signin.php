<?php
// session_start();
include('../adminheader.php');
if (isset($_SESSION['attempt_again'])) {
  $now = time();
  if ($now >= $_SESSION['attempt_again']) {
    unset($_SESSION['attempt']);
    unset($_SESSION['attempt_again']);
    unset($_SESSION['msg']);
  }
 
}
$disable = '';
if(isset($_SESSION['attempt']) && $_SESSION['attempt'] >= 3){
  $disable = 'disabled';
}


?>

<div class="container">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <?php
      if (isset($_SESSION['msg'])) {
      ?>
<div class="alert alert-success">
            <?php
          echo $_SESSION['msg'];
          ?>
        </div>
      <?php
      }
      ?> 
      </div>
    </div>
   
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
   
</head>
<body> -->
    
  <section class="myform-area">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <div class="form-area login-form">
                              <div class="form-content">
                                  <h2>Prime Space-Your Dream Home</h2>
                                 <img src="../../img/apartment3.jpg" alt="This is image" height="300" width="100%"> 
                                

                              </div>
                              <div class="form-input">
                                  <h2>Login Form</h2>
                                  <form action="loginsuccess.php" method="post">
                                      <div class="form-group">
                                          <input type="text" name="email"  id="" required>
                                          <label>Email</label>
                                      </div>
                                      <div class="form-group">
                                          <input type="password" name="password"  id="" required>
                                          <label>password</label>
                                      </div>
                                      <div class="g-recaptcha" data-sitekey="6Le6xOYoAAAAAI3O5x7ZdXOf6cNdgLe7gDI_1l_c"></div>
                                      <div class="myform-button">
                                    
                                           <button class="myform-btn"  <?php echo $disable; ?> >Login</button><br><br>
                                         <a href="register.php" ><button class="myform-btn" type="button">Register</button></a><br>

                      
                                      </div>
                                      <?php
        if (isset($_SESSION['check']) == 1) {
        ?>
          <a href="logout.php" class="btn btn-success">Reset</a>
        <?php
        }
        ?>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
      </div>
</body>
</html>


