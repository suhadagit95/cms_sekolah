<div class="well">
<div class="container">
		
			<div class="col-md-8 w3l_services_footer_top_left">
            <form action="" method="post" class="searchform" role="search">
            <div class="input-group">
            
                               
						<input type="text" class="form-control" placeholder="Search for..." name="tcari" id="">
						<span class="input-group-btn">
							<button class="btn btn-default"  name="button" id="button" value="Cari" type="submit">Go!</button>
						</span>
                        
                  
					</div>
                     <?php 
include_once('load/config.php');
					$per_hal = 5; // menampilkan 3 berita per halaman
					$jumlah_record = mysql_query ("SELECT COUNT(*) FROM berita");
					$jum = mysql_result($jumlah_record, 0);
					$halaman = ceil($jum/$per_hal);
					$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
					$start = ($page - 1) * $per_hal;
					
					if(isset($_POST['button'])){
  $kueri=mysql_query("select * from berita  where isi  Like '%".$_POST['tcari']."%' or judul Like '%".$_POST['tcari']."%' ");
  }else{
			$kueri = mysql_query("select * from berita where tampilkan='yes' ORDER BY tgl desc LIMIT $start, $per_hal");}
			
			$i = 2;
			
			while ($baris = mysql_fetch_array($kueri)) {
          
?>
 <div class="col-md-12 agileits_services_grid alert alert-warning">
 <div class="col-md-3 w3_agile_services_grid1_left">
 
				<img src="upload/img_news/<?php echo $baris['img_berita']; ?>" height="100" />
			</div>
 
 <div class="col-md-9 w3l_banner_bottom_right">
			<a href="berita-<?php echo $baris['id_berita']; ?>-<?php echo $baris['judul_seo']; ?>.html">	<h3><?php echo $baris['judul']; ?> </h3></a>
                <hr>   
                <span><i class="fa fa-calendar"></i><b> On: <a><?php echo $baris['tgl'];?></a> &nbsp;&nbsp;</b><i class="fa fa-user"></i><b> By: <a><?php echo $baris['penulis'];?></a></b></span>
				<p><?php echo substr($baris ['isi'],0,150); ?>... <a href="berita-<?php echo $baris['id_berita']; ?>-<?php echo $baris['judul_seo']; ?>.html">Lanjut baca</a></p>
			</div>
 </div>

          
         <?php
}
?>




  <ul class="pagination">
                <?php 
				$i++;
			
			?>
             
            <li>
            <?php
				for($x=1;$x<=$halaman;$x++)
				{
			?>
			<a href="index.php?view=statis&page=<?php echo $x ?>"><?php echo $x ?></a>
           
			<?php
				}
			?></li>
   </ul>
            </form>   
               </div> 
                
                <div class="col-md-4 w3l_services_footer_top_right alert alert-info">
                <h3 class="bars">Berita Sekolah</h3>
			<ul class="list-group w3-agile">
            <?php
										$kueri = mysql_query(" SELECT * FROM berita where tampilkan='yes' order by id_berita desc limit 7 " );
									
        while ($baris2=mysql_fetch_array($kueri))
        {  
			
          
?>
			  <li class="list-group-item"><i class="fa fa-calendar"></i> <?php echo $baris2['tgl']; ?> <a href="berita-<?php echo $baris2['id_berita']; ?>-<?php echo $baris2['judul_seo']; ?>.html"><?php echo $baris2['judul']; ?></a></li>
              <?php }?>
			  <li class="list-group-item"><a href="statis.html">Berita lainnya</a></li>
			</ul>
            
            </div>
            
            <div class="col-md-4 w3l_services_footer_top_right alert alert-success">
                <h3 class="bars">Link Cepat</h3>
                <ul class="list-group w3-agile ">
                <?php
										$kueri = mysql_query(" SELECT * FROM sub_menu " );
									
        while ($baris=mysql_fetch_array($kueri))
        {  
			
          
?>
			  <li class="list-group-item "><i class=" fa fa-arrow-right"></i> <a href="<?php echo $baris['sub_link']; ?>"> <b><?php echo $baris['nama_sub']; ?></b></a></li>
			  <?php } ?>

			</ul>
                 
			
				            </div>
                </div>
</div>