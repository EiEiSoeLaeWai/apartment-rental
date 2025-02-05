<?php
include('../loginheader.php');
   include('../../backend/connect.php'); // Include your database connection

   if (isset($_POST['submit'])) {
       $apartment_id = $_POST['apartment_id'];

       // Check if an apartment ID is selected
       if (empty($apartment_id)) {
           echo "<script>alert('Please select an apartment ID.');</script>";
       } elseif ($_FILES['image']['error'] === 4) {
           // Check if the image file is uploaded
           echo "<script>alert('No image uploaded. Please upload an image.');</script>";
       } else {
           // Get file information
           $fileName = $_FILES['image']['name'];
           $fileSize = $_FILES['image']['size'];
           $tmpName = $_FILES['image']['tmp_name'];

           // Valid file extensions
           $validImageExtension = ['jpg', 'jpeg', 'png'];
           $imageExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

           // Validate the file extension
           if (!in_array($imageExtension, $validImageExtension)) {
               echo "<script>alert('Invalid image extension. Please upload a jpg, jpeg, or png file.');</script>";
           } elseif ($fileSize > 1000000) { // Set file size limit, e.g., 1MB
               echo "<script>alert('Image size is too large. Please upload an image smaller than 1MB.');</script>";
           } else {
               // Rename the image
               $newImageName = uniqid() . '.' . $imageExtension;

               // Move the uploaded file to the 'img' folder
               move_uploaded_file($tmpName, '../../img/' . $newImageName);

               // Prepare the SQL query to update the 'apartments' table
               $query = "UPDATE apartments SET apartment_img = :image WHERE apartment_id = :apartment_id";
               $stmt = $dbConn->prepare($query);

               // Bind parameters
               $stmt->bindParam(':image', $newImageName);
               $stmt->bindParam(':apartment_id', $apartment_id);

               // Execute the query
               if ($stmt->execute()) {
                   echo "<script>alert('Image successfully added to the apartment!');</script>";
                   header('location:index.php'); // Redirect after successful upload
                   exit();
               } else {
                   echo "<script>alert('Failed to update the apartment image. Please try again.');</script>";
               }
           }
       }
   }
?>

<br>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="bg-light-subtle text-black border border-primary-subtle p-3 mb-3">
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <h4>Add Apartments Photos</h4> 
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <!-- Apartment ID selection -->
                            <label for="apartment_id">Select Apartment ID:</label>
                            <select name="apartment_id" id="apartment_id" class="form-select form-select-lg" autocomplete="off" required>
                                <option value="">--Select Apartment--</option>
                                <?php
                                    // Fetch all apartment IDs from the database
                                    $query = $dbConn->query("SELECT apartment_id, apartment_name FROM apartments");
                                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                        echo "<option value='".$row['apartment_id']."'>".$row['apartment_name']." (ID: ".$row['apartment_id'].")</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="image" class="form-label">Image :</label>
                            <input  class="form-control" type="file" name="image" id="image" accept=".jpg, .jpeg, .png" required>

                        </div>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


