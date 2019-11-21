
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>E-Health Cuy</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css" />
<link href="<?php echo base_url() ?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/numscroller-1.0.js"></script>

<!-- //js -->


<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

<!--start-date-piker-->
	<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
<!--/End-date-piker-->
	<script src="<?php echo base_url() ?>assets/js/responsiveslides.min.js"></script>
			<!--animate-->
<link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
	<body>

<!-- header -->
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+62 822-9796-6826</li>
				<li><a href="mailto:musa7076@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>musa7076@gmail.com</a></li>
			</ul>
		</div>

		<div class="header_right">
			<div class="login">
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Login</a></li>
					<!-- <li><a href="<?php echo base_url(). 'login/logout' ?>" data-toggle="modal" ><span class="glyphicon glyphicon-user"></span>Logout</a></li> -->
					<li>
						<div class="search-bar">
							<div class="search">		
								<a class="play-icon popup-with-zoom-anim" href="<?php echo base_url(). 'login/logout' ?>"><?php if ($this->session->userdata('akses') == '1') {
									echo "Admin";
								} else{
									echo "Selamat Datang";
								}?></a>
							</div>
							<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>
								<div id="small-dialog" class="mfp-hide">
									<div class="search-top">
										<div class="login_pop">
											<form action="#" method="post">
												<input type="submit" value="">
												<input type="text" name="Type something..." value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
											</form>
										</div>				
									</div>
									<!-- <script>
												$(document).ready(function() {
												$('.popup-with-zoom-anim').magnificPopup({
													type: 'inline',
													fixedContentPos: false,
													fixedBgPos: true,
													overflowY: 'auto',
													closeBtnInside: true,
													preloader: false,
													midClick: true,
													removalDelay: 300,
													mainClass: 'my-mfp-zoom-in'
												});
																												
												});
									</script>	 -->			
								</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->


</body>
<div class="header-bottom ">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a class="link link--nukun" href="<?php echo base_url() ?>#"><i></i>E-HE<span>A</span>LTH</a></h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
							 <?php if($this->session->userdata('akses')=='1');?>
							<li class="menu__item <?php echo ($active == 'home' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('#') ?>">Beranda</a></li>
							<li class="menu__item <?php  echo ($active == 'pasien' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url(). 'page/data_mahasiswa' ?>">Pasien</a></a></li>
							<li class="menu__item <?php echo ($active == 'gallery' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('gallery') ?>">Galeri</a></a></li>
							<li class="menu__item <?php echo ($active == 'contact' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('contact') ?>">Kontak</a></a></li>
							<li class="menu__item  <?php echo ($active == 'contact' ? 'menu__item--current' :'') ?>"><a href="#" onclick="kontk()">Pesan No Antrian</a></a></li>
					</nav> 
				</div>
			</nav>
		</div>
	</div>

<!-- banner -->
<div class="banner">

				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 1000,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
						function kontk(){

										$('html, body').animate({scrollTop : 700},200);
									}
				</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info">
								<h3>Kesehatan</h3>
								<p>Keadaan sejahtera dari badan, jiwa, dan sosial yang memungkinkan setiap orang hidup produktif secara sosial, dan ekonomis.Pemeliharaan kesehatan adalah upaya penaggulangan, dan pencegahan gangguan kesehatan yang memerlukan pemeriksaan, pengobatan dan/atau perawatan termasuk kehamilan, dan persalinan.Pendidikan kesehatan adalah proses membantu sesorang, dengan bertindak secara sendiri-sendiri ataupun secara kolektif, untuk membuat keputusan berdasarkan pengetahuan mengenai hal-hal yang memengaruhi kesehatan pribadinya, dan orang lain.</p>
								
							</div>
						</div>
					</div>
				</li> 
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info">
								<h3>Hindari Penyakit Kritis</h3>
								<p>
								Tahukah Anda bahwa penyakit kritis masih menjadi penyebab kematian utama di Indonesia? Menurut data World Health Organization (WHO) seperti dikutip Bisnis.com (Januari 2019), penyakit kritis yang umumnya tidak menular masih menjadi penyebab 73% kematian di Indonesia. Lebih lanjut riset yang dikeluarkan tahun 2018 oleh Kementerian Kesehatan juga menunjukkan bahwa jumlah penderita penyakit kronis seperti kanker, stroke, dan penyakit ginjal kronis senantiasa meningkat.</p>
								
								<!--<a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>-->
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner3">
						<div class="container">
							<div class="banner-info">
								<h3>Penerapan Gaya Hidup Sehat</h3>
								<p>Menerapkan gaya hidup sehat perlu disesuaikan dengan usia, jenis kelamin, tingkat aktivitas fisik, kondisi kesehatan, bahkan kebiasaan makan Anda. Hasilnya pun akan bervariasi, Anda tidak bisa menjalankan atau mengharapkan hasil perubahan gaya hidup yang sama dengan seseorang yang kondisi tubuh atau kesehatannya berbeda dengan Anda, misalnya mengikuti model atau aktor idola.</p>
								
							</div>
						</div>
					</div>
				</li> 
			<!-- 	<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info2 text-center">
								<h3>Providing Eye Care <span>Treatments & Surgeries For All Problems</span></h3>
								<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
								sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
								adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
								dolore magnam aliquam quaerat voluptatem.</p>
								<a href="#book" class="hvr-outline-out button2 scroll">Book an appointment</a>
							</div>
						</div>
					</div>
				</li>
			</ul> -->
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->
<!-- content -->
<div class="content">
	<div class="container">
		<div class="col-md-4 content_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
			<img class="img-responsive" src="<?php echo base_url() ?>assets/images/njir.jpg" alt=" " />
		</div>
		<div class="col-md-4 content_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<!-- <div class="welcome">
					<h3>Selamat Datang di E-Health</h3>
					<ul>
						<li><a>Pemeriksaan</a></li>
						<li><a>Diagnosis</a></li>
						<li><a>Anjir</a></li>
						<li><a>Lier</a></li>
						<li><a>naon dei nya?</a></li>
					</ul>
				</div> -->
		</div>
		<div id="book" class="col-md-4 content_middle wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.3s">
			<h3>Pesan No Antrian</h3>
			<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">

				
				<!-- <input type="text" name="nopas" value="" onfocus="this.value='';" onblur="if(this.value=='') {this.value='';}" required=""> -->

				<input type="hidden" name="kode" required="" value="<?= $kodeunik; ?>">
				<input type="text" name="nama" value="Nama" onfocus="this.value='';" onblur="if(this.value=='') {this.value='Name';}" required="">
				<input type="text" name="imel" value="Email" onfocus="this.value='';" onblur="if(this.value=='') {this.value='Email';}" required="">
				<input class="date" name="date" id="datepicker" type="text" value="19/10/2016" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '19/10/2016';}" required="">
				<select id="country" name="cbo" onchange="change_country(this.value)" class="frm-field required sect">
					<option value="Pilih Pengecekan">Pilih Pengecekan</option>
					<option value="Pemeriksaan Telinga">Pemeriksaan Telinga</option> 
					<option value="Pemeriksaan Hidung">Pemeriksaan Hidung</option>					
					<option value="Pemeriksaan Tenggorokan">Pemeriksaan Tenggorokan</option>
					<option value="Pemeriksaan Mata">Pemeriksaan Mata</option>											
				</select>
				<input type="submit" value="Kirim" name="btn_regist">
				
			</form>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<br>
<br>
<!-- //content -->
<!-- services -->
<!--<div class="services">
	<div class="container">
		<div class="col-md-4 services_left wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
			<h3>Our Best Services</h3>
			<p class="ser-para" >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
				sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
			<a href="<?php echo base_url() ?>assets/about.html" class="hvr-outline-out button2">See More About Us</a>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider4").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
			<div  class="callbacks_container">
				<ul class="rslides" id="slider4">
					<li>
						<div class="ser-bottom">
							<h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							sed quia consequuntur magni dolores eos qui </h5>
							<p>- Alia Smith</p>
						</div>
					</li>
					<li>
						<div class="ser-bottom">
							<h5>Voluptas sit aspernatur aut odit aut fugit,sed quia consequuntur magni dolores 
							eos qui ratione voluptatem sequi nesciunt</h5>
							<p>- Thompson</p>
						</div>
					</li>
					<li>
						<div class="ser-bottom">
							<h5>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
							sed quia consequuntur magni dolores eos qui </h5>
							<p>- Federic</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 services_right ">
			<div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
				<span class="glyphicon glyphicon-scissors" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.3s">
				<span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="list-left text-center no_marg wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
				<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
				<h4>Voluptatem</h4>
				<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
					sed quia consequuntur magni dolores eos qui</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>-->
<!-- //services -->
<!-- capabilities -->
<div class="capacity">
	<div class="container">
		<!-- <h3>Capabilities</h3> -->
		<div class="col-md-3 capabil_grid1 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1' data-delay='.5' data-increment="100"></div>
			
				<p>Pemeriksaan Telinga</p>	
			</div>
		</div>
		<div class="col-md-3 capabil_grid2 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3' data-delay='.5' data-increment="5">1700</div>
				<p>Pemeriksaan Hidung</p>	
			</div>
		</div>
		<div class="col-md-3 capabil_grid3 wow fadeInDownBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='5' data-delay='.5' data-increment="100">0021</div>				
				<p>Pemeriksaan Tenggorokan</p>
			</div>
		</div>
		<div class="col-md-3 capabil_grid4 wow fadeInUpBig animated animated text-center" data-wow-delay="0.4s">
			<div class="capil_text">
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='4' data-delay='.5' data-increment="1">2500</div>
				<p>Pemeriksaan Mata</p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //capabilities -->

<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									
									<div class="login-right">
										<h3>Silahkan masuk</h3>
										<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Kata Sandi :</h4>
												<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
											<!-- 	<a href="#">Forgot password?</a> -->
											</div>
											<!-- <div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div> -->
											<div class="sign-in">
												<input type="submit" value="MASUK" name="btn_login" >

											</div>
										</form>
									</div>
									
								<!-- <p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p> -->
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form action="#" method="post">
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" name="Type here" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" name="Password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >

											</div>
											
										</form>
									</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
				
			
<!-- //login -->


</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-3.1.1.min.js"></script>
<!-- contact -->
<div class="contact">
	<div class="container">
		
		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h3>Contact Us</h3>
			<div class="strip"></div>
			<ul class="con-icons">
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+62 822-9796-6826</li>
				<li><a href="mailto:musa7076@gmail.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>musa7076@gmail.com</a></li>
			</ul>
			<ul class="fb_icons">
				<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
				<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
			</ul>
			<!-- <h3>Newsletter Sign up</h3>
			<div class="strip"></div>
			<form action="#" method="post">
				<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
				<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
				<input type="submit" value="Submit">
			</form> -->
		</div>
		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h2>Informasi</h2>
			<div class="strip"></div>
			<p class="para">Website ini menyediakan pemesanan nomer antrian klinik online.</p>
			<p class="copy-right">© 2019 E-Health. All rights reserved | Design by <a>Barudak</a></p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
</body>
</html>