<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman Awal Pasien</title>
		<style>
			body 
			{
				background-image: url('<?=base_url('img/obat.jpg')?>');
			}
		</style>
	</head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<body>
	 <?=$this->session->flashdata('message') ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<img src="<?=base_url('img/people.jpg')?>" alt="io" weight="30" height="30">
	<a class="navbar-brand" href="#"><?=$this->session->userdata('nama')?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
	  <a class="nav-link" href="<?=base_url('DataPasien/halamanAwal')?>">Jadwal Dokter<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
	  <a class="nav-link" href="<?=base_url('DataPasien/halamanDaftar')?>">Jadwal Pasien</a>
      </li>
      <li class="nav-item">
	  <a class="nav-link" href="<?=base_url('DataPasien/halamanHistory')?>">History Pasien</a>
      </li>
	  
    </ul>
    <span class="navbar-text">
	  <form class="form-inline">	
		<a href="<?=base_url('LoginPasien/logout')?>">logout</a>
		</form>
    </span>
  </div>
</nav>

		
