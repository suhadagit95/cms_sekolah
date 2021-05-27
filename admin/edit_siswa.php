<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>

<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Edit Siswa</h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Edit Siswa</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 <div class="box box-success">
                 <div class="box-header">
                                    <h3 class="box-title">Form Edit Siswa</h3>
                                </div>
                                 <?php
								 $id = $_GET['id'];
								 
										$kueri = mysql_query(" SELECT * FROM siswa where id_siswa=$id " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>

<form enctype="multipart/form-data" action="" method="post" name="">
                                
                                    <div class="modal-body">
      <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NISN<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12"><div class="form-group"><input type="text" class="form-control"  id="text" placeholder="NISN" required name="nisn" value="<?php echo $baris['nisn']; ?>">
</div></div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12"><input type="text" class="form-control"  id="text" placeholder="Nama" required name="nama" value="<?php echo $baris['nama']; ?>">
</div></div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tempat Lahir<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" class="form-control"  id="text" placeholder="Tempat Lahir" required name="tempat_lahir" value="<?php echo $baris['tempat_lahir']; ?>">
</div></div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tanggal Lahir<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
<input type="text" class="form-control"  id="text" placeholder="Tanggal Lahir (dd/mm/yy)" required name="tgl_lahir" value="<?php echo $baris['tgl_lahir']; ?>">
</div></div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
<input type="text" class="form-control" required  id="text" placeholder="Alamat"  name="alamat"  value="<?php echo $baris['alamat']; ?>">
</div></div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Agama<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
<select    id="heard" name="agama" class="form-control"  required>
                            <option value="" >Agama...</option>
                            <option value="Islam" >Islam</option>
                    <option value="Kristen Protestan" >Kristen Protestan</option>
                            <option value="Kristen Katolik" >Kristen Katolik</option>
                            <option value="Hindu" >Hindu</option>
                            <option value="Budha" >Budha</option>
                            <option value="Kong Hu Cu" >Kong Hu Cu</option>
                  </select>
                </div></div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Jenis Kelamin<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
<select    id="heard" name="jenis_kelamin" class="form-control"  required>
                            <option value="" >Jenis Kelamin...</option>
                            <option value="Laki-laki" >Laki-laki</option>
                            <option value="Perempuan" >Perempuan</option>
                            </select>
                </div></div>
             
                <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tahun Masuk<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
<select    id="heard" name="tahun" class="form-control"  required>
                            <option value="" >Tahun Masuk</option>
                            <?php
						date_default_timezone_set("Asia/Jakarta");
						$date = date("Y");
						
						for ( $t=2005; $t <= $date; $t++)
						{?>
							 <option value="<?php echo "$t"; ?>"><?php echo "$t"; ?></option>
                             <?php
							}
						
							 ?>
                              
                            </select>
                </div></div>
<div class="form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Gambar<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
                  <label for="exampleInputFile">Pilih Gambar, maksimal ukuran 500 KB!</label>
                                            <input id="uploadImage" required type="file" name="upfile" onChange="PreviewImage();" >
                                        <img id="uploadPreview" class="w3-round-xlarge" alt="" style="width:20%" /><br>
                                            
                </div></div>
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
	
if( isset( $_POST['upload'] ) ){
	  $lokasi_file    = $_FILES['upfile']['tmp_name'];//mendapatkan lokasi awal file
  $tipe_file      = $_FILES['upfile']['type'];//mendapatkan tipe dari sbuah file
  $nama_file      = $_FILES['upfile']['name'];//mendapatkan nama dari sebuah file

  date_default_timezone_set("Asia/Jakarta");
$date = date("d/m/Y ");
$date2 = date("d/m/Y/h/i/s ");
$file_size = $_FILES['upfile']['size'];
$max_size = 625000;
if ($file_size > $max_size)
{
	echo" <script> alert( 'File Gambar terlalu besar, Ukuran Gambar Maksimal 500 Kb!');;</script>";
	}
else {
//$acak           = rand(1,99);
//$nama_file_unik = $acak.$nama_file;
$query_hapus = mysql_query("select foto_siswa from siswa where id_siswa='$id'") or die(mysql_error());
$baris_hapus=mysql_fetch_array($query_hapus);
 $file_hapus = $baris_hapus['foto_siswa'];
 unlink('../upload/img_siswa/'.$file_hapus);
								 

move_uploaded_file($lokasi_file, "../upload/img_siswa/".$nama_file);


$query = mysql_query(" update siswa set nisn='".$_POST['nisn']."', nama='".$_POST['nama']."', tempat_lahir='".$_POST['tempat_lahir']."',tgl_lahir='".$_POST['tgl_lahir']."',agama='".$_POST['agama']."', jenis_kelamin='".$_POST['jenis_kelamin']."', alamat='".$_POST['alamat']."',tahun_masuk='".$_POST['tahun']."',foto_siswa='$nama_file' where id_siswa=$id")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload!');window.location = 'dasbord.php?admin=siswa'</script>";
	
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
     
}
}
?>
        