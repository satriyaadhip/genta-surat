<div class="main-content container-fluid">
	<div class="page-title">
		<h4>Preview Surat Surat Pengantar Akte Kelahiran</h4>
	</div>
	<a
		href="<?= base_url('verifikasi-surat-kelahiran') ?>"
		class="btn btn-primary btn-sm mb-2"
		><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a
	>
	<section class="section">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive overflow-auto">
							<table class="table" style="width: 100%">
								<?php foreach ($datas as $data) { ?>
								<tr>
									<td>NIK</td>
									<td>:</td>
									<td><?= $data->user_nik ?></td>
								</tr>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td><?= $data->user_nama ?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>:</td>
									<td><?= $data->user_jekel ?></td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>:</td>
									<td><?= $data->user_agama ?></td>
								</tr>
								<tr>
									<td>TTL</td>
									<td>:</td>
									<td>
										<?= $data->user_tempatlahir ?>,
										<?= $data->user_ttl ?>
									</td>
								</tr>
								<tr>
									<td>Pekerjaan</td>
									<td>:</td>
									<td><?= $data->user_pekerjaan ?></td>
								</tr>
								<tr>
									<td>Rt</td>
									<td>:</td>
									<td><?= $data->rt ?></td>
								</tr>
								<tr>
									<td>Rw</td>
									<td>:</td>
									<td><?= $data->rw ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><?= $data->user_alamat ?></td>
								</tr>
								<tr>
									<td>RT/RW</td>
									<td>:</td>
									<td>00<?= $data->user_rt ?>/00<?= $data->user_rw ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive overflow-auto">
							<table class="table" style="width: 100%">
								<tr>
									<td>Ayah</td>
									<td>:</td>
									<td><?= $data->ayah ?></td>
								</tr>
								<tr>
									<td>Ibu</td>
									<td>:</td>
									<td><?= $data->ibu ?></td>
								</tr>
								<tr>
									<td>No Kk</td>
									<td>:</td>
									<td><?= $data->no_kk ?></td>
								</tr>
								<tr>
									<td>Nama Bayi</td>
									<td>:</td>
									<td><?= $data->nama_bayi ?></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>:</td>
									<td><?= $data->jekel ?></td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
									<td>:</td>
									<td><?= $data->tempat_lahir_b ?></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>:</td>
									<td><?= $data->tanggal_lahir_b ?></td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>:</td>
									<td><?= $data->agama_b?></td>
								</tr>
								<tr>
									<td>Kewarganegaraan</td>
									<td>:</td>
									<td><?= $data->kewarganegaraan_b ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td><?= $data->alamat_b ?></td>
								</tr>
								<tr>
									<td>Keperluan</td>
									<td>:</td>
									<td><?= $data->keperluan ?></td>
								</tr>
								<tr>
									<td>File KTP</td>
									<td>:</td>
									<td>
										<img
											src="<?= base_url('./assets/file_ktp/') . $data->file_ktp ?>"
											class="img-thumbnail"
										/>
									</td>
								</tr>
								<tr>
									<td>File KK</td>
									<td>:</td>
									<td>
										<img
											src="<?= base_url('./assets/file_kk/') . $data->file_kk ?>"
											class="img-thumbnail"
										/>
									</td>
								</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
