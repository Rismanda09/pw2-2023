<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    
    <?php
        // Variabel untuk menampung data
        $name = $_POST['nama_lengkap'];
        $matkul = $_POST['matkul'];
        $uts = $_POST['nilaiuts'];
        $uas = $_POST['nilaiuas'];
        $tugas = $_POST['nilaitugas'];

        $total = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);

        // Tampilan data dari variabel 
        echo '<br>Nama Siswa: ' . $name;
        echo '<br>Mata Kuliah: ' . $matkul;
        echo '<br>Nilai Uts: ' . $uts;
        echo '<br>Nilai Uas: ' . $uas;
        echo '<br>Nilai Tugas: ' . $tugas;
        echo '<hr>';
        echo 'Total Nilai: ' . $total;
        echo '<hr>';

    ?>

</body>
</html>