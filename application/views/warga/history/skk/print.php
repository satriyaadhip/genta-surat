<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
</head>

<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <center>
                <table width="100%">
                    <tr>
                        <td>
                            <img src="<?= base_url() ?>./assets/logo/jpr.png" width="100px" height="130px">
                        </td>
                        <td>
                            <center>
                                <strong>
                                    <h5>PEMERINTAHAN KABUPATEN SUKOHARJO</h5>
                                    <h5>KECAMATAN BULU</h5>
                                    <h5>DESA GENTAN</h5>
                                    <small>Jalan Serut Raya No. 1 Kode Pos : 59464</small>
                                </strong>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
            <hr>

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
                    
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong>
                        <p>Nomor : <?= $d->nomor_surat ?></p>
                    </span>
                <?php } ?>
            </div>
            <div class="text-surat">
            <?php
$bulanIndo = [
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
];

if (!empty($d->tanggal_meninggal)) {
    $tanggal = strtotime($d->tanggal_meninggal);
    $hari = date('d', $tanggal);
    $bulan = date('m', $tanggal);
    $tahun = date('Y', $tanggal);
    $formatTanggalIndo = $hari . ' ' . $bulanIndo[$bulan] . ' ' . $tahun;
} else {
    $formatTanggalIndo = 'Tanggal tidak tersedia';
}
?>
                <p>Yang bertanda tangan di bawah ini:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->user_nama ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                            <td><?= $d->user_nik ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->user_tempatlahir ?>, <?= $d->user_ttl ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d->user_jekel ?></td>
                        </tr>
                        <tr>
                            <td>RT/RW</td>
                            <td>: </td>
                            <td><?= $d->user_rt ?>/<?= $d->user_rw ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->user_alamat ?></td>
                        </tr>
                        <tr>
                            <td>Hubungan dengan yang meninggal</td>
                            <td>: </td>
                            <td><?= $d->hubungan ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Menyatakan bahwa:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama_alm ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d->jekel_a ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat_a ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Adalah benar - benar meninggal pada:</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Hari</td>
                            <td>: </td>
                            <td><?= $d->hari ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>: </td>
                            <td><?= $formatTanggalIndo ?></td>
                        </tr>
                        <tr>
                            <td>Dimakamkan di</td>
                            <td>: </td>
                            <td><?= $d->tempat_pemakaman ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p style="text-align: justify;">
                    Demikian surat pernyataan ini saya buat dengan sebenar-benarnya dan apabila dikemudian hari
                    ternyata pernyataan saya ini tidak benar, maka saya bersedia diproses secara hukum sesuai
                    peraturan perundang-undangan dan dokumen yang diterbitkan akibat dan pernyataan tidak benar
                    menjadi tidak sah/batal demi hukum.
                </p>
                <br>
                <div class="kades float-end">
                    <span class="mb-n2">Sukoharjo, <?= date('d M Y') ?></span>
                    <p>KEPALA DESA GENTAN</p>
                    <img src="<?= base_url('./assets/ttd/ttd.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">
                    <p class="fw-bold" style="margin-top: -30px; z-index:2;">HARJANTO, S.E</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>