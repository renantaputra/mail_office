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
                    ?>
                    <?php echo form_open_multipart('suratKeluar/surat_keluar'); ?>
                    <?= csrf_field(); ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" id="nama_pengirim" name="nama_pengirim" value="<?php session()->get('nama_lengkap'); ?>">

                                        <label for="no_surat">Nomor</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('no_surat')) ? 'is-invalid' : ''; ?>" name="no_surat" placeholder="Nomor Surat" value="<?= $inputs['no_surat']; ?> <?= old('no_surat'); ?>" id="no_surat">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('no_surat'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                        echo form_label('Penerima', 'user');
                                        echo form_dropdown('id_user', $user, $inputs['id_user'], ['class' => 'form-control']);
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="perihal">Perihal</label>
                                        <input type="text" class="form-control <?= ($validation->hasError('perihal')) ? 'is-invalid' : ''; ?>" name="perihal" placeholder="Nomor Surat" value="<?= $inputs['perihal']; ?> <?= old('perihal'); ?>" id="perihal">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('perihal'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="lampiran">Lampiran</label>
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file <?= ($validation->hasError('lampiran')) ? 'is-invalid' : ''; ?>" id=" lampiran" name="lampiran" value="<?= $inputs['lampiran']; ?>">
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('lampiran'); ?>
                                            </div>
                                            <label class="form-control-file" for="lampiran"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tgl_surat">Tanggal</label>
                                        <input type="date" class="form-control <?= ($validation->hasError('tgl_surat')) ? 'is-invalid' : ''; ?>" name="tgl_surat" placeholder="" value="<?= $inputs['tgl_surat']; ?>" id="tgl_surat">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('tgl_surat'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control" name="deskripsi" id="" cols="30" rows="9" value="<?= $inputs['deskripsi']; ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="<?php echo base_url('suratKeluar'); ?>" class="btn btn-outline-info">Kembali</a>
                            <button type="submit" class="btn btn-primary float-right">Kirim</button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>