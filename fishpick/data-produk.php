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
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>PET SHOP FISH PICK</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.2.3/jspdf.plugin.autotable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">PET SHOP FISH PICK</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container" id="text">
			<h3>Data Produk</h3>
			<div class="box">
				<a href="tambah-produk.php" class="btn" >Tambah Data</a>
				<!-- <a href="cetak.php" class="btn" target="_blank">Cak Laporan</a> -->

				<button id="downloadButton" onclick="downloadpdf()"  class="btn" >Download PDF</button>


				<br>

				<br>
				<table border="1" cellspacing="0" class="table" id="table1" >
					<thead>
						<tr>
							<th width="60px">No</th>
							<th>Kategori</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Gambar</th>
							<th>Status</th>
							<th width="150px">Aksi</th>
						</tr>
					</thead>
					
					<tbody>
						<?php
							$no = 1;
							$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
							if(mysqli_num_rows($produk) > 0){
							while($row = mysqli_fetch_array($produk)){
						?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name'] ?></td>
							<td><?php echo $row['product_name'] ?></td>
							<td>Rp. <?php echo number_format($row['product_price']) ?></td>
							<td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank"> <img src="produk/<?php echo $row['product_image'] ?>" width="50px"> </a></td>
							<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
							<td>
								<a href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Yakin ingin hapus ?')">Hapus</a>
							</td>
						</tr>
						<?php }}else{ ?>
							<tr>
								<td colspan="7">Tidak ada data</td>
							</tr>
						<?php } ?>
					</tbody>
		</table>
	</div>
	</div>
	</div>

	<!-- footer -->
	<footer>

		<div class="container">
			<small>Copyright &copy; 2022 pet shop fishpick </small>
		</div>

		<script>
		async function downloadpdf() {
		document.getElementById("downloadButton").innerHTML =
        "Currently downloading, please wait";
      var doc = new jsPDF('l', 'pt');
      await html2canvas(document.getElementById("text"), {
        //allowTaint: true,
        //useCORS: true,
        width: 1000,
      }).then((canvas) => {
        doc.addImage(canvas.toDataURL("image/png"), "PNG", 20, 70);
      });
 
      doc.save("file.pdf");
      document.getElementById("downloadButton").innerHTML = "Click to download";
    }
  </script>
	
</footer>
</body>
</html>