<div class="main-content container-fluid">
    <div class="page-title">
        <h6><strong>Surat Keterangan Kelahiran</strong></h6>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group">
                    <a href="<?= base_url('list-surat') ?>" class="btn btn-warning btn-sm mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                        </svg> Kembali
                    </a>
                </div>
                <div class="card ml-5 mr-5">
                    <div class="card-body">
                        <form action="<?= base_url('skk/proses') ?>" method="post" enctype="multipart/form-data">
                            <!-- Data Bayi/Anak -->
                            <p class="text-center"><strong>Data Bayi/Anak</strong></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama_bayi">Nama</label>
                                            <input type="text" name="nama_bayi" id="nama_bayi" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="jenis_kelamin_bayi">Jenis Kelamin</label>
                                            <select name="jenis_kelamin_bayi" id="jenis_kelamin_bayi" class="form-control" required>
                                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="tempat_dilahirkan">Tempat Dilahirkan</label>
                                            <input type="text" name="tempat_dilahirkan" id="tempat_dilahirkan" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="tempat_kelahiran">Tempat Kelahiran</label>
                                            <input type="text" name="tempat_kelahiran" id="tempat_kelahiran" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="berat_bayi">Berat Bayi (kg)</label>
                                            <input type="number" name="berat_bayi" id="berat_bayi" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="hari_tgl_jam_lahir">Hari, Tanggal dan Jam Lahir</label>
                                            <input type="datetime-local" name="hari_tgl_jam_lahir" id="hari_tgl_jam_lahir" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="jenis_kelahiran">Jenis Kelahiran</label>
                                            <input type="text" name="jenis_kelahiran" id="jenis_kelahiran" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="kelahiran_ke">Kelahiran Ke</label>
                                            <input type="number" name="kelahiran_ke" id="kelahiran_ke" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="penolong_kelahiran">Penolong Kelahiran</label>
                                            <input type="text" name="penolong_kelahiran" id="penolong_kelahiran" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="panjang_bayi">Panjang Bayi (Cm)</label>
                                            <input type="number" name="panjang_bayi" id="panjang_bayi" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Ibu dan Data Ayah -->
                            <p class="text-center"><strong>Data Ibu dan Data Ayah</strong></p>
                            <div class="row">
                                <!-- Data Ibu -->
                                <div class="col-lg-6">
                                    <p class="text-center"><strong>Data Ibu</strong></p>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nik_ibu">NIK Ibu</label>
                                            <input type="number" name="nik_ibu" id="nik_ibu" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama_ibu">Nama Lengkap Ibu</label>
                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="tgl_lahir_ibu">Tanggal Lahir / Umur</label>
                                            <input type="date" name="tgl_lahir_ibu" id="tgl_lahir_ibu" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                            <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="alamat_ibu">Alamat Ibu</label>
                                            <textarea name="alamat_ibu" id="alamat_ibu" cols="30" rows="3" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="kewarganegaraan_ibu">Kewarganegaraan Ibu</label>
                                            <select name="kewarganegaraan_ibu" id="kewarganegaraan_ibu" class="form-control" required>
                                                <option value="" disabled selected>Pilih Kewarganegaraan</option>
                                                <option value="WNI">WNI</option>
                                                <option value="WNA">WNA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="kebangsaan_ibu">Kebangsaan Ibu</label>
                                            <input type="text" name="kebangsaan_ibu" id="kebangsaan_ibu" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <!-- Data Ayah -->
                                <div class="col-lg-6">
                                    <p class="text-center"><strong>Data Ayah</strong></p>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nik_ayah">NIK Ayah</label>
                                            <input type="number" name="nik_ayah" id="nik_ayah" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama_ayah">Nama Lengkap Ayah</label>
                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir / Umur</label>
    <input type="date" name="tgl_lahir_ayah" id="tanggal_lahir" class="form-control" onchange="formatDate()" required />
</div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                            <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="alamat_ayah">Alamat Ayah</label>
                                            <textarea name="alamat_ayah" id="alamat_ayah" cols="30" rows="3" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="kewarganegaraan_ayah">Kewarganegaraan Ayah</label>
                                            <select name="kewarganegaraan_ayah" id="kewarganegaraan_ayah" class="form-control" required>
                                                <option value="" disabled selected>Pilih Kewarganegaraan</option>
                                                <option value="WNI">WNI</option>
                                                <option value="WNA">WNA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="kebangsaan_ayah">Kebangsaan Ayah</label>
                                            <input type="text" name="kebangsaan_ayah" id="kebangsaan_ayah" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Pelapor -->
                            <p class="text-center"><strong>Data Pelapor</strong></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nik_pelapor">NIK Pelapor</label>
                                            <input type="number" name="nik_pelapor" id="nik_pelapor" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama_pelapor">Nama Lengkap Pelapor</label>
                                            <input type="text" name="nama_pelapor" id="nama_pelapor" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="umur_pelapor">Umur Pelapor</label>
                                            <input type="number" name="umur_pelapor" id="umur_pelapor" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_pelapor">Pekerjaan Pelapor</label>
                                            <input type="text" name="pekerjaan_pelapor" id="pekerjaan_pelapor" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="alamat_pelapor">Alamat Pelapor</label>
                                            <textarea name="alamat_pelapor" id="alamat_pelapor" cols="30" rows="3" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Saksi 1 dan Data Saksi 2 -->
                            <p class="text-center"><strong>Data Saksi 1 dan Data Saksi 2</strong></p>
                            <div class="row">
                                <!-- Data Saksi 1 -->
                                <div class="col-lg-6">
                                    <p class="text-center"><strong>Data Saksi 1</strong></p>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nik_saksi1">NIK Saksi 1</label>
                                            <input type="number" name="nik_saksi1" id="nik_saksi1" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama_saksi1">Nama Lengkap Saksi 1</label>
                                            <input type="text" name="nama_saksi1" id="nama_saksi1" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="umur_saksi1">Umur Saksi 1</label>
                                            <input type="number" name="umur_saksi1" id="umur_saksi1" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_saksi1">Pekerjaan Saksi 1</label>
                                            <input type="text" name="pekerjaan_saksi1" id="pekerjaan_saksi1" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="alamat_saksi1">Alamat Saksi 1</label>
                                            <textarea name="alamat_saksi1" id="alamat_saksi1" cols="30" rows="3" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>

                                <!-- Data Saksi 2 -->
                                <div class="col-lg-6">
                                    <p class="text-center"><strong>Data Saksi 2</strong></p>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nik_saksi2">NIK Saksi 2</label>
                                            <input type="number" name="nik_saksi2" id="nik_saksi2" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama_saksi2">Nama Lengkap Saksi 2</label>
                                            <input type="text" name="nama_saksi2" id="nama_saksi2" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="umur_saksi2">Umur Saksi 2</label>
                                            <input type="number" name="umur_saksi2" id="umur_saksi2" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pekerjaan_saksi2">Pekerjaan Saksi 2</label>
                                            <input type="text" name="pekerjaan_saksi2" id="pekerjaan_saksi2" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="alamat_saksi2">Alamat Saksi 2</label>
                                            <textarea name="alamat_saksi2" id="alamat_saksi2" cols="30" rows="3" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-block btn-primary btn-sm" type="submit">
                                    <b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill" required></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
