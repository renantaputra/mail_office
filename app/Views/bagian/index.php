<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class=" content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Bagian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Bagian</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            List Bagian
                            <a href="<?php echo base_url('/bagian/create/'); ?>" class="btn btn-primary float-right">Tambah</a>
                        </div>
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

                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bagian</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($bagian as $key => $row) { ?>
                                            <tr>
                                                <td><?php echo $key + 1; ?></td>
                                                <td><?php echo $row['nama_bagian']; ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="<?php echo base_url('Bagian/edit/' . $row['id_bagian']); ?>" class="btn btn-sm btn-success">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('Bagian/delete/' . $row['id_bagian']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus bagian ini?');">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-3 float-right">
                                <div class="col-md-12">
                                    <?php echo $pager->links('bagian', 'bootstrap_pagination') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>-6">