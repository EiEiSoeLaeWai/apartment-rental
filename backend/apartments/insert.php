<?php
    // include("header.php");
    include('../../backend/connect.php');


 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
       $apartment_name = $_POST['apartment_name'];
       $price = $_POST['price'];
      $info = $_POST['info'];
      $map  = $_POST['map'];
      $address  = $_POST['address'];
      $title = $_POST['title'];
      $bedroom = $_POST['bedroom'];
      $bathroom = $_POST['bathroom'];
      $city_id = $_POST['city_id'];
      

  



$sql = "INSERT INTO apartments(apartment_name,price,info,map,address,title,bedroom,bathroom,city_id) VALUES(:apartment_name,:price,:info,:map,:address,:title,:bedroom,:bathroom,:city_id)";
$query = $dbConn->prepare($sql);
$query->execute(array(
    ':apartment_name' => $apartment_name,
    ':price' => $price,
    ':info' => $info,
    ':map' => $map,
    ':address' => $address,
    ':title' => $title,
    ':bedroom' => $bedroom,
    ':bathroom' => $bathroom,
    ':city_id' => $city_id,


));


        header('location:index.php');


 }

?>


