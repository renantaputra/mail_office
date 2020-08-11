<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('/'); ?>" class="brand-link">
        <img src="<?php echo base_url('themes/dist'); ?>/img/maffice.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Maffice</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('themes/dist'); ?>/img/me.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('/Dashboard'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Master Data</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('/User'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/Bagian'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Bagian</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Data Surat</p>
                        <i class="right fas fa-angle-left"></i>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo base_url('/SuratMasuk'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-download"></i>
                                <p>Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/SuratKeluar'); ?>" class="nav-link">
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
                            <a href="<?php echo base_url('/SuratMasuk/pelaporan'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-file-download"></i>
                                <p>Surat Masuk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('/SuratKeluar/pelaporan'); ?>" class="nav-link">
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