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
                        <?php echo form_open_multipart('suratKeluar/update'); ?>
                        <?= csrf_field(); ?>
                        <div class="card-header">Form Edit Surat Keluar</div>
                        <div class="card-body">
                            <?php echo form_hidden('id_sk', $surat_keluar['id_sk']); ?>
                            <?php echo form_hidden('lampiranLama', $surat_keluar['lampiran']); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        $nama_pengirim = [
                                            'type'  => 'hidden',
                                            'name'  => 'nama_pengirim',
                                            'id'    => 'nama_pengirim',
                                            'value' => session()->get('nama_lengkap'),
                                            'class' => 'form-control'
                                        ];
                                        echo form_input($nama_pengirim);
                                        ?>
                                        <?php
                                        echo form_label('Nomer');
                                        $no_surat = [
                                            'type'  => 'text',
                                            'name'  => 'no_surat',
                                            'id'    => 'no_surat',
                                            'value' => $surat_keluar['no_surat'],
                                            'class' => 'form-control'
                                        ];
                                        echo form_input($no_surat);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Penerima', 'user');
                                        echo form_dropdown('id_user', $user, $surat_keluar['id_user'], ['class' => 'form-control']);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Perihal');
                                        $perihal = [
                                            'type'  => 'text',
                                            'name'  => 'perihal',
                                            'id'    => 'perihal',
                                            'value' => $surat_keluar['perihal'],
                                            'class' => 'form-control'
                                        ];
                                        echo form_input($perihal);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Upload File');
                                        $lampiran = [
                                            'type' => 'file',
                                            'name' => 'lampiran',
                                            'id' => 'lampiran',
                                            'value' => $surat_keluar['lampiran'],
                                            'class' => 'form-control',
                                            'placeholder' => 'lampiran'
                                        ];
                                        echo form_upload($lampiran);
                                        ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Tanggal');
                                        $tgl_surat = [
                                            'type'  => 'date',
                                            'name'  => 'tgl_surat',
                                            'id'    => 'tgl_surat',
                                            'value' => $surat_keluar['tgl_surat'],
                                            'class' => 'form-control'
                                        ];
                                        echo form_input($tgl_surat);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Deskripsi');
                                        ?>
                                        <textarea class="form-control" name="deskripsi" id="" cols="30" rows="9"><?= $surat_keluar['deskripsi']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('suratKeluar'); ?>" class="btn btn-outline-info">Kembali</a>
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