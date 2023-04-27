<div class="container">
<table class="table table-bordered my-5">
		  <thead>
		    <tr>
		      <th scope="col">Nama Dokter</th>
		      <th scope="col">Spesialis</th>
			  <th scope="col">Tanggal</th>
		      <th scope="col">Hari</th>
		      <th scope="col">Jam</th>
		      <th></th>
		    </tr>
		  </thead>

		  <tbody>
		  	<?php
		  		foreach($hasil as $hasil) {
		  	?>
		    <tr>
		      <td><?=$hasil->nama_dokter;?></td>
		      <td><?=$hasil->spesialis;?></td>
			  <td><?=$hasil->tanggal;?></td>
		      <td><?=$hasil->hari;?></td>
		      <td><?=$hasil->jam; ?></td>
		      <td><a href="<?= base_url('DataPasien/halamanAwal?id_jadwal='.$hasil->id_jadwal)?>" class="btn btn-primary" name="pilih">Pilih Dokter</a></td>
		    </tr>

		    <?php
		  	}
		  	?>
		  </tbody>
		</table>
</div>