<?php
require_once("include/dbconn.php");
$ID = $_GET['ID'];
$query = "SELECT * FROM applicant_details where id = '".$ID."'";

$result = mysqli_query($ConnStrx, $query);
while($row = mysqli_fetch_assoc($result))
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>              
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- Add Bootstrap CSS link -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
    <div class="card-header" style="display: flex; justify-content:center;"><h3>Edit your Details</h3></div>

<h3>Undergraduste programme</h3>
            <input type="radio"  name="programme" value="Degree" <?php if($programme == "Degree") echo "checked"  ?>> Degree <br>
            <input type="radio" name="programme" value="Diploma" <?php if($programme == "Diploma") echo "checked"  ?> > Diploma
<form action="update.php?ID=<?php echo $ID ?>" method="post">
            <fieldset>
                <legend>
                </legend>
                <table>
                    <h3 class="text">Applicant's name must correspond to those used for all examinations taken </h3>
                    <tr>
                        <td><label for="title" class="label" >Title (Mr/Mrs/Ms)</label></td>
                        <td><select name="title" id="selected-title">
                            <option value="<?php echo $title ?>"><?php echo $title ?></option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Ms.">Ms.</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="Name"class="label">Name</label></td>
                        <td><input type="text" class="input-field" name="surname" id="surname" placeholder="surname" value="<?php echo $surName ?>"></td>
                        <td><input type="text" class="input-field" name="firstname" id="first-name" placeholder="Firstname" value="<?php echo $firstName?>" ></td>
                        <td><input type="text" class="input-field" name="middlename" id="middle-name" placeholder="Middle Name" value="<?php echo $middleName ?>" ></td>
                    </tr>
                    <tr>
                        <td><label for="email"class="label">Email</label></td>
                        <td><input type="email" class="input-field" name="email" id="email" placeholder="Enter email" value="<?php echo $email ?>" ></td>
                    </tr>
                    <tr>
                        <td><label for=""class="label">Date of Birth</label></td>
                        <td > <input type="date" name="dateofbirth" value="<?php echo  $dateOfBith ?>"></td>
                    </tr>
                    <tr>
                        <td><label for=""class="label">Place of Birth</label></td>
                       <td><input type="text" name="placeofbirth" placeholder="Enter the place of birth" value="<?php echo $placeOfBirth ?>"></td>
                    </tr>
                </table>
            </fieldset>
            <fieldset>
                <table>
                    <tr>
                        <td><label for="username"class="label">Username</label></td>
                        <td><input type="text" class="input-field" name="username" id="user-name" placeholder="Enter Username" value="<?php echo  $userName ?>" ></td>
                    </tr>
                    <tr>
                        <td><label for="password"class="label">Password</label></td>
                        <td><input type="password" class="input-field" name="password" id="password" placeholder="" value="<?php echo $password ?>" ></td>
                    </tr>
                    <tr>
                        <td><label for="secret-code"class="label"> Secret Code</label></td>
                        <td><input type="text" class="input-field" name="secretcode" id="secret-code" value="CUCG-001" readonly="readonly"></td>
                    </tr>
                </table>
            </fieldset>
            <input type="submit" name="update" class="btn btn-primary" value="Update">
</form>
</div>
</body>
<script type="text/javascript" src="js/bootstrap.js"></script>

</html>


