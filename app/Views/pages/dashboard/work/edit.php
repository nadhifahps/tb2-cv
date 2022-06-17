<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
Update Pekerjaan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Update Pekerjaan</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>
    <div class="container">
        <div class="card shadow">
            <form class="needs-validation" novalidate="" action="<?= route_to('work-update', $data->id) ?>" method="post">
                <input type="hidden" name="_method" value="put">
                <?= csrf_field() ?>
                <div class="card-header">
                    <h4>Update Info Pekerjaan<a href="<?= route_to('works') ?>" class="btn btn-info ml-2"><i class="fas fa-arrow-left"></i> Kembali</a></h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="font-weight-bold">Nama Perusahaan</label>
                                <input type="text" class="form-control" name="company_name" placeholder="Masukkan Nama Perusahaan" value="<?= $data->company_name ?>">
                                <div class="invalid-feedback">
                                    Masukkan Nama Perusahaan
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="font-weight-bold">Posisi</label>
                                <input type="text" class="form-control" name="position" placeholder="Masukkan Posisi" value="<?= $data->position ?>">
                                <div class="invalid-feedback">
                                    Masukkan Posisi
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="font-weight-bold">Tahun Pekerjaan</label>
                                <input type="text" class="form-control" name="year" placeholder="Masukkan Tahun Pekerjaan" value="<?= $data->year ?>">
                                <div class="invalid-feedback">
                                    Masukkan Tahun Pekerjaan
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