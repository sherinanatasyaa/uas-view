<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

		<div class="card border-dark mb-3" style="max-width: 18rem;">
				<div class="card-header">
					Detail Data Pekerjaan
				</div>
				<div class="card-body">
					<h5 class="card-title">ID Pegawai : <?= $kontak['profile_id']; ?></h5>
                    <p class="card-subtitle mb-2 card-text">ID KT : <?= $kontak['kontak_id']; ?></p>
					<p class="card-text">Nomor Telp : <?= $kontak['no_telp']; ?></p>
					<p class="card-text">Username Instagram : <?= $kontak['instagram']; ?></p>
					<p class="card-text">Email : <?= $kontak['email']; ?></p>
					<a href="<?= base_url();?>pekerjaan" class="btn btn-primary">Kembali</a>
				</div>
			</div>

		</div>
	</div>
</div>
