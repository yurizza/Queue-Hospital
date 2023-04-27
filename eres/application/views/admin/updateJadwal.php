<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?=base_url('dist/css/bootstrap.min.css')?>">
	<title>Update Jadwal</title>
</head>
<body>

<?=$this->session->flashdata('message') ?>
<div class="container">
	

<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title" align="center">Update Jadwal Prakter Dokter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="<?=base_url('data/submitjadwal/') ?>">
                <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Jadwal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_jadwal" value="<?=$jadwal['id_jadwal']?>">
                    </div>
                  </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Dokter</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="id_dokter" value="<?=$jadwal['id_dokter']?>">
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spesialis</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="spesialis" value="<?=$jadwal['spesialis']?>">
                    </div> -->
                  </div>
                 <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Hari</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="hari" value="<?=$jadwal['hari']?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jam</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jam" value="<?=$jadwal['jam']?>">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer" align="center">
                 
                 <button type="submit" class="btn btn-success">Edit</button>
                 
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
</div>
</body>
</html>
