<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- // tampilkan data produk dari database dengan kategori dan jumlah data
        // contoh :
        // Kategori : Makanan, Jumlah Data : 10
        // Kategori : Minuman, Jumlah Data : 5
        // Kategori : Pakaian, Jumlah Data : 3
        // Kategori : Alat Tulis, Jumlah Data : 2
     -->
    <table>
        <tr>
            <th>Kategori</th>
            <th>Jumlah Data</th>
        </tr>
        <?php foreach ($produk as $p) : ?>
            <tr>
                <td><?= $p['kategori'] ?></td>
                <td><?= $p['Jumlah'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>