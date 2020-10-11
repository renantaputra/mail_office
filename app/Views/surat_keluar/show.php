<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid ">
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
                            <div class="form-group">
                                <label>Nomor Surat</label>
                                <input type="text" class="form-control" readonly="" value="<?= $surat_keluar['no_surat']; ?>"> </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" class="form-control" readonly="" value="<?= date('d-m-yy', strtotime($surat_keluar['tgl_surat'])); ?>">
                            </div>
                            <div class="form-group">
                                <label>Pengirim</label>
                                <input type="text" class="form-control" readonly="" value="<?= $surat_keluar['nama_lengkap']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Perihal</label>
                                <input type="text" class="form-control" readonly="" value="<?= $surat_keluar['perihal']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" readonly="" name="deskripsi" id="" cols="30" rows="9"><?= $surat_keluar['deskripsi']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Lampiran</label>
                                <input type="text" class="form-control" readonly="" value="<?= $surat_keluar['lampiran']; ?>">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('suratKeluar'); ?>" class="btn btn-outline-info float-left">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>