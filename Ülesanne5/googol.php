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

    $massiiv = array("Apple", "Banana", "Cherry", "Date", "Fig", "Grapes");

    $otsing = "Date";

    if (in_array($otsing, $massiiv)) {
        $message = "Nimi '$otsing' leiti massiivist.";
        $alert_class = "alert-success";
    } else {
        $message = "Nimi '$otsing' ei leitud massiivist.";
        $alert_class = "alert-danger";
    }
    ?>
</body>
</html>