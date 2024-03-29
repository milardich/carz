<?php

include_once 'database.php';

class ItemHandler{
    private $_itemTitle = "";
    private $_itemDescription = "";
    private $_itemLocation = "";
    private $_itemPrice = 0.0;
    private $_itemThumbnail = "";
    private $_uniqueItemId = "";
    private $_car_maker_id;
    private $_car_type_id;
    private $_item_seller_id;

    public function SetItemSellerId($id){
        $this->_item_seller_id = $id;
    }

    public function SetCarMakerId($car_maker_id){
        $this->_car_maker_id = $car_maker_id;
    }

    public function SetCarTypeId($car_type_id){
        $this->_car_type_id = $car_type_id;
    }

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
        $sql_insert = "INSERT INTO items (unique_item_id, item_title, car_maker_id, car_type_id, item_description, item_location, item_price, item_thumbnail, item_date_posted, seller_id) VALUES (
            '$this->_uniqueItemId', '$this->_itemTitle', '$this->_car_maker_id', '$this->_car_type_id', '$this->_itemDescription', '$this->_itemLocation', '$this->_itemPrice', '$this->_itemThumbnail', '$current_date', '$this->_item_seller_id'
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
                    'car_maker_id' => $row["car_maker_id"],
                    'car_type_id' => $row["car_type_id"],
                    'item_description' => $row["item_description"],
                    'item_location' => $row["item_location"],
                    'item_price' => $row["item_price"],
                    'item_thumbnail' => $row["item_thumbnail"],
                    'item_date_posted' => $row["item_date_posted"],
                    'seller_id' => $row["seller_id"]
                );
            }
        }
        return $items;
    }

    public function GetItemById($id){
        $item_data = array();
        $sql = "SELECT * FROM items WHERE item_id = '$id' ";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $item_data = array(
                'item_id' => $row["item_id"],
                'unique_item_id' => $row["unique_item_id"],
                'item_title' => $row["item_title"],
                'car_maker_id' => $row["car_maker_id"],
                'car_type_id' => $row["car_type_id"],
                'item_description' => $row["item_description"],
                'item_location' => $row["item_location"],
                'item_price' => $row["item_price"],
                'item_thumbnail' => $row["item_thumbnail"],
                'item_date_posted' => $row["item_date_posted"],
                'seller_id' => $row["seller_id"]
            );
        }
        else{
            Header("Location: ../index.php");
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

    public function GetFilteredItems($car_maker_id, $car_type_id, $min_price, $max_price, $order_by = "ASC"){
        $items = array();
        $sql = "SELECT * FROM items";
        if($car_maker_id != "-"){
            $sql .= " WHERE car_maker_id = $car_maker_id";
        }
        if($car_type_id != "-" && $car_maker_id != "-"){
            $sql .= " AND car_type_id = $car_type_id";
        }
        if($min_price > 0){
            if($car_maker_id != "-" || $car_type_id != "-"){
                $sql .= " AND item_price >= $min_price";
            }
            else{
                $sql .= " WHERE item_price >= $min_price";
            }
        }
        if($max_price > 0 && $max_price > $min_price){
            if($car_maker_id != "-" || $car_type_id != "-" || $min_price > 0){
                $sql .= " AND item_price <= $max_price";
            }
            else{
                $sql .= " WHERE item_price <= $max_price";
            }
        }
        $sql .= " ORDER BY item_price $order_by";

        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $items[] = array(
                    'item_id' => $row["item_id"],
                    'unique_item_id' => $row["unique_item_id"],
                    'item_title' => $row["item_title"],
                    'car_maker_id' => $row["car_maker_id"],
                    'car_type_id' => $row["car_type_id"],
                    'item_description' => $row["item_description"],
                    'item_location' => $row["item_location"],
                    'item_price' => $row["item_price"],
                    'item_thumbnail' => $row["item_thumbnail"],
                    'item_date_posted' => $row["item_date_posted"],
                    'seller_id' => $row["seller_id"]
                );
            }
        }
        return $items;
    }

    public function GetItemsFromUser($user_id){
        $items = array();
        $sql = "SELECT * FROM items WHERE seller_id = '$user_id'";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){    
                $items[] = array(
                    'item_id' => $row["item_id"],
                    'unique_item_id' => $row["unique_item_id"],
                    'item_title' => $row["item_title"],
                    'car_maker_id' => $row["car_maker_id"],
                    'car_type_id' => $row["car_type_id"],
                    'item_description' => $row["item_description"],
                    'item_location' => $row["item_location"],
                    'item_price' => $row["item_price"],
                    'item_thumbnail' => $row["item_thumbnail"],
                    'item_date_posted' => $row["item_date_posted"],
                    'seller_id' => $row["seller_id"]
                );
            }
        }
        return $items;
    }
    
    public function UpdateItem($item_id, $item_title, $item_description, $item_price){
        $sql = "UPDATE items SET item_title = '$item_title', item_description = '$item_description', item_price = '$item_price' WHERE item_id = '$item_id'";
        $result = Database::Connect()->query($sql);
        if($result){
            return true;
        }
        return false;
    }

    public function DeleteItem($item_id){
        $sql = "DELETE FROM items WHERE item_id = '$item_id'";
        $result = Database::Connect()->query($sql);
        if($result){
            return true;
        }
        return false;
    }

    public function GetItemsByTitle($item_title){
        if($item_title == ""){
            return "Error - search left empty";
        }
        $sql = "SELECT * FROM items WHERE item_title LIKE '%$item_title%'";
        $result = Database::Connect()->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){    
                $items[] = array(
                    'item_id' => $row["item_id"],
                    'unique_item_id' => $row["unique_item_id"],
                    'item_title' => $row["item_title"],
                    'car_maker_id' => $row["car_maker_id"],
                    'car_type_id' => $row["car_type_id"],
                    'item_description' => $row["item_description"],
                    'item_location' => $row["item_location"],
                    'item_price' => $row["item_price"],
                    'item_thumbnail' => $row["item_thumbnail"],
                    'item_date_posted' => $row["item_date_posted"],
                    'seller_id' => $row["seller_id"]
                );
            }
        }
        else{
            $items = array();
        }
        return $items;
    }
}