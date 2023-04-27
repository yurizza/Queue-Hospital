<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url('dist/css/bootstrap.min.css')?>">
	<title>Tambah Data</title>
</head>
<body>

<?=$this->session->flashdata('message') ?>
<div class="container">
	

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" align="center">Tambah Jadwal Praktek</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="<?=base_url('data/insertjadwal/') ?>">
                <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Dokter</label>
                    <div class="col-sm-10">
                     <select name="id_dokter" class="form-control">
						<?php foreach ($dokter as $d): ?>
							<option value="<?=$d['id_dokter']?>">
							<?=$d['id_dokter']?> - <?=$d['nama_dokter'] ?> </option>
						<?php endforeach ?>
					</select>
                    </div>
                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                     <select name="spesialis" class="form-control">
						<?php foreach ($dokter as $d): ?>
							<option value="<?=$d['spesialis']?>">
							<?=$d['spesialis']?> - <?=$d['nama_dokter'] ?> </option>
						<?php endforeach ?>
					</select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="hari" placeholder="Hari">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="tanggal" placeholder="Y-M-D">
                    </div>
                  </div>
                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jam" placeholder="Jam">
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer" align="center">
                 
                 <button type="submit" class="btn btn-success">Tambah</button>
                 
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
</div>
</body>
</html>
