<!-- Ülesanne 1, Patrick Sabul, 22-10-2023 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ülesanne 1</title>
</head>
<body>
    <h2>Ülesanne 1</h2>
    <?php
    
    function displayPersonalInfo($name, $dob, $starsign) {
        echo "Minu nimi on $name, olen sündinud $dob, ja mu tähtkuju on $starsign";
    }
    
    displayPersonalInfo("Patrick", "2003-02-14", "Aquarius"); 
    ?>
    
    <?php
    echo "\"It's my life\" - Dr. Alban<br>";
    ?>
    
    <?php 
    function displayBunny(){
        echo "
        <br>
        <h1>
        (\ (\ <br>
        ( -.-) <br>
        0_(\")(\")<br>
        </h1>
        ";
    }
    
    displayBunny();
    ?>
</body>
</html>
