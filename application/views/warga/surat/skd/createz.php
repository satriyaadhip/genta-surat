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
                                            <input type="text" name="user_alamat" id="user_alamat" class="form-control" value="<?= set_value('user_alamat') ?>" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="user_nik">NIK Pemohon</label>
                                            <input type="text" name="user_nik" id="user_nik" class="form-control" value="<?= set_value('user_nik') ?>" required />
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
                                            <input type="text" name="user_tujuanpindah" id="user_tujuanpindah" class="form-control" value="<?= set_value('user_tujuanpindah') ?>" required />
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
                                        <!-- Dynamic fields for family members -->
                                        <div class="form-group">
                                            <label>Anggota Keluarga</label>
                                            <div id="familyMembersContainer">
                                                <!-- JavaScript will append family member fields here -->
                                            </div>
                                            <button type="button" onclick="addFamilyMember()" class="btn btn-info">Tambah Anggota Keluarga</button>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-primary btn-sm mt-4" type="submit"><b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill"></i></button>
                                        </div>
                                    </form>

                                    <script>
                                        let memberIndex = 1; // Start with 2 because member-1 and member-2 are already in the form
                                        function addFamilyMember() {
                                            if (memberIndex <= 7) { // Ensure no more than 7 members are added
                                                const container = document.getElementById('familyMembersContainer');
                                                const memberDiv = document.createElement('div');
                                                memberDiv.className = 'member-group';
                                                memberDiv.id = 'member-' + memberIndex;
                                                memberDiv.innerHTML = `
                                                    <label for="memberkk_${memberIndex}_nik">Member ${memberIndex} NIK:</label>
                                                    <input type="text" name="memberkk_${memberIndex}_nik" id="memberkk_${memberIndex}_nik" class="form-control">
                                                    <label for="memberkk_${memberIndex}_nama">Member ${memberIndex} Nama:</label>
                                                    <input type="text" name="memberkk_${memberIndex}_nama" id="memberkk_${memberIndex}_nama" class="form-control">
                                                    <button type="button" onclick="removeFamilyMember(${memberIndex})" class="btn btn-danger">Remove</button>
                                                `;
                                                container.appendChild(memberDiv);
                                                memberIndex++; // Increment to add a new member index
                                            }
                                        }

                                        function removeFamilyMember(index) {
                                            const memberGroup = document.getElementById('member-' + index);
                                            if (memberGroup) {
                                                memberGroup.parentNode.removeChild(memberGroup);
                                                memberIndex--; // Decrement to keep the count correct
                                            }
                                        }

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