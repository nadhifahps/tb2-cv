<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Tentang Saya</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>
    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4>Hasil Tentang Saya</h4>
            </div>
            <div class="card-body">
                <form class="needs-validation" novalidate="" method="post">
                    <!-- <input type="hidden" name="_method" value="put">
                    <?= csrf_field() ?> -->
                    <div class="form-group">
                        <label class="font-weight-bold">Tentang Saya</label>
                        <textarea class="form-control" name="career_object" placeholder="Masukkan Tentang Saya" readonly rows="10"><?= $data->career_object ?></textarea>
                    </div>
                    <div class="form-group">
                        <div>
                            <a href="<?= route_to('career-object-edit', $data->id) ?>" class="btn btn-info btn-block">Update Tentang Saya</a>
                        </div>
                        <div class="mt-3">
                            <a href="<?= route_to('pdf') ?>" class="btn btn-primary btn-block">Hasil Akhir</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>