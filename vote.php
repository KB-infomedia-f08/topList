<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        if(isset($_SESSION["voted"])){
            echo "<h1>You have already voted</h1>";
        } else {
            if(isset($_GET["id"])){
                require "dbConnect.php";

                $stmt = $connection->prepare("UPDATE songs SET votes = votes + 1 WHERE id = ?;");
                $stmt->bind_param("i", $_GET["id"]);
                $stmt->execute();

                echo "<h1>Thank you for voting</h1>";
                $_SESSION["voted"] = true;
            } else {
                echo "<h1>Something went wrong, please try again</h1>";
            }
        }
    ?>
    <a href="index.php">Return and view results</a>
</body>
</html>