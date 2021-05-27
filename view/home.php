<div class="well">
<?php      
            include('view/slider.php');
                   
include_once('load/config.php');
?>
                   </div>
                   
         <!-- sambutan kepala sekolah -->  
                       <?php
										$kueri = mysql_query(" SELECT * FROM content left join sub_menu using(id_sub_menu) where nama_sub='Sambutan Kepsek'  " );
									
        while ($baris=mysql_fetch_array($kueri))
        {  
			
          
?>
                   <div class="container ">
		<div class="w3ls-heading">
				<h2 class="h-two">Sambutan Kepala Sekolah </h2>
				<p class="sub two">SMK Negeri 2 Mandau</p>
			</div>
			<div class="banner-bottom-agileits" id="about">
			
			<div class="col-md-4 w3l_banner_bottom_right">
				<img src="upload/img_conten/<?php echo $baris['img_conten']; ?>" alt=" " height="350" />
			</div>
			<div class="col-md-8 w3l_banner_bottom_left">
				<h3><?php echo $baris['judul']; ?> </h3>
				<p><?php echo substr($baris ['isi'],0,250); ?>... <a href="content-<?php echo $baris['judul_seo']; ?>.html">Lanjut baca</a></p>
			</div>
			
	</div>
		</div> 
        <?php }?>

	<hr>
		<div class="container">
			<div class="w3ls-heading">
				<h2 class="h-two">Berita Sekolah</h2>
				
			</div>
			<div class="w3ls_banner_bottom_grids">
             <?php
										$kueri = mysql_query(" SELECT * FROM berita where tampilkan='yes' order by id_berita desc limit 3 " );
									
        while ($baris2=mysql_fetch_array($kueri))
        {  
			
          
?>
			  <div class="col-md-4 agileits_services_grid alert alert-info">
					<h3><?php echo $baris2['judul']; ?></h3>
					<p><?php echo substr($baris2 ['isi'],0,100); ?>...</p>
					<div class="w3_agile_services_grid1">
					  <img src="upload/img_news/<?php echo $baris2['img_berita']; ?>" alt=" " height="150"/>
						<div class="w3_blur"></div>
					</div>
					<div class="w3layouts_more">
						<a href="berita-<?php echo $baris2['id_berita']; ?>-<?php echo $baris2['judul_seo']; ?>.html">Learn More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
                <?php }?>
               
			</div>
		</div>

	<!-- //services -->
<!-- banner-bottom -->
	