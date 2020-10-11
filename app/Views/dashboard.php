<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="card">
        <div class="card-body text-center text-white sidebar-dark-primary">
            <h2> Aplikasi Mail Office Kominfo Tulungagung</h2>
        </div>
    </div>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <?php if ($surat_masuk_baru != 0) : ?>
                <div class="alert alert-primary col-3" role="alert">
                    <i class="fas fa-bullhorn"> Notification : </i>
                    <?= $surat_masuk_baru; ?> surat belum dibaca
                </div>
            <?php endif; ?>
            <div class="row">
                <?php if (session()->get('level') !== 'User') : ?>
                    <?php if (session()->get('level') === 'Super_Admin') : ?>
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3><?php echo $total_user; ?></h3>

                                    <p>User</p>
                                </div>
                                <div class="icon">
                                    <i class="nav-icon fas fa-user"></i>
                                </div>
                                <a href="<?php echo base_url('user'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php echo $total_bagian; ?></h3>

                                <p>Bagian</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-users"></i>
                            </div>
                            <a href="<?php echo base_url('bagian'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $total_surat_masuk; ?></h3>

                            <p>Surat Masuk</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-file-download"></i>
                        </div>
                        <a href="<?php echo base_url('suratMasuk'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $total_surat_keluar; ?></h3>

                            <p>Surat Keluar</p>
                        </div>
                        <div class="icon">
                            <i class="nav-icon fas fa-file-upload"></i>
                        </div>
                        <a href="<?php echo base_url('suratKeluar'); ?>" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>