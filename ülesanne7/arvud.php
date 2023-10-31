<!-- Ülesanne 7-3, Patrick Sabul, 29-10-2023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 7</title>
</head>
<body>
    <?php
    function genereeri_arvud($algus, $lopp) {
        $arvud = [];
        for ($i = $algus; $i <= $lopp; $i++) {
            $arvud[] = $i;
        }
        return $arvud;
    }

    function genereeri_arvud_sammaga($algus, $lopp, $samm) {
        $arvud = [];
        for ($i = $algus; $i <= $lopp; $i += $samm) {
            $arvud[] = $i;
        }
        return $arvud;
    }
    ?>
</body>
</html>