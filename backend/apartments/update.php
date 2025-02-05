<?php
include('../../backend/connect.php'); // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Retrieve and sanitize the form data
    $apartment_name = htmlspecialchars($_POST['apartment_name']);
    $price = htmlspecialchars($_POST['price']);
    $info = htmlspecialchars($_POST['info']);
    $map = htmlspecialchars($_POST['map']);
    $address = htmlspecialchars($_POST['address']);
    $title = htmlspecialchars($_POST['title']);
    $bedroom = intval($_POST['bedroom']);
    $bathroom = intval($_POST['bathroom']);
    $city_id = intval($_POST['city_id']);

    // Get the id from the URL parameter
    $apartment_id = intval($_GET['apartment_id']);

    // Begin the transaction
    $dbConn->beginTransaction();

    try {
        // Update query
        $sql = "UPDATE apartments 
                SET apartment_name = :apartment_name, price = :price, info = :info, map = :map, address = :address, 
                    title = :title,  bedroom = :bedroom, bathroom = :bathroom, city_id = :city_id
                WHERE apartment_id = :apartment_id";

        $query = $dbConn->prepare($sql);

        // Bind the parameters
        $query->bindParam(':apartment_name', $apartment_name);
        $query->bindParam(':price', $price);
        $query->bindParam(':info', $info);
        $query->bindParam(':map', $map);
        $query->bindParam(':address', $address);
        $query->bindParam(':title', $title);
        $query->bindParam(':bedroom', $bedroom, PDO::PARAM_INT);
        $query->bindParam(':bathroom', $bathroom, PDO::PARAM_INT);
        $query->bindParam(':city_id', $city_id, PDO::PARAM_INT);
        $query->bindParam(':apartment_id', $apartment_id, PDO::PARAM_INT);

        // Execute the query
        $query->execute();

        // Commit the transaction
        $dbConn->commit();

        // Redirect to the index or another page
        header('location:index.php');
        exit(); // Important to prevent further script execution
    } catch (Exception $e) {
        // Rollback in case of error
        $dbConn->rollBack();
        // Log the error instead of echoing (to avoid exposing sensitive info)
        error_log("Failed to update record: " . $e->getMessage());
        echo "Failed to update records. Please try again later.";
    }
}
?>
