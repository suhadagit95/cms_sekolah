
<div class="well">
<div class="container">
		<div class="w3ls-heading">
				<h2 class="h-two">Pendidik dan Tenaga Kependidikan </h2>
				<p class="sub two">SMK Negeri 2 Mandau</p>
			</div>
			
</div>
</div>

<div class="container">
<div class="col-md-12 w3l_services_footer_top_left">
            
           <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>NIP</th>
                                                <th>NUPTK</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jenis PTK</th>
                                             <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										include_once('load/config.php');
										$kueri = mysql_query(" SELECT * FROM ptk  " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>
									
                                            <tr>
                                              <td><?php echo $baris['nip']; ?>
											 </td>
                                                <td><?php echo $baris['nuptk']; ?></td>
                                                <td><?php echo $baris['nama']; ?></td>
                                                <td><?php echo $baris['jenis_kelamin']; ?></td>
                                                <td><?php echo $baris['jenis_ptk']; ?></td>
                                            <td>
                                                
                        <button  type="button" class="btn btn btn-info btn-xs" data-toggle="modal" data-target="#<?php echo $baris['id_ptk']; ?>"><i class="fa  fa-search"></i> </button>
                    
                    <form enctype="multipart/form-data" action="" method="post" name="">
<div class="modal fade" id="<?php echo $baris['id_ptk']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Data  Pendidik dan Tenaga Kependidikan <br />SMK N 2 Mandau</h4>
      </div>
      
      <div class="modal-body">
      <table class="table table-bordered">
                                        <tr>
                                            <th>Foto</th>
                                            <th colspan="2" align="center">Data PTK</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="11"><img src="upload/img_guru/<?php echo $baris['foto']; ?>" height="100" /></td>
                                            <td>NIP</td>
                                            <td><?php echo $baris['nip']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>NUPTK</td>
                                            <td><?php echo $baris['nuptk']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?php echo $baris['nama']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Tempat Lahir</td>
                                          <td><?php echo $baris['tempat_lahir']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Tanggal Lahir</td>
                                          <td><?php echo $baris['tgl_lahir']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Agama</td>
                                          <td><?php echo $baris['agama']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Alamat</td>
                                          <td><?php echo $baris['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Pendidikan</td>
                                          <td><?php echo $baris['pendidikan']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Jenis Kelamin</td>
                                          <td><?php echo $baris['jenis_kelamin']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Setatus Pegawai</td>
                                          <td><?php echo $baris['status_pegawai']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis PTK</td>
                                            <td><?php echo $baris['jenis_ptk']; ?></td>
                                        </tr>
                                    </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</form></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
</div>
            </div>
            </div>
           
        