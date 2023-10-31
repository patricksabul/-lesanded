<!-- Ülesanne 4, Patrick Sabul, 23-10-2023 -->
<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Hinne</h2>
    <form method="get" action="">
        Sisesta Kontrolltöö punktide arv: <input type="number" name="punktid"><br>
        <input type="submit" value="Kontrolli">
    </form>
    <?php
    if (!empty($_GET['punktid'])) {
        $punktid = $_GET['punktid'];

        if ($punktid > 10) {
            echo "SUPER!";
        } elseif ($punktid >= 5 && $punktid <= 9) {
            echo "TEHTUD!";
        } elseif ($punktid < 5) {
            echo "KASIN!";
        } else {
            echo "SISESTA OMA PUNKTID!";
        }
    }
    ?>
</body>
</html>