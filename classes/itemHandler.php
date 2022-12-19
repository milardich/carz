<?php

include_once 'database.php';

class ItemHandler{
    private $_itemTitle = "";
    private $_itemDescription = "";
    private $_itemLocation = "";
    private $_itemPrice = 0.0;
    private $_itemThumbnail = "";
    private $_uniqueItemId = "";
    private $_itemSeller = ""; // TODO

    public function SetItemUniqueId($id){
        $this->_uniqueItemId = $id;
    }

    public function SetItemTitle($title){
        $this->_itemTitle = $title;
    }

    public function SetItemDescription($description){
        $this->_itemDescription = $description;
    }

    public function SetItemLocation($location){
        $this->_itemLocation = $location;
    }

    public function SetItemPrice($price){
        $this->_itemPrice = $price;
    }

    public function SetItemThumbnail($thumbnail){
        $this->_itemThumbnail = $thumbnail;
    }

    public function SaveItem(){
        $current_date = date("Y-m-d");
        $sql_insert = "INSERT INTO items (unique_item_id, item_title, item_description, item_location, item_price, item_thumbnail, item_date_posted) VALUES (
            '$this->_uniqueItemId', '$this->_itemTitle', '$this->_itemDescription', '$this->_itemLocation', '$this->_itemPrice', '$this->_itemThumbnail', '$current_date'
        )";
        $result = Database::Connect()->query($sql_insert);
        if(!$result){
            echo "Failed!";
        }
    }

    public function GetAllItems(){
        $items = array();
        $sql = "SELECT * FROM items ORDER BY item_id DESC";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $items[] = array(
                    'item_id' => $row["item_id"],
                    'unique_item_id' => $row["unique_item_id"],
                    'item_title' => $row["item_title"],
                    'item_description' => $row["item_description"],
                    'item_location' => $row["item_location"],
                    'item_price' => $row["item_price"],
                    'item_thumbnail' => $row["item_thumbnail"],
                    'item_date_posted' => $row["item_date_posted"]
                );
            }
        }
        return $items;
    }

    public function GetItemById($id){
        $item_data = array();
        $sql = "SELECT * FROM items WHERE item_id = '$id' ";
        //$sql = "SELECT * FROM items";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $item_data = array(
                'item_id' => $row["item_id"],
                'unique_item_id' => $row["unique_item_id"],
                'item_title' => $row["item_title"],
                'item_description' => $row["item_description"],
                'item_location' => $row["item_location"],
                'item_price' => $row["item_price"],
                'item_thumbnail' => $row["item_thumbnail"],
                'item_date_posted' => $row["item_date_posted"]
            );
        }
        return $item_data;
    }

    public function UniqueIdExists($id){
        $sql = "SELECT unique_item_id FROM items WHERE unique_item_id = '$id' ";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            return true;
        }
        return false;
    }

    public function GetItemImages($unique_item_id){
        $item_images = array();
        $sql = "SELECT image_url FROM images WHERE unique_item_id = '$unique_item_id' ";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $item_images[] = array(
                    'image_url' => $row["image_url"]
                );
            }
        }
        return $item_images;
    }
}