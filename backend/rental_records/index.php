<?php include('../loginheader.php')?>
<?php
     include('../../backend/connect.php');
    $sql = "SELECT * FROM rental_records";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
?>
<br>

<div class="container">

    <div class="row">
        <h3>Rental Records Information</h3>
        <div class="col-md-12">
        <strong>Add from the company </strong> <a href="create.php" class="btn btn-primary">Add</a>

            <table class="table table-bordered table-hover" >
                 <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number of people</th>
                    <th>Move In date</th>
                    <th>Move Out date</th>
                    <th>Apartment name</th>
                    <th>Phone Number</th>
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
                            <?php echo $value['cus_id'];?>
                        </td>
                        <td>
                            <?php echo $value['name'];?>
                        </td>
                        <td>
                            <?php echo $value['email'];?>
                        </td>
                        <td>
                            <?php echo $value['adult'];?>
                        </td>
                        <td>
                            <?php echo $value['moveIn_date'];?>
                        </td>
                        <td>
                            <?php echo $value['moveOut_date'];?>
                        </td>
                        <td>
                            <?php echo $value['apartment_name'];?>
                        </td>
                        <td>
                            <?php echo $value['phone'];?>
                        </td>
                        <td>
                            <a href="delete.php?cus_id=<?php echo $value['cus_id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $value['id'];?>" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>
                
