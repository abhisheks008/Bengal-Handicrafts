<?php

    // This is output buffering it is just a container that would send multiple requests to php
    ob_start();

    session_start();

    // always keep this commented and uncomment it when you want to clean up the code or remove previous sessions that are still there 
    // session_destroy();

    //Setting the paths for the folders and what to use to reference them
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
    defined("Front_End") ? null : define("Front_End", __DIR__ . DS . "frontend");
    defined("Back_End") ? null : define("Back_End", __DIR__ . DS . "backend");

    
    // Defining the Database and the connection names
    defined("DB_Host") ? null : define("DB_Host", "localhost");
    defined("DB_User") ? null : define("DB_User", "root");
    defined("DB_Password") ? null : define("DB_Password", "");
    defined("DB_Name") ? null : define("DB_Name", "ecom_db");

    // Creating the connection
    $connection = mysqli_connect(DB_Host, DB_User, DB_Password, DB_Name);

    // Accessing all the functions from functions.php
    require_once("functions.php");

    // Accessing all the functions from cart.php
    require_once("cart.php");

?>