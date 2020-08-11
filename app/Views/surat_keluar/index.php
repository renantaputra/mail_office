<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Surat Keluar</li>
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
                            List Surat Keluar
                            <a href="<?php echo base_url('SuratKeluar/create'); ?>" class="btn btn-primary float-right">Tambah</a>
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
                                            <th width="10px" class="text-center">No</th>
                                            <th>Nomer Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>Perihal</th>
                                            <th>Nama Pengirim</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($surat_keluar as $key => $row) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo ++$key; ?></td>
                                                <td><?php echo $row['no_surat']; ?></td>
                                                <td><?php echo $row['tgl_surat']; ?></td>
                                                <td><?php echo $row['perihal']; ?></td>
                                                <td><?php echo $row['nama_lengkap']; ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a href="<?php echo base_url('SuratKeluar/show/' . $row['id_sk']); ?>" class="btn btn-sm btn-info">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('SuratKeluar/edit/' . $row['id_sk']); ?>" class="btn btn-sm btn-success">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="<?php echo base_url('SuratKeluar/delete/' . $row['id_sk']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');">
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
                                    <?php echo $pager->links('surat_keluar', 'bootstrap_pagination') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>