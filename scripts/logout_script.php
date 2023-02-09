<?php
session_start();
if(isset($_SESSION["LOGGED_IN_USER_ID"])){
    unset($_SESSION["LOGGED_IN_USER_ID"]);
    session_destroy();
}
Header("Location: ../index.php");
exit();
?>