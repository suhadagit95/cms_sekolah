<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
              <h1>
                        Gallery
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Gallery</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                  <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Daftar Posting Galery</h3>
                    </div>
                   
                    <!-- /.box-header awal modal form master  -->
                    <div class="box-footer"> 
                      <!-- Button trigger modal -->
<button type="button" class="btn btn btn-warning " data-toggle="modal" data-target="#myModal">
  Tambah Gambar Baru
</button>


<!-- Modal -->

<form enctype="multipart/form-data" action="" method="post" name="">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Upload Gambar Baru</h4>
      </div>
      
      <div class="modal-body">
      <div class="form-group">
                                            
                                            <input type="text" class="form-control"  id="text" placeholder="Judul" required name="judul">
</div>
      <div class="form-group">
<label for="exampleInputFile">Pilih Gambar</label>
, 
<label for="exampleInputFile2">ukuran maksimal 1MB!</label>
<input id="uploadImage" required type="file" name="upfile" onChange="PreviewImage();" >
                                        <img id="uploadPreview" class="w3-round-xlarge" alt="" style="width:20%" /><br>
                                            
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary"  type="submit" name="simpan">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>



                    </div>
                     
                     <!-- akhir modal Form Master -->
                     
                     
                    <div class="box-body table-responsive">
                   
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>Keterangan </th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
										$kueri = mysql_query(" SELECT * FROM galeri    " );
									
        while ($baris=mysql_fetch_array($kueri))
        {  
			
          
?>
                          <tr>
                            <td><?php echo $baris['judul']; ?></td>
                            <td><img src="../upload/img_gallery/<?php echo $baris['img_galeri']; ?>" height="50"></td>
                            <td> 
                               <form action="" method="post"> 
                               <input hidden name="id" type="text" value="<?php echo $baris['id_galeri'];?> "  />
                               <button  data-toggle="tooltip" title="Hapus" id='hapus' name="hapus" type="submit" onclick="return confirm('Anda Yakin Akan Menghapus')" class="btn btn-danger btn-sm"> <i class="fa  fa-trash-o"></i></button></form>
                            </td>
                          </tr>
                          <?php }?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Keterangan</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                      </table>
                   
                    </div>
                    <!-- /.box-body -->
                  </div>
                </section>
                <!-- /.content -->
            </aside>
         
        <?php
		//include "load/SimpleImage.php";
 function seo_title($s) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}
 
if( isset( $_POST['simpan'] ) ){
	  $lokasi_file    = $_FILES['upfile']['tmp_name'];
  $tipe_file      = $_FILES['upfile']['type'];
  $nama_file      = $_FILES['upfile']['name'];
  $tema_seo = seo_title($_POST['judul']);
  date_default_timezone_set("Asia/Jakarta");
$date = date("d/m/Y ");
$file_size = $_FILES['upfile']['size'];
$max_size = 1125000;
if ($file_size > $max_size)
{
	echo" <script> alert( 'File Gambar terlalu besar, Ukuran Gambar Maksimal 1 MB!');;</script>";
	}
else {
//$acak           = rand(1,99);
//$nama_file_unik = $acak.$nama_file;
move_uploaded_file($_FILES['upfile']['tmp_name'], "../upload/img_gallery/".$_FILES['upfile']['name']); 

$query = mysql_query("insert into galeri values('','$_SESSION[id_user]','$nama_file','".$_POST['judul']."')")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload!');history.go(-1);</script>";
	
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
}
}


///////////////////////////////////////////////////////
if( isset( $_POST['hapus'] ) ){
	     
	 
	 $img = "SELECT * FROM galeri WHERE id_galeri= '".$_POST['id']."'";
$hasil   = mysql_query($img);
$data    = mysql_fetch_array($hasil);
 $namaFile = $data['img_galeri'];
 unlink('../upload/img_gallery/'.$namaFile);
$query = mysql_query("delete from galeri where id_galeri='".$_POST['id']."'") or die(mysql_error());
if ($query) {
echo" <script>history.go(-1);</script>";
} else {
echo" <script> alert( 'Gagal Hapus..!');history.go(-1);</script>";
}
	 
}

?>