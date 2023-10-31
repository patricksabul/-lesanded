<!-- Ülesanne 12-2, Patrick Sabul, 31-10-2023 -->
<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 12</title>
</head>
<body>
    <h2>Palgad</h2>
    <?php
    $maleSalaries = [];
    $femaleSalaries = [];
    
    $filename = 'tootajad.csv';
    
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
            $nimi = $data[0];
            $sugu = $data[1];
            $palk = $data[2];
    
            if ($sugu === 'm') {
                $maleSalaries[] = $palk;
            } elseif ($sugu === 'n') {
                $femaleSalaries[] = $palk;
            }
        }
        fclose($handle);
    
        $maleAveragepalk = count($maleSalaries) > 0 ? array_sum($maleSalaries) / count($maleSalaries) : 0;
        $femaleAveragepalk = count($femaleSalaries) > 0 ? array_sum($femaleSalaries) / count($femaleSalaries) : 0;
        $maxMalepalk = max($maleSalaries);
        $maxFemalepalk = max($femaleSalaries);
    
        echo "Meeste keskmine palk: $maleAveragepalk<br>";
        echo "Meeste suurim palk: $maxMalepalk<br>";
        echo "Naiste keskmine palk: $femaleAveragepalk<br>";
        echo "Naiste suurim palk: $maxFemalepalk<br>";
    } else {
        echo "Andmefaili ei leitud.";
    }
    ?>
</body>
</html>