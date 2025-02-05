<?php   include('../../backend/connect.php');

 
    // Assuming $dbConn is your database connection
    
    // Start a transaction
    $dbConn->beginTransaction();
    
    try {
        // First delete from rental_record table
        $sql1 = "DELETE FROM apartments WHERE apartment_id = :apartment_id";
        $query1 = $dbConn->prepare($sql1);
        $query1->bindParam(':apartment_id', $_GET['apartment_id']);
        $query1->execute();
    
        // Then delete from tenants table
        $sql2 = "DELETE FROM images WHERE apartment_id = :apartment_id";
        $query2 = $dbConn->prepare($sql2);
        $query2->bindParam(':apartment_id', $_GET['apartment_id']);
        $query2->execute();
    
        // Commit the transaction if both deletions are successful
        $dbConn->commit();
    } catch (Exception $e) {
        // Rollback the transaction if something goes wrong
        $dbConn->rollBack();
        echo "Failed to delete record: " . $e->getMessage();
    }
    
    

    header('location:index.php');

?>