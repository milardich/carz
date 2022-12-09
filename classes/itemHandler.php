<?php

include_once 'database.php';

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

    public function GetAllItems(){
        $items = array();
        $sql = "SELECT * FROM items";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $items[] = array(
                    'item_id' => $row["item_id"],
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
}