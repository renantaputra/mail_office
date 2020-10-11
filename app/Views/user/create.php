<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Tambah User</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('user/user'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control <?= $validation->hasError('username') ? 'is-invalid' : ''; ?>" name="username" placeholder="Masukkan Username" id="username" value="<?php echo old('username'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('username'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control <?= $validation->hasError('nama_lengkap') ? 'is-invalid' : ''; ?>" name="nama_lengkap" placeholder="Masukkan Nama lengkap" id="nama_lengkap" value="<?php echo old('nama_lengkap'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('nama_lengkap'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" placeholder="Masukkan Email" id="email" value="<?php echo old('email'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('email'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control <?= $validation->hasError('password') ? 'is-invalid' : ''; ?>" name="password" placeholder="Masukkan Password" id="password" value="<?php echo old('password'); ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('password'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" id="alamat">
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" placeholder="Masukkan Telepon" id="telepon">
                                </div>
                                <div class="form-group">
                                    <label for="pengalaman">Pengalaman</label>
                                    <input type="text" class="form-control" name="pengalaman" placeholder="Masukkan Pengalaman" id="pengalaman">
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control <?= $validation->hasError('status') ? 'is-invalid' : ''; ?>">
                                        <option value="">Pilih Status</option>
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('status'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="level">Level</label>
                                    <select name="level" id="level" class="form-control <?= $validation->hasError('level') ? 'is-invalid' : ''; ?>">
                                        <option value="">Pilih Level</option>
                                        <option value="Super_Admin">Super Admin</option>
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </select>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('level'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('user'); ?>" class="btn btn-outline-info">Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>