<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
    <style>
        body {
            font-size: 15px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 95%;
            margin: 0 auto;
            padding: 2px;
        }

        .header-table {
            width: 100%;
            margin-bottom: 10px;
        }

        .header-table img {
            width: 80px;
            height: 100px;
        }

        .header-text {
            font-size: 16px;
            font-weight: bold;
            line-height: 1.5;
            text-align: center;
            margin-bottom: 5px;
        }

        .header-text p {
            margin: 3px 0;
        }

        hr {
            margin: 10px 0;
        }

        .content-table {
            width: 100%;
            margin: 0 10px;
        }

        .content-table td {
            padding: 2px 5px;
            vertical-align: top;
        }

        .content-table tr td:first-child {
            width: 35%;
        }

        .content-table tr td:nth-child(2) {
            width: 5%;
            text-align: center;
        }

        .content-table tr td:last-child {
            width: 60%;
            padding-left: 2px;
        }

        .keterangan-desa{
            margin: 10px 0;
            margin-right: 30%;
            width: 60%;
            font-size: 12px;
        }

        .keterangan-desa td {
            padding: 2px 5px;
            vertical-align: top;
        }


        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 10px;
            font-size: 14px;
        }

        .data-table th,
        .data-table td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }

        /* Set specific widths for each column to match the image layout */
        .data-table th:nth-child(1),
        .data-table td:nth-child(1) {
            width: 5%; /* No. column */
            text-align: center;
        }

        .data-table th:nth-child(2),
        .data-table td:nth-child(2) {
            width: 35%; /* NIK column */
        }

        .data-table th:nth-child(3),
        .data-table td:nth-child(3) {
            width: 40%; /* Nama column */
        }

        .data-table th:nth-child(4),
        .data-table td:nth-child(4) {
            width: 20%; /* Keterangan column */
            text-align: center;
        }

        .sign-section {
            width: 100%;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding: 0 20px;
        }

        .sign-box {
            text-align: center;
        }

        .sign-box p {
            margin: 0;
        }

        .sign-box .spacer {
            height: 60px;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="header-table">
            <tr>
                <td><img src="<?= base_url() ?>./assets/logo/jpr.png"></td>
                <td>
                    <div class="header-text">
                        <p>PEMERINTAH KABUPATEN SUKOHARJO</p>
                        <p>KECAMATAN BULU</p>
                        <p>DESA GENTAN</p>
                        <small>Jalan Batu Seribu No 10 Tlpn - Email<br>gentan3311022003@gmail.com Kode Pos 57563</small>
                    </div>
                </td>
            </tr>
        </table>
        <hr>

        <table class="keterangan-desa">
            <tr>
                <td>PROVINSI</td>
                <td>: 33 JAWA TENGAH</td>
            </tr>
            <tr>
                <td>KABUPATEN</td>
                <td>: 11 SUKOHARJO</td>
            </tr>
            <tr>
                <td>KECAMATAN</td>
                <td>: 2 BULU</td>
            </tr>
            <tr>
                <td>DESA/KELURAHAN</td>
                <td>: 2003 GENTAN</td>
            </tr>
            <tr>
                <td>DUSUN/DUKUH/KAMPUNG</td>
                <td>: KELOR RT 2/RW 8</td>
            </tr>
        </table>

        <?php foreach ($data as $d) { ?>
            <center>
                <h5><u>PERMOHONAN PINDAH WNI</u></h5>
                <p>Nomor: <?= $d->nomor_surat ?></p>
            </center>

            <table class="content-table">
                <tr>
                    <td colspan="3"><strong>DATA DAERAH ASAL</strong></td>
                </tr>
                <tr>
                    <td>Nomor Kartu Keluarga</td>
                    <td>: </td>
                    <td><?= $d->user_nomor_kk ?></td>
                </tr>
                <tr>
                    <td>Nama Kepala Keluarga</td>
                    <td>: </td>
                    <td><?= $d->user_nama_kk ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: </td>
                    <td><?= $d->user_alamat ?></td>
                </tr>
                <tr>
                    <td>NIK Pemohon</td>
                    <td>: </td>
                    <td><?= $d->user_nik ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: </td>
                    <td><?= $d->user_nama ?></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>: </td>
                    <td><?= $d->user_telp ?></td>
                </tr>
            </table>

            <table class="content-table">
                <tr>
                    <td colspan="3"><strong>DATA KEPINDAHAN</strong></td>
                </tr>
                <tr>
                    <td>Alasan Pindah</td>
                    <td>: </td>
                    <td><?= $d->user_alasanpindah ?>
                    <?php if ($d->user_alasanpindah == 'Lainnya') : ?>
                                                (<?= $d->user_alasanpindah_lainnya ?>)
                                            <?php endif; ?>
                </td>
                </tr>
                <tr>
                    <td>Alamat Tujuan Pindah</td>
                    <td>: </td>
                    <td><?= $d->user_tujuanpindah ?></td>
                </tr>
                <tr>
                    <td>Jenis Kepindahan</td>
                    <td>: </td>
                    <td><?= $d->user_jenispindah ?></td>
                </tr>
                <tr>
                    <td>Status KK Tidak Pindah</td>
                    <td>: </td>
                    <td><?= $d->user_status_kk_tidak_pindah ?></td>
                </tr>
                <tr>
                    <td>Status KK Pindah</td>
                    <td>: </td>
                    <td><?= $d->user_status_kk_pindah ?></td>
                </tr>
            </table>

            <!-- Dynamic Data Table for Family Members -->
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $members = [
                        ['nik' => $d->memberkk_1_nik, 'nama' => $d->memberkk_1_nama],
                        ['nik' => $d->memberkk_2_nik, 'nama' => $d->memberkk_2_nama],
                        ['nik' => $d->memberkk_3_nik, 'nama' => $d->memberkk_3_nama],
                        ['nik' => $d->memberkk_4_nik, 'nama' => $d->memberkk_4_nama],
                        ['nik' => $d->memberkk_5_nik, 'nama' => $d->memberkk_5_nama],
                        ['nik' => $d->memberkk_6_nik, 'nama' => $d->memberkk_6_nama]
                    ];

                    $no = 1;
                    foreach ($members as $member) {
                        if (!empty($member['nik']) && !empty($member['nama'])) {
                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$member['nik']}</td>
                                    <td>{$member['nama']}</td>
                                    <td>Pindah</td>
                                  </tr>";
                            $no++;
                        }
                    }
                    ?>
                </tbody>
            </table>

            <div class="sign-section">
    <div class="sign-box">
        <br>
        <p>Pemohon</p>
        <div class="spacer"></div>
        <p><?= $d->user_nama ?></p>
    </div>
    <div class="sign-box">
        <?php
        // Set locale for Indonesian
        setlocale(LC_TIME, 'id_ID.utf8');

        // Get current date in Indonesian format
        $tanggal = strftime('%d %B %Y');
        ?>
        <p>GENTAN, <?= $tanggal ?></p>
        <p>KASI PEMERINTAHAN</p>
        <div class="spacer"></div>
        <p>SUNARYO</p>
    </div>
</div>

        <?php } ?>
    </div>
    <script>
        window.print();
    </script>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
