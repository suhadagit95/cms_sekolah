
        <!-- animate css -->
        <link rel="stylesheet" href="view/css/animate.css">
        <!-- Hero area slider css-->
      
        <!-- template main css file -->
        <link rel="stylesheet" href="view/css/main.css">
       
        
        
        
        
         <div class="well">  
         <div class="w3ls-heading">
				<h2 class="h-two">Gallery Foto</h2>
				<p class="sub two">SMK N 2 Mandau</p>
			</div>
            </div> 
          <!-- services -->

		<div class="container">
			
			<div class="w3ls_banner_bottom_grids">
				
				
                        <?php   
				 include_once('load/config.php');
				  $kueri = mysql_query("select * from galeri  ORDER BY id_galeri desc  "); 
							 while ($baris = mysql_fetch_array($kueri))
							 {
							 
							 ?>
                        <div class="col-sm-3">
                         <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="upload/img_gallery/<?php echo $baris ['img_galeri'];?>"  height="200"  >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" title="<?php echo $baris ['judul'];?>" href="upload/img_gallery/<?php echo $baris ['img_galeri'];?>"><span><?php echo $baris ['judul'];?></span></a>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </figure>
                        
                  </div>
  
                  
<?php } ?>


</div>
</div>
<!-- //services -->	

<hr>
<!-- template main js -->
    