<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<?php 	
					if ($_SESSION['level'] == 'user') {
						
						echo" <script> alert( 'Gagal akses!');history.go(-1);</script>";
					}
					?>
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Master setting</h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Master Setting</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content connectedSortable">
                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Info User Terdaftar                   </h3>
                   </div>
                   <!-- /.box-header -->
                        <div class="box-footer">
                                        <button type="button" class="btn  btn-info " data-toggle="modal" data-target="#myModal2"><i class=" fa fa-plus-square-o"> </i> User Baru</button>
                                    </div>
                                
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>Fullname</th>
                                                <th>Username</th>
                                                <th>Tanggal</th>
                                                <th>Level</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										$kueri = mysql_query(" SELECT * FROM user    " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>
									
                                            <tr>
                                              <td><?php echo $baris['fullname']; ?></td>
                                                <td><?php echo $baris['username']; ?></td>
                                                <td><?php echo $baris['tgl_daftar']; ?></td>
                                                <td><?php echo $baris['level']; ?></td>
                                                <td><img src="../upload/img_profil/<?php echo $baris['img_user']; ?>" height="40" /></td>
                                                <td>
                                       <a href="dasbord.php?admin=edit_user&id=<?php echo $baris['id_user'];?> ">         <button  class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit"><i class="fa  fa-pencil-square-o"></i> </button></a>
                                    
                                             
                                                  </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th>Fullname</th>
                                                <th>Username</th>
                                                <th>Tanggal</th>
                                                <th>Level</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
</div><!-- /.box-body -->
                            </div>
                            <form  action="" method="post" name="">
                                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Tambah User Baru</h4>
                                              </div>
                                              
                                              <div class="modal-body">
                                                <div class="form-group">
                                                  
                                                  <input type="text" class="form-control"  id="text" placeholder="Full Name" required name="nama">
                                                </div>
                                                <div class="form-group">
                                                  
                                                  <input type="text" class="form-control"  id="text" placeholder="Username" required name="username">
                                                </div>
                                                <div class="form-group">
                                                  
                                                  <input type="password" class="form-control"  id="text" placeholder="Password" required name="password">
                                                </div>
                                
                                                  <div class="form-group">
                          <select   id="heard" name="level" class="form-control" required>
                            <option value="" >Level admin</option>
                            <option value="admin" >Admin</option>
                            <option value="user">User</option>
                            
      
         
          </select>
                        </div>
                                                </div>
                                                
                                             
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button  class="btn btn-primary"  type="submit" name="user_baru">Simpan</button>
                                              </div>
                                            </div>
                                          </div>
                                      
                                      </form>

                </section><!-- /.content -->
            </aside>

    <?php
	date_default_timezone_set("Asia/Jakarta");
$date = date("d/m/Y ");
if( isset( $_POST['user_baru'] ) ){
$query = mysql_query("insert into user values('','".$_POST['level']."','".$_POST['nama']."','".$_POST['username']."','".$_POST['password']."','','$date')")
 or die(mysql_error());
 
 if ($query) {
	 echo" <script> alert( 'Berhasil Input Data!');history.go(-1);</script>";
	
	

} else {
	 echo" <script> alert( 'Gagal Input Data..!');history.go(-1);</script>";
}
     
}
?>
                           
                           