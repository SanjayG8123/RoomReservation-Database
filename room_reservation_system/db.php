<?php

function connectDB() {
    $dbname = "room_reservation";
    $username = "root";
    $password = "";
    $host = "127.0.0.1:3308";
    
    // create the connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // check connection
    if(!$con) {
        die("Connection failed: ".mysqli_connect_error());
    }
    else {
        return $con;
    }
}