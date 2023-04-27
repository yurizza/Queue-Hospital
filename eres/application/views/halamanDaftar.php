<?=$this->session->flashdata('message') ?>
<div class="container">
		<table class="table table-bordered my-5">
		  <thead>
		    <tr>
		      <th scope="col">No Antrian</th>
		      <th scope="col">NIK</th>
		      <th scope="col">Nama Dokter</th>
			  <th scope="col">Tanggal</th>
		      <th scope="col">Hari</th>
		      <th scope="col">Jam</th>
			  <th scope="col">Status</th>
			  <th></th>
		    </tr>
		  </thead>

		  <tbody>
		  	<?php
		  		foreach($hasil as $hasil) {
		  	?>
		    <tr>
		      <td><?=$hasil->no_antrian;?></td>
		      <td><?=$hasil->nik;?></td>
		      <td><?=$hasil->nama_dokter;?></td>
			  <td><?=$hasil->tanggal; ?></td>
		      <td><?=$hasil->hari; ?></td>
		      <td><?=$hasil->jam; ?></td>
		      <td><?=$hasil->status; ?></td>
		      <td><a href="<?=base_url('DataPasien/batalDaftar/'.$hasil->no_daftar)?>" class="btn btn-primary">Batal</a></td>
		    </tr>

		    <?php
		  	}
		  	?>
		  </tbody>
		</table>
</div>