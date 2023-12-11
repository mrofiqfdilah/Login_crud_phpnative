<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="../design/home.css">
</head>
<body>
<div class="user-info">
        <?php
        include "../database/koneksi.php";
        // Start or resume the session
        session_start();

        // Check if the user is logged in
        if (isset($_SESSION['usermail'])) {
            // Assuming 'name' is the column in your 'users' table that stores the user's name
            $usermail = $_SESSION['usermail'];
            $query = mysqli_query($koneksi, "SELECT email FROM users WHERE email = '$usermail'");
            $userData = mysqli_fetch_assoc($query);

            if ($userData) {
                $userName = $userData['email'];
                echo "<p>Welcome, $userName!</p>";
            }
        }
        ?>
    </div>
    <button class="btntambah"><a href="form-input.php" class="texttambah"><i class="ri-add-circle-line" style="font-size:20px; margin-left:-5px; position:relative; top:5px;"></i> Tambah Data</a></button>
    <button class="btntambah" style="background-color: #DC3545; position:relative; left:-200px;"><a href="../Function/logout.php" class="texttambah"><i class="ri-add-circle-line" style="font-size:20px; margin-left:-5px; position:relative; top:5px;"></i>Logout</a></button>
<?php
include "../database/koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM formulir ORDER BY id DESC");
?> 


	    <table   class="content-table">
      <thead>
	        <tr>
            <th>#</th>
	        <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>Kelas siswa</th>
            <th>Bidang </th>
            <th>Alasan masuk</th>
	        <th>Actions</th>
	        </tr>
      </thead>
	        <?php if(mysqli_num_rows($query)>0){ ?>
	        <?php
	            $no = 1;
	            while($data = mysqli_fetch_assoc($query)){
	        ?>
          <tbody>
            <tr>
            <td style="color:#009879;"><?php echo $no ?></td>
	            <td><?php echo $data["nama"];?></td>
              <td><?php echo $data["jenis_kelamin"];?></td>
              <td><?php echo $data["kelas"];?></td>
              <td><?php echo $data["bidang"];?></td>
              <td><?php echo $data["alasan"];?> </td>
	            <td style="display: flex; ">
                <a href="form-edit.php?id=<?php echo $data['id']?>" style="text-decoration: none;"><button style="background-color:  #009879; border:none; padding:8px 10px; color:#fff; letter-spacing:1px; border-radius:6px;">Edit</button></a>
	            	<a href="../Function/delete.php?id=<?php echo $data['id']?>" style="text-decoration: none; margin-left:5px;" onclick="return confirm('yakin menghapus data');">
	            	<button style="background-color:  #DC3545; border:none; padding:8px 10px; color:#fff; letter-spacing:1px; border-radius:6px;">Delete</button>
	            </a>
	            </td>
	        </tr>
          <?php $no++; } ?>
	        <?php } ?>
          </tbody>
	    </table>





</body>
</html>