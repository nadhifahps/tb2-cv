<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
Update Tentang Saya
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Tentang Saya</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4>Update Tentang Saya</h4>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate="" action="<?= route_to('career-object-update', $data->id) ?>" method="post">
                    <input type="hidden" name="_method" value="put">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label class="font-weight-bold">Tentang Saya</label>
                        <textarea class="form-control" name="career_object" placeholder="Masukkan Tentang Saya"><?= $data->career_object ?></textarea>
                        <div class="invalid-feedback">
                            Masukkan Tentang Saya
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