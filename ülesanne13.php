<!-- Ülesanne 13, Patrick Sabul, 31-10-2023 -->
<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 13</title>
</head>
<body>
    <h2>Ülesanne 13</h2>
    <?php
    if ($_FILES['file']['error'] == 0) {
        $allowedExtensions = ['jpg', 'jpeg'];
        $uploadPath = 'uploads/';

        $fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $fileName = $_FILES['file']['name'];

        if (in_array($fileExtension, $allowedExtensions)) {
            $targetPath = $uploadPath . $fileName;
            move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
            echo "<p>Pilt on edukalt üles laetud.</p>";
            echo "<img src='$targetPath' alt='Ülesse laetud pilt'>";
        } else {
            echo "<p>Palun valige kas JPG või JPEG fail.</p>";
        }
    } else {
        echo "<p>Viga üleslaadimisega.</p>";
    }
    ?>
</body>
</html>