<?php

class Database {

    public static function Connect(){
        $_servername = "localhost";
        $_username = "root";
        $_password = "";
        $_databaseName = "carz";

        $conn = new mysqli($_servername, $_username, $_password, $_databaseName);
        if(mysqli_connect_error()){
            die("Database connection failed: " . mysqli_connect_error());
        }
        //echo "connected!";
        return $conn;
    }
}