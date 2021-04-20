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
    $nim    = "A22.2020.0281";
    $nama   = "Muhammad Fani Ashar";
    $umur   = 23;
    $nilai  = 50;
    $status = TRUE;

    echo "NIM   :" . $nim . "<br>";
    echo "Nama  : $nama <br>";
    print "Umur : " . $umur; print "<br>";
    printf ("Nilai : %.3f<br>", $nilai);
    if ($status)
    echo "Status    : aktif";
    else
    echo "Status    : tidak aktif";
    ?>
</body>
</html>