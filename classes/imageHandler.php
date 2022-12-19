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


    /*
     * because $_FILES is weird when working with multiple files 
     * (vardump $_FILES["example_multiple_files"] to see why)
     */
    public function NormalizeFileArrayStructure($fileArray){
        $elements = array();
        for($i = 0; $i < count($fileArray["name"]); $i++){
            $elements[] = array(
                'name' => $fileArray["name"][$i],
                'full_path' => $fileArray["full_path"][$i],
                'type' => $fileArray["type"][$i],
                'tmp_name' => $fileArray["tmp_name"][$i],
                'error' => $fileArray["error"][$i],
                'size' => $fileArray["size"][$i]
            );
        }
        return $elements;
    }

    public function SaveImage($unique_item_id = NULL, $image_url = NULL, $user_id = NULL){
        $sql_insert = "INSERT INTO images (unique_item_id, image_url, user_id) VALUES (
            '$unique_item_id', '$image_url', '$user_id'
        )";
        $result = Database::Connect()->query($sql_insert);
        if(!$result){
            echo "Failed!";
        }
    }
}