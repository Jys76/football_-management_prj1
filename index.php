
<?php
    require "config.php";
    try{$conn = mysqli_connect($host, $user, $password, $dbname); }
    catch(mysqli_sql_exception $e){die("Database connection error");}

    require "index_html.php";
?>