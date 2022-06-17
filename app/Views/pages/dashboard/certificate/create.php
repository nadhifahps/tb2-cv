<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
Tambah Sertifikat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Tambah Sertifikat</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4>Tambah Detail Sertifikat<a href="<?= route_to('certificates') ?>" class="btn btn-info ml-2"><i class="fas fa-arrow-left"></i> Kembali</a></h4>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= route_to('certificate-create') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="font-weight-bold">Nama Sertifikat</label>
                                <input type="text" class="form-control" name="certificate_name" placeholder="Masukkan Nama Sertifikat" value="">
                                <div class="invalid-feedback">
                                    Masukkan Nama Sertifikat
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="font-weight-bold">Keterangan</label>
                                <input type="text" class="form-control" name="about" placeholder="Masukkan Keterangan" value="">
                                <div class="invalid-feedback">
                                    Masukkan Keterangan
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="font-weight-bold">Tahun Sertifikat</label>
                                <input type="text" class="form-control" name="year" placeholder="Masukkan Tahun Sertifikat" value="">
                                <div class="invalid-feedback">
                                    Masukkan Tahun Sertifikat
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