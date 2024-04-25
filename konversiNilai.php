<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form method="post" action="">
        Masukkan nilai angka: <input type="number" name="nilai" required>
        <input type="submit" name="submit" value="Konversi">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        $nilai_huruf = '';
        
        if ($nilai >= 0 && $nilai <= 59) {
            $nilai_huruf = 'C';
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $nilai_huruf = 'BC';
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $nilai_huruf = 'B';
        } elseif ($nilai >= 80 && $nilai <= 89) {
            $nilai_huruf = 'BC';
        } elseif ($nilai >= 90 && $nilai <= 100) {
            $nilai_huruf = 'A';
        } else {
            echo "Nilai tidak valid.";
            exit();
        }
        
        echo "Nilai angka $nilai adalah nilai $nilai_huruf.";
    }
    ?>
</body>
</html>
