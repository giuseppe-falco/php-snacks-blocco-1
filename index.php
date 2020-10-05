<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

    $matches = [
        [
            "home" => "squadra 1",
            "guest" => "squadra 7",
            "punti home" => 44,
            "punti guest" => 49
        ],
        [
            "home" => "squadra 156",
            "guest" => "squadra 45",
            "punti home" => 54,
            "punti guest" => 53
        ],
        [
            "home" => "squadra  16",
            "guest" => "squadra 5",
            "punti home" => 55,
            "punti guest" => 58
        ],
        [
            "home" => "squadra 89",
            "guest" => "squadra 78",
            "punti home" => 48,
            "punti guest" => 60
        ],
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>
        <ul>
            <?php
             for ($i = 0; $i < count($matches); $i++) {
                $match = $matches[$i];
                echo "<li>" . $match["home"] . " - " . $match["guest"] . " | " . $match["punti home"] . " - " . $match["punti guest"] . "</li>";
              }
            ?>
        </ul>
    </h1>    
</body>
</html>