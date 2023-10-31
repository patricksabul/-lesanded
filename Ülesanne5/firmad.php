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

    $firmad = array("Kimia", "Mynte", "Voomm", "Twiyo", "Layo", "Talane", "Gigashots", "Tagchat", "Quaxo", "Voonyx", "Kwilith", "Edgepulse", "Eidel", "Eadel", "Jaloo", "Oyope", "Jamia");

    sort($firmad);

    foreach ($firmad as $firma) {
        echo $firma . "<br>";
    }
    ?>
</body>
</html>