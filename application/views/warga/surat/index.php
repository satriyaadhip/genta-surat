<style>
    .img-icon {
        max-width: 20%;
    }

    @media screen and (max-width: 200px) {
        .img-icon {
            max-width: 10%;
        }
    }
</style>
<div class="main-content container-fluid">
    <section class="section">
        <div class="col-12">
			<div class="row">
				<div class="col-sm-12 col-lg-8 p-4 card shadow-none mx-auto" style="border-radius: 18px">
					<div class="page-title">
						<h5>
							<strong>Pilih salah satu layanan surat berikut dibawah ini.</strong>
						</h5>
					</div>
					<div class="row d-flex">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<a href="<?= base_url('skd/buat-surat') ?>">
								<div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #ef8c50, #ef6445);" role="alert">
									<div class="alert-text mt-2 px-4 py-3">
										<img src="<?= base_url() ?>./assets/icons/logo_pindahdom.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
										<h6 class="text-white">Surat Keterangan<br />Pindah</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<a href="<?= base_url('skp/buat-surat') ?>">
								<div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #50d2ef, #45b2ef);" role="alert">
									<div class="alert-text mt-2 px-4 py-3">
										<img src="<?= base_url() ?>./assets/icons/logo_pengantar.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
										<h6 class="text-white">Surat Keterangan<br />Pengantar</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<a href="<?= base_url('spak/buat-surat') ?>">
								<div class="mb-2" style="border-radius: 15px; background-image: linear-gradient(to bottom right, #40dec2, #00a6b4);" role="alert">
									<div class="alert-text mt-2 px-4 py-3">
										<img src="<?= base_url() ?>./assets/icons/logo_aktakel.png" class="my-4" style="max-width: 64px; margin-top: 100px" />
										<h6 class="text-white">Surat Keterangan<br />Akta Kelahiran</h6>
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
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
				</div>
			</div>
		</div>
    </section>
</div>
