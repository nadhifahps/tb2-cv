<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
Daftar Sertifikat
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
    <h2 class="section-title">Sertifikat</h2>
    <p class="section-lead">Buat CV Anda sendiri disini</p>

    <div class="container">
        <div class="card shadow">
            <div class="card-header">
                <h4>Daftar Sertifikat Anda</h4>
                <div class="card-header-action">
                    <a href="<?= route_to('certificate-new') ?>" class="btn btn-primary">Tambah Baru<i class="fas fa-plus"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Sertifikat</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php if (count($data) > 0) : ?>
                            <?php foreach ($data as $key => $field) : ?>

                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td class="font-weight-600"><?= $field->certificate_name ?></td>
                                    <td><?= $field->about ?></td>
                                    <td><?= $field->year ?></td>
                                    <td>
                                        <a href="<?= route_to('certificate-edit', $field->id) ?>" class="btn btn-icon btn-info"><i class="fas fa-pen"></i></a>
                                        <a href="<?= route_to('certificate-delete', $field->id) ?>" class="btn btn-icon btn-danger delete-btn"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr class="text-center">
                                <td colspan="6" class="text-danger font-weight-bold">No data found</td>
                            </tr>

                        <?php endif; ?>


                    </tbody>
                </table>
                <a href="<?= route_to('career-object-new') ?>" class="btn btn-block btn-success">Next</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>