<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
	<link rel="shortcut icon" href="<?= base_url() ?>assets/assets_shop/img/logodash.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
</head>

<body>

	<style type="text/css">
		.table-data {
			width: 100%;
			border-collapse: collapse;
			font-family: 'Roboto', sans-serif;
		}

		.table-data tr th,
		.table-data tr td {
			border: 1px solid black;
			font-size: 10pt;
		}
	</style>

	<section id="header-kop">
		<div class="container-fluid mt-4">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td rowspan="3" width="16%" class="text-center">
							<img src="<?= base_url('assets/assets_stisla') ?>/assets/img/logoregis.png" alt="logo" width="80" />
						</td>
						<td class="text-center">
							<h3>Rental Mobil</h3>
						</td>
						<td rowspan="3" width="16%">&nbsp;</td>
					</tr>
					<tr>
						<td class="text-center">Perumahan Ciujung Damai Blok H8/10, RT/RW.09/08, Kendayakan Kragilan Serang Banten 42184</td>
					</tr>
				</tbody>
			</table>
			<hr style="height: 2px" color="#0F0E20">
		</div>
	</section>

	<section id="body-of-report">
		<div class="container-fluid">
			<h4 class="text-center mt-4 mb-2">Laporan Transaksi</h4>
			<h5 class="text-center mb-5">Tanggal: <?= IndonesiaTgl($_GET['dari']) . " s/d " . IndonesiaTgl($_GET['sampai']); ?></h5>
			<table class="table-data">
				<thead>
					<tr align="center">
						<th>No</th>
						<th>User</th>
						<th>Mobil</th>
						<th>Tgl Sewa</th>
						<th>Tgl Kembali</th>
						<th>Tgl Pengembalian</th>
						<th>Total Sewa</th>
						<th>Total Denda</th>
						<th>Status</th>
						<th>Status Pembayaran</th>
					</tr>
				</thead```
<tbody>
					<?php
					$no = 1;
					$totalIncome = 0;
					$totalPenalty = 0;
					foreach ($laporan as $l) :
						$totalIncome += $l->total_sewa;
						$totalPenalty += $l->total_denda;
						?>
						<tr align="center">
							<td><?= $no++ ?></td>
							<td><?= $l->nama ?></td>
							<td><?= $l->merk ?></td>
							<td><?= IndonesiaTgl($l->tanggal_sewa) ?></td>
							<td><?= IndonesiaTgl($l->tanggal_kembali) ?></td>
							<td>
								<?php if (IndonesiaTgl($l->tanggal_pengembalian) == "00-00-0000") { ?>
									-
								<?php } else { ?>
									<?= IndonesiaTgl($l->tanggal_pengembalian) ?>
								<?php } ?>
							</td>
							<td><?= format_rupiah($l->total_sewa) ?></td>
							<td><?= format_rupiah($l->total_denda) ?></td>
							<td>
								<?php if (($l->status) == 0) {
									echo "Batal";
								} elseif (($l->status) == 1) {
									echo "Disewa";
								} else {
									echo "Selesai";
								} ?>
							</td>
							<td>
								<?php if (($l->status_pembayaran) == 0) {
									echo "Belum Dibayar";
								} elseif (($l->status_pembayaran) == 1) {
									echo "Menunggu Konfirmasi";
								} elseif (($l->status_pembayaran) == 2) {
									echo "Sudah Dibayar";
								} else {
									echo "Batal";
								} ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>

			<!-- Summary Section -->
			<div class="mt-5">
				<h5 class="text-center">Ringkasan</h5>
				<table class="table table-bordered mx-auto" style="width: 50%;">
					<thead>
						<tr>
							<th>Jumlah Penghasilan</th>
							<th>Biaya ke Pemilik</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= format_rupiah($totalIncome) ?></td>
							<td><?= format_rupiah($totalIncome * 0.5) ?></td>
						</tr>
					</tbody>
				</table>

				<h5 class="text-center mt-5">Jumlah Denda Dan Penghasilan Bersih</h5>
				<table class="table table-bordered mx-auto" style="width: 50%;">
					<thead>
						<tr>
							<th>Total Denda</th>
							<th>Penghasilan Bersih</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= format_rupiah($totalPenalty) ?></td>
							<td><?= format_rupiah($totalIncome - ($totalIncome * 0.5 - $totalPenalty)) ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		window.print();
	</script>

</body>

</html>
