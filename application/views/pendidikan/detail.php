<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card border-dark mb-3" style="max-width: 18rem;">
				<div class="card-header">
					Detail Data Pendidikan
				</div>
				<div class="card-body">
					<h5 class="card-title">ID Pegawai : <?= $pendidikan['profile_id']; ?></h5>
                    <p class="card-subtitle mb-2 card-text">ID Pendidikan : <?= $pendidikan['pend_id']; ?></p>
					<p class="card-text">Jenjang : <?= $pendidikan['jenjang']; ?></p>
					<p class="card-text">Nama Sekolah : <?= $pendidikan['nama_sekolah']; ?></p>
					<a href="<?= base_url();?>pendidikan" class="btn btn-primary">Kembali</a>
				</div>
			</div>

		</div>
	</div>
</div>
