<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>

<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Posting Berita
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Info</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content connectedSortable">
                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar Posting Berita</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-footer">
                                          <a href="dasbord.php?admin=berita"> <button class="btn btn-warning">Entri Baru</button></a>
                                    </div>
                           
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                              <th>Judul</th>
                                                <th>Penulis</th>
                                                <th>Tanggal</th>
                                                <th>Tampilkan</th>
                                             <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										$kueri = mysql_query(" SELECT * FROM berita   " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   $potongkalimat = substr($baris['isi'], 0, 200);
			
          
?>
									
                                            <tr>
                                              <td><?php echo substr($baris ['judul'],0,100);?>
											 </td>
                                                <td><?php echo $baris['penulis']; ?></td>
                                                <td><?php echo $baris['tgl']; ?></td>
                                                <td><?php echo $baris['tampilkan']; ?></td>
                                            <td><img src="../upload/img_news/<?php echo $baris['img_berita']; ?>" height="35" /></td>
                                                <td>
                                                                  
                       <a href="dasbord.php?admin=edit_berita&id=<?php echo $baris['id_berita'];?> ">   <button  class="btn bg-green btn-xs" data-toggle="tooltip" title="Edit " ><i class="fa  fa-pencil-square-o"></i> </button>
                    
                    </a> 
                                      
                                           <form action="" method="post"> 
                               <input hidden name="id" type="text" value="<?php echo $baris['id_berita'];?> "  />
                               <button  data-toggle="tooltip" title="Hapus" id='hapus' name="hapus" type="submit" onclick="return confirm('Anda Yakin Akan Menghapus')" class="btn btn-danger btn-xs"> <i class="fa  fa-trash-o"></i></button></form>
                                             
                                              </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                              <th>Judul</th>
                                                <th>Penulis</th>
                                                <th>Tanggal</th>
                                                <th>Tampilkan</th>
                                           <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
</div>

<!-- /.box-body -->
                            </div>

                </section><!-- /.content -->
            </aside>

    
<?php
if( isset( $_POST['hapus'] ) ){
	     
	 
	 $img = "SELECT * FROM berita WHERE id_berita= '".$_POST['id']."'";
$hasil   = mysql_query($img);
$data    = mysql_fetch_array($hasil);
 $namaFile = $data['img_berita'];
 unlink('../upload/img_news/'.$namaFile);
$query = mysql_query("delete from berita where id_berita='".$_POST['id']."'") or die(mysql_error());
if ($query) {
echo" <script>history.go(-1);</script>";
} else {
echo" <script> alert( 'Gagal Hapus..!');history.go(-1);</script>";
}
	 
}
                           
    ?>                       