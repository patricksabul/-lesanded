<!-- Ülesanne 4, Patrick Sabul, 23-10-2023 -->
<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Vanus</h2>
    <form method="get" action="">
        Sisesta esimese kuti vanus: <input type="number" name="age1"><br>
        Sisesta teise kuti vanus: <input type="number" name="age2"><br>
        <input type="submit" value="Leia vanem">
    </form>
    <?php
    if (!empty($_GET['age1']) && !empty($_GET['age2'])) {
        $age1 = $_GET['age1'];
        $age2 = $_GET['age2'];

        if ($age1 == $age2) {
            echo "kutid on sama vanad";
        } elseif ($age1 > $age2) {
            echo "Esimene kutt on vanem";
        } else {
            echo "Teine kutt on vanem";
        }
    }
    ?>
</body>
</html>