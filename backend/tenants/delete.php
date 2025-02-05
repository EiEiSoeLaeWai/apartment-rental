<?php   include('../../backend/connect.php');

 
    // Assuming $dbConn is your database connection
    
    // Start a transaction
    $dbConn->beginTransaction();
    
    try {
        // First delete from rental_record table
        $sql1 = "DELETE FROM rental_records WHERE cus_id = :cus_id";
        $query1 = $dbConn->prepare($sql1);
        $query1->bindParam(':cus_id', $_GET['cus_id']);
        $query1->execute();
    
        // Then delete from tenants table
        $sql2 = "DELETE FROM tenants WHERE cus_id = :cus_id";
        $query2 = $dbConn->prepare($sql2);
        $query2->bindParam(':cus_id', $_GET['cus_id']);
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