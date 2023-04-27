 <?=$this->session->flashdata('message') ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" align="center">
      <div class="card-body">
      	<h3 align="center">Data Dokter</h3>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Dokter</th>
                  <th>Spesialis</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach($dokter as $d): ?>
					<tr>
						<td><?php echo $d['id_dokter']; ?></td>
						<td><?php echo $d['spesialis']; ?></td>
						<td><?php echo $d['nama_dokter']; ?></td>
						<td><?php echo $d['alamat_dokter']; ?></td> 
						<td><?php echo $d['no_telp_dokter']; ?></td>
						<td>
							<a href="<?=base_url('data/delete/') . $d['id_dokter']?>" class="btn btn-danger">
                 			Hapus
                			</a>
                			<a href="<?=base_url('data/edit/') . $d['id_dokter']?>" class="btn btn-warning">
                 			Edit
                			</a>
						</td>
					<?php endforeach ?>
					</tr>
                </tbody>
            </table> <br>
            <a href="<?=base_url('data/tambah/')?>" class="btn btn-primary">Tambah Data</a>
            
       </div>
    </div>
    </div>
</div>
    