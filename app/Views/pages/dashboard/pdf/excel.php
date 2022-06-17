<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data CV.xls");
?>

<html>

<body>
    <table>
        <table>
            <tr>
                <td>
                    <div class="name">
                        <h5 style="font-weight:900" class="m-0 p-0"><?= $basic_info->first_name . " " . $basic_info->last_name ?></h5>
                        <span class="m-0 p-0"><?= $basic_info->profession ?></span>
                    </div>
                    <span class="d-block"><?= $basic_info->address ?> , <?= $basic_info->post_code ?></span>
                    <span class="d-block"><?= $basic_info->division ?></span>
                </td>
                <td><span style="margin:0 50px"></span></td>
                <td style="float:right;">
                    <h6><b>Email : </b> <?= $basic_info->email ?></h6>
                    <h6><b>Tgl.Lahir : </b> <?= $basic_info->website ?></h6>
                    <h6><b>Telp : </b> <?= $basic_info->phone ?></h6>
                </td>
            </tr>

        </table>

        </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h4>Tentang Saya</h4>
                <p><?= $career->career_object ?></p>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h4>Riwayat Pendidikan</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Jenjang</th>
                            <th scope="col">Institut</th>
                            <th scope="col">Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($educations) > 0) : ?>
                            <?php foreach ($educations as $field) : ?>
                                <tr>
                                    <td><?= $field->degree ?></td>
                                    <td><?= $field->institute ?></td>
                                    <td><?= $field->year ?></td>
                                </tr>
                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr class="text-center">
                                <td colspan="6" class="text-danger font-weight-bold">No data found</td>
                            </tr>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h4>Pengalaman Kerja</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Tahun</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php if (count($works) > 0) : ?>
                            <?php foreach ($works as $work) : ?>
                                <tr>
                                    <td><?= $work->company_name ?></td>
                                    <td><?= $work->position ?></td>
                                    <td><?= $work->year ?></td>
                                </tr>
                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr class="text-center">
                                <td colspan="6" class="text-danger font-weight-bold">No data found</td>
                            </tr>

                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h4>Sertifikat</h4>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($certificates) > 0) : ?>
                            <?php foreach ($certificates as $cer) : ?>
                                <tr>
                                    <td><?= $cer->certificate_name ?></td>
                                    <td><?= $cer->about ?></td>
                                    <td><?= $cer->year ?></td>
                                </tr>
                            <?php endforeach; ?>

                        <?php else : ?>

                            <tr class="text-center">
                                <td colspan="6" class="text-danger font-weight-bold">No data found</td>
                            </tr>
                </table>
</body>

</html>
<?php endif; ?>
</tbody>
</table>