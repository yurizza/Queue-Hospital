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
                <h3 class="card-title" align="center">Tambah Data Dokter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="<?=base_url('data/insert/') ?>">
                <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Dokter</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_dokter" placeholder="ID Dokter">
                    </div>
                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="spesialis" placeholder="Spesialis">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Dokter</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_dokter" placeholder="Nama Dokter">
                    </div>
                  </div>
                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat Dokter</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="alamat_dokter" placeholder="Alamat Dokter">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No. Telp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_telp" placeholder="No. Telp">
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
