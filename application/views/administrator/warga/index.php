            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Data Warga</h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="btn-group mb-3">
                                        <!-- <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahData">Tambah Data</button> -->
                                        <a href="<?= base_url('tambah-data-warga') ?>" class="btn btn-success btn-sm">Tambah Data</a>
                                    </div>
                                    <div class="table-responsive overflow-auto">
                                        <table id="data-warga" class="table table-striped table-bordered text-center overflow-auto" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Aksi</th>
                                                    <th>Nik</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Agama</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($warga as $data) { ?>
                                                    <tr>
                                                        <td><?= $n ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="<?= base_url('edit-warga/' . $data->id_warga) ?>" class="btn btn-warning btn-sm">Edit</a>
                                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $data->id_warga ?>">Hapus</button>
                                                                <a href="<?= base_url('detail-warga/' . $data->id_warga . '?nik=' . $data->nik) ?>" class="btn btn-info btn-sm">Detail</a>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="hapus<?= $data->id_warga ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header bg-danger">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="alert alert-warning text-center" role="alert">
                                                                                        <h5>Apakah anda yakin akan menghapus data ini ?</h5>
                                                                                        <p>NIK : <?= $data->nik ?></p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
                                                                            <a href="<?= base_url('delete-warga/' . $data->id_warga) ?>" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <td><?= $data->nik ?></td>
                                                        <td><?= $data->nama ?></td>
                                                        <td><?= $data->jekel ?></td>
                                                        <td><?= $data->agama ?></td>
                                                    </tr>
                                                <?php $n++;
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>


            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Tambah</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="" method="post" enctype="multipart/form-data">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>