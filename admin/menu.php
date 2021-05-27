<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../upload/img_profil/<?php echo $_SESSION['img_user'] ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello,  <?php echo $_SESSION['fullname'] ?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="dasbord.php?admin=home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a></li>
                        <?php 	
					if ($_SESSION['level'] == 'admin') {
					?>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Menu Header</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="dasbord.php?admin=costum_menu_header"><i class="fa fa-angle-double-right"></i> Costum Menu Header</a></li>
                                <li><a href="dasbord.php?admin=conten_menu"><i class="fa fa-angle-double-right"></i> Conten Menu Header</a></li>
                                
                            </ul>
                        </li>
                        <?php } ?>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span>Directori</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="dasbord.php?admin=guru"><i class="fa fa-angle-double-right"></i> Data PTK</a></li>
                                <li><a href="dasbord.php?admin=siswa"><i class="fa fa-angle-double-right"></i> Data Siswa</a></li>
                                
                            </ul>
                        </li>
                         <li >
                            <a href="dasbord.php?admin=info">
                                <i class="fa fa-edit"></i>
                        <span>Berita</span></a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-picture-o"></i>
                                <span>Image</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="dasbord.php?admin=gallery"><i class="fa fa-angle-double-right"></i> Gallery</a></li>
                                <li><a href="dasbord.php?admin=slider"><i class="fa fa-angle-double-right"></i> Slider</a></li>
                                
                            </ul>
                        </li>
                            <?php 	
					if ($_SESSION['level'] == 'admin') {
					?>                   
                        <li > <a href="dasbord.php?admin=master_setting"><i class="fa  fa-gears"></i>
                        <span>User Setting</span></a></li>
                        <?php } ?>
                       
                        
                        
                        <li ><a href="../load/logout.php"><i class="fa fa-mail-reply"></i>
                        <span>Sign out</span></a></li>
                    </ul>
                    
                </section>
                <!-- /.sidebar -->
            </aside>