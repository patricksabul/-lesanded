<!-- Ülesanne 4, Patrick Sabul, 23-10-2023 -->
<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 4</title>
</head>
<body>
    <h2>Ristkülik või ruut</h2>
    <form method="get" action="">
        Sisesta külg1: <input type="number" name="length"><br>
        Sisesta külg2: <input type="number" name="width"><br>
        <input type="submit" value="Otsusta">
    </form>
    <?php
    if (!empty($_GET['length']) && !empty($_GET['width'])) {
        $length = $_GET['length'];
        $width = $_GET['width'];

        if ($length == $width) {
            echo "Tegu on ruuduga";
        } else {
            echo "Tegu on ristkülikuga";
        }
    }
    ?>
</body>
</html>