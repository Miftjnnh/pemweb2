<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum 2 - Form handling</title>
    <style>
        body {
            background:blue;
        }
        p, h1, h2, h3, h4, h5 {
            color:white;
        }
    </style>
</head>
<body>
    <h1>Belajar Form Handling 1</h1>
    <form action="belajar_post.php" method="POST">
        <!-- tipe text -->
        <label for="nama">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>

        <!-- tipe radio -->
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-Laki"> <label>Laki-Laki</label>
        <input type="radio" name="jenis_kelamin" value="Perempuan"> <label>Perempuan</label><br><br>

        <!-- tipe checkbox -->
        <label for="hobi">Hobi</label><br>
        <input type="checkbox" name="hobi[]" value="Sepak Bola"><label>Sepak Bola</label><br>
        <input type="checkbox" name="hobi[]" value="Badminton"><label>Badminton</label><br>
        <input type="checkbox" name="hobi[]" value="Balap Lari"><label>Balap Lari</label><br><br>

        <!-- tipe number -->
        <label for="umur">Umur</label><br>
        <input type="number" name="umur"><br><br>

        <!-- tipe date / tanggal -->
        <label form="tanggal_lahir">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir"><br><br>

        <!-- dropdown select -->
        <label for="prodi">Prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
       </select><br><br>

       <!-- button -->
       <button type="submit">Simpan !</button>
       <button type="reset">Reset</button>
    </form>
</body>
</html>