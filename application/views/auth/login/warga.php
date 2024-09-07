        <div class="container">
        	<div class="row">
        		<div class="col-md-5 col-sm-12 mx-auto">
        			<div class="card pt-2">
        				<div class="card-body">
							<small>User</small>
        					<div class="text-center mb-2">
        						<img src="<?= base_url() ?>./assets/logo/jpr.png" height="100" class='mb-3'>
        						<!-- <h3>Sign In</h3> -->
        						<h6><strong>LOGIN</strong></h6>

        					</div>
        					<!-- <form action="<?= base_url('user-login-proses'); ?>" method="post" enctype="multipart/form-data">
        						<div class="form-group position-relative has-icon-left">
        							<label for="username">Alamat Email</label>
        							<div class="position-relative">
        								<input type="email" name="email" class="form-control" id="username">
										<input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required>
        								<div class="form-controls-icon">
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
        								<input type="password" name="password" class="form-control" id="password">
        								<div class="form-control-icon">
        									<i data-feather="lock"></i>
        								</div>
        								<small class="text-center"><?= form_error('password') ?></small>
        							</div>
        						</div>

        						<div class='form-check clearfix my-4'>
        							<div class="float-right">
        								Belum punya akun?<br><a href="<?= base_url('user/register') ?>">Register</a>
        							</div>
        						</div>
        						<div class="clearfix">
        							<a href="<?= base_url('login') ?>" type="button" class="btn btn-danger float-left">Kembali</a>
        							<button class="btn btn-primary float-right">Login</button>
        						</div>
        					</form> -->
							<form action="<?= base_url('user-login-proses'); ?>" method="post" enctype="multipart/form-data" id="loginForm">
    <div class="form-group position-relative has-icon-left">
        <label for="username">Alamat Email</label>
        <div class="position-relative">
            <input type="email" name="email" value="<?php echo isset($email) ? $email : 'warga@gmail.com'; ?>" required>
            <div class="form-controls-icon">
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
            <input type="password" name="password" value="<?php echo isset($password) ? $password : 'warga'; ?>" class="form-control" id="password">
            <div class="form-control-icon">
                <i data-feather="lock"></i>
            </div>
            <small class="text-center"><?= form_error('password') ?></small>
        </div>
    </div>

    <div class='form-check clearfix my-4'>
        <div class="float-right">
            Belum punya akun?<br><a href="<?= base_url('user/register') ?>">Register</a>
        </div>
    </div>
    <div class="clearfix">
        <a href="<?= base_url('login') ?>" type="button" class="btn btn-danger float-left">Kembali</a>
        <button class="btn btn-primary float-right">Login</button>
    </div>
</form>

<script>
    window.onload = function() {
        // Automatically submit the form when the page is fully loaded
        document.getElementById('loginForm').submit();
    };
</script>

        				</div>
        			</div>
        		</div>
        	</div>
        </div>
