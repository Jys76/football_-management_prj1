<!DOCTYPE html>
<html>
    <head>
        <title>View team</title>
        <h1>View team page</h1>
    </head>
    <body>
        <form action="../index.php">
            <button>Home page</button>
        </form>
        <br>

        <?php require "../view/team_table_view.php"; ?>

        <?php if($message !== ""){echo($message);} ?>
    </body>
</html>