<div class="main-content container-fluid">
    <div class="page-title">
        <h4>Preview Surat Keterangan Pindah</h4>
    </div>
    <a href="<?= base_url('verifikasi-surat-keterangan-pengantar') ?>" class="btn btn-primary btn-sm mb-2">
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
                                        <td class="value-col"><?= $data->user_nama ?></td>
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
                                            <span>Alamat</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_alamat ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Jenis Kelamin</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_jekel ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Kewarganegaraan</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_kewarganegaraan ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Agama</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_agama ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Pekerjaan</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_pekerjaan ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Status Kawin</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->user_statuskawin ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Keperluan Permohonan Surat</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->keperluan ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Tujuan</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->tujuan ?></td>
                                    </tr>
                                    <tr>
                                        <td class="label-col">
                                            <span>Keterangan Lainnya</span>
                                            <span>:</span>
                                        </td>
                                        <td class="value-col"><?= $data->keterangan_lainnya ?></td>
                                    </tr>
                                    <!-- Add more rows as needed based on the provided data -->
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
