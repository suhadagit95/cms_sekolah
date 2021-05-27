<div class="well">
<div class="container">
		
			<div class="col-md-8 w3l_services_footer_top_left">
               <?php
include "load/config.php";
$ambil_data = mysql_query("select * from content where judul_seo='$_GET[judul_seo]' ");
while ($hasil_data = mysql_fetch_array($ambil_data)){
?>
<h2><?php echo $hasil_data['judul'];?></h2>
<hr>

<br>

<div class="w3_agile_services_grid1">
					  <img src="upload/img_news/<?php echo $hasil_data['img_conten']; ?>" alt=" " height="350"/>
						</div>
					
<br />
<p><?php echo $hasil_data['isi'];?></p>
<?php }?>
           
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