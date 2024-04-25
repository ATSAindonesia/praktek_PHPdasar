<?php
    //variabel dalam php
    $txt="Selamat datang !";
    $txt2 = "Politeknik negeri madiun";
    $x = 5;
    $y = 10.5;

    echo "<P> isi Variabel txt adalah: $txt";
    echo "<P> isi Variabel x adalah: $x";
    echo "<P> isi Variabel y adalah: $y";
    echo "Belajar php di "  . $txt2 . "<br>";
    echo$x + $y;

    //php konstanta
    define("nama_konstanta", "{Alfonsus William}");
    echo "<br>" .nama_konstanta;

?>
