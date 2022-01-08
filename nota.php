<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Nota pembelian</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>

<body>

	<?php include 'menu.php'; ?>

	<section class="kontent">
		<div class="container">

			<h2>Detail Pembelian</h2>
			<?php
			$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan=pelanggan.id_pelanggan WHERE pembelian.id_pembelian='$_GET[id]'");
			$detail = $ambil->fetch_assoc();
			?>

			<strong><?php echo isset($detail['nama_pelanggan']);  ?></strong> <br>
			<p>
				<?php echo ($detail['telepon_pelanggan']); ?> <br>
				<?php echo ($detail['email_pelanggan']); ?>
			</p>

			<p>
				tanggal :<?php echo ($detail['tanggal_pembelian']); ?> <br>
				Total :<?php echo ($detail['total_pembelian']); ?>
			</p>



			<div class="row">
				<div class="col-md-7">
					<div class="alert alert-info">
						<p>
							Silahkan melakukan pembayaran Rp. <?php echo number_format($detail['total_pembelian']); ?> ke <br>
							<strong>BANK BRI 807057837823 AN. HIMAKOM <br>
								dan konfirmasi ke Agus Marsadualan <br>melalui WA 089698501592</strong>




					</div>

	</section>
</body>

</html>