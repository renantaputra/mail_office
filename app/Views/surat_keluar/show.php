<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tampilkan Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Tampilkan Surat Keluar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <dl class="dl-horizontal">
                                        <dt>User</dt>
                                        <dd><?php echo $surat_keluar['nama_lengkap']; ?></dd>
                                        <dt>Nomor Surat</dt>
                                        <dd><?php echo $surat_keluar['no_surat']; ?></dd>
                                        <dt>Tanggal</dt>
                                        <dd><?php echo $surat_keluar['tgl_surat']; ?></dd>
                                        <dt>Perihal</dt>
                                        <dd><?php echo $surat_keluar['perihal']; ?></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('SuratKeluar'); ?>" class="btn btn-outline-info float-right">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>