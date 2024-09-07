		<div class="row vh-100 align-items-center">
			<div class="col-lg-3 col-sm-12 my-auto" style="max-height: 30vmax; margin-left:70px">
				<div class="card p-2" style="border-radius: 18px">
					<div class="card-body">
						<div>
							<img src="<?= base_url() ?>./assets/logo/jpr.png" width="15%" class='mb-3'>
							<h2><strong>GenTA</strong></h2>
							<h6>Gentan Administrasi Terpadu</h6>
						</div>
						<div class="form-group position-relative has-icon-left" style="margin-top: 5vh;">
						<!-- <div class="card shadow-none mt-3">
							<div class="card-body">
								<div class="container px-lg-12">
									<div class="row justify-content-center align-items-center">
										
										<div class="col">
											<a class="btn btn-warning btn-sm font-bold text-dark" href="<?= base_url('administrator/login') ?>">Administrator</a>
										</div>
									</div>
								</div>
							</div>
						</div> -->

						<div class="col">
											<a class="btn btn-success btn-sm font-bold text-dark" href="<?= base_url('user/login') ?>">Warga</a>
										</div>
						<form action="<?= base_url('administrator-login-proses'); ?>" method="post" enctype="multipart/form-data">
								<label for="username">Alamat Email</label>
								<div class="position-relative">
									<input type="email" name="email" class="form-control" id="username">
									<div class="form-control-icon">
										<i data-feather="envelope"></i>
									</div>
									<small class="text-center"><?= form_error('email') ?></small>
								</div>
							</div>
							<div class="form-group position-relative has-icon-left">
								<div class="clearfix">
									<label for="password">Password</label>
								</div>
								<div class="position-relative">
									<input type="password" name="password" class="form-control rounded-pill" id="password">
									<div class="form-control-icon">
										<i data-feather="lock"></i>
									</div>
									<small class="text-center"><?= form_error('password') ?></small>
								</div>
							</div>
							<div class="btn-group d-flex justify-content-center mt-4">
								<button type="submit" class="btn btn-primary rounded-pill px-5 py-2" style="background-color: #5288bb;">
									<span><strong>Login</strong></span>
								</button>
							</div>
							<!-- <div class="clearfix mt-5">
								<a href="<?= base_url('login') ?>" type="button" class="btn btn-danger float-left">Kembali</a>
								<button type="submit" class="btn btn-primary float-right">Login</button>
							</div> -->
						</form>						
					</div>
				</div>
			</div>
		</div>
