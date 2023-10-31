<!-- Ülesanne 5, Patrick Sabul, 24-10-2023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 5</title>
</head>
<body>
    <?php

    $tydrukud = array("Andra", "Maie", "Marii", "Tiiu", "Milvi", "Valve", "Maria", "Susanna");

    echo "Esimene 3 nime:<br>";
    for ($i = 0; $i < 3; $i++) {
        echo $tydrukud[$i] . "<br>";
    }

    echo "Viimane nimi: " . end($tydrukud) . "<br>";

    $randomIndex = array_rand($tydrukud);
    echo "Suvaline nimi: " . $tydrukud[$randomIndex] . "<br>";
    ?>
</body>
</html>