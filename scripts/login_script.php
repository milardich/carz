<?php
session_start();
include '../includes/autoLoader.php';

Database::Connect();

if(!empty($_POST["email"]) && !empty($_POST["password"])){
    $authentication = new Authentication();
    $isAuthenticated = $authentication->Authenticate($_POST["email"], $_POST["password"]);
    if($isAuthenticated){
        $user_data = (new User())->GetUserDataByEmail($_POST["email"]);
        $_SESSION["LOGGED_IN_USER_ID"] = $user_data['user_id'];
        echo "\nLOGGED USER ID: " . $_SESSION["LOGGED_IN_USER_ID"];
        Header("Location: ../index.php");
    }else{
        Header("Location: ../pages/login_page.php?failed=true");
    }
}
else{
    header('Location: ../pages/login_page.php');
}
