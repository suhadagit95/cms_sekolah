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
                        Conten Menu Header<small></small>
              </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Conten Menu</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content connectedSortable">
                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar Conten Menu Header</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-footer">
                                          <a href="dasbord.php?admin=entri_conten"> <button class="btn btn-warning">Entri Baru</button></a>
                                    </div>
                           
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>Tampil di submenu</th>
                                                <th>Judul</th>
                                                <th>Penulis</th>
                                              <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										$kueri = mysql_query(" SELECT * FROM sub_menu left join content using(id_sub_menu)  " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
          
?>
									
                                            <tr>
                                              <td><?php echo $baris['nama_sub']; ?></td>
                                                <td><?php echo $baris['judul']; ?></td>
                                                <td><?php echo $baris['penulis']; ?></td>
                                              <td><img src="../upload/img_conten/<?php echo $baris['img_conten']; ?>" height="35" /></td>
                                                <td>
                                                                  
                       <a href="dasbord.php?admin=edit_conten&id=<?php echo $baris['id_conten'];?> ">   <button  class="btn bg-green btn-xs" data-toggle="tooltip" title="Edit " ><i class="fa  fa-pencil-square-o"></i> </button>
                    
                    </a> 
                                      
                                           <form action="" method="post"> 
                               <input hidden name="id" type="text" value="<?php echo $baris['id_conten'];?> "  />
                               <input hidden name="id_sub" type="text" value="<?php echo $baris['id_sub_menu'];?> "  />
                               <button  data-toggle="tooltip" title="Hapus" id='hapus' name="hapus" type="submit" onclick="return confirm('Anda Yakin Akan Menghapus? Tindakan ini hanya akan menghapus isi konten dan tidak menghapus sub menu')" class="btn btn-danger btn-xs"> <i class="fa  fa-trash-o"></i></button></form>
                                             
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
	     
	 
	 $img = "SELECT * FROM content WHERE id_conten= '".$_POST['id']."'";
$hasil   = mysql_query($img);
$data    = mysql_fetch_array($hasil);
 $namaFile = $data['img_conten'];
 unlink('../upload/img_conten/'.$namaFile);
$q1 = mysql_query("delete from content where id_conten='".$_POST['id']."'");
$q2 = mysql_query("update sub_menu set sub_link='' where id_sub_menu ='".$_POST['id_sub']."'")
 or die(mysql_error());
 $query = ($q1.$q2);
if ($query) {
echo" <script>history.go(-1);</script>";
} else {
echo" <script> alert( 'Gagal Hapus..!');history.go(-1);</script>";
}
	 
}
                           
    ?>                       