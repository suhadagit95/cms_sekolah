<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<?php 	
					if ($_SESSION['level'] == 'user') {
						
						echo" <script> alert( 'Gagal akses!');history.go(-1);</script>";
					}
					?>
<?php
 $id = $_GET['id'];	
?>
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                <?php
			
 $kueri = mysql_query(" SELECT * FROM user where id_user=$id " )or die(mysql_error());
									
        while ($baris=mysql_fetch_array($kueri))
	{ 
?>
                <section class="content-header">
                    <h1>
                        Edit Profile <b><u><?php echo $baris['fullname']; ?></u></b>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Edit User</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <div class="col-md-12">
                            <!-- The time line -->
                             
                                    
                            <ul class="timeline">
                             <li>
                                  <i class="fa fa-users "></i>
                                  
                                    <div class="timeline-item">
                                        
                                        <h3 class="timeline-header"><a href="#">Username dan Password</a></h3>
                                        
<div class="timeline-body"><div class="modal-body">
       <div class="col-lg-6">
                                                <div class="form-group">
                                                  
                                                  <input type="text" class="form-control"  id="text" value="<?php echo $baris['username']; ?>" required name="profesi" disabled="disabled">
                                                </div></div>
                           <div class="col-lg-6">
                                                <div class="form-group">
                                                  
                                                  <input type="password"class="form-control password"  id="text" value="<?php echo $baris['password']; ?>" required name="password" disabled="disabled">
                                                </div>
                                                </div>
                                                </div>
                                                                                        
                                       
                                    <div class='timeline-footer'>
                                            
                                             <button type="button" class="btn   btn-xs" data-toggle="modal" data-target="#myModal4">Edit </button>
                                        <form  action="" method="post" name="">
                                        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Username dan Password</h4>
                                              </div>
                                              
                                              <div class="modal-body">
                                                <div class="form-group">
                                                  
                                                  <input type="text" class="form-control"  id="text" placeholder="Username" required name="username">
                                                </div>
                                                <div class="form-group">
                                                  
                                                  <input type="password" class="form-control"  id="text" placeholder="Password" required name="password">
                                                </div>
                                                
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button  class="btn btn-primary"  type="submit" name="username_password">Simpan</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </form></div>
                                    </div>
                                </li>
                                <!-- timeline time label -->
                                
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <li>
                                  <i class="fa fa-user bg-blue"></i>
                                    <div class="timeline-item">
                                       
                                        <h3 class="timeline-header"><a href="#"><?php echo $baris['fullname']; ?> </a></h3>
                                        <div class="timeline-body">
                                         <img src="../upload/img_profil/<?php echo $baris['img_user']; ?>" height="100"></div>
                                        <div class='timeline-footer'>
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Edit Nama dan Foto</button>
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
                                            
                                            <input type="text" class="form-control"  id="text" placeholder="Nama Anda" required name="fullname">
</div>
       <div class="form-group">
                                        <label for="exampleInputFile">Pilih Gamba, Maksimal ukuran gambar 500 Kbr</label>
                                            <input id="uploadImage" required type="file" name="img_user" onChange="PreviewImage();" >
                                        <img id="uploadPreview" class="w3-round-xlarge" alt="" style="width:20%" /><br>
                                            
                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary"  type="submit" name="simpan_user">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>    
                                        </div>
                                    </div>
                                </li>
                                
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <li><i class="fa fa-retweet bg-yellow"></i>
                                  <div class="timeline-item">
                                    
                                    <h3 class="timeline-header"><a href="#">Level </a></h3>
                                    <div class="timeline-body">
                                      <div class="col-lg-6">
                                        <div class="form-group">
                                          <div class="input-group">
                                            <div class="input-group-btn">
                                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal5" >Action</button>
                                            </div>
                                            <!-- /btn-group -->
                                            <input type="text" class="form-control" disabled="disabled" value="Level: <?php echo $baris['level']; ?>">
                                          </div>
                                        </div>
                                      </div>                                                  
                                      <div class="form-group">
                                        
                                        
                                      </div>
                                    </div>
                                    <div class='timeline-footer'>
                                      
                                      <form  action="" method="post" name="">        
                                        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Level </h4>
                                              </div>
                                              <div class="modal-body">
                                                <div class="form-group">
                                                  <select    id="heard" name="level" class="form-control"  >
                                                    <option value="" >level..</option>
                                                    
                                                    <option value="admin">Admin</option>
                                                    <option value="user">User</option>
                                                  </select>
                                                </div>
                                                
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button  class="btn btn-primary"  type="submit" name="simpan_level">Simpan</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                               </li>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <li>
                                    <i class="fa fa-thumbs-o-up bg-purple"></i></li>
                            </ul>
                </div></section>
                <?php }?><!-- /.content -->
            </aside>
           
          
        <?php
		//include "load/SimpleImage.php";
 date_default_timezone_set("Asia/Jakarta");
$date = date("d/m/Y ");
if( isset( $_POST['simpan_user'] ) ){
	  $lokasi_file    = $_FILES['img_user']['tmp_name'];
  $tipe_file      = $_FILES['img_user']['type'];
  $nama_file      = $_FILES['img_user']['name'];
  $file_size = $_FILES['img_user']['size'];
$max_size = 625000;
if ($file_size > $max_size)
{
	echo" <script> alert( 'File Gambar terlalu besar, Ukuran Gambar Maksimal 500 Kb!');;</script>";
	}
else {
//$acak           = rand(1,99);
//$nama_file_unik = $acak.$nama_file;
$query_hapus = mysql_query("select img_user from user where id_user='$id'") or die(mysql_error());
$baris_hapus=mysql_fetch_array($query_hapus);
 $file_hapus = $baris_hapus['img_user'];
 unlink('../upload/img_profil/'.$file_hapus);

move_uploaded_file($lokasi_file, "../upload/img_profil/".$nama_file);

$query = mysql_query(" update user set img_user='$nama_file', fullname='".$_POST['fullname']."' where id_user='$id'")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Upload, silahkan login kembali!');history.go(-1);</script>";
session_destroy();	
	

} else {
	 echo" <script> alert( 'Gagal Upload..!');history.go(-1);</script>";
}
     
}
}
?>


<?php
if( isset( $_POST['username_password'] ) ){
$query = mysql_query(" update user set username='".$_POST['username']."', password='".$_POST['password']."' where id_user='$id'")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Ubah data, silahkan login kembali!');history.go(-1);</script>";
	session_destroy();
	

} else {
	 echo" <script> alert( 'Gagal Ubah data..!');history.go(-1);</script>";
}
     
}
?>
<?php
if( isset( $_POST['simpan_level'] ) ){
$query = mysql_query(" update user set level='".$_POST['level']."' where id_user='$id'")
 or die(mysql_error());
 if ($query) {
	 echo" <script> alert( 'Berhasil Ubah data, silahkan login kembali!');history.go(-1);</script>";
	session_destroy();
	

} else {
	 echo" <script> alert( 'Gagal Ubah data..!');history.go(-1);</script>";
}
     
}
?>
