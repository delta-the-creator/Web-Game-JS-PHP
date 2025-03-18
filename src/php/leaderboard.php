<?php

$register_set = isset($_COOKIE['registered']) && $_COOKIE['registered'] === true;
$complexity = $_COOKIE['avatar_complexity'];
$bestscore = $_COOKIE['best_score'];

include 'connection.php';

$query = "SELECT * FROM scores ORDER BY total_score DESC";
$result = $connection -> query($query);

$leaderboard_data = [];
if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        $leaderboard_data[] = $row;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leaderboard</title>
    <link rel="stylesheet" type="text/css" href="../css/page.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/leaderboard_files/leaderboard.css">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>

    <div class="main">
        <div class="leaderboard-container">
            <div class="leaderboard">
                <table>
                    <thead>
                        <tr>
                            <th> Username </th>
                            <th> Level 1 </th>
                            <?php if ($complexity === 'complex') { ?>
                                <th> Level 2 </th>
                                <th> Level 3 </th>
                            <?php } ?>
                            <th> Total Score </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        foreach ($leaderboard_data as $user){
                            echo "<tr>
                                    <td> {$user['username']} </td>
                                    <td> {$user['level1']} </td>";
                            if ($complexity === 'complex') {
                                echo "<td> {$user['level2']} </td>";
                                echo "<td> {$user['level3']} </td>";
                                echo "<td> {$user['total_score']} </td>";
                            } else {
                                echo "<td> {$user['total_score']} </td>";
                            }
                            
                            echo "</tr>";
                        }
                        
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>