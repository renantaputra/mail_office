<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Ubah Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('profile'); ?>">Profil</a></li>
                        <li class="breadcrumb-item active">Ubah Password</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo base_url('profile/change_pass'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Password Baru</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control <?= $validation->hasError('password_baru') ? 'is-invalid' : ''; ?>" name="password_baru">
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('password_baru'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control <?= $validation->hasError('confirm_password') ? 'is-invalid' : ''; ?>" name="confirm_password">
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('confirm_password'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo base_url('profile'); ?>" class="btn btn-outline-info">Kembali</a>
                                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>