<!-- Ülesanne 7-6, Patrick Sabul, 29-10-2023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 7</title>
</head>
<body>
    <?php
    function head_motted() {
        $alus = ["Auto", "Ema", "Koer"];
        $oeldis = ["magab", "sügab", "lendab"];
        $sihitis = ["meid", "mune", "koletist"];
        
        $valitud_alus = $alus[array_rand($alus)];
        $valitud_oeldis = $oeldis[array_rand($oeldis)];
        $valitud_sihitis = $sihitis[array_rand($sihitis)];
        
        return $valitud_alus . " " . $valitud_oeldis . " " . $valitud_sihitis;
    }
    ?>
</body>
</html>