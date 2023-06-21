<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="icon" type="image/x-icon" href="images/enderscape-logo.gif">
        <!--<script>
            window.location.href = "maintenance.html";
         </script>-->   
    </head>
    <body>
        <nav>
            <a href="index.html">
                <img src="images/enderscape-logo.gif">
            </a>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="html/quizzes-home.html">Quizzes</a>
                </li>
            </ul>
        </nav>
        <h2>Lands Leaderboard</h2>
        <?php include("includes/lands_database.php"); ?>
    </body>
</html>