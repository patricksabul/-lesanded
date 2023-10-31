<!-- Ülesanne 2, Patrick Sabul, 22-10-2023 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 2</title>
</head>
<body>
    <h2>Ülesanne 2</h2>
    <?php
    $arv1 = 12;
    $arv2 = 4;
    $summa = $arv1 + $arv2;
    echo "Liitmine: $arv1 + $arv2 = $summa\n";
    $vahe = $arv1 - $arv2;
    echo "Lahutamine: $arv1 - $arv2 = $vahe\n";
    $korrutis = $arv1 * $arv2;
    echo "Korrutamine: $arv1 * $arv2 = $korrutis\n";
    $jagatis = $arv1 / $arv2;
    echo "Jagamine: $arv1 / $arv2 = $jagatis\n";
    $jaak = $arv1 % $arv2;
    echo "Jääk: $arv1 % $arv2 = $jaak\n";
    ?>
    
    <?php
    $millimeetrid = 6200;
    $sentimeetrid = $millimeetrid / 10;
    $meetrid = $sentimeetrid / 100;
    echo "Millimeetrid: $millimeetrid mm\n";
    echo "Sentimeetrid: " . number_format($sentimeetrid, 2) . " cm\n";
    echo "Meetrid: " . number_format($meetrid, 2) . " m\n";
    ?>
    
    <?php
    $kaatet1 = 7;
    $kaatet2 = 14;
    $hupotenuus = sqrt($kaatet1 ** 2 + $kaatet2 ** 2);
    $umbermoot = $kaatet1 + $kaatet2 + $hupotenuus;
    $pindala = ($kaatet1 * $kaatet2) / 2;
    echo "Täisnurkse kolmnurga ümbermõõt: " . round($umbermoot) . " ühikut\n";
    echo "Täisnurkse kolmnurga pindala: " . round($pindala) . " ruutühikut\n";
    ?>
</body>
</html>