<?php include_once('../load/cek-login.php');
include_once('../load/config.php');
?>
<header class="header">
            <a href="" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminPanel 
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->                        <!-- Notifications: style can be found in dropdown.less -->                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-user"></i>
                            <span><?php echo $_SESSION['fullname'] ?><i class="caret"></i></span>
                          </a>
                          <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                              <img src="../upload/img_profil/<?php echo $_SESSION['img_user'] ?>" class="img-circle" alt="User Image" />
                              <p>
                                <?php echo $_SESSION['fullname'] ?>- Sebagai <b><?php echo $_SESSION['level'] ?></b>
                                <small>Bergabung Pada <?php echo $_SESSION['tgl_daftar'] ?></small>
                              </p>
                            </li>
                            <!-- Menu Body -->                            <!-- Menu Footer-->
                            <li class="user-footer">
                              <div class="pull-left">
                                <?php echo $app=='profil'?'':'';?><a href="dasbord.php?admin=profil_saya" class="btn btn-default btn-flat">    Profile</a>
                              </div>
                              <div class="pull-right">
                                <a href="../load/logout.php" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                            </li>
                          </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>