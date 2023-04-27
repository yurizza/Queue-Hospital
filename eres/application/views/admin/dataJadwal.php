 <?=$this->session->flashdata('message') ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" align="center">
      <div class="card-body">
      	<h3 align="center">Data Jadwal Dokter</h3>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Jadwal</th>
                  <th>ID Dokter</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach($jadwal as $j): ?>
					<tr>
            <td><?php echo $j['id_jadwal']; ?></td>
						<td><?php echo $j['id_dokter']; ?></td>
						<td><?php echo $j['hari']; ?></td>
						<td><?php echo $j['jam']; ?></td>
						<td>
							<a href="<?=base_url('data/deletejadwal/') . $j['id_jadwal']?>" class="btn btn-danger">
                 			Hapus
                			</a>
                			<a href="<?=base_url('data/editjadwal/') . $j['id_jadwal']?>" class="btn btn-warning">
                 			Edit
                			</a>
						</td>
					<?php endforeach ?>
					</tr>
                </tbody>
            </table> <br>
            <a href="<?=base_url('data/tambahjadwal/')?>" class="btn btn-primary">Tambah Data</a>
            
       </div>
    </div>
    </div>
</div>
    