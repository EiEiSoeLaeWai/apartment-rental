
<?php 
    
     include("backend/connect.php");


 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
       $name = $_POST['name'];
    
      $email = $_POST['email'];
      $phone = $_POST['phone'];


$sql = "INSERT INTO contacts (name,email,phone) VALUES(:name,:email,:phone)";
$query = $dbConn->prepare($sql);
$query->execute(array(
    ':name' => $name,
    ':email' => $email,
    ':phone' => $phone,
   
));
echo "<script>
alert('Form submitted successfully!');
window.location.href = 'contactus.php';
</script>";
 }
 include('header.php');
?>


<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317447.6997347848!2d-1.0665365500737283!3d51.56713075493198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48767692f6eeb4e9%3A0xfde6b7e116b3c456!2sLaleham%20Camping%20Club!5e0!3m2!1sen!2smm!4v1695397478720!5m2!1sen!2smm" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="row">
       
        <div class="col-md-6">
          <h3 class="texts">Are you a landlord??</h3>
        <h3 class="texts">Rent out your funsished apartments now!!</h3><br>
        <H4 class="texts">What is Prime Space?</H4>
        <br>
        <p style="font-family: Arial, sans-serif; font-size: 16px; color: black;">Prime Space is a top rental platform for monthly accommodations, used by some of the world's largest companies to find furnished apartments, co-living spaces, and serviced apartments.<br>
We’ll assist you through each step, from signing up to your first booking.
Start renting out your properties by signing up today!</p>
        </div>
        <div class="col-md-6">
        <h4 class="texts">Register now..</h4>
        <div class="p-3 text-primary-emphasis bg-light-subtle border border-light-subtle ">      
               <form action="contactus.php" method="post">
           <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="your email" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Phone number</label>
                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    <div id="emailHelp" class="form-text">We'll contact as soon as possible.</div>
                </div>
                <?php
    if(isset($_SESSION['email'])){
      ?>
    <button class="btn btn-outline-primary" type="submit" name="submit" value="submit">Submit</button>
    <?php
    }else{
      ?>
      <a class="btn btn-outline-primary" href="backend/login/signin.php" type="button">Submit</a>
      <?php
     }
    ?>

                </form>
    </div>
        </div>
    </div>
</div>

<div class="container">
<hr class="featurette-divider">
<div class="row g-3">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="border rounded-4 p-4 h-100">
          <h2 class="mb-3 text-primary">Phone</h2>
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="text-muted d-block"><i class="fa-light fa-phone me-2"></i>Telephone</span>
              <a href="tel:+1234567890" class="fs-5 text-decoration-none text-primary">+95 250 271 534</a>
            </li>
            <li>
              <span class="text-muted d-block"><i class="fa-light fa-mobile me-2"></i>Mobile</span>
              <a href="+95 332 897 210" class="fs-5 text-decoration-none text-primary">+95 332 897 210</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="border rounded-4 p-4 h-100">
          <h2 class="mb-3 text-dark">Email</h2>
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="text-muted d-block"><i class="fa-light fa-envelope me-2"></i>Inquiries</span>
              <a href="mailto:contact@PrimeSpace.info" class="fs-5 text-decoration-none text-dark">contact@PrimeSpace.info</a>
            </li>
            <li>
              <span class="text-muted d-block"><i class="fa-light fa-user-headset me-2"></i>Customer Support</span>
              <a href="mailto:contact@PrimeSpace.info" class="fs-5 text-decoration-none text-dark">contact@PrimeSpace.info</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="border rounded-4 p-4 h-100">
          <h2 class="mb-3 text-success">Address</h2>
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fs-5 text-success">25th Street, UK City, Middlesex, United Kingdom</span>
            </li>
            <li>
              <a href="https://www.google.com/maps/dir//Aptech+Qatar+Computer+Education+Centre,+Al+Andalus+Compound+(Between+%E2%80%9CThe+Mall%E2%80%9D+and+LuLu+Hypermarket+D-Ring+Road,+Old+Airport+Area,+Post+Box+15158+Doha/@25.1282937,46.861032,5z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3e45cf910e08feb3:0xd4aa7a447cd2c7d0!2m2!1d51.5428284!2d25.2541656"
                target="_blank" class="btn btn-lg btn-outline-danger"><i class="fa-light fa-location-dot me-2"></i>Get
                directions</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
  <br>
<?php include('footer.php');?>