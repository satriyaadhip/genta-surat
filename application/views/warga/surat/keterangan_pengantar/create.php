<div class="main-content container-fluid">
    <section class="section">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="btn-group">
                    <a href="<?= base_url('list-surat') ?>" class="btn-md mb-3 p-3 text-dark" style="background-color: white; border-radius: 30px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                        </svg>
                        <span class="ml-2 mt-4"><strong>Surat Keterangan Pengantar</strong></span>
                    </a>
                </div>
                <div class="card shadow-none" style="border-radius: 20px;">
                    <div class="card-body">
                        <form action="<?= base_url('skp/proses') ?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="user_nik">NIK</label>
										<input type="number" name="user_nik" id="user_nik" class="form-control" value="<?= set_value('user_nik') ?>" required />
									</div>

									<div class="form-group">
										<label for="user_nama">Nama</label>
										<input type="text" name="user_nama" id="user_nama" class="form-control" value="<?= set_value('user_nama') ?>" required />
									</div>

									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<label for="user_tempatlahir">Tempat Lahir</label>
												<input type="text" name="user_tempatlahir" id="user_tempatlahir" class="form-control" value="<?= set_value('user_tempatlahir') ?>" required />
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label for="user_ttl">Tanggal Lahir</label>
												<input type="date" name="user_ttl" id="user_ttl" class="form-control" value="<?= set_value('user_ttl') ?>" required />
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="user_jekel">Jenis Kelamin</label>
										<select name="user_jekel" id="user_jekel" class="form-control" required>
											<option value="" selected disabled>Pilih Jenis Kelamin</option>
											<option value="Laki - Laki">Laki-laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>

									<div class="form-group">
										<label for="user_kewarganegaraan">Kewarganegaraan</label>
										<select name="user_kewarganegaraan" id="user_kewarganegaraan" class="form-control" required>
											<option value="WNI" selected>WNI</option>
											<option value="WNA">WNA</option>
										</select>
									</div>
									
									<div class="form-group">
										<label for="user_agama">Agama</label>
										<select name="user_agama" id="user_agama" class="form-control" required>
											<option value="" selected disabled>Pilih agama</option>
											<option value="Islam">Islam</option>
											<option value="Kristen">Kristen</option>
											<option value="Hindu">Hindu</option>
											<option value="Buddha">Buddha</option>
										</select>
									</div>

									<div class="form-group">
										<label for="user_pekerjaan">Pekerjaan</label>
										<input type="text" name="user_pekerjaan" id="user_pekerjaan" class="form-control" value="<?= set_value('user_pekerjaan') ?>" required />
									</div>

								</div>
								<div class="col-lg-6">
								<div class="form-group">
                                <label for="user_statuskawin">Status Kawin</label>
                                <select name="user_statuskawin" class="form-control" id="user_statuskawin" required>
                                    <option selected disabled>Pilih status</option>
                                    <option value="Belum Kawin">Belum kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai hidup">Cerai hidup</option>
                                    <option value="Cerai mati">Cerai mati</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="user_alamat">Alamat rumah</label>
                                <textarea name="user_alamat" id="user_alamat" cols="30" rows="2" class="form-control" required><?= set_value('user_alamat') ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="user_nomor_kk">Nomor Kartu Keluarga</label>
                                <input type="text" name="user_nomor_kk" id="user_nomor_kk" class="form-control" value="<?= set_value('user_nomor_kk') ?>" required />
                            </div>

                            <!-- <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="user_rt">RT</label>
                                        <input type="number" name="user_rt" id="user_rt" class="form-control" value="<?= set_value('user_rt') ?>" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="user_rw">RW</label>
                                        <input type="number" name="user_rw" id="user_rw" class="form-control" value="<?= set_value('user_rw') ?>" />
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="keperluan">Keperluan Permohonan Surat</label>
                                <small class="text-danger">*Wajib</small>
                                <textarea name="keperluan" id="keperluan" cols="30" rows="2" class="form-control" required><?= set_value('keperluan') ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="tujuan">Tujuan</label>
                                <small class="text-danger">*Wajib</small>
                                <textarea name="tujuan" id="tujuan" cols="30" rows="2" class="form-control" required><?= set_value('tujuan') ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="keterangan_lainnya">Keterangan Lainnya</label>
                                <textarea name="keterangan_lainnya" id="keterangan_lainnya" cols="30" rows="2" class="form-control" required><?= set_value('keterangan_lainnya', 'ORANG TERSEBUT BENAR WARGA DESA GENTAN') ?></textarea>
                            </div>
								</div>
							</div>                           

                            <div class="form-group">
                                <button class="btn btn-block btn-primary btn-sm" type="submit"><b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>