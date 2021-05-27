<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Posting Berita<small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Berita</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 <div class="box box-success">
                 <div class="box-header">
                                    <h3 class="box-title">Berita</h3>
                                </div>
                        
    <form enctype="multipart/form-data" action="" method="post" name="">
                                    <div class="box-body">
                                 
                                      <div class="form-group">
                                            
                                            <input type="text" class="form-control"  id="text" placeholder="Judul" required name="judul">
</div>
                                        
                                      <div class="form-group">
                                        <label for="exampleInputFile">*Pilih Gambar, ukuran maksimal 1MB!</label>
                                            <input id="uploadImage" required type="file" name="upfile" onChange="PreviewImage();" >
                                        <img id="uploadPreview" class="w3-round-xlarge" alt="" style="width:20%" /><br>
                                            
                                </div>
                                      
                       
                       <div class="form-group">
                                                             <textarea id="editor1" name="isi" rows="10" cols="80" required >
                                            
                                        </textarea>
</div>
                                     <div class="box-footer">
                                        <button type="submit" name="upload" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
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
	echo" <script> alert( 'File Gambar terlalu besar, Ukuran Gambar Maksimal 1 MB!');history.go(-1);</script>";
	}
else {
//$acak           = rand(1,99);
//$nama_file_unik = $acak.$nama_file;
move_uploaded_file($_FILES['upfile']['tmp_name'], "../upload/img_news/".$_FILES['upfile']['name']); 

$query = mysql_query("insert into berita values('','$_SESSION[id_user]','".$_POST['judul']."','$tema_seo','".$_POST['isi']."','$nama_file','$_SESSION[fullname]','$date','yes')")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload!');history.go(-2);</script>";
	
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
}
}
?>
        