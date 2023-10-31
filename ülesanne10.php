<!-- Ülesanne 10, Patrick Sabul, 30-10-2023 -->
<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 10</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: blue;
            cursor: pointer;
        }

        #content {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Ülesanne 10</h2>

    <?php
    function LubatudLeht($leht)
    {
        $lubatudLehed = ['leht1', 'leht2', 'leht3', 'leht4'];
        return in_array($leht, $lubatudLehed);
    }

    if (isset($_GET['leht'])) {
        $leht = $_GET['leht'];
        if (LubatudLeht($leht)) {
            $lehtFail = $leht . '.html';
            if (file_exists($lehtFail)) {
                echo file_get_contents($lehtFail);
                exit;
            } else {
                echo 'Lehte ei ole olemas!';
            }
        } else {
            echo 'Turvalisuse teade: Juurdepääs ei ole tagatud!';
        }
    }
    ?>
    <ul>
        <li><a href="index.php?leht=leht1">1.Leht</a></li>
        <li><a href="index.php?leht=leht2">2.Leht</a></li>
        <li><a href="index.php?leht=leht3">3.Leht</a></li>
        <li><a href="index.php?leht=leht4">4.Leht</a></li>
        <li><a href="index.php?leht=leht5">5.Leht</a></li>
    </ul>
    <div id="content">

    </div>
</body>
</html>