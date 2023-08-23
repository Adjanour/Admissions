<?php   
require_once("include/dbconn.php");

if (isset($_POST['submit']))
{
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

        

    $querry = "INSERT INTO applicant_details( title, surname, firstname, middlename,email,username, password, secretcode, dateofbirth, placeofbirth,programme) Values ('$title','$surName','$firstName','$middleName','$email','$userName','$password','$secretCode','$dateOfBirth','$placeOfBirth','$programme')" ; 
    $result = mysqli_query($ConnStrx,$querry);
    
    if ($result)
    {
        header("location:view.php");
        
    }
    else 
    {
        echo "There is an error in your QUERY statment. Please check and try again";
    }
}

else 
{
    echo "There is an error in your QUERY statment. Please check and try again";
}

?>