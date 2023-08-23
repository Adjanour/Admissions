<?php 
require_once("include/dbconn.php");

$query = "SELECT * FROM applicant_details";
$result = mysqli_query($ConnStrx, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <!-- Add Bootstrap CSS link -->
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
      
    <div class="container">
        <div class="row">
            <div class="col m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-secondary text-white text-center py-3"> List Of Registered Applicants</h3>
                    </div>
                    <div class="card-body">
                        <table class="table  table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date of Birth</th>
                                <th>Place of Birth</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Secret Code</th>
                                <th>Programme</th>
                            </tr>
                            <?php
                                while ($row = mysqli_fetch_assoc($result))
                                {
                                    $ID = $row['Id'];
                                    $title =  $row['title'];
                                    $surName = $row['surname'];
                                    $firstName = $row['firstname'];
                                    $middleName = $row['middlename'];
                                    $dateOfBith =  $row['dateofbirth'];
                                    $placeOfBirth =  $row['placeofbirth'];
                                    $userName = $row['username'];
                                    $email = $row['email'];
                                    $password =$row['password'];
                                    $secretCode =$row['secretcode'];
                                    $programme = $row['programme'];
                                    ?>
                        
                                    <tr>
                                        <td><?php echo $ID?></td>
                                        <td><?php echo $title . " ". $surName . " " . $middleName . " " . $firstName ?></td>
                                        <td><?php echo $email?></td>
                                        <td><?php echo $dateOfBith?></td>
                                        <td><?php  echo $placeOfBirth ?></td>
                                        <td><?php  echo $userName ?></td>
                                        <td><?php  echo $password ?></td>
                                        <td><?php  echo $secretCode ?></td>
                                        <td><?php  echo $programme ?></td>
                                        <td><a class="btn btn-primary" href="edit.php?ID=<?php echo $ID ?>">Edit </a>  |  <a class="btn btn-danger" href="delete.php?Del=<?php echo $ID?>">Delete</a></td>
                                    </tr>
                                    
                                    <?php
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
