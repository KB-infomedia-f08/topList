<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Admin page</h1>
    </header>
    <main>
        <section>
            <form action="admin.php" method="post">
                <label>
                    Song name
                    <input type="text" name="song">
                </label>
                <label >
                    Artist name
                    <input type="text" name="artist">
                </label>
                <label>
                    Album image path
                    <input type="text" name="path">
                </label>
                <button type="submit">Add song</button>
            </form>
        </section>
    </main>
</body>
</html>