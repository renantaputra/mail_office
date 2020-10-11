<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detail User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('user'); ?>">User</a></li>
                        <li class="breadcrumb-item active">Detail User</li>
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
                                <h3><?php echo  $user['username'] ?></h3>
                                <p class="card-text"><small class="text-muted"><b>Level : </b><?php echo $user['level'] ?> | <b>Status : </b><?php echo $user['status'] ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" readonly="" value="<?= $user['nama_lengkap']; ?>"> </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" readonly="" value="<?= $user['email']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" readonly="" value="<?= $user['alamat']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Telepon</label>
                                <input type="text" class="form-control" readonly="" value="<?= $user['telepon']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Pengalaman</label>
                                <input type="text" class="form-control" readonly="" value="<?= $user['pengalaman']; ?>">
                            </div>
                            <div class="card-footer">
                                <a href="/user" class="btn btn-outline-info">Kembali</a>
                                <a href="<?php echo base_url('user/edit/' . $user['id_user']); ?>" class="btn btn-warning float-right">Edit</a>
                                <a href="<?php echo base_url('user/delete/' . $user['id_user']); ?>" class="btn btn-danger float-right" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?');">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>