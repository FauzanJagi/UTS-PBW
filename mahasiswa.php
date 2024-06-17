<?php
$mahasiswa = [
    "Fauzan",
    "Jagi",
    "Daniswara",
];

$nama_depan = "Fauzan Jagi";
$nama_belakang = "Daniswara";

$nama_lengkap = $nama_depan ." ". $nama_belakang;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fauzan Jagi Daniswara (Daftar Mahasiswa)</title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>

    <!-- Menampilkan array dalam tabel -->
    <table border="1">
        <tr>
            <td><h2>Nama Lengkap</h2></td>
        </tr>
        <?php foreach ($mahasiswa as $m) { ?>
            <tr>
                <td>  <?php echo $m; ?>  </td>
            </tr>
        <?php }  ?>
       
    </table>

<?php 
echo "<br>";
echo $nama_lengkap; ?>

</body>
</html>