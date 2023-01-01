<?php
include_once 'database.php';

class RegistrationHandler {
    private $_user_password;
    private $_username;
    private $_profile_picture_url;
    private $_user_phone;
    private $_user_email;

    public function SetProfilePictureUrl($profile_picture_url)
    {
        $this->_profile_picture_url = $profile_picture_url;
    }

    public function SetUserEmail($user_email)
    {
        $this->_user_email = $user_email;
    }

    public function SetUserPassword($user_password)
    {
        $this->_user_password = $user_password;
    }

    public function SetUsername($username)
    {
        $this->_username = $username;
    }

    public function SetUserPhone($user_phone)
    {
        $this->_user_phone = $user_phone;
    }

    public function Register() {
        $sql = "INSERT INTO users (user_email, user_password, username, profile_picture_url, user_phone) VALUES (
            '$this->_user_email', '$this->_user_password', '$this->_username', '$this->_profile_picture_url', '$this->_user_phone'                                                                                         
        )";
        $result = Database::Connect()->query($sql);
        if(!$result){
            echo "Failed!";
        }
    }
}