<?php

$register_set = isset($_COOKIE['registered']) && $_COOKIE['registered'] === true;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="../css/page.css">
    <link rel="stylesheet" type="text/css" href="../css/centered.css">
    <link rel="stylesheet" type="text/css" href="../css/pairs_page/game_page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="game_page">
        <div class="centered">
            <div class="game_area">
                <button type="button" class="btn btn-info">Start the game</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>