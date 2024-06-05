<?php

if (!empty($_FILES && $_FILES['image'])) {
    /*if ($_FILES['image']['error'] == 0 && $_FILES['image']['size'] > 0) {
        //$_FILES['image']['name']

        $nameWithoutExtension = pathinfo($_FILES['image']['name'], PATHINFO_FILENAME);
        $name = preg_replace('/[^a-zA-Z0-9]/', '', $nameWithoutExtension);
        $originalImage = $_FILES['image']['tmp_name'];
        $destImage = __DIR__ . '/' . $name . '-' . time() . '.jpg';
        [$width, $height] = getimagesize($originalImage);
        $maxDim = 400;
        $scaleFactor = $maxDim / max($width, $height);

        $newWidth = $width * $scaleFactor;
        $newHeight = $height * $scaleFactor;

        $im = imagecreatefromjpeg($originalImage);
        $newImage = imagecreatetruecolor($newWidth, $newHeight);
        imagecopyresampled($newImage,$im,0,0,0,0,$newWidth,$newHeight,$width,$height);
        imagejpeg($newImage,$destImage);
    }*/




}



?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="test.php" enctype="multipart/form-data">
    <input type="file" name="image"/>
    <input type="submit" value="submit"/>
</form>
</body>
</html>