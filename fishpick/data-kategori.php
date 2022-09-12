<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="view port" content="width=device-width, initial-scale=1">
    <title>PET SHOP FISH PICK</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!--header-->
    <header>
      <div class="container">
        <h1><a href="dashboard.php">PET SHOP FISH PICK</a></h1>
        <ul>
            <li><a href="dasboard.php"> Dashboard</a></li>
            <li><a href="profil.php"> Profil</a></li>
            <li><a href="data-kategori.php"> Data Kategori</a></li>
            <li><a href="data-produk.php"> Data Produk</a></li>
            <li><a href="keluar.php"> Keluar</a></li>
            </ul>
        </div>
    </header>


    <!--content-->
    <div class="section">
    <div class="container">
        <h3>Data Kategori</h3>
        <div class="box">
            <p><a href="tambah-kategori.php" class="btn" >Tambah Kategori </a></p>
            <br>
            
            <table border="1" cellspacing="9" class="table">
            <thead>
                <tr>
                    <th width="60px">No</th>
                    <th>Kategori</th>
                    <th width="150px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $kategori = mysqli_query($conn ,"SELECT * FROM tb_category ORDER BY category_id DESC");
                    while($row = mysqli_fetch_array($kategori)){
                ?>
                <tr>
                    <td><?php echo $no++ ?> </td>
                    <td><?php echo $row ['category_name'] ?> </td>
                    <td>
                        <a href="edit-kategori.php?id=<?php echo $row['category_id']?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $row['category_id']?>" onclick="return confirm('yakin ingin hapus ?')">Hapus</a> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
    </div>
    </div>

    <!-- Footer-->
    <div class="container">
    <small>copyright &copy; 2022 pet shop fishpick </small>
    </div>
</body>
</html>