<?php
session_start();
require_once("include/dbconn.php");
require_once("include/functions.php");

if (isset($_POST['login'])) {
    
    $UserName = $_POST['username'];
    $Password = $_POST['password'];

    $loginResult = checkLogin($UserName, $Password, $ConnStrx);

    if($loginResult['authenticated'] == true)
    {
        $_SESSION['user_id'] = $loginResult['user_id'];
        $_SESSION['username'] = $loginResult['username'];
        $_SESSION['fullname'] = $loginResult['fullname'];
        $_SESSION['isAdmin'] = $loginResult['isAdmin'];
        if ($_SESSION['isAdmin'] == 1)
        {
            header("Location: dashboard.php");
            exit();
        }
        else
        {
            header("Location: smspage.php");
            exit();
        }
    }
    else
    {
        echo '<script>alert("Incorrect username or password. Please try again.");';
        echo 'window.location.href = "logon.php";</script>';
    }
} 

?>
