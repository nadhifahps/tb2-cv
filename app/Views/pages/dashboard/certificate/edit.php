<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
Update Sertifikat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Update Sertifikat</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>
    <div class="container">
        <div class="card shadow">
            <form class="needs-validation" novalidate="" action="<?= route_to('certificate-update', $data->id) ?>" method="post">
                <input type="hidden" name="_method" value="put">
                <?= csrf_field() ?>
                <div class="card-header">
                    <h4>Update Detail Sertifikat<a href="<?= route_to('certificates') ?>" class="btn btn-info ml-2"><i class="fas fa-arrow-left"></i> Kembali</a></h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="font-weight-bold">Nama Sertifikat</label>
                                <input type="text" class="form-control" name="certificate_name" placeholder="Masukkan Nama Sertifikat" value="<?= $data->certificate_name ?>">
                                <div class="invalid-feedback">
                                    Masukkan Nama Sertifikat
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="font-weight-bold">Keterangan</label>
                                <input type="text" class="form-control" name="about" placeholder="Masukkan Keterangan" value="<?= $data->about ?>">
                                <div class="invalid-feedback">
                                    Masukkan Keterangan
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="font-weight-bold">Tahun Sertifikat</label>
                                <input type="text" class="form-control" name="year" placeholder="Masukkan Tahun Sertifikat" value="<?= $data->year ?>">
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
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>