<!-- Ülesanne 8, Patrick Sabul, 29-10-2023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 8</title>
</head>
<body>
<?php

$user_date = new DateTime("20.03.2023 17:31");

$kuupaev = new DateTime();
$age = $kuupaev->diff($user_date)->y;

$praegune_aasta = date("Y");
if (date("m") >= 9) {
    $kooliaasta_lopp = new DateTime($praegune_aasta . "-05-30");
} else {
    $kooliaasta_lopp = new DateTime(($praegune_aasta - 1) . "-05-30");
}
$days_until_kooliaasta_lopp = $kuupaev->diff($kooliaasta_lopp)->days;


$aastaaeg = "";
$month = date("m");
if ($month >= 3 && $month <= 5) {
    $aastaaeg = "kevad";
} elseif ($month >= 6 && $month <= 8) {
    $aastaaeg = "suvi";
} elseif ($month >= 9 && $month <= 11) {
    $aastaaeg = "sügis";
} else {
    $aastaaeg = "talv";
}

echo "Te olete $vanus aastat vana (või saate $vanus aastaseks sel aastal).\n";
echo "Käesoleva kooliaasta lõpuni on jäänud $days_until_kooliaasta_lopp päeva!\n";
echo "Aastaajaks on $aastaaeg.\n";

if ($aastaaeg === "kevad") {
    echo '<img src="kevad.jpg" alt="Kevad">';
} elseif ($aastaaeg === "suvi") {
    echo '<img src="suvi.jpg" alt="Suvi">';
} elseif ($aastaaeg === "sügis") {
    echo '<img src="sugis.jpg" alt="Sügis">';
} else {
    echo '<img src="talv.jpg" alt="Talv">';
}
?>
</body>
</html>
