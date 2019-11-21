
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
							<li class="menu__item <?php echo ($active == 'home' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('v_home2') ?>">Beranda</a></li>
							<li class="menu__item <?php echo ($active == 'pasien' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url(). 'page/data_mahasiswa' ?>">Pasien</a></a></li>
							<li class="menu__item <?php echo ($active == 'gallery' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('gallery') ?>">Galeri</a></a></li>
							<li class="menu__item <?php echo ($active == 'contact' ? 'menu__item--current' :'') ?>"><a href="<?php echo base_url('contact') ?>">Kontak</a></a></li>
					</nav> 
					</nav> 
				</div>
			</nav>
		</div>
	</div>

<!-- banner -->

<!-- capabilities -->
<div class="capacity">
	<div class="container">
		<link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
	<h1>Data <small>Barang! </small></h1>
      <table class="table table-bordered table-striped" id="mydata">
            <thead>
                  <tr>
                        <td>No Pasien</td>
                        <td>Nama Pasien</td>
                        <td>Email</td>
                        <td>Tanggal</td>
                        <td>Depart</td>
                  </tr>
            </thead>
            <tbody>
                  <?php 
                  	foreach($data->result_array() as $i):
                              $p_no=$i['no_pas'];
                              $p_nama=$i['nama'];
                              $p_email=$i['email'];
                              $p_tanggal=$i['tanggal'];
                              $p_depart=$i['depart'];                	
                  ?>
                  <tr>
                        <td><?php echo $p_no;?> </td>
                        <td><?php echo $p_nama;?> </td>
                        <td><?php echo $p_email;?> </td>
                        <td><?php echo $p_tanggal;?> </td>
                        <td><?php echo $p_depart;?> </td>
                  </tr>
                  <?php endforeach;?>
            </tbody>
      </table>
   
</div>
<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"> </script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"> </script>
<script>

      $(document).ready(function(){

            $('#mydata').DataTable();

      });

</script>
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

