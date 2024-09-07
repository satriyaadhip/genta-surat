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

        .data-table th:nth-child(1),
        .data-table td:nth-child(1) {
            width: 5%;
            text-align: center;
        }

        .data-table th:nth-child(2),
        .data-table td:nth-child(2) {
            width: 35%;
        }

        .data-table th:nth-child(3),
        .data-table td:nth-child(3) {
            width: 40%;
        }

        .data-table th:nth-child(4),
        .data-table td:nth-child(4) {
            width: 20%;
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
    <span style="font-size: 13px; margin-left: 15px;">No Kode Desa/Kelurahan</span><br>
    <span style="font-size: 13px; margin-left: 15px;">33 11 022003</span>

        <?php foreach ($data as $d) { ?>
            <center>
                <h5><u>SURAT KETERANGAN PENGANTAR</u></h5>
                <p>Nomor: <?= $d->nomor_surat ?></p>
            </center>

            <p style="text-indent: 50px; margin: 0 0 10px 15px;">
    Yang bertanda tangan di bawah ini Kami Kepala Desa Gentan Kecamatan Bulu Kabupaten Sukoharjo, menerangkan bahwa :
</p>


            <table class="content-table">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $d->user_nama ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $d->user_tempatlahir ?>, <?= strftime('%d %B %Y', strtotime($d->user_ttl)) ?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan / Agama</td>
                    <td>:</td>
                    <td><?= $d->user_kewarganegaraan ?> / <?= $d->user_agama ?></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><?= $d->user_pekerjaan ?></td>
                </tr>
                <tr>
                    <td>Tempat Tinggal</td>
                    <td>:</td>
                    <td><?= $d->user_alamat ?></td>
                </tr>
                <tr>
                    <td>Surat Bukti Diri</td>
                    <td>:</td>
                    <td>No KTP <?= $d->user_nik ?> No KK <?= $d->user_nomor_kk ?></td>
                </tr>
                <tr>
                    <td>Keperluan</td>
                    <td>:</td>
                    <td><?= $d->keperluan ?></td>
                </tr>
                <tr>
                    <td>Tujuan</td>
                    <td>:</td>
                    <td><?= $d->tujuan ?></td>
                </tr>
                <tr>
                    <td>Berlaku Mulai</td>
                    <td>:</td>
                    <td><?php 
                        setlocale(LC_TIME, 'id_ID');
                        echo strftime('%d %B %Y', strtotime($d->tanggal_surat)) . ' s.d ' . strftime('%d %B %Y', strtotime($d->tanggal_kadaluarsa));
                    ?></td>
                </tr>
                <tr>
                    <td>Keterangan Lain-Lain</td>
                    <td>:</td>
                    <td><?= $d->keterangan_lainnya ?></td>
                </tr>
            </table>
            
            <div style="text-align: center; margin-top: 20px;">
            <p style="margin: 5px 0;">Demikian untuk menjadikan maklum bagi yang berkepentingan</p>
            <div style="display: flex; justify-content: center;">
                <table style="width: 45%; margin-top: 20px; text-align: center; border-collapse: collapse;">
            </div>

        <td>Nomor</td>
        <td>: ..........................</td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>: ..........................</td>
    </tr>
</table>

</div>

            <div class="sign-section">
                <div class="sign-box">
                    <br>
                    <p>Tanda Tangan Pemegang</p>
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
                    <p>HARJANTO SE</p>
                </div>
            </div>
            <div class="sign-box">
                <div class="sign-box">
                    <p>Mengetahui</p>
                    <p>CAMAT BULU</p>
                    <div class="spacer"></div>
                    <p>.............................</p>
                </div>
            </div>

        <?php } ?>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
