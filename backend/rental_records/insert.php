<?php
    // include("header.php");
    include('../../backend/connect.php');


 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
       $name = $_POST['name'];
       $cus_id = $_POST['cus_id'];
      $email = $_POST['email'];
      $moveIn_date  = $_POST['moveIn_date'];
      $moveOut_date  = $_POST['moveOut_date'];
      $adult = $_POST['adult'];
      $apartment_name = $_POST['apartment_name'];
      $phone = $_POST['phone'];
      

  



$sql = "INSERT INTO rental_records(cus_id,name,email,moveIn_date,moveOut_date,adult,apartment_name,phone) VALUES(:cus_id,:name,:email,:moveIn_date,:moveOut_date,:adult,:apartment_name,:phone)";
$query = $dbConn->prepare($sql);
$query->execute(array(
    ':cus_id' => $cus_id,
    ':name' => $name,
    ':email' => $email,
    ':moveIn_date' => $moveIn_date,
    ':moveOut_date' => $moveOut_date,
    ':adult' => $adult,
    ':apartment_name' => $apartment_name,
    ':phone' => $phone,

));
$sql2 = "INSERT INTO tenants (cus_id, name, email, moveIn_date, moveOut_date,phone) 
                 VALUES (:cus_id, :name, :email, :moveIn_date, :moveOut_date,:phone)";
        $query2 = $dbConn->prepare($sql2);
        $query2->execute(array(
            ':cus_id' => $cus_id,
            ':name' => $name,
            ':email' => $email,
            ':moveIn_date' => $moveIn_date,
            ':moveOut_date' => $moveOut_date,
            ':phone' => $phone,
        ));


        header('location:index.php');


 }

?>


