<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<aside class="right-side">                
                <!-- Content Header (Page header) -->
                
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="dasbord.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        
                        <li class="active">Home</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                
                
                 <?php
										$kueri = mysql_query(" SELECT count(id_berita) as jum FROM berita where tampilkan='yes'  " );
									
        while ($baris=mysql_fetch_array($kueri))
        {   
          
?>
                 <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                       <?php echo $baris ['jum']; ?> 
                                    </h3>
                                    <p>
                                        Berita yang telah di upload
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                       
                        <?php }?>

                </section><!-- /.content -->
            </aside>