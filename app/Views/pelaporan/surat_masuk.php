<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Surat Masuk</li>
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
                <form class="form-inline">
                    <div class="form-group mb-2">
                        <label for="staticDate" class="sr-only">Dari Tanggal</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticDate" value="Dari Tanggal">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputDate" class="sr-only">Start Date</label>
                        <input type="password" class="form-control" id="inputDate" placeholder="Start Date">
                    </div>
                    <div class="form-group mb-2">
                        <label for="staticDate" class="sr-only">Sampai dengan Tanggal</label>
                        <input type="text" readonly class="form-control-plaintext" id="staticDate" value="Sampai dengan Tanggal">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputDate" class="sr-only">Until Date</label>
                        <input type="password" class="form-control" id="inputDate" placeholder="Until Date">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Enter</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>