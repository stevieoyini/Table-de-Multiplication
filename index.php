<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/main.css" />
    <title>Table de Multiplication</title>
</head>

<body>
    <header>
        <h1 class="back">Apprendre facilement ses tables de multiplication</h1>
    </header>
    <div class='center'>

        <?php
        echo '<table>';

        for ($j = 1; $j <= 10; $j++) {
            echo '<tr>';

            // 10 TD

            for ($i = 1; $i <= 10; $i++) {
                if ($j == $i) {
                    echo '<td class="green">' . $i * $j . '</td>';
                } else {
                    echo '<td>' . $i * $j . '</td>';
                }
            }

            echo '</tr>';
        }

        echo '</table>';


        ?>
    </div>
    <footer class="back"><strong>Tu apprendra avec aisance les tables de 1 à 10<strong></footer>
</body>

</html>