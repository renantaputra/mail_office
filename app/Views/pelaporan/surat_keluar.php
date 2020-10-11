<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Laporan Surat Keluar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Surat Keluar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="<?php echo base_url('suratKeluar/laporan'); ?>" method="POST" class="form-inline">
                    <div class="form-group mx-sm-2 mb-2">
                        <label for="tgl_awal"> Dari Tanggal </label>
                        <input type="date" class="form-control mx-sm-2" name="tgl_awal" id="tgl_awal" placeholder="Start Date">
                    </div>
                    <div class="form-group mx-sm-2 mb-2">
                        <label for="tgl_akhir"> Sampai dengan Tanggal </label>
                        <input type="date" class="form-control mx-sm-2" name="tgl_akhir" id="tgl_akhir" placeholder="Until Date">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mb-2">Go</button>
                </form>
            </div>
        </div>
    </div>

    <?php if (null !== $tgl_awal && null !== $tgl_awal) : ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                Laporan Surat Keluar Tanggal <strong><?= $tgl_awal; ?> sampai <?= $tgl_akhir; ?></strong>
                                <form action="<?php echo base_url('suratKeluar/exportPDF'); ?>" method="POST" class="form-inline float-right">
                                    <input type="hidden" name="tgl_awal" value="<?= $tgl_awal; ?>">
                                    <input type="hidden" name="tgl_akhir" value="<?= $tgl_akhir; ?>">
                                    <button type="submit" name="submit" class="btn btn-warning mb-2"><i class="fa fa-file"> <br> Unduh </i></button>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hovered">
                                        <thead>
                                            <tr>
                                                <th width="10px" class="text-center">No</th>
                                                <th>Nomer Surat</th>
                                                <th>Tanggal Surat</th>
                                                <th>Nama Penerima</th>
                                                <th>Perihal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($surat_keluar as $key => $row) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo ++$key; ?></td>
                                                    <td><?php echo $row['no_surat']; ?></td>
                                                    <td><?php echo date('d-m-yy', strtotime($row['tgl_surat'])); ?></td>
                                                    <td><?php echo $row['nama_lengkap']; ?></td>
                                                    <td><?php echo $row['perihal']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row mt-3 float-right">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php echo view('_partials/footer'); ?>