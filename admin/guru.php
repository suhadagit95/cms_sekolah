<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>

                    
                    
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                  Pendidik dan Tenaga Kependidikan (PTK) SMK N 2 Mandau</h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Info</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content connectedSortable">
                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar Pendidik dan Tenaga Kependidikan (PTK)</h3>                                    
                   </div><!-- /.box-header -->
                                <div class="box-footer">
                           <button type="button" class="btn btn btn-warning " data-toggle="modal" data-target="#myModal2">
  Tambah PTK Baru
</button>
                                    </div>
                                    <form enctype="multipart/form-data" action="" method="post" name="">
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload PTK Baru</h4>
      </div>
      
      <div class="modal-body">
      <div class="form-group"><input type="text" class="form-control"  id="text" placeholder="NIP" required name="nip">
</div>
<div class="form-group"><input type="text" class="form-control"  id="text" placeholder="NUPTK" required name="nuptk">
</div>
<div class="form-group"><input type="text" class="form-control"  id="text" placeholder="Nama" required name="nama">
</div>
<div class="form-group"><input type="text" class="form-control"  id="text" placeholder="Tempat Lahir" required name="tempat_lahir">
</div>
<div class="form-group"><input type="text" class="form-control"  id="text" placeholder="Tanggal Lahir (dd/mm/yyyy)"  required name="tgl_lahir">
</div>

<div class="form-group">
<input type="text" class="form-control" required  id="text" placeholder="Alamat"  name="alamat">
</div>
<div class="form-group">
<input type="text" class="form-control" required  id="text" placeholder="Pendidikan Terakhir"  name="pendidikan">
</div>
<div class="form-group">
<select    id="heard" name="agama" class="form-control"  required>
                            <option value="" >Agama...</option>
                            <option value="Islam" >Islam</option>
                    <option value="Kristen Protestan" >Kristen Protestan</option>
                            <option value="Kristen Katolik" >Kristen Katolik</option>
                            <option value="Hindu" >Hindu</option>
                            <option value="Budha" >Budha</option>
                            <option value="Kong Hu Cu" >Kong Hu Cu</option>
                  </select>
                </div>
<div class="form-group">
<select    id="heard" name="jenis_kelamin" class="form-control"  required>
                            <option value="" >Jenis Kelamin...</option>
                            <option value="Laki-laki" >Laki-laki</option>
                            <option value="Perempuan" >Perempuan</option>
                            </select>
                </div>
                <div class="form-group">
<select    id="heard" name="pegawai" class="form-control"  required>
                            <option value="" >Setatus Pegawai...</option>
                            <option value="PNS" >PNS</option>
                            <option value="Guru Bantu Provinsi" >Guru Bantu Provinsi</option>
                            <option value="GTT/PTT/Kabupaten/Kota" >GTT/PTT/Kabupaten/Kota</option>
                            <option value="Tenaga Honor Sekolah" >Tenaga Honor Sekolah</option>
                             <option value="Lainnya" >Lainnya</option>
                            </select>
                </div>
                <div class="form-group">
<select    id="heard" name="ptk" class="form-control"  required>
                            <option value="" >Setatus PTK...</option>
                            <option value="Kepsek" >Kepsek</option>
                            <option value="Guru Kelas" >Guru Kelas</option>
                            <option value="Guru Mata Pelajaran" >Guru Mata Pelajaran</option>
                            <option value="Guru BK" >Guru BK</option>
                             <option value="Pustakawan" >Pustakawan</option>
                              <option value="Laboran" >Laboran</option>
                               <option value="Penjaga Sekolah" >Penjaga Sekolah</option>
                                <option value="Kebersihan" >Kebersihan</option>
                                 <option value="Lainnya" >Lainnya</option>
                             
                            </select>
                </div>
<div class="form-group">
                  <label for="exampleInputFile">Pilih Gambar, maksimal ukuran 500 KB!</label>
                                            <input id="uploadImage" required type="file" name="upfile" onChange="PreviewImage();" >
                                        <img id="uploadPreview" class="w3-round-xlarge" alt="" style="width:20%" /><br>
                                            
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary"  type="submit" name="upload">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>
                           
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>NIP</th>
                                                <th>NUPTK</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jenis PTK</th>
                                             <th>Foto</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
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
                                            <td><img src="../upload/img_guru/<?php echo $baris['foto']; ?>" height="35" /></td>
                                                <td>
                                                
                        <button  type="button" class="btn btn btn-info btn-xs" data-toggle="modal" data-target="#<?php echo $baris['id_ptk']; ?>"><i class="fa  fa-search"></i> </button>
                          <a href="dasbord.php?admin=edit_guru&id=<?php echo $baris['id_ptk'];?> ">   <button  class="btn bg-green btn-xs" data-toggle="tooltip" title="Edit " ><i class="fa  fa-pencil-square-o"></i> </button></a>
                      
                    
                    <form enctype="multipart/form-data" action="" method="post" name="">
<div class="modal fade" id="<?php echo $baris['id_ptk']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Data Detai Pendidik dan Tenaga Kependidikan </h4>
      </div>
      
      <div class="modal-body">
      <table class="table table-bordered">
                                        <tr>
                                            <th>Foto</th>
                                            <th colspan="2" align="center">Data PTK</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="11"><img src="../upload/img_guru/<?php echo $baris['foto']; ?>" height="100" /></td>
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
</form>

                                      
                                           <form action="" method="post"> 
                               <input hidden name="id" type="text" value="<?php echo $baris['id_ptk'];?> "  />
                               <button  data-toggle="tooltip" title="Hapus" id='hapus' name="hapus" type="submit" onclick="return confirm('Anda Yakin Akan Menghapus')" class="btn btn-danger btn-xs"> <i class="fa  fa-trash-o"></i></button></form>
                                             
                                              </td>
                                              
                                            </tr>
                                      
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
</div>

<!-- /.box-body -->
                            </div>

                </section><!-- /.content -->
            </aside>

    
<?php
if( isset( $_POST['hapus'] ) ){
	     
	 
	 $img = "SELECT * FROM ptk WHERE id_ptk= '".$_POST['id']."'";
$hasil   = mysql_query($img);
$data    = mysql_fetch_array($hasil);
 $namaFile = $data['foto'];
 unlink('../upload/img_guru/'.$namaFile);
$query = mysql_query("delete from ptk where id_ptk='".$_POST['id']."'") or die(mysql_error());
if ($query) {
echo" <script>history.go(-1);</script>";
} else {
echo" <script> alert( 'Gagal Hapus..!');history.go(-1);</script>";
}
	 
}


 
if( isset( $_POST['upload'] ) ){
	  $lokasi_file    = $_FILES['upfile']['tmp_name'];
  $tipe_file      = $_FILES['upfile']['type'];
  $nama_file      = $_FILES['upfile']['name'];
 
  date_default_timezone_set("Asia/Jakarta");
$date = date("d/m/Y ");
$file_size = $_FILES['upfile']['size'];
$max_size = 625000;
if ($file_size > $max_size)
{
	echo" <script> alert( 'File Gambar terlalu besar, Ukuran Gambar Maksimal 500!');</script>";
	}
else {
//$acak           = rand(1,99);
//$nama_file_unik = $acak.$nama_file;
move_uploaded_file($_FILES['upfile']['tmp_name'], "../upload/img_guru/".$_FILES['upfile']['name']); 

$query = mysql_query("insert into ptk values('','".$_POST['nip']."','".$_POST['nuptk']."','".$_POST['nama']."','".$_POST['jenis_kelamin']."','".$_POST['tempat_lahir']."','".$_POST['tgl_lahir']."','".$_POST['agama']."','".$_POST['alamat']."','".$_POST['pendidikan']."','".$_POST['pegawai']."','".$_POST['ptk']."','$nama_file')")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload!');history.go(-1);</script>";
	
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
}
}

                           
    ?>                       