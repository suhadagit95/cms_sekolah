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
                        Costum Menu Header
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Menu Header</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content connectedSortable col-md-6">
                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar Menu Header</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-footer">
                                <button type="button" class="btn btn btn-info " data-toggle="modal" data-target="#myModal">Tambah Menu</button> &nbsp; <button type="button" class="btn btn btn-info " data-toggle="modal" data-target="#myModal2">Tambah Sub Menu</button>
                                    </div>
                           
                                <div class="box-body table-responsive ">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>Menu</th>
                                                <th>Sub Menu</th>
                                              <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										$kueri = mysql_query(" SELECT * FROM menu left join sub_menu using(id_menu)" );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>
									
                                            <tr>
                                              <td><?php echo $baris['nama_menu']; ?>
											 </td>
                                                <td><?php echo $baris['nama_sub']; ?></td>
                                              <td>
                                                                  
                                                           
                                           <form action="" method="post"> 
                               <input hidden name="id" type="text" value="<?php echo $baris['id_sub_menu'];?> "  />
                               <button  data-toggle="tooltip" title="Hapus" id='hapus' name="hapus" type="submit" onclick="return confirm('Anda Yakin Akan Menghapus? Tindakan ini hanya dapat menghapus sub menu dan tidak dapat menghapus menu')" class="btn btn-danger btn-xs"> <i class="fa  fa-trash-o"></i></button></form>
                                             
                                              </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
</div>

<!-- /.box-body -->

<form enctype="multipart/form-data" action="" method="post" name="">
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Buat Sub Menu Baru</h4>
      </div>
      
      <div class="modal-body">
      <div class="form-group">
                                            
                                            <input type="text" class="form-control"  id="text" placeholder="Judul Sub Menu" required name="sub_menu">
</div>
 <div class="form-group">
<select    id="heard" name="id_menu" class="form-control"  required>
                            <option value="" >Tautkan menu pada</option>
                            <?php
										$kueri = mysql_query(" SELECT * FROM menu " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
			
          
?>
                            <option value="<?php echo $baris['id_menu']; ?>" ><?php echo $baris['nama_menu']; ?></option>
                            
                            <?php }?>
          </select>
              </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary"  type="submit" name="simpan_sub_menu">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>
                  </div>

                </section>
                
                
                <section class="content connectedSortable col-md-6">
                 <div class="box">
                   <div class="box-header">
                                    <h3 class="box-title">Preview Menu Header </h3>                                    
                                </div>
                                			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<?php
					
					$menu = mysql_query("SELECT * FROM menu ORDER BY id_menu ASC");
					while($dataMenu = mysql_fetch_assoc($menu)){
						$menu_id = $dataMenu['id_menu'];
						$submenu = mysql_query("SELECT * FROM sub_menu WHERE id_menu='$menu_id' ORDER BY id_sub_menu ASC");
						if(mysql_num_rows($submenu) == 0){
							echo '<li><a href="">'.$dataMenu['nama_menu'].'</a></li>';
						}else{
							echo '
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">'.$dataMenu['nama_menu'].' <b class="caret"></b></a>
								<ul class="dropdown-menu">';
								while($dataSubmenu = mysql_fetch_assoc($submenu)){
									echo '<li><a href="">'.$dataSubmenu['nama_sub'].'</a></li>';
								}
							echo '
								</ul>
							</li>
							';
						}
					}
					?>
				</ul>
			</div>
            <hr/>
            
            


                  </div>

                </section>
                
                
                <!-- /.content -->
            </aside>
<form enctype="multipart/form-data" action="" method="post" name="">
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Buat Menu Baru</h4>
      </div>
      
      <div class="modal-body">
      <div class="form-group">
                                            
                                            <input type="text" class="form-control"  id="text" placeholder="Judul Menu" required name="judul_menu">
</div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary"  type="submit" name="simpan_menu">Simpan</button>
      </div>
    </div>
  </div>
</div>
</form>

    
<?php
if( isset( $_POST['simpan_menu'] ) ){
	     
	 
	$query = mysql_query("insert into menu values('','".$_POST['judul_menu']."','')")
 or die(mysql_error());
 
if ($query) {
echo" <script>alert( 'Berhasil..!');history.go(-1);</script>";
} else {
echo" <script> alert( 'Gagal Hapus..!');history.go(-1);</script>";
}
	 
}


////////////////////
if( isset( $_POST['simpan_sub_menu'] ) ){
	     
	 
	$query = mysql_query("insert into sub_menu values('','".$_POST['id_menu']."','".$_POST['sub_menu']."','')")
 or die(mysql_error());
 
if ($query) {
echo" <script>alert( 'Berhasil..!');history.go(-1);</script>";
} else {
echo" <script> alert( 'Gagal Hapus..!');history.go(-1);</script>";
}
	 
}

///////////////
if( isset( $_POST['hapus'] ) ){
	     
	 
 $img = "SELECT * FROM content WHERE id_sub_menu= '".$_POST['id']."'";
$hasil   = mysql_query($img);
$data    = mysql_fetch_array($hasil);
 $namaFile = $data['img_conten'];
 unlink('../upload/img_conten/'.$namaFile);
$q1 = mysql_query("delete from content where id_sub_menu='".$_POST['id']."'");

$q2 = mysql_query("delete from sub_menu where id_sub_menu='".$_POST['id']."'") or die(mysql_error());
$query = ($q1.$q2);
if ($query) {
echo" <script>history.go(-1);</script>";
} else {
echo" <script> alert( 'Gagal Hapus..!');history.go(-1);</script>";
}
	 
}
                           
    ?>                       