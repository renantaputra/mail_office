<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('/'); ?>" class="brand-link">
        <img src="<?php echo base_url('themes/dist'); ?>/img/maffice.jpg" alt="Maffice Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Maffice</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <a href="/profile" class="image">
                <img src=/img/<?= session()->get('foto'); ?> class="img-circle elevation-2" alt="User Image">
            </a>
            <div class="info">
                <a href="/profile" class="d-block"><?= session()->get('nama_lengkap'); ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if (session()->get('level') !== 'User') : ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Master Data</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <?php if (session()->get('level') === 'Super_Admin') : ?>
                                <li class="nav-item">
                                    <a href="<?php echo base_url('user'); ?>" class="nav-link">
                                        <i class="nav-icon fas fa-user"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a href="<?php echo base_url('bagian'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>Bagian</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Data Surat</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('suratMasuk'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-download"></i>
                                <p>Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('suratKeluar'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>Surat Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>Pelaporan</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('suratMasuk/pelaporan'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-download"></i>
                                <p>Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('suratKeluar/pelaporan'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-upload"></i>
                                <p>Surat Keluar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>