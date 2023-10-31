<!-- Ülesanne 11-3, Patrick Sabul, 31-10-2023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 11</title>
</head>
<body>
    <?php
    $filename = 'andmefail.txt';
    $file = fopen($filename, 'r+');
    if ($file) {
        $currentData = fgets($file); 
        fseek($file, 0); 
        $newData = "Telefon: 555-1234\nAadress: 123 Main Street\n";
        fwrite($file, $newData . $currentData);
        fclose($file);
        echo 'Andmed on muudetud ja salvestatud faili.';
    } else {
        echo 'Faili ei saanud avada lugemiseks ja kirjutamiseks.';
    }
    ?>
</body>
</html>