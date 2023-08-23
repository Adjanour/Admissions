<?php

    require_once("include/dbconn.php");

    if(isset($_POST['update']))
    {
        $ID = $_GET['ID'];
        $title =  $_POST['title'];
        $surName = $_POST['surname'];
        $firstName = $_POST['firstname'];
        $middleName = $_POST['middlename'];
        $dateOfBirth =  $_POST['dateofbirth'];
        $placeOfBirth =  $_POST['placeofbirth'];
        $userName = $_POST['username'];
        $email = $_POST['email'];
        $password =$_POST['password'];
        $secretCode =$_POST['secretcode'];
        $programme = isset($_POST['programme']) ? "Diploma" : "Degree";

        $querry = "UPDATE applicant_details SET title='".$title."',surname='".$surName."',firstname='".$firstName."',middlename='".$middleName."',email='".$email."',username='".$userName."',password='".$password."',secretcode='".$secretCode."',dateofbirth='".$dateOfBirth."',placeofbirth='".$placeOfBirth."',programme='".$programme."' WHERE Id ='".$ID."'";
        $result = mysqli_query($ConnStrx,$querry);

        if ($result)
        {
            header("location:view.php");
        }
        else
        {
            echo "Please Check your Query";
        }

    }
?>