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

    sort($tydrukud);

    foreach ($tydrukud as $tydruk) {
        echo $tydruk . "<br>";
    }
    ?>
</body>
</html>