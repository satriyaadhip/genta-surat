<div class="main-content container-fluid">
    <section class="section">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="btn-group">
                    <a href="<?= base_url('list-surat') ?>" class="btn-md mb-3 p-3 text-dark" style="background-color: white; border-radius: 30px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                            <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                        </svg>
                        <span class="ml-2 mt-4"><strong>Surat Keterangan Pindah</strong></span>
                    </a>
                </div>
                <div class="card shadow-none" style="border-radius: 20px;">
                    <div class="card-body">
                        <form action="<?= base_url('skd/proses') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="user_nomor_kk">Nomor Kartu Keluarga</label>
                                <input type="text" name="user_nomor_kk" id="user_nomor_kk" class="form-control" value="<?= set_value('user_nomor_kk') ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="user_nama_kk">Nama Kartu Keluarga</label>
                                <input type="text" name="user_nama_kk" id="user_nama_kk" class="form-control" value="<?= set_value('user_nama_kk') ?>" required />
                            </div>
                            <div class="form-group">
    <label for="user_alamat">Alamat</label>
    <textarea name="user_alamat" id="user_alamat" class="form-control" rows="5" required><?= set_value('user_alamat') ?></textarea>

                            </div>
                            <div class="form-group">
                                <label for="user_nik">NIK Pemohon</label>
                                <input type="number" name="user_nik" id="user_nik" class="form-control" value="<?= set_value('user_nik') ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="user_nama">Nama Lengkap</label>
                                <input type="text" name="user_nama" id="user_nama" class="form-control" value="<?= set_value('user_nama') ?>" required />
                            </div>
                            <div class="form-group">
                                <label for="user_telp">Telepon</label>
                                <input type="number" name="user_telp" id="user_telp" class="form-control" value="<?= set_value('user_telp') ?>" required />
                            </div>
</div>
</div>
                            <div class="card shadow-none" style="border-radius: 20px;">
                                <div class="card-body">
                                    <h6 class="mb-4"><strong>Data Kepindahan</strong></h6>
                                    <div class="form-group">
                                        <label for="alasanPindah">Alasan Pindah</label>
                                        <select name="user_alasanpindah" class="form-control" id="alasanPindah" required>
                                            <option value="" selected disabled>Pilih Alasan Pindah</option>
                                            <option value="Pekerjaan">Pekerjaan</option>
                                            <option value="Pendidikan">Pendidikan</option>
                                            <option value="Keamanan">Keamanan</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                            <option value="Perumahan">Perumahan</option>
                                            <option value="Keluarga">Keluarga</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                        <input type="text" name="user_alasanpindah_lainnya" class="form-control mt-2" id="lainnyaText" placeholder="Sebutkan jika lainnya" style="display:none;">
                                    </div>
                                    <div class="form-group">
    <label for="user_tujuanpindah">Alamat Tujuan Pindah</label>
    <textarea name="user_tujuanpindah" id="user_tujuanpindah" rows="5" class="form-control" required><?= set_value('user_tujuanpindah') ?></textarea>
</div>

                                    <div class="form-group">
                                        <label for="user_jenispindah">Jenis Kepindahan</label>
                                        <select name="user_jenispindah" id="user_jenispindah" class="form-control" required>
                                            <option selected disabled>Pilih jenis pindah</option>
                                            <option value="Kep. Keluarga">Kepala Keluarga</option>
                                            <option value="Seluruh Anggota">Seluruh Anggota Keluarga</option>
                                            <option value="Sebagian Anggota">Sebagian Anggota Keluarga</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_status_kk_tidak_pindah">Status KK Tidak Pindah</label>
                                        <select name="user_status_kk_tidak_pindah" id="user_status_kk_tidak_pindah" class="form-control" required>
                                            <option selected disabled>Pilih status</option>
                                            <option value="Menumpang KK">Menumpang KK</option>
                                            <option value="Membuat KK baru">Membuat KK Baru</option>
                                            <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_status_kk_pindah">Status KK Pindah</label>
                                        <select name="user_status_kk_pindah" id="user_status_kk_pindah" class="form-control" required>
                                            <option selected disabled>Pilih status</option>
                                            <option value="Menumpang KK">Menumpang KK</option>
                                            <option value="Membuat KK baru">Membuat KK Baru</option>
                                            <option value="Nomor KK Tetap">Nomor KK Tetap</option>
                                        </select>
                                    </div>
</div>
</div>
                                    <div class="card shadow-none" style="border-radius: 20px;">
                                <div class="card-body">
                                <h6><strong>Isian Kartu Keluarga</strong></h6>
                                <p class="mb-4">Biarkan isian kosong jika tidak ada data yang dimasukkan.</p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_1_nik">NIK KK 1</label>
                                                <input type="text" name="memberkk_1_nik" class="form-control" value="<?= set_value('memberkk_1_nik') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_1_nama">Nama KK 1</label>
                                                <input type="text" name="memberkk_1_nama" class="form-control" value="<?= set_value('memberkk_1_nama') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_2_nik">NIK KK 2</label>
                                                <input type="text" name="memberkk_2_nik" class="form-control" value="<?= set_value('memberkk_2_nik') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_2_nama">Nama KK 2</label>
                                                <input type="text" name="memberkk_2_nama" class="form-control" value="<?= set_value('memberkk_2_nama') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_3_nik">NIK KK 3</label>
                                                <input type="text" name="memberkk_3_nik" class="form-control" value="<?= set_value('memberkk_3_nik') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_3_nama">Nama KK 3</label>
                                                <input type="text" name="memberkk_3_nama" class="form-control" value="<?= set_value('memberkk_3_nama') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_4_nik">NIK KK 4</label>
                                                <input type="text" name="memberkk_4_nik" class="form-control" value="<?= set_value('memberkk_4_nik') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_4_nama">Nama KK 4</label>
                                                <input type="text" name="memberkk_4_nama" class="form-control" value="<?= set_value('memberkk_4_nama') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_5_nik">NIK KK 5</label>
                                                <input type="text" name="memberkk_5_nik" class="form-control" value="<?= set_value('memberkk_5_nik') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_5_nama">Nama KK 5</label>
                                                <input type="text" name="memberkk_5_nama" class="form-control" value="<?= set_value('memberkk_5_nama') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_6_nik">NIK KK 6</label>
                                                <input type="text" name="memberkk_6_nik" class="form-control" value="<?= set_value('memberkk_6_nik') ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="memberkk_6_nama">Nama KK 6</label>
                                                <input type="text" name="memberkk_6_nama" class="form-control" value="<?= set_value('memberkk_6_nama') ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-block btn-primary btn-sm mt-4" type="submit"><b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill"></i></button>
                            </div>
                        </form>
                        <script>
                            document.getElementById('alasanPindah').addEventListener('change', function() {
                                var inputLainnya = document.getElementById('lainnyaText');
                                inputLainnya.style.display = this.value === 'Lainnya' ? 'block' : 'none';
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
