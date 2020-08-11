<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Surat Keluar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit Surat Keluar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    $inputs = session()->getFlashdata('inputs');
                    $errors = session()->getFlashdata('errors');
                    if (!empty($errors)) { ?>
                        <div class="alert alert-danger" role="alert">
                            Whoops! Ada kesalahan saat input data, yaitu:
                            <ul>
                                <?php foreach ($errors as $error) : ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php } ?>
                    <div class="card">
                        <?php echo form_open_multipart('SuratKeluar/update'); ?>
                        <div class="card-header">Form Edit Surat Keluar</div>
                        <div class="card-body">
                            <?php echo form_hidden('id_sk', $surat_keluar['id_sk']); ?>
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <?php echo form_label('user', 'user'); ?>
                                        <?php echo form_dropdown('id_user', $user, $surat_keluar['id_user'], ['class' => 'form-control']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('no_surat', 'no_surat'); ?>
                                        <?php echo form_input('no_surat', $surat_keluar['no_surat'], ['class' => 'form-control', 'placeholder' => 'Nomor Surat']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('tgl_surat', 'tgl_surat'); ?>
                                        <?php echo form_input('tgl_surat', $surat_keluar['tgl_surat'], ['class' => 'form-control', 'placeholder' => '', 'type' => 'date']); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo form_label('perihal', 'perihal'); ?>
                                        <?php echo form_input('perihal', $surat_keluar['perihal'], ['class' => 'form-control', 'placeholder' => 'perihal']); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('SuratKeluar'); ?>" class="btn btn-outline-info">Kembali</a>
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>