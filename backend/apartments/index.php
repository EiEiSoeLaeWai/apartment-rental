<?php include('../loginheader.php')?>
<?php
     include('../../backend/connect.php');
    $sql = "SELECT * FROM apartments";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
?>
<br>
<div class="container">
<div class="container">

    <div class="row">
        <h3>Apartment Information</h3>
        <div class="col">
        <strong>Add from the company </strong> <a href="create.php" class="btn btn-outline-primary">Add</a>

        <a href="image_create.php" class="btn btn-primary">Add apartment photo</a>

        <a href="slider_image.php" class="btn btn-primary">Add photo for slider</a>

<br><br>
            <table class="table table-bordered table-hover" >
                 <tr>
                    <th>Apartment ID</th>
                    <th>Apartment Name</th>
                    <th>Price</th>
                    <th>Address</th>
                   <th>Room Arrangement</th>
                   <th>No.of bedroom</th>
                   <th>No.of bathroom</th>
                   <th>Located city</th>
                    <th>Action</th>
                    <th>Action</th>
                        <!-- <a href="create.php" class="btn btn-sm btn-info">Add Users</a> -->
                    </th>
                </tr>

                <?php
                    foreach ($result as $key => $value) {
                ?>
                    <tr>
                        <td>
                            <?php echo $value['apartment_id'];?>
                        </td>
                        <td>
                            <?php echo $value['apartment_name'];?>
                        </td>
                        <td>
                            <?php echo $value['price'];?>
                        </td>
                        
                        
                        <td>
                            <?php echo $value['address'];?>
                        </td>
                        <td>
                            <?php echo $value['title'];?>
                        </td>
                        <td>
                            <?php echo $value['bedroom'];?>
                        </td>
                        <td>
                            <?php echo $value['bathroom'];?>
                        </td>
                        <td>
<?php
                            if($value['city_id']==1){
                                echo "London";
                            }elseif($value['city_id']==2){
                                echo "Edinburgh";
                            }elseif($value['city_id']==3){
                                echo "Cambridge";
                            }elseif($value['city_id']==4){
                                echo "Liverpool";
                            }elseif($value['city_id']==5){
                                echo "Manchester";
                            }elseif($value['city_id']==6){
                                echo "Plymoth";
                            }
                            ?>
                            
                            </td>
   
                        <td>
                            <a href="delete.php?apartment_id=<?php echo $value['apartment_id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <a href="edit.php?apartment_id=<?php echo $value['apartment_id'];?>" class="btn btn-outline-primary">Edit</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>
</div>          
