<?php
include('../../backend/connect.php'); // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Retrieve the form data
    $cus_id = $_POST['cus_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $adult = $_POST['adult'];
    $moveIn_date = $_POST['moveIn_date'];
    $moveOut_date = $_POST['moveOut_date'];
    $apartment_name = $_POST['apartment_name'];
    $phone = $_POST['phone'];

    // Get the id from the URL parameter
    $id = $_GET['id'];

    // Begin the transaction
    $dbConn->beginTransaction();

    try {
        // First, update the rental_records table
        $sql = "UPDATE rental_records 
                SET cus_id = :cus_id, name = :name, email = :email, adult = :adult ,moveIn_date = :moveIn_date, moveOut_date = :moveOut_date,apartment_name = :apartment_name, phone = :phone 
                WHERE id = :id"; // Only update the record with this specific id

        $query = $dbConn->prepare($sql);

        // Bind the parameters
        $query->bindParam(':cus_id', $cus_id);
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':adult', $adult);
        $query->bindParam(':moveIn_date', $moveIn_date);
        $query->bindParam(':moveOut_date', $moveOut_date);
        $query->bindParam(':apartment_name', $apartment_name);
        $query->bindParam(':phone', $phone);
        $query->bindParam(':id', $id); // Bind the ID

        // Execute the query
        $query->execute();

        // Now, update the tenants table
        $sql2 = "UPDATE tenants 
                 SET name = :name, email = :email, moveIn_date = :moveIn_date, moveOut_date = :moveOut_date, 
                 phone = :phone 
                 WHERE cus_id = :cus_id"; // Update tenant with the matching cus_id

        $query2 = $dbConn->prepare($sql2);

        // Bind the parameters for tenants table
        $query2->bindParam(':cus_id', $cus_id);
        $query2->bindParam(':name', $name);
        $query2->bindParam(':email', $email);
        $query2->bindParam(':moveIn_date', $moveIn_date);
        $query2->bindParam(':moveOut_date', $moveOut_date);
        $query2->bindParam(':phone', $phone);

        // Execute the query
        $query2->execute();

        // Commit the transaction if both updates succeed
        $dbConn->commit();

        echo "Record updated successfully in both tables.";
    } catch (Exception $e) {
        // Rollback the transaction if something goes wrong
        $dbConn->rollBack();
        echo "Failed to update records: " . $e->getMessage();
    }

    // Redirect to index or another page
    header('location:index.php');
}
?>
