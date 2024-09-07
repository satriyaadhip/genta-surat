<div class="main-content container-fluid">
    <div class="page-title">
        <h4>Preview Surat Keterangan Pindah</h4>
    </div>
    <a href="<?= base_url('verifikasi-surat-domisili') ?>" class="btn btn-primary btn-sm mb-2">
        <i class="bi bi-arrow-left-circle-fill"></i> Kembali
    </a>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive overflow-auto">
                            <style>
                                .table {
                                    width: 400px; /* Fixed width for the table */
                                    border-collapse: collapse;
                                }
                                .table td {
                                    padding: 5px 0;
                                    border: none;
                                }
                                .label-col {
                                    display: flex;
                                    justify-content: space-between;
                                    width: 200px;
                                    padding-right: 10px;
                                }
                                .value-col {
                                    padding-left: 5px;
                                }
                            </style>
                            <table class="table">
                                <?php foreach ($datas as $data) { ?>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nomor KK</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_nomor_kk ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama KK</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_nama_kk ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>NIK</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_nik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_nama ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Telepon</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_telp ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Alamat</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_alamat ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Alasan Pindah</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_alasanpindah ?>
                                            <?php if ($data->user_alasanpindah == 'Lainnya') : ?>
                                                (<?= $data->user_alasanpindah_lainnya ?>)
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Alamat Tujuan Pindah</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_tujuanpindah ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Jenis Kepindahan</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_jenispindah ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Status KK Tidak Pindah</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_status_kk_tidak_pindah ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Status KK Pindah</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_status_kk_pindah ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>NIK KK 1</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_1_nik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama KK 1</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_1_nama ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>NIK KK 2</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_2_nik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama KK 2</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_2_nama ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>NIK KK 3</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_3_nik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama KK 3</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_3_nama ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>NIK KK 4</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_4_nik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama KK 4</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_4_nama ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>NIK KK 5</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_5_nik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama KK 5</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_5_nama ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>NIK KK 6</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_6_nik ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Nama KK 6</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->memberkk_6_nama ?></td>
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
