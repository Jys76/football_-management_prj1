<?php
    try{$conn = mysqli_connect("localhost", "sun", "sun53", "sun_tournament");}
    catch(mysqli_sql_exception $e){die("Database connection error");}

    $message = "";

    if(isset($_POST["team_name"])){
        $team_name = $_POST["team_name"];
        if($team_name === ""){
            $message = "You must insert value/s";
        }
        else{
            $sql = "INSERT INTO team (name_team) VALUES ('$team_name')";

            try{
                mysqli_query($conn, $sql);
                $message = "Value/s inserted";
            }
            catch(mysqli_sql_exception $e){$message = "Insertion error" . $e->GetMessage();}
            
        }
    }

    require "insert_team_template.php";

?>