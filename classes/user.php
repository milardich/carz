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

    public function GetUserDataById($user_id){
        $user_data = array();
        $sql = "SELECT * FROM users WHERE user_id = '$user_id'";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $user_data = array(
                'user_id' => $row["user_id"],
                'user_email' => $row["user_email"],
                'username' => $row["username"],
                'profile_picture_url' => $row["profile_picture_url"],
                'user_phone' => $row["user_phone"]
            );
        }
        else{
            $user_data = array(
                'user_id' => "-",
                'user_email' => "-",
                'username' => "-",
                'profile_picture_url' => "-",
                'user_phone' => "-"
            );
        }
        return $user_data;
    }
}