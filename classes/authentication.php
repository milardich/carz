<?php
include_once 'database.php';

class Authentication {
    public function Authenticate($email, $password){
        $sql = "SELECT user_email, user_password FROM users WHERE user_email = '$email' AND user_password = '$password'";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            return true;
        }
        return false;
    }
}