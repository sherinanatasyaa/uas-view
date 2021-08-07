<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card border-dark mb-3" style="max-width: 18rem;">
				<div class="card-header">
					Detail Data Pegawai
				</div>
				<div class="card-body">
					<h5 class="card-title"><?= $profile['nama']; ?></h5>
                    <p class="card-subtitle mb-2 card-text">ID Pegawai : <?= $profile['profile_id']; ?></p>
					<p class="card-text">Tanggal Lahir : <?= $profile['tgl_lahir']; ?></p>
					<p class="card-text">Jenis Kelamin : <?= $profile['jk']; ?></p>
					<p class="card-text">Alamat : <?= $profile['alamat']; ?></p>
					<a href="<?= base_url();?>profile" class="btn btn-primary">Kembali</a>
				</div>
			</div>



		</div>
	</div>
</div>
