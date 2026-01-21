<!DOCTYPE html>
<html>
    <head>
        <title>Insert game match</title>
        <h1>Insert game match</h1>
    </head>
    <body>
        <form action="../index.php">
            <button>Homer page</button>
        </form>
        <br>
        <form action="../php/insert_game_match.php" method="post">
            Data match <input type="date" name="data_match"><br><br>
            team_1 <input type="text" name="team_1"><br><br>
            team_2 <input type="text" name="team_2"><br><br>
            gol_team_1 <input type="text" name="gol_team_1"><br><br>
            gol_team_2 <input type="text" name="gol_team_2"><br><br>
            <button type="submit">Insert</button>
        </form>

        <?php
            if($message !== ""){
                echo $message;
            }
        ?>
    </body>
</html>