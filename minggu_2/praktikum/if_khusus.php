<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tahun      = date ("Y");
    $kabisat    = ($tahun%4 == 0) ? "KABISAT" : "BUKAN KABISAT";
    echo "Tahun <b>$tahun</b> $kabisat";
    ?>
</body>
</html>