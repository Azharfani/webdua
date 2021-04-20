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
    // latihan membuat program dengan For, while, do while
    // 1. For
    // $n = isset($_POST['n']) ? $_POST['n'] : NULL;
    // if(isset($_POST['submit'])){
    // if($n!=NULL){
    // $bil = 1;
    // for($i=1;$i<=$n;$i++){
    // $bil = $bil*$i;
    // }
    // }else{
    // $bil = 'Bilangan Tidak boleh kosong mblo!';
    // }
    // }
    // date_default_timezone_set('Asia/Jakarta');
    // echo '<div class="panel">';
    // echo '<h2>Menghitung Bilangan Faktorial menggunakan For</h2>';
    // echo date("l, d-M-Y H:i:s");
    // echo '<hr>';
    // echo '<h4>Masukkan Bilangan :</h4>';
    // echo '<form action="" method="post">';
    // echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
    // echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
    // echo '</form>';
    // if((isset($n))and($n!=NULL)){
    // echo '<h4>Hasil Faktorial :</h4>';
    // echo '=> ';
    // for($i=1;$i<$n;$i++){echo $i.'x';}
    // echo $n;
    // echo '<br/>';
    // }
    // echo '<h4>Jumlah Faktorial :</h4>';
    // echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
    // echo '<hr>';
    // echo '<a href="../">&laquo; Kembali</a>';
    // echo '<hr>';
    // echo '<center><a href="http://syahrulzzadie.blogspot.com" target="blank_">&copy; Syahrulzzadie</a></center>';
    // echo '</div>';  

    // 2. while
    // $n = isset($_POST['n']) ? $_POST['n'] : NULL;
    // if(isset($_POST['submit'])){
    // if($n!=NULL){
    // $bil = 1;
    // $i=0;
    // while($i<$n){
    // $i++;
    // $bil = $bil*$i;
    // }
    // } else{
    // $bil = 'Bilangan Tidak boleh kosong mblo!';
    // }
    // }
    // date_default_timezone_set('Asia/Jakarta');
    // echo '<div class="panel">';
    // echo '<h2>Menghitung Bilangan Faktorial menggunakan While</h2>';
    // echo date("l, d-M-Y H:i:s");
    // echo '<hr>';
    // echo '<h4>Masukkan Bilangan :</h4>';
    // echo '<form action="" method="post">';
    // echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
    // echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
    // echo '</form>';
    // if((isset($n))and($n!=NULL)){
    // echo '<h4>Hasil Faktorial :</h4>';
    // echo '=> ';
    // $i=0;
    // while($i<$n-1){
    // $i++;
    // echo $i.'x';
    // }
    // echo $n;
    // echo '<br/>';
    // }
    // echo '<h4>Jumlah Faktorial :</h4>';
    // echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
    // echo '<hr>';
    // echo '<a href="../">&laquo; Kembali</a>';
    // echo '<hr>';
    // echo '<center><a href="http://syahrulzzadie.blogspot.com" target="blank_">&copy; Syahrulzzadie</a></center>';
    // echo '</div>';

    // Do While
    $n = isset($_POST['n']) ? $_POST['n'] : NULL;
    if(isset($_POST['submit'])){
    if($n!=NULL){
    $bil = 1;
    $i=1;
    do
    {
    $bil = $bil*$i;
    $i++;
    }
    while($i<=$n);
    }else{
    $bil = 'Bilangan Tidak boleh kosong mblo!';
    }
    }
    date_default_timezone_set('Asia/Jakarta');
    echo '<div class="panel">';
    echo '<h2>Menghitung Bilangan Faktorial menggunakan Do While</h2>';
    echo date("l, d-M-Y H:i:s");
    echo '<hr>';
    echo '<h4>Masukkan Bilangan :</h4>';
    echo '<form action="" method="post">';
    echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan..."/>';
    echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
    echo '</form>';
    if((isset($n))and($n!=NULL)){
    echo '<h4>Hasil Faktorial :</h4>';
    echo '=> ';
    $i=1;
    do{
    echo $i.'x';
    $i++;
    }while($i<$n);
    echo $n;
    echo '<br/>';
    }
    echo '<h4>Jumlah Faktorial :</h4>';
    echo '<input class="field" type="text" value="'.(isset($bil) ? $bil : NULL).'" readonly/>';
    echo '<hr>';
    echo '<a href="../">&laquo; Kembali</a>';
    echo '<hr>';
    echo '<center><a href="http://syahrulzzadie.blogspot.com" target="blank_">&copy; Syahrulzzadie</a></center>';
    echo '</div>';
    ?>

</body>
</html>