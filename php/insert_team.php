<?php
    require "../config.php";

    $message = "";

    if(isset($_POST["team_name"])){
        $team_name = $_POST["team_name"];
        if($team_name === ""){
            $message = "You must insert value";
        }
        else{
            $sql = "INSERT INTO team (name_team) VALUES ('$team_name')";

            try{
                mysqli_query($conn, $sql);
                $message = "Value inserted";
            }
            catch(mysqli_sql_exception $e){$message = "Insertion error" . $e->GetMessage();}
            
        }
    }

    require "../html/insert_team_html.php";

?>