
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>E-Heath Cuy</title>
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
                              <!-- <li><a href="<?php echo base_url(). 'login/logout' ?>" data-toggle="modal" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout</a></li> -->
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
                                                     <!--  <script>
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
                                                      </script>       -->               
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
                              </nav> 
                        </div>
                  </nav>
            </div>
      </div>






<head>

      <meta charset="utf-8">
      <title>Data Barang</title>
     
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">

</head>

<body>

 

<div class="container">

      <h1>Data <small>Pasien </small></h1>
      
      <table class="table table-bordered table-striped" id="mydata">
            <thead>
                  <tr>
                        <td>No Pasien</td>
                        <td>Nama Pasien</td>
                        <td>Email</td>
                        <td>Tanggal</td>
                        <td>Pengecekan</td>
                        <td>Opsi</td>
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
            
                        <td> <?php echo anchor('crud/hapus/'.$p_no,'Hapus'); ?></td>
                        
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

</body>

</html>