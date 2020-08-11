<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Surat Keluar</li>
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
                    <?php echo form_open_multipart('SuratKeluar/surat_keluar'); ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        echo form_label('user', 'user');
                                        echo form_dropdown('id_user', $user, $inputs['id_user'], ['class' => 'form-control']);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Nomer');
                                        $no_surat = [
                                            'type'  => 'text',
                                            'name'  => 'no_surat',
                                            'id'    => 'no_surat',
                                            'value' => $inputs['no_surat'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Nomor Surat'
                                        ];
                                        echo form_input($no_surat);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Tanggal');
                                        $tgl_surat = [
                                            'type'  => 'date',
                                            'name'  => 'tgl_surat',
                                            'id'    => 'tgl_surat',
                                            'value' => $inputs['tgl_surat'],
                                            'class' => 'form-control',
                                            'placeholder' => ''
                                        ];
                                        echo form_input($tgl_surat);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Perihal');
                                        $perihal = [
                                            'type'  => 'text',
                                            'name'  => 'perihal',
                                            'id'    => 'perihal',
                                            'value' => $inputs['perihal'],
                                            'class' => 'form-control',
                                            'placeholder' => 'Perihal'
                                        ];
                                        echo form_input($perihal);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('SuratKeluar'); ?>" class="btn btn-outline-info">Kembali</a>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>