
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
							<li class="menu__item <?php echo ($active == 'pasien' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url(). 'page/data_mahasiswa' ?>">Pasien</a></a></li>
							<li class="menu__item <?php echo ($active == 'gallery' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('gallery') ?>">Galeri</a></a></li>
							<li class="menu__item <?php echo ($active == 'contact' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('contact') ?>">Kontak</a></a></li>
						</ul>
					</nav> 
				</div>
			</nav>
		</div>
	</div>



<!-- gallery -->
<div class="gallery">
	<div class="container">
		<h3 class="tittle">Galeri</h3>
				<div class="gallery-grids">
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/g1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Cek Golongan Darah</h4>
										<span class="separator"></span>
										<p>Dalam dunia medis, sistem penggolongan darah yang dikenal adalah sistem ABO (golongan darah A,B,AB,danO), serta sistem penggolongan darah berdasarkan Rhesus (Rh positif dan Rh negatif). Umumnya, golongan darah Anda juga ditentukan oleh gen yang Anda warisi dari orang tua.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/g2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4> Vaksinasi</h4>
										<span class="separator"></span>
										<p>Pada keadaan tertentu, orang dewasa membutuhkan suntik vaksin ulangan tiap beberapa periode. Dengan menerima vaksin, Anda tidak saja melindungi diri sendiri dari serangan penyakit tapi juga ikut mencegah penyebarannya.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<!-- <div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/c1.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/c1.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/c2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/c2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/c3.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/c3.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Infirmary</h4>
										<span class="separator"></span>
										<p>Sit accusamus, vel blanditiis iure minima ipsa.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/c4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/c4.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Sakit Gigi</h4>
										<span class="separator"></span>
										<p>Sakit gigi adalah kondisi ketika muncul rasa nyeri di dalam atau di sekitar gigi dan rahang. Tingkat keparahan nyeri tersebut bisa bervariasi, mulai dari ringan hingga berat. Sakit gigi bisa terasa secara terus-menerus, bisa juga hilang-timbul.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div> -->
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/c2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Pemeriksaan Laboratorium</h4>
										<span class="separator"></span>
										<p>Pemeriksaan Laboratorium merupakan pemeriksaan untuk menunjang diagnosis penyakit, untuk mendukung atau menyingkirkan diagnosis lainnya. Pemeriksaan laboratorium merupakan penelitian perubahan yang timbul pada penyakit dalam hal susunan kimia dan mekanisme biokimia tubuh (perubahan ini bisa penyebab atau akibat).</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
						<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/g7.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Merawat Gigi</h4>
										<span class="separator"></span>
										<p>Biasakanlah untuk menjaga kebersihan gigi dengan rutin menggosoknya tiap hari. Tapi ketahuilah bahwa menggosok gigi secara teratur belum tentu efektif sebagai cara merawat gigi jika tekniknya kurang tepat.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>

						<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/g7b.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Cek Tekanan Darah</h4>
										<span class="separator"></span>
										<p>Badan Kesehatan Dunia (WHO) menyatakan bahwa tekanan darah tinggi adalah penyebab kematian utama dari berbagai kasus penyakit jantung yang terjadi. Hipertensi sering disebut sebagai silent killer alias pembunuh diam-diam, karena biasanya tidak menunjukkan gejala apa-apa, tapi bisa berujung fatal.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="<?php echo base_url() ?>assets/images/g8.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="<?php echo base_url() ?>assets/images/imun.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Pentingnya Imunisasi</h4>
										<span class="separator"></span>
										<p>Imunisasi merupakan upaya memperoleh kekebalan tubuh secara buatan melalui pemberian kuman hidup yang dilemahkan atau bagian tubuh dari kuman untuk membentuk antibodi.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //gallery -->
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
										<h3>Sign in with your account</h3>
										<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" name="email" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" name="btn_login" >

											</div>
										</form>
									</div>
									
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
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

