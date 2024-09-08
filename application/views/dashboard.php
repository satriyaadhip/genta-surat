            <div class="main-content container-fluid">
                <section class="section col-lg-10 col-md-12 mx-auto">
                    <?php if ($this->session->userdata('role_id') == 1) { ?>
                        <div class="row mb-2">
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-warning" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $mvskd['jumlah'] + $mvsk['jumlah'] + $mvskk['jumlah'] + $mvskp['jumlah'] + $mvsktm['jumlah'] + $mvsku['jumlah']; ?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark">Menunggu<br>Verifikasi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-success" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $pdskd['jumlah'] + $pdsk['jumlah'] + $pdskk['jumlah'] + $pdskp['jumlah'] + $pdsktm['jumlah'] + $pdsku['jumlah']; ?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark"><span>Permohonan<br>Diterima</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-danger" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $ptskd['jumlah'] + $ptsk['jumlah'] + $ptskk['jumlah'] + $ptskp['jumlah'] + $ptsktm['jumlah'] + $ptsku['jumlah']; ?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark">Permohonan<br>Ditolak</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6">
                                <div class="card bg-info" style="border-radius: 10px;">
                                    <div class="card-body p-0">
                                        <div class="d-flex flex-column">
                                            <div class='px-3 py-3 d-flex justify-content-between'>
                                                <h1 class='text-dark font-bold'><?= $psd + $sk + $kk + $skp + $sktm + $sku?></h1>
                                            </div>
                                            <div class="card-right d-flex align-items-center p-3">
                                                <p class="text-dark"><span>Total<br>Permohonan</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else if ($this->session->userdata('role_id') == 2) { ?>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body bg-success">
                                        <h4 class="font-bold text-white">SELAMAT DATANG DI APLIKASI PELAYANAN SURAT</h4>
                                        <h5 class="font-bold text-white">GENTAN - SUKOHARJO</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header bg-info">
                                        <h5 class="text-dark text-center"><b>DATA PERMOHONAN SURAT</b></h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row p-2">
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header bg-warning">
                                                        <h5 class="text-dark font-bold text-center">MENUNGGU VERIFIKASI</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <h1 class="text-center p-3 text-dark font-bold"><?= $mvskd['jumlah'] + $mvsk['jumlah'] + $mvskk['jumlah'] + $mvskp['jumlah'] + $mvsktm['jumlah'] + $mvsku['jumlah']; ?></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header bg-success">
                                                        <h5 class="text-dark font-bold text-center">PERMOHONAN DITERIMA</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <h1 class="text-center p-3 text-dark font-bold"><?= $pdskd['jumlah'] + $pdsk['jumlah'] + $pdskk['jumlah'] + $pdskp['jumlah'] + $pdsktm['jumlah'] + $pdsku['jumlah']; ?></h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header bg-danger">
                                                        <h5 class="text-dark font-bold text-center">PERMOHONAN DITOLAK</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <h1 class="text-center p-3 text-dark font-bold"><?= $ptskd['jumlah'] + $ptsk['jumlah'] + $ptskk['jumlah'] + $ptskp['jumlah'] + $ptsktm['jumlah'] + $ptsku['jumlah']; ?></h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else if ($this->session->userdata('role_id') == 3) { ?>
                        <div class="col-12 p-4">
							<div class="row">
								<div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto" style="max-width: 1200px; max-height: 700px; overflow: hidden;">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">Pizza</li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									</ol>
							<div class="carousel-inner shadow-none">
								<div class="carousel-item active">
								<img class="d-block w-100" src="./assets/images/background/carousel-1.jpg" alt="First slide" style="object-fit: cover;">
									<div class="carousel-caption d-none d-md-block">
										<h5>Selamat datang di GENTA</h5>
										<p>Aplikasi layanan surat Desa Gentan, Kecamatan Bulu</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="./assets/images/background/carousel-2.jpg" alt="Second slide" style="object-fit: cover;">
								<div class="carousel-caption d-none d-md-block">
										<h5>Selamat datang di GENTA</h5>
										<p>Aplikasi layanan surat Desa Gentan, Kecamatan Bulu</p>
									</div>
								</div>
								<div class="carousel-item">
								<img class="d-block w-100" src="./assets/images/background/carousel-3.jpg" alt="Third slide" style="object-fit: cover;">
								<div class="carousel-caption d-none d-md-block">
										<h5>Selamat datang di GENTA</h5>
										<p>Aplikasi layanan surat Desa Gentan, Kecamatan Bulu</p>
									</div>
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
							</div>
                            <div class="row mx-1 mt-4">
                                <div class="col-sm-12 col-lg-8 p-4 card shadow-none mx-auto" style="border-radius: 18px">
                                    <div class="page-title">
                                        <h5>
                                            <strong>Pilih salah satu layanan surat berikut dibawah ini.</strong>
                                        </h5>
                                    </div>
                                    <div class="row d-flex">
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('skd/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #ef8c50, #ef6445);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_pindahdom.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Pindah</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('skp/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #50d2ef, #45b2ef);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_pengantar.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Pengantar</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('spak/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #40dec2, #00a6b4);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_aktakel.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Akta Kelahiran</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-3">
                                            <a href="<?= base_url('skk/buat-surat') ?>">
                                                <div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #59d8c1, #2d8e7c);" role="alert">
                                                    <div class="alert-text mt-2 px-4 py-3">
                                                        <img src="<?= base_url() ?>./assets/icons/logo_kematian.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
                                                        <h6 class="text-white">Surat Keterangan<br />Kematian</h6>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-3 p-4 card shadow-none mx-auto" style="border-radius: 18px">
                                    <div class="page-title">
                                        <h5>
                                            <strong>Butuh bantuan?</strong>
                                        </h5>
                                    </div>
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 122.88 122.27" width="24px" height="24px" style="enable-background:new 0 0 122.88 122.27;" xml:space="preserve">
        <g>
            <path d="M33.84,50.25c4.13,7.45,8.89,14.6,15.07,21.12c6.2,6.56,13.91,12.53,23.89,17.63c0.74,0.36,1.44,0.36,2.07,0.11
            c0.95-0.36,1.92-1.15,2.87-2.1c0.74-0.74,1.66-1.92,2.62-3.21c3.84-5.05,8.59-11.32,15.3-8.18c0.15,0.07,0.26,0.15,0.41,0.21
            l22.38,12.87c0.07,0.04,0.15,0.11,0.21,0.15c2.95,2.03,4.17,5.16,4.2,8.71c0,3.61-1.33,7.67-3.28,11.1
            c-2.58,4.53-6.38,7.53-10.76,9.51c-4.17,1.92-8.81,2.95-13.27,3.61c-7,1.03-13.56,0.37-20.27-1.69
            c-6.56-2.03-13.17-5.38-20.39-9.84l-0.53-0.34c-3.31-2.07-6.89-4.28-10.4-6.89C31.12,93.32,18.03,79.31,9.5,63.89
            C2.35,50.95-1.55,36.98,0.58,23.67c1.18-7.3,4.31-13.94,9.77-18.32c4.76-3.84,11.17-5.94,19.47-5.2c0.95,0.07,1.8,0.62,2.25,1.44
            l14.35,24.26c2.1,2.72,2.36,5.42,1.21,8.12c-0.95,2.21-2.87,4.25-5.49,6.15c-0.77,0.66-1.69,1.33-2.66,2.03
            c-3.21,2.33-6.86,5.02-5.61,8.18L33.84,50.25z"/>
        </g>
    </svg>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
