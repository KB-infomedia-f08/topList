<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 10 songs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hanna's song toplist</h1>
    </header>
    <main>
        <?php
            require "dbConnect.php";
            $data = $connection->query("SELECT * FROM songs");

            while($row = $data->fetch_assoc()){
                echo    '<section>
                            <img src="'.htmlspecialchars($row["img_path"]).'" alt="album cover">
                            <h3>'.htmlspecialchars($row["song_name"]).'</h3>
                            <p>'.htmlspecialchars($row["artist"]).'</p>
                            <div>
                                <p>Votes: <span>'.htmlspecialchars($row["votes"]).'</span></p>
                                <a href="vote.php?id='.htmlspecialchars($row["id"]).'">
                                    <button>Vote</button>
                                </a>
                            </div>
                        </section>';
            }
            $connection->close();
        ?>
    </main>

</body>
</html>