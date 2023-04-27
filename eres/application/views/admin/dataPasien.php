 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" align="center">
      <div class="card-body">
      	<h3 align="center">Data Pasien</h3>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Tanggal Lahir</th>
                  <th>No Telpon</th>
                </tr>
                </thead>
                <tbody>
                   
                    <?php
                      $i= 1;
                     foreach($jadwal as $j): ?>
					          <tr>
                      <td><?= $i++;?></td>
                      <td><?php echo $j['nik']; ?></td>
                      <td><?php echo $j['nama_pasien']; ?></td>
                      <td><?php echo $j['tgl_lhr']; ?></td>
                      <td><?php echo $j['no_telp_pasien']; ?></td>
					<?php endforeach ?>
					</tr>
                </tbody>
            </table> <br>
       </div>
    </div>
    </div>
</div>
    