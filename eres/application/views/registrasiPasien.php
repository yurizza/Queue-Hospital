<!DOCTYPE html>
<html>
	<head>
		<title>registrasi</title>
		<style>
			body 
			{
				background-image: url('<?=base_url('img/Hospital2.jpg')?>');
			}
			.card-body { background: rgba(0, 0, 0, 0.3); }
		</style>
	</head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<body>
	<div class="container">
	<center>
	<div class="card my-5" style="width: 50rem;">
	<div class="card-body ">
		<h5 class="card-title">Registrasi Pasien</h5>
		<form method="POST" action="<?= base_url('LoginPasien/registrasi')?>" >
		  <div class="form-group row">
		    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
		    <div class="col-sm-10">
		      <input type="number" class="form-control" id="inputEmail3" placeholder="NIK" name="nik" required>
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		    <div class="col-sm-10">
		      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
		    </div>	
		  </div>
		  <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nama" name="nama" required>
		    </div>
		  </div>
		   <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label" required>Tanggal Lahir</label>
		    <div class="col-sm-10">
		      <input type="date" class="form-control" id="inputPassword3" name="tgl" required>
		    </div>
		  </div>
		   <div class="form-group row">
		    <label for="inputPassword3" class="col-sm-2 col-form-label">No.Telepon</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="inputPassword3" placeholder="Masukkan Nomor Telepon" name="notelp">
		    </div>
		  </div>
		   
		  <div class="form-group row">
		    <div class="col-sm-10">
				<a href="<?=base_url('LoginPasien')?>" class="btn btn-primary">Back</a>
		      <button type="submit" class="btn btn-primary" name="simpan">Save</button>
			  <button type="reset" class="btn btn-danger" >Reset</button>
		    </div>
		  </div>
		</form>
		<!-- end card body -->
		</div> 
		<!-- tutup card -->
	</div>
	</center>
		</div> <!-- tutup container -->
	</body>
</html>