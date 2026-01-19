
<?php
    try{$conn = mysqli_connect("localhost", "sun", "sun53", "sun_tournament"); }
    catch(mysqli_sql_exception $e){die("Database connection error");}

    require "index_template.php";
?>