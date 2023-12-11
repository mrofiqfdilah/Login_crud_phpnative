<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Design</title>
    <link rel="stylesheet" href="../design/form.css">
</head>
<body>
    <form action="../Function/insert.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="cowo">Cowo</option>
            <option value="cewe">Cewe</option>
        </select>

        <label for="kelas">Kelas:</label>
        <input type="text" name="kelas" id="kelas" placeholder="Masukkan Kelas">

        <label for="bidang">Bidang:</label>
        <select name="bidang" id="bidang">
            <option value="web">Web</option>
            <option value="desktop">Desktop</option>
            <option value="app">App</option>
        </select>

        <label for="alasan">Alasan Masuk Bidang:</label>
        <textarea name="alasan" id="alasan" placeholder="Masukkan Alasan Masuk Bidang" cols="30" rows="5"></textarea>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
