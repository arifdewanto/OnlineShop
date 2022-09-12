<?php
    session_start();
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
        <h3>Dashboard</h3>
        <div class="box">
            <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Toko online</h4>
        </div>
    </div>
    </div>

    <!-- Footer-->
    <div class="container">
    <small>copyright &copy; 2022 pet shop fishpick </small>
    </div>
</body>
</html>