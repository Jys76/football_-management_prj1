<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "football_tournament";

    try{
        $conn = mysqli_connect($host, $user, $password, $dbname);
    }
    catch(mysqli_sql_exception $e){
        die("Database connection error: " . $e->GetMessage());
    }
    
