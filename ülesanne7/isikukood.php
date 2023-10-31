<!-- Ülesanne 7-5, Patrick Sabul, 29-10-2023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 7</title>
</head>
<body>
    
    <?php
    function oige_pikkus($isikukood) {
        return strlen($isikukood) === 11;
    }

    function sugu_sunniaeg($isikukood) {
        if (oige_pikkus($isikukood)) {
            $sugu = $isikukood[0] % 2 === 0 ? "Naine" : "Mees";
            $sunniaeg = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "." . substr($isikukood, 1, 2);
            return ["Sugu" => $sugu, "Sünniaeg" => $sunniaeg];
        }
        return null;
    }
    ?>
</body>
</html>