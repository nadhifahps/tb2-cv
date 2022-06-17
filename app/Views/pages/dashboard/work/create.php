<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
Tambah Pekerjaan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Tambah Pekerjaan</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4>Tambah Detail Pekerjaan<a href="<?= route_to('works') ?>" class="btn btn-info ml-2"><i class="fas fa-arrow-left"></i> Kembali</a></h4>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= route_to('work-create') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="font-weight-bold">Nama Perusahaan</label>
                                <input type="text" class="form-control" name="company_name" placeholder="Masukkan Nama Perusahaan" value="">
                                <div class="invalid-feedback">
                                    Masukkan Nama Perusahaan
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="font-weight-bold">Posisi</label>
                                <input type="text" class="form-control" name="position" placeholder="Masukkan Posisi" value="">
                                <div class="invalid-feedback">
                                    Masukkan Posisi
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="font-weight-bold">Tahun Kerja</label>
                                <input type="text" class="form-control" name="year" placeholder="Masukkan Tahun Kerja" value="">
                                <div class="invalid-feedback">
                                    Masukkan Tahun Kerja
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>