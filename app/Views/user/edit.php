<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('user/update'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="card">
                            <div class="card-body">
                                <input type="hidden" name="id_user" value="<?php echo $user['id_user']; ?>">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" value="<?php echo $user['username']; ?>" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : ''; ?>" name="username" placeholder="Masukkan username">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('username'); ?>
                                    </div>
                                </div>
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
                                    <input type="text" value="<?php echo $user['alamat']; ?>" class="form-control" name="alamat" placeholder="Masukkan Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="text" value="<?php echo $user['telepon']; ?>" class="form-control" name="telepon" placeholder="Masukkan Telepon">
                                </div>
                                <div class="form-group">
                                    <label for="">Pengalaman</label>
                                    <input type="text" value="<?php echo $user['pengalaman']; ?>" class="form-control" name="pengalaman" placeholder="Masukkan Pengalaman">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-control <?= $validation->hasError('status') ? 'is-invalid' : ''; ?>">
                                        <option value="">Pilih Status</option>
                                        <option value="Active" <?php echo $user['status'] == "Active" ? 'selected' : '' ?>>Active</option>
                                        <option value="Inactive" <?php echo $user['status'] == "Inactive" ? 'selected' : '' ?>>Inactive</option>
                                    </select>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('status'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Level</label>
                                    <select name="level" id="" class="form-control <?= $validation->hasError('level') ? 'is-invalid' : ''; ?>">
                                        <option value="">Pilih Level</option>
                                        <option value="Super_Admin" <?php echo $user['level'] == "Super_Admin" ? 'selected' : '' ?>>Super Admin</option>
                                        <option value="Admin" <?php echo $user['level'] == "Admin" ? 'selected' : '' ?>>Admin</option>
                                        <option value="User" <?php echo $user['level'] == "User" ? 'selected' : '' ?>>User</option>
                                    </select>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('level'); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('user'); ?>" class="btn btn-outline-info">Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<?php echo view('_partials/footer'); ?>