<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
Tambah Pendidikan
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Tambah Pendidikan</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4>Tambah Detail Pendidikan<a href="<?= route_to('educations') ?>" class="btn btn-info ml-2"><i class="fas fa-arrow-left"></i> Kembali</a></h4>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= route_to('education-create') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label class="font-weight-bold">Jenjang Pendidikan</label>
                                <input type="text" class="form-control" name="degree" placeholder="Masukkan Jenjang Pendidikan" value="">
                                <div class="invalid-feedback">
                                    Masukkan Jenjang Pendidikan
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="font-weight-bold">Nama Insitut</label>
                                <input type="text" class="form-control" name="institute" placeholder="Masukkan Nama Institut" value="">
                                <div class="invalid-feedback">
                                    Masukkan Nama Institut
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label class="font-weight-bold">Tahun Kelulusan</label>
                                <input type="text" class="form-control" name="year" placeholder="Masukkan Tahun Kelulusan" value="">
                                <div class="invalid-feedback">
                                    Masukkan Tahun Kelulusan
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