<?php
session_start();
if(isset($_SESSION["LOGGED_IN_USER_ID"])){
    unset($_SESSION["LOGGED_IN_USER_ID"]);
    session_destroy();
}
//echo "Session user id: " . $_SESSION["LOGGED_IN_USER_ID"];
Header("Location: index.php");
exit();
?>