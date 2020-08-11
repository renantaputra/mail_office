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
                    <form action="<?php echo base_url('User/user'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
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

                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" value="<?php echo $inputs['username']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama lengkap" value="<?php echo $inputs['nama_lengkap']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Masukkan Email" value="<?php echo $inputs['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" value="<?php echo $inputs['alamat']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Telepon</label>
                                    <input type="text" class="form-control" name="telepon" placeholder="Masukkan Telepon" value="<?php echo $inputs['telepon']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Pengalaman</label>
                                    <input type="text" class="form-control" name="pengalaman" placeholder="Masukkan Pengalaman" value="<?php echo $inputs['pengalaman']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        <option <?php echo $inputs['status'] == "Active" ? "selected" : ""; ?> value="Active">Active</option>
                                        <option <?php echo $inputs['status'] == "Inactive" ? "selected" : ""; ?> value="Inactive">Inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Level</label>
                                    <select name="level" id="" class="form-control">
                                        <option value="">Pilih Level</option>
                                        <option <?php echo $inputs['level'] == "Super_Admin" ? "selected" : ""; ?> value="Super_Admin">Super Admin</option>
                                        <option <?php echo $inputs['level'] == "Admin" ? "selected" : ""; ?> value="Admin">Admin</option>
                                        <option <?php echo $inputs['level'] == "User" ? "selected" : ""; ?> value="User">User</option>
                                    </select>
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