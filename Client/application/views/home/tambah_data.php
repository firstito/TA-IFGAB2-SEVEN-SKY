<div class="container-fluid">

<h3>Halaman Tambah Data</h3>
<hr>
<br>


<form method="post" action="<?php echo base_url('Home/proses_tambah_data');?>">
<div class="form-group row">
    <label for="kd_pegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="kd_pegawai" >
    </div>
  </div>

  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama Pegawai</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_pegawai" >
    </div>
  </div>

  <div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat Pegawai</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="alamat" >
    </div>
  </div>

  <div class="form-group row">
    <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="telepon" >
    </div>
  </div>

  <div class="form-group row">
    <label for="telepon" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
     <button type="submit" class="btn btn-primary">Tambah</button>
     <button type="submit" class="btn btn-danger">Reset</button>
    </div>
  </div>


  </form>
</div>