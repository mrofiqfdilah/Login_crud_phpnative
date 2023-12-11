<?php
include ('../database/koneksi.php');

$id = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM formulir WHERE id='$id' LIMIT 1");
  $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Design</title>
    <link rel="stylesheet" href="../design/form.css">
</head>
<body>
    <form action="../Function/update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data[0]['id']?>">

        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data[0]['nama']?>" id="nama" placeholder="Masukkan Nama">

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="cowo">Cowo</option>
            <option value="cewe">Cewe</option>
        </select>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" value="<?php echo $data[0]['kelas']?>" id="kelas" placeholder="Masukkan Kelas">

        <label for="bidang">Bidang:</label>
        <select name="bidang" id="bidang">
            <option value="web">Web</option>
            <option value="desktop">Desktop</option>
            <option value="app">App</option>
        </select>

        <label for="alasan">Alasan Masuk Bidang:</label>
        <textarea name="alasan" id="alasan" placeholder="Masukkan Alasan Masuk Bidang" cols="30" rows="5"><?php echo $data[0]['alasan']?>"</textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
