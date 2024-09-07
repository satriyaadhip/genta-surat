<div class="main-content container-fluid">
	<!-- <div class="page-title">
		<h6><strong>Surat Pengantar Akte Kelahiran</strong></h6>
	</div> -->
	<section class="section">
		<div class="row">
			<div class="col-lg-9 mx-auto">
				<div class="btn-group">
					<a
						href="<?= base_url('list-surat') ?>"
						class="btn-md mb-3 p-3 text-dark"
						style="
						background-color: white;
						border-radius: 30px;
						"
						><svg
							xmlns="http://www.w3.org/2000/svg"
							width="24"
							height="24"
							fill="currentColor"
							class="bi bi-arrow-left-circle-fill"
							viewBox="0 0 16 16"
						>
							<path
								d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"
							/>
						</svg><span class="ml-2 mt-4"><strong>Kembali</strong></span></a
					>
				</div>
				<div class="card shadow-none" style="border-radius: 20px;">
					<div class="card-body">
						<form
							action="<?= base_url('spak/proses') ?>"
							method="post"
							enctype="multipart/form-data"
						>
							<div class="form-group">
								<label for="">Nama</label>
								<input
									type="text"
									name="user_nama"
									class="form-control"
									value="<?= set_value('user_nama') ?>"
								/>
							</div>
							<div class="form-group">
								<label for="">NIK</label>
								<input
									type="number"
									name="user_nik"
									class="form-control"
									value="<?= set_value('user_nik') ?>"
								/>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Tempat Lahir</label>
										<input
											type="text"
											name="user_tempatlahir"
											class="form-control"
											value="<?= set_value('user_tempatlahir') ?>"
										/>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">Tanggal Lahir</label>
										<input
											type="date"
											name="user_ttl"
											class="form-control"
											value="<?= set_value('user_ttl') ?>"
										/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="">Jenis Kelamin</label>
								<select name="user_jekel" class="form-control" required>
									<option selected>Pilih Jenis Kelamin</option>
									<option value="Laki - Laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							
							<div class="form-group">
								<label for="">Agama</label>
								<select name="user_agama" class="form-control" id="" required>
									<option selected disabled>Pilih agama</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
								</select>
							</div>

							<div class="form-group">
								<label for="">Pekerjaan</label>
								<input
									type="text"
									name="user_pekerjaan"
									class="form-control"
									value="<?= set_value('user_pekerjaan') ?>"
								/>
							</div>

							<div class="form-group">
								<label for="">Alamat rumah</label>
								<textarea
									name="user_alamat"
									id=""
									cols="30"
									rows="5"
									class="form-control"
									required
								>
<?= set_value('user_alamat') ?></textarea
								>
							</div>

							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">RT</label>
										<input
											type="number"
											name="user_rt"
											class="form-control"
											value="<?= set_value('user_rt') ?>"
										/>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="">RW</label>
										<input
											type="number"
											name="user_rw"
											class="form-control"
											value="<?= set_value('user_rw') ?>"
										/>
									</div>
								</div>
							</div>
							
							<h6 class="text-center">Data Ayah & Ibu</h6>
							<div class="form-group">
								<label for="">Nama Ayah</label>
								<input
									type="text"
									name="ayah"
									class="form-control"
									value="<?= set_value('ayah') ?>"
									required
								/>
							</div>
							<small class="text-danger"><?php form_error('ayah') ?></small>
							<div class="form-group">
								<label for="">Nama Ibu</label>
								<input
									type="text"
									name="ibu"
									class="form-control"
									value="<?= set_value('ibu') ?>"
									required
								/>
							</div>
							<small class="text-danger"><?php form_error('ibu') ?></small>
							<div class="form-group">
								<label for="">Nomor KK</label>
								<input
									type="number"
									name="no_kk"
									class="form-control"
									value="<?= set_value('no_kk') ?>"
									required
								/>
							</div>
							<small class="text-danger"><?php form_error('no_kk') ?></small>
							<h6 class="text-center">Data Bayi</h6>
							<div class="form-group">
								<label for="">Nama Bayi</label>
								<input
									type="text"
									name="nama_bayi"
									class="form-control"
									value="<?= set_value('nama_bayi') ?>"
									required
								/>
							</div>
							<small class="text-danger"
								><?php form_error('nama_bayi') ?></small
							>
							<div class="form-group">
								<label for="">Jenis Kelamin</label>
								<select name="jekel_b" class="form-control" id="" required>
									<option selected disabled>Pilih Jenis Kelamin</option>
									<option value="Laki - Laki">Laki - Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<small class="text-danger"><?php form_error('jekel_b') ?></small>
							<div class="form-group">
								<label for="">Tempat Lahir</label>
								<input
									type="text"
									name="tempat_lahir_b"
									class="form-control"
									value="<?= set_value('tempat_lahir') ?>"
									id=""
									required
								/>
							</div>
							<small class="text-danger"
								><?php form_error('tempat_lahir') ?></small
							>
							<div class="form-group">
								<label for="">Tanggal Lahir</label>
								<input
									type="date"
									name="tanggal_lahir_b"
									class="form-control"
									class="<?= set_value('tanggal_lahir') ?>"
									id=""
									required
								/>
							</div>
							<small class="text-danger"
								><?php form_error('tanggal_lahir') ?></small
							>
							<div class="form-group">
								<label for="">Anak Ke</label>
								<input
									type="number"
									name="anak_ke"
									class="form-control"
									value="<?= set_value('anak_ke') ?>"
									id=""
									required
								/>
							</div>
							<small class="text-danger"><?php form_error('anak_ke') ?></small>
							<div class="form-group">
								<label for="">Agama</label>
								<select name="agama_b" class="form-control" id="" required>
									<option selected disabled>Pilih Agama</option>
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
								</select>
							</div>
							<small class="text-danger"><?php form_error('agama') ?></small>
							<div class="form-group">
								<label for="">Kewarganegaraan</label>
								<select
									name="kewarganegaraan_b"
									class="form-control"
									id=""
									required
								>
									<option selected disabled>Pilih Kewarganegaraan</option>
									<option value="WNI">WNI</option>
									<option value="WNA">WNA</option>
								</select>
							</div>
							<small class="text-danger"
								><?php form_error('kewarganegaraan') ?></small
							>
							<div class="form-group">
								<label for="">Alamat</label>
								<small class="text-danger">*Wajib !</small>
								<textarea
									name="alamat_b"
									id=""
									cols="30"
									rows="5"
									class="form-control"
									required
								>
<?= set_value('alamat') ?></textarea
								>
							</div>
							<small class="text-danger"><?php form_error('alamat') ?></small>
							<div class="form-group">
								<label for="">Keperluan Permohonan Surat</label>
								<small class="text-danger">*Wajib !</small>
								<textarea
									name="keperluan"
									id=""
									cols="30"
									rows="5"
									class="form-control"
									required
								>
<?= set_value('keperluan') ?></textarea
								>
							</div>
							<small class="text-danger"
								><?php form_error('keperluan') ?></small
							>
							<div class="form-group">
								<label for="">Foto Kartu Keluarga</label>
								<small class="text-danger">*Wajib dalam format JPG atau PNG</small>
								<input
									type="file"
									name="file_kk"
									value="<?= set_value('file_kk') ?>"
									class="form-control"
									id=""
								/>
							</div>
							<div class="form-group">
								<label for="">Foto KTP</label>
								<small class="text-danger">*Wajib. JPG|PNG</small>
								<input
									type="file"
									name="file_ktp"
									value="<?= set_value('file_ktp') ?>"
									class="form-control"
								/>
							</div>
							<div class="form-group">
								<button class="btn btn-block btn-primary btn-sm" type="submit">
									<b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
