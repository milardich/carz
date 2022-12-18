<?php

include_once 'database.php';

class ImageHandler{

    public function UploadImage($img, $path){
        if(move_uploaded_file($img["tmp_name"], $path .  $img["name"])){
            //echo "<br>Image uploaded: " . $img["name"] . " [ images/".$img["name"] . " ]"; 
            return true;
        } 
        //echo "<br>Error uploading img";
        return false;
    }
}