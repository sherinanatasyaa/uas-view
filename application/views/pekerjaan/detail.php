<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card border-dark mb-3" style="max-width: 18rem;">
				<div class="card-header">
					Detail Data Pekerjaan
				</div>
				<div class="card-body">
					<h5 class="card-title">ID Pegawai : <?= $pekerjaan['profile_id']; ?></h5>
                    <p class="card-subtitle mb-2 card-text">ID PKJ : <?= $pekerjaan['pkj_id']; ?></p>
					<p class="card-text">Jabatan : <?= $pekerjaan['jabatan']; ?></p>
					<p class="card-text">Masa Bakti : <?= $pekerjaan['waktu']; ?></p>
					<a href="<?= base_url();?>pekerjaan" class="btn btn-primary">Kembali</a>
				</div>
			</div>

		</div>
	</div>
</div>
