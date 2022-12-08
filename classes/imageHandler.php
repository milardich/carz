<?php

include_once 'database.php';

class ImageHandler{

    public function UploadImage($img){
        
        $rand_prefix = $this->generateRandomString();

        if(move_uploaded_file($img["tmp_name"], "images/" . $rand_prefix .  $img["name"])){
            echo "\n";
            echo "Image uploaded: " . $img["name"] . " [images/".$img["name"]; 
        }
        else{
            echo "Error uploading img";
        }
    }

    private function generateRandomString($length = 15){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}