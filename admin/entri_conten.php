<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Posting Content Baru</h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Content</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 <div class="box box-success">
                 <div class="box-header">
                                    <h3 class="box-title">Posting Content</h3>
                                </div>
                        
    <form enctype="multipart/form-data" action="" method="post" name="">
                                    <div class="box-body">
                                 
                                      <div class="form-group">
                                            
                                            <input type="text" class="form-control"  id="text" placeholder="Judul" required name="judul">
</div>
                 <div class="form-group">
        <select    id="heard" name="sub_menu" class="form-control"  required>
                            <option value="" >Tautkan Conten pada sub menu..</option>
                             <?php
							 $a = 
										$kueri = mysql_query(" SELECT * FROM sub_menu WHERE sub_link='' " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>
                            <option value="<?php echo $baris['id_sub_menu']; ?>" ><?php echo $baris['nama_sub']; ?></option>
                              <?php }?> 
          </select>
                  </div>                       
                                      <div class="form-group">
                                        <label for="exampleInputFile">Pilih Gambar, ukuran maksimal 1MB!</label>
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
	echo" <script> alert( 'File Gambar terlalu besar, Ukuran Gambar Maksimal 1 MB!');;</script>";
	}
else {
//$acak           = rand(1,99);
//$nama_file_unik = $acak.$nama_file;
move_uploaded_file($_FILES['upfile']['tmp_name'], "../upload/img_conten/".$_FILES['upfile']['name']); 

$sql1 = mysql_query("insert into content values('','$_SESSION[id_user]','".$_POST['sub_menu']."','".$_POST['judul']."','$tema_seo','".$_POST['isi']."','$nama_file','$date','$_SESSION[fullname]')");
 $sql2 = mysql_query("update sub_menu set sub_link='content-$tema_seo.html' where id_sub_menu='".$_POST['sub_menu']."'")
 or die(mysql_error());
 $query = ($sql1.$sql2);
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload!');history.go(-2);</script>";
	
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
}
}
?>
        