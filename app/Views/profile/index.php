<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="img img-responsive rounded-circle" width="250" height="250" src="/img/<?= $user['foto']; ?>" />
                            <div class="card-body text-center">
                                <a href=<?php echo base_url('profile/changeFoto/' . $user['id_user']); ?> class="stretched-link">Ganti Foto Profil</a>
                                <h3><?php echo  $user['nama_lengkap'] ?></h3>
                                <p><?php echo $user['username'] ?></p>
                                <p class="card-text"><small class="text-muted"><b>Level : </b><?php echo $user['level'] ?> | <b>Status : </b><?php echo $user['status'] ?></small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-center">
                            <p><a href=<?php echo base_url('profile/change/' . $user['id_user']); ?>>Ubah Password</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="card mb-3">
                        <div class="card-body">
                            <?php
                            if (!empty(session()->getFlashdata('success'))) { ?>
                                <div class="alert alert-success">
                                    <?php echo session()->getFlashdata('success'); ?>
                                </div>
                            <?php } ?>

                            <?php if (!empty(session()->getFlashdata('info'))) { ?>
                                <div class="alert alert-info">
                                    <?php echo session()->getFlashdata('info'); ?>
                                </div>
                            <?php } ?>

                            <?php if (!empty(session()->getFlashdata('warning'))) { ?>
                                <div class="alert alert-warning">
                                    <?php echo session()->getFlashdata('warning'); ?>
                                </div>
                            <?php } ?>

                            <form action="<?php echo base_url('profile/update'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                                <input type="hidden" name="username" value="<?php echo $user['username']; ?>">
                                <h5>Update Profil</h5>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" value="<?php echo $user['nama_lengkap']; ?>" class="form-control <?= $validation->hasError('nama_lengkap') ? 'is-invalid' : ''; ?>" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('nama_lengkap'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" value="<?php echo $user['email']; ?>" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : ''; ?>" name="email" placeholder="Masukkan Email">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" value="<?php echo $user['alamat']; ?>" class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : ''; ?>" name="alamat" placeholder="Masukkan Alamat">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="text" value="<?php echo $user['telepon']; ?>" class="form-control <?= $validation->hasError('telepon') ? 'is-invalid' : ''; ?>" name="telepon" placeholder="Masukkan Telepon">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('telepon'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Pengalaman</label>
                                    <input type="text" value="<?php echo $user['pengalaman']; ?>" class="form-control <?= $validation->hasError('pengalaman') ? 'is-invalid' : ''; ?>" name="pengalaman" placeholder="Masukkan Pengalaman">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('pengalaman'); ?>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-outline-info">Kembali</a>
                                    <button type="submit" class="btn btn-primary float-right">Update</button>
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