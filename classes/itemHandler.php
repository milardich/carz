<?php

include 'database.php';

class ItemHandler{
    private $_itemTitle = "";
    private $_itemDescription = "";
    private $_itemLocation = "";
    private $_itemPrice = 0.0;
    private $_itemThumbnail = "";

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
        $sql_insert = "INSERT INTO items (item_title, item_description, item_location, item_price, item_thumbnail, item_date_posted) VALUES (
            '$this->_itemTitle', '$this->_itemDescription', '$this->_itemLocation', '$this->_itemPrice', '$this->_itemThumbnail', '$current_date'
        )";
        $result = Database::Connect()->query($sql_insert);
        if(!$result){
            echo "Failed!";
        }
    }
}