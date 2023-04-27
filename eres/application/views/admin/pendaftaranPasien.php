 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid" align="center">
      <div class="card-body">
      	<h3 align="center">Pendaftaran Pasien</h3>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>No Antrian</th>
                  <th>Nik</th>
                  <th>Id Jadwal</th>
                  <th>Nama Dokter</th>
                  <th>Spesialis</th>
                  <th>Tanggal</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                   
                    <?php
                      $i= 1;
                     foreach($jadwal as $j): ?>
				          	<tr>
                         <td><?= $i++;?></td>
                      <td><?php echo $j['no_antrian']; ?></td>
                      <td><?php echo $j['nik']; ?></td>
                      <td><?php echo $j['id_jadwal']; ?></td>
                      <td><?php echo $j['nama_dokter']; ?></td>
                      <td><?php echo $j['spesialis']; ?></td>
                      <td><?php echo $j['tanggal']; ?></td>
                      <td><?php echo $j['hari']; ?></td>
                      <td><?php echo $j['jam']; ?></td>
                      <td><?php echo $j['status']; ?></td>
                    <?php endforeach ?>
                    </tr>
                </tbody>
            </table> <br>
            
       </div>
    </div>
    </div>
</div>
    