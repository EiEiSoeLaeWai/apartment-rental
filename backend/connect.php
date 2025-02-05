<?php
 $dbname = "apartment_rental";
   $username = "root";
   $password = "";
   $port = "3306";
     try{
   $dbConn = new PDO('mysql:host=localhost;dbname='.$dbname,$username,$password);
 
     // set the PDO error mode to exception
     $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     }
 catch(PDOException $e)
     {
     echo "Connection failed: " . $e->getMessage();
     }
     ?>