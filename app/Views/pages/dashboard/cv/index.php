<?= $this->extend('layout/dashboard') ?>

<?= $this->section('title') ?>
CV Builder
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="section-body">
  <h2 class="section-title">CV</h2>
  <p class="section-lead">Buat CV Anda sendiri disini</p>

  <div class="container">
    <div class="card shadow">
      <div class="card-header">
        <h5>Masukkan informasi dasar untuk CV Anda</h5>
      </div>
      <div class="card-body">
        <form class="needs-validation" novalidate="" action="<?= route_to('cv-basic-create') ?>" method="post">
          <?= csrf_field() ?>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label class="font-weight-bold">Nama Awal : </label>
                <input type="text" class="form-control" name="first_name" placeholder="Masukkan nama awal" value="">
                <!-- @error('first_name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror -->
              </div>
              <div class="col-md-6">
                <label class="font-weight-bold">Nama Akhir : </label>
                <input type="text" class="form-control" name="last_name" placeholder="Masukkan nama akhir" value="">
                <!-- @error('last_name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror -->
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label class="font-weight-bold">Pekerjaan : </label>
                <input type="text" class="form-control" name="profession" placeholder="Masukkan pekerjaan" value="">
                <!-- @error('profession')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror -->
              </div>
              <div class="col-md-6">
                <label class="font-weight-bold">Email : </label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" value="">
                <!-- @error('email')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror -->
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label class="font-weight-bold">No.Telp : </label>
                <input type="text" class="form-control" name="phone" placeholder="Masukkan No.Telp" value="">
              </div>
              <div class="col-md-6">
                <label class="font-weight-bold">Tempat dan Tanggal Lahir : </label>
                <input type="text" class="form-control" name="website" placeholder="Masukkan Tempat dan Tanggal Lahir" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row ">
              <div class="col-md-6">
                <label class="font-weight-bold">Alamat : </label>
                <input type="text" class="form-control" name="address" placeholder="Masukkan Alamat" value="">
              </div>
              <div class="col-md-3">
                <label class="font-weight-bold">Kode Pos : </label>
                <input type="text" class="form-control" name="post_code" placeholder="Masukkan Kode Pos" value="">
              </div>
              <div class="col-md-3">
                <label class="font-weight-bold">Provinsi : </label>
                <input type="text" class="form-control" name="division" placeholder="Masukkan Provinsi" value="">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row ">
              <div class="col-md-6">
                <!-- <a href="{{route('main_index')}}" class="btn btn-info">Back</a> -->
              </div>
              <div class="col-md-6 text-right">
                <input type="submit" class="btn btn-success" value="Continue">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- <div class="col-md-3 align-self-center">
      <h5 class="text-info">This is a Demo Resume.</h5>
      <img src="{{asset('images/cv.jpg')}}" alt="" class="img-fluid">
    </div> -->


</div>
<?= $this->endSection() ?>