<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>

<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Edit PTK</h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Edit PTK</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                 <div class="box box-success">
                 <div class="box-header">
                                    <h3 class="box-title">Form Edit PTK</h3>
                                </div>
                                 <?php
								 $id = $_GET['id'];
								 
										$kueri = mysql_query(" SELECT * FROM ptk where id_ptk=$id " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>

<form enctype="multipart/form-data" action="" method="post" name="">
                                    <div class="modal-body">
      <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NIP<span class="required">*</span></label>
      <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" class="form-control"  id="text" placeholder="NIP" required name="nip" value="<?php echo $baris['nip']; ?>">
</div></div>

      <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">NUPTK<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" class="form-control"  id="text" placeholder="NUPTK" required name="nuptk" value="<?php echo $baris['nuptk']; ?>">
</div></div>

<div class="form-group">
 <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12">
<input type="text" class="form-control"  id="text" placeholder="Nama" required name="nama" value="<?php echo $baris['nama']; ?>">
</div></div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tempat Lahir<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12"><input type="text" class="form-control"  id="text" placeholder="Tempat Lahir" required name="tempat_lahir" value="<?php echo $baris['tempat_lahir']; ?>">
</div></div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tanggal Lahir<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12">
       <input type="text" class="form-control"  id="text" placeholder="Tanggal Lahir (dd/mm/yyyy)" value="<?php echo $baris['tgl_lahir']; ?>"  required name="tgl_lahir">
</div></div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12">
<input type="text" class="form-control" required  id="text" placeholder="Alamat"  name="alamat" value="<?php echo $baris['alamat']; ?>">
</div></div>

<div class="form-group">
 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Pendidikan<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12">
<input type="text" class="form-control" required  id="text" placeholder="Pendidikan Terakhir"  name="pendidikan" value="<?php echo $baris['pendidikan']; ?>">
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
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Setatus Pegawai<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12">
<select    id="heard" name="pegawai" class="form-control"  required>
                            <option value="" >Setatus Pegawai...</option>
                            <option value="PNS" >PNS</option>
                            <option value="Guru Bantu Provinsi" >Guru Bantu Provinsi</option>
                            <option value="GTT/PTT/Kabupaten/Kota" >GTT/PTT/Kabupaten/Kota</option>
                            <option value="Tenaga Honor Sekolah" >Tenaga Honor Sekolah</option>
                             <option value="Lainnya" >Lainnya</option>
                  </select>
                </div>
                </div>
                <div class="form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Setatus PTK<span class="required">*</span></label>
       <div class="col-md-9 col-sm-9 col-xs-12">
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
$query_hapus = mysql_query("select foto from ptk where id_ptk='$id'") or die(mysql_error());
$baris_hapus=mysql_fetch_array($query_hapus);
 $file_hapus = $baris_hapus['foto'];
 unlink('../upload/img_guru/'.$file_hapus);
								 

move_uploaded_file($lokasi_file, "../upload/img_guru/".$nama_file);


$query = mysql_query(" update ptk set
nip='".$_POST['nip']."', nuptk='".$_POST['nuptk']."', nama='".$_POST['nama']."',jenis_kelamin='".$_POST['jenis_kelamin']."', tempat_lahir='".$_POST['tempat_lahir']."',tgl_lahir='".$_POST['tgl_lahir']."',agama='".$_POST['agama']."',alamat='".$_POST['alamat']."',pendidikan='".$_POST['pendidikan']."',status_pegawai='".$_POST['pegawai']."',jenis_ptk='".$_POST['ptk']."',foto='$nama_file' where id_ptk=$id")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload!');window.location = 'dasbord.php?admin=guru'</script>";
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
     
}
}
?>
        