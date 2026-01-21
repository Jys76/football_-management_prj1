<?php
    require "../config.php";

    $message = "";

    if(
        isset($_POST["data_match"]) &&
        isset($_POST["team_1"]) && isset($_POST["team_2"]) &&
        isset($_POST["gol_team_1"]) && isset($_POST["gol_team_2"])
    ){
        $data_match = $_POST["data_match"];
        $team_1 = $_POST["team_1"];
        $team_2 = $_POST["team_2"];
        $gol_team_1 = $_POST["gol_team_1"];
        $gol_team_2 = $_POST["gol_team_2"];

        if(
            $data_match !== "" && $team_1 !== "" && $team_2 !== "" &&
            $gol_team_1 !== "" && $gol_team_2 !== ""
        ){
            $sql = "INSERT INTO game_match (data_match, team_1_id, team_2_id, gol_team_1, gol_team_2)
                    VALUES ('$data_match', $team_1, $team_2, $gol_team_1, $gol_team_2)";
            try{
                $sql_result = mysqli_query($conn, $sql);
                $message = "Values inserted";

            }
            catch(mysqli_sql_exception $e){$message = "Insertion error: " . $e->GetMessage();}
        }
        else{
            $message = "You must insert values";
        }
            
    }

    require "../html/insert_game_match_html.php";
    