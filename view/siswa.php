
<div class="well">
<div class="container">
		<div class="w3ls-heading">
				<h2 class="h-two">Siwa Sekolah Menengah Kejuruan </h2>
				<p class="sub two"> Negeri 2 Mandau</p>
			</div>
			
</div>
</div>

<div class="container">
<div class="col-md-12 w3l_services_footer_top_left">
            
           <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>NISN</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Tahun Masuk</th>
                                             <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										include_once('load/config.php');
										$kueri = mysql_query(" SELECT * FROM siswa  " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>
									
                                            <tr>
                                              <td><?php echo $baris['nisn']; ?>
											 </td>
                                                <td><?php echo $baris['nama']; ?></td>
                                                <td><?php echo $baris['jenis_kelamin']; ?></td>
                                                <td><?php echo $baris['agama']; ?></td>
                                                <td><?php echo $baris['tahun_masuk']; ?></td>
                                            <td>
                                                
                        <button  type="button" class="btn btn btn-info btn-xs" data-toggle="modal" data-target="#<?php echo $baris['id_siswa']; ?>"><i class="fa  fa-search"></i> </button>
                    
                    <form enctype="multipart/form-data" action="" method="post" name="">
<div class="modal fade" id="<?php echo $baris['id_siswa']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> Siswa SMK N 2 Mandau</h4>
      </div>
      
      <div class="modal-body">
      <table class="table table-bordered">
                                        <tr>
                                            <th>Foto</th>
                                            <th colspan="2" align="center">Data PTK</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="11"><img src="upload/img_siswa/<?php echo $baris['foto_siswa']; ?>" height="100" /></td>
                                            <td>NISN</td>
                                            <td><?php echo $baris['nisn']; ?></td>
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
                                        
                                        <tr>
                                          <td>Jenis Kelamin</td>
                                          <td><?php echo $baris['jenis_kelamin']; ?></td>
                                        </tr>
                                        <tr>
                                          <td>Tahun Masuk</td>
                                          <td><?php echo $baris['tahun_masuk']; ?></td>
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
    <?php echo $baris['nip']; ?> </div>
            </div>
            </div>
           
        