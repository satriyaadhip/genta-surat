<?php
if ($this->session->userdata('role_id') == 3) {
    //get notifikasi
    $skd = $this->M_notifikasi->nSkd();
    $sktm = $this->M_notifikasi->nSktm();
    $sku = $this->M_notifikasi->nSku();
    $skp = $this->M_notifikasi->nSkp();
    $spak = $this->M_notifikasi->nSpak();
    $skk = $this->M_notifikasi->nSkk();

    //jumlah data notifikasi surat users
    $all = $skd['jumlah'] + $sktm['jumlah'] + $sku['jumlah'] + $skp['jumlah'] + $spak['jumlah'] + $skk['jumlah'];
}

if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) {
    //get notifikasi admin
    $Skd = $this->M_notifikasi->aSkd();
    $Sktm = $this->M_notifikasi->aSktm();
    $Sku = $this->M_notifikasi->aSku();
    $Skp = $this->M_notifikasi->aSkp();
    $Spak = $this->M_notifikasi->aSpak();
    $Skk = $this->M_notifikasi->aSkk();

    $adminAll = $Skd['jumlah'] + $Sktm['jumlah'] + $Sku['jumlah'] + $Skp['jumlah'] + $Spak['jumlah'] + $Skk['jumlah'];
}

?>
<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-menu">
            <ul class="menu">
                <!-- <li class='sidebar-title'>Main Menu</li> -->
                <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3) { ?>
                    <li class="sidebar-item <?= $this->uri->segment(1) == 'dashboard' ? 'active ' : '' ?>">
                        <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                            <i class="bi bi-speedometer"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('role_id') == 1) { ?>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-envelope-check-fill"></i>
                            <span>Verifikasi Surat</span>
                            <span class="badge badge bg-danger text-white"><?= $adminAll; ?></span>
                        </a>
                        <ul class="submenu active
                        <?=
                        $this->uri->segment(1) == 'verifikasi-surat-domisili' ||
                            $this->uri->segment(1) == 'verifikasi-surat-usaha' ||
                            $this->uri->segment(1) == 'verifikasi-surat-tidak-mampu' ||
                            $this->uri->segment(1) == 'verifikasi-surat-keterangan-pengantar' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kelahiran' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kematian'
                            ? 'active ' : ''
                        ?>">
                            <li>
                                <a href="<?= base_url('verifikasi-surat-domisili') ?>">Surat Keterangan Pindah
                                    <span class="badge badge bg-danger text-white"><?= $Skd['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-keterangan-pengantar') ?>">Surat Keterangan Pengantar
                                    <span class="badge badge bg-danger text-white"><?= $Skp['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-kelahiran') ?>">Surat Akte Kelahiran
                                    <span class="badge badge bg-danger text-white"><?= $Spak['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-kematian') ?>">Surat Keterangan Kematian
                                    <span class="badge badge bg-danger text-white"><?= $Skk['jumlah'] ?></span></a>
                            </li>
                        </ul>
                    </li>

                    <!-- <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-warga' || $this->uri->segment(1) == 'tambah-data-warga' || $this->uri->segment(1) == 'edit-warga' || $this->uri->segment(1) == 'detail-warga' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-warga') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Warga</span>
                        </a>
                    </li>
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-users' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-users') ?>" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill"></i>
                            <span>Data Users</span>
                        </a>
                    </li> -->
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-administrator' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-administrator') ?>" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span>Administrator</span>
                        </a>
                    </li>

                <?php } else if ($this->session->userdata('role_id') == 2) { ?>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-envelope-check-fill"></i>
                            <span>Verifikasi Surat</span>
                            <span class="badge badge bg-danger text-white"><?= $adminAll; ?></span>
                        </a>
                        <ul class="submenu
                        <?=
                            $this->uri->segment(1) == 'verifikasi-surat-domisili' ||
                            $this->uri->segment(1) == 'verifikasi-surat-usaha' ||
                            $this->uri->segment(1) == 'verifikasi-surat-tidak-mampu' ||
                            $this->uri->segment(1) == 'verifikasi-surat-keterangan-pengantar' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kelahiran' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kematian'
                            ? 'active ' : ''
                        ?>">
                            <li>
                                <a href="<?= base_url('verifikasi-surat-domisili') ?>">Surat Domisili
                                    <span class="badge badge bg-danger text-white"><?= $Skd['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-keterangan-pengantar') ?>">Keterangan Pengantar
                                    <span class="badge badge bg-danger text-white"><?= $Skp['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-kelahiran') ?>">Surat Kelahiran
                                    <span class="badge badge bg-danger text-white"><?= $Spak['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-kematian') ?>">Surat Kematian
                                    <span class="badge badge bg-danger text-white"><?= $Skk['jumlah'] ?></span></a>
                            </li>
                        </ul>
                    </li>
                <?php } else if ($this->session->userdata('role_id') == 3) {  ?>
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'list-surat' ? 'active' : '' ?>">
                        <a href="<?= base_url('list-surat') ?>" class='sidebar-link'>
                            <i class="bi bi-envelope-plus-fill"></i>
                            <span>Pelayanan Surat</span>
                        </a>
                    </li>
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'histori-surat' ? 'active' : '' ?>">
                        <a href="<?= base_url('histori-surat') ?>" class='sidebar-link'>
                            <i class="bi bi-clock-history"></i>
                            <span>Surat</span>
                            <span class="badge badge bg-danger text-white"><?= $all ?></span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

<div id="main">
    <nav class="navbar navbar-header navbar-expand navbar-light">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="logo-genta" style="margin-left: 15px; margin-top: 10px; display: flex; justify-contents: between; align-items: center;">
            <h4>GENTA</h4><span style="margin: 4px 0 0 5px;">Gentan Administrasi Terpadu</span>
        </div>  
            <!-- <div class="logo-genta"><h4>GENTA</h4><span>Gentan Administrasi Terpadu</span></div> -->
            <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <!-- <div class="avatar mr-1">
                            <img src="<?= base_url(); ?>./assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                        </div> -->
                        <div class="d-none d-md-block d-lg-inline-block"><small><?= $this->session->userdata('nama') ?></small></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?= base_url('logout') ?>"><i data-feather="log-out"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>