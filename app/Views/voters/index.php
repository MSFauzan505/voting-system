<?= $this->extend('layouts/main'); ?>


<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <h1>Pemilih</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Pemilih</a></div>
            <div class="breadcrumb-item">Table</div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <?= $this->include('auth/_message_block.php') ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Form pemilih</h4>
                        <div class="card-header-form">

                            <a href="<?= base_url('voter/template') ?>" class="btn btn-primary mr-1">download template</a>

                            <form action="<?= base_url('voter/import_excel') ?>" method="post" enctype="multipart/form-data" class="d-inline">
                                <?= csrf_field() ?>
                                <label for="file_excel" class="btn btn-warning mb-0 mr-1" style="cursor: pointer;">Import Excel</label>
                                <input type="file" name="file_excel" id="file_excel" accept=".xlsx" style="display: none;" onchange="this.form.submit()">
                            </form>


                            <a href="<?= base_url('voter/export_excel') ?>" class="btn btn-success mr-1">Export Excel</a>
                            <a href="<?= base_url('voter/create') ?>" class="btn btn-primary">Tambah Data</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($voters as $voter) : ?>
                                        <tr>
                                            <td>
                                                <?= $i++ ?>
                                            </td>
                                            <td><?= $voter["username"] ?></td>
                                            <td><?= $voter["fullname"] ?></td>
                                            <td><?= $voter["grade"] ?></td>
                                            <td>
                                                <form action="<?= base_url() ?>voter/delete/<?= $voter["user_id"] ?>" method="post" class="d-inline">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button class="btn btn-danger" type="submit">hapus</button>
                                                </form>
                                                <a href="<?= base_url("voter/edit/" . $voter['id']) ?>" class="btn btn-warning">edit</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('style') ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/datatables.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css">
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script src="<?= base_url() ?>assets/modules/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
<script src="<?= base_url() ?>assets/modules/jquery-ui/jquery-ui.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url() ?>assets/js/page/modules-datatables.js"></script>
<?= $this->endSection() ?>