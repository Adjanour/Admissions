<?php

    require_once("include/dbconn.php");

    if(isset($_GET['Del']))
    {
        $ID = $_GET['Del'];


        $querry = "DELETE FROM applicant_details WHERE id = '".$ID."'";
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
    else
    {
        header("location :view.php");
    }

?>