<?php 
//$_SERVER['HTTP_HOST'] = agar hostname menyesuaikan sendiri
//_static_menu = nama folder project anda
$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/SMKN2Mandau/';

isset ($_GET['view']) ? $app = $_GET['view'] : $app = 'home';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SMK Negeri 2 Mandau</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SMK N 2 Mandau, Mandau, SMK ,SMK Negeri" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="view/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="view/css/style.css" rel="stylesheet" type="text/css" media="all" />



<!-- js -->
<script type="text/javascript" src="view/js/jquery-2.1.4.min.js"></script>
<script src="view/js/slider.js"></script>
<!-- //js -->





<link href="admin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- font-awesome icons -->
<link href="view/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link rel="stylesheet" href="view/css/flexslider.css" type="text/css" media="screen" property="" />
<link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->	
<div class="header-w3layoutstop ">
		<div class="container">  
			<div class="hdr-w3left navbar-left">
				<p><span class="fa fa-home"></span><a href="home.html"> Home </a>&nbsp;
				<span class="fa fa-users"></span><a href="siswa.html"> Siswa </a>&nbsp;
				<span class="fa  fa-stack-overflow"></span><a href="ptk.html"> Guru</a>
				</p> 
			</div>
			<div class="search-grid">
				<form action="#" method="post">
					<input type="text" placeholder="Search" class="big-dog" name="Subscribe" required="">
					<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>	
			
		</div>
	</div>
	
	
    
<!-- navigation -->
<div class="nav-links">	
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="home.html"><h3>SMKN 2 Mandau</h3></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav link-effect">
			<?php
					include_once('load/config.php');
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
									echo '<li><a href="'.$dataSubmenu['sub_link'].'">'.$dataSubmenu['nama_sub'].'</a></li>';
								}
							echo '
								</ul>
							</li>
							';
						}
					}
					?>
					
					<li><a href="statis.html">Berita</a></li>
                    <li><a href="gallery.html">gallery</a></li>
					<li><a href="kontak.html">Kontak</a></li>
				</ul>
				
			</div>
		</div>
	</nav>
</div>

<!-- /navigation -->
		

<!-- home -->
<?php 
if(file_exists('view/'.$app.'.php')){
	include ('view/'.$app.'.php'); 
}else{
	 echo" <script> alert( 'Conten Tidak Tersedia');history.go(-1);</script>";
	
	
	/*echo '<div class="well">Error : Aplikasi tidak menemukan adanya file <b>'.$app.'.php </b> pada direktori <b>admin/..</b></div>'; */
} 
?>

<!-- Footer -->
<div class="footer w3ls">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 ftr-grid fg1">
					<h3>Link</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adip magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
				<div class="col-md-4 ftr-grid fg2 mid-gd">
					<h3>Kontak</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>+1 (512) 154 8176</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="mailto:info@example.com">info@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>sosial Media</h3>
					<div class="right-w3l">
						<ul class="top-links">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
					<div class="right-w3-2">
						<ul class="text-w3">
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Google</a></li>
						</ul>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
</div>
 <div class="copyrights">
	<p>&copy; 2017 SMK N 2 Mandau </p>
</div>
	

<!-- Footer -->	

	<!-- start-smoth-scrolling -->
	
<!-- js -->
		<!--//pop-up-box -->
<script type="text/javascript" src="view/js/jquery-2.1.4.min.js"></script>

<!-- //js -->
<script type="text/javascript" src="view/js/move-top.js"></script>
<script type="text/javascript" src="view/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="view/js/bootstrap.js"></script>
</script>
              <!-- DATA TABES SCRIPT -->
        <script src="admin/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
         <script src="admin/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>  
<script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script> 
</body>
</html>