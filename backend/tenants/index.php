<?php 
// session_start();

// // Check if the user is logged in and is an admin
// if (!isset($_SESSION['email']) || $_SESSION['role'] !== 'admin') {
//     // If not, redirect them to the login page
//     header('Location: /backend/login/signin.php');
//     exit();
// }

// The rest of the page's code goes here (only accessible by admins)



include('../loginheader.php')?>
<?php
     include('../../backend/connect.php');
    $sql = "SELECT * FROM tenants";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
?>
<br>
<div class="container">
    <div class="row">
        <h3>Tenants Information</h3>
        <div class="col-md-12">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Move In date</th>
                    <th>Move Out date</th>
                    <th>Phone Number</th>
                    <th>Action
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
                            <?php echo $value['moveIn_date'];?>
                        </td>
                        <td>
                            <?php echo $value['moveOut_date'];?>
                        </td>
                        <td>
                            <?php echo $value['phone'];?>
                        </td>
                        <td>
                            <a href="delete.php?cus_id=<?php echo $value['cus_id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                       
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>

