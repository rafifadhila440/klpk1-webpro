<div class="container-fluid">
	<?= $this->session->flashdata('pesan'); ?>
	<div class="row">
		<div class="col-1g-6">
			<?php if (validation_errors()) { ?>
				<div class="alert alert-danger" role="alert">
					<?php validation_errors(); ?>
				</div>
			<?php } ?>
			<?php $this->session->flashdata('pesan'); ?>
			<?php foreach ($paket as $pkt) { ?>
				<form action=" <?php echo base_url('buku/ubahPaket'); ?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<input type="hidden" name="id" id="id" value=" <?php echo $pkt['id_paket']; ?>">
						<input type="text" class="form-control form-control-user" id="id_paket" name="id_paket"
							placeholder="Masukkan nama paket" value=" <?php echo $pkt['id_paket']; ?>">
					</div>
					<div class="form-group">
						<select name="id_pesanan" class="form-control form-control-user">
							<option value=" <?= $id_pesanan; ?>" selected="selected">
								<?= $psn; ?>
							</option>
							<?php foreach ($pesanan as $psn) { ?>
								<option value=" <?= $psn['id_pesanan']; ?>">
									<?= $k['pesanan']; ?>
								</option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<input type="text" class="form-control form-control-user" id="nama_paket" name="nama_paket"
							placeholder="Masukkan Nama Paket" value=" <?= $pkt['nama_paket']; ?>">
					</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="daya_paket" name="daya_paket"
								placeholder="Masukkan Daya Paket" value=" <?= $pkt['daya_paket']; ?> ">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form-control-user" id="spesifikasi" name="spesifikasi"
								placeholder="Masukkan nominal stok" value=" <?= $pkt['spesifikasi']; ?> ">
						</div>
					<div class="form-group">
						<input type="button" class="form-control form-control-user btn btn-dark col-1g-3 mt-3"
							value="Kembali" onclick="window.history.go(-1)">
						<input type="submit" class="form-control form-control-user btn btn-primary col-1g-3 mt-3"
							value="Update">
					</div>
			</div>
		</div>
		</form>
	<?php } ?>
</div>
</div>
</div>
