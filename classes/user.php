<?php
include_once 'database.php';
class User { // mby change this to UserHandler
    public function GetUserDataByEmail($user_email){
        $sql = "SELECT * FROM users WHERE user_email = '$user_email'";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            return $result->fetch_assoc();
        }
        return null;
    }

    public function GetUserProfilePicture($user_id){
        $sql = "SELECT profile_picture_url FROM users WHERE user_id = '$user_id'";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            return $result->fetch_assoc()["profile_picture_url"];
        }
        return null;
    }
}