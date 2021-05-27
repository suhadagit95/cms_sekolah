<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>

<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Edit Berita<small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Edit Berita</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 <div class="box box-success">
                 <div class="box-header">
                                    <h3 class="box-title">Form Edit Berita </h3>
                                </div>
                                 <?php
								 $id = $_GET['id'];
								 
										$kueri = mysql_query(" SELECT * FROM berita where id_berita=$id " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>

<form enctype="multipart/form-data" action="" method="post" name="">
                                    <div class="box-body">
                                 
                                      <div class="form-group">
                                            
                                            <input type="text" class="form-control"  id="text" placeholder="Judul" required name="judul" value="<?php echo $baris['judul']; ?>">
</div>
				 <div class="form-group">
              Tampilkan Berita? &nbsp;&nbsp;  yes <input type="radio" name="tampilkan" id="optionsRadios2" checked="checked" value="yes"> &nbsp; &nbsp;  No <input type="radio" name="tampilkan" id="optionsRadios2" value="no">
              </div>                          
                                      <div class="form-group">
                                        <label for="exampleInputFile">Pilih Gambar</label>
                                        , 
                                        <label for="exampleInputFile2">ukuran maksimal 1MB!</label>
                                        <input id="uploadImage" required type="file" name="upfile" onChange="PreviewImage();" >
                                        <img  id="uploadPreview" class="w3-round-xlarge" alt="" style="width:20%" /><br>
                                            
                                </div>
                                        
                        
                       <div class="form-group">
                                                             <textarea id="editor1" name="isi" rows="10" cols="80" required >
                                            <?php echo $baris['isi']; ?>
                                        </textarea>
</div>
                                     <div class="box-footer">
                                        <button type="submit" name="upload"class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                    
                                    <?php }?>
                                    </div>
                </section><!-- /.content -->
            </aside>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
            
           <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
                //bootstrap WYSIHTML5 - text editor
                $(".textarea").wysihtml5();
            });
        </script>
     
        <?php
		//include "load/SimpleImage.php";
 function seo_title($s) {
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');

    $s = str_replace($d, '', $s); // Hilangkan karakter yang telah disebutkan di array $d
    
    $s = strtolower(str_replace($c, '-', $s)); // Ganti spasi dengan tanda - dan ubah hurufnya menjadi kecil semua
    return $s;
}
 
if( isset( $_POST['upload'] ) ){
	  $lokasi_file    = $_FILES['upfile']['tmp_name'];//mendapatkan lokasi awal file
  $tipe_file      = $_FILES['upfile']['type'];//mendapatkan tipe dari sbuah file
  $nama_file      = $_FILES['upfile']['name'];//mendapatkan nama dari sebuah file
  $tema_seo = seo_title($_POST['judul']);
  date_default_timezone_set("Asia/Jakarta");
$date = date("d/m/Y ");
$date2 = date("d/m/Y/h/i/s ");
$file_size = $_FILES['upfile']['size'];
$max_size = 1125000;
if ($file_size > $max_size)
{
	echo" <script> alert( 'File Gambar terlalu besar, Ukuran Gambar Maksimal 1 MB!');;</script>";
	}
else {
//$acak           = rand(1,99);
//$nama_file_unik = $acak.$nama_file;
$query_hapus = mysql_query("select img_berita from berita where id_berita='$id'") or die(mysql_error());
$baris_hapus=mysql_fetch_array($query_hapus);
 $file_hapus = $baris_hapus['img_berita'];
 unlink('../upload/img_news/'.$file_hapus);
								 

move_uploaded_file($lokasi_file, "../upload/img_news/".$nama_file);


$query = mysql_query(" update berita set judul='".$_POST['judul']."', judul_seo='$tema_seo', img_berita='$nama_file', isi='".$_POST['isi']."', tampilkan='".$_POST['tampilkan']."' where id_berita=$id")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload!');history.go(-2);</script>";
	
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
     
}
}
?>
        