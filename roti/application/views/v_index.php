<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bread Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/user/css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/user/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url()?>asse/user/css/owl.theme.default.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/user/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url()?>asset/user/css/style.css">
	
	<link rel="stylesheet" href="<?php echo base_url()?>asset/user/css/scrool.css">
	
	<link rel="stylesheet" href="<?php echo base_url()?>asset/user/app/daftar.php">



</head>

<body>
<div class="backTop"><i class="fa fa-angle-up"></i>
</div>

<div id="page-wrap">


	

	<div id="fh5co-hero-wrapper">
		<nav class="container navbar navbar-expand-lg main-navbar-nav navbar-light">
			<a class="navbar-brand" href="">BS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-items-center ml-auto mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"  onclick="$('#fh5co-features2').goTo();return false;">Layanan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"  onclick="$('#galery').goTo();return false;">Galeri</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="$('#fh5co-features').goTo();return false;">Produk</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="#" onclick="$('#fh5co-reviews').goTo();return false;">Profil</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"  onclick="$('#fh5co-download').goTo();return false;">Kontak</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" target="_blank" href="<?php echo base_url()?>index.php/login">Login</a>
					</li>
				</ul>
				<!-- <div class="social-icons-header">
					<a href="#" target='blank'><i class="fab fa-facebook-f"></i></a>
					<a href="#" target='blank'><i class="fab fa-instagram"></i></a>
					<a href="#" target='blank'><i class="fab fa-twitter"></i></a>
				</div> -->
			</div>
		</nav>

		<div class="container fh5co-hero-inner">
			<h1 class="animated fadeIn wow" data-wow-delay="0.4s">Bread Shop</h1>
			<p class="animated fadeIn wow" data-wow-delay="0.67s">Bread Shop merupakan perusahaan kelompok teknopreneurship yang menjual aneka roti kering dan basah
				yang sudah mengantongi sertifikat sni, halal MUI, dan BPOM sehingga mampu bersaing di pasar.</p>
			<img class="fh5co-hero-smartphone animated fadeInRight wow" data-wow-delay="1s" 
			src="<?php echo base_url()?>asset/user/img/dep.png" alt="Smartphone">
		</div>


	</div> <!-- first section wrapper -->


	

	<div class="fh5co-advantages-outer">

		<div class="container">

			<h1 class="second-title"><span class="span-perfect">Sertifikat</span> <span class="span-features">Perusahaan</span></h1>
			<small>PT. Teknopreneurship</small>


			<div class="row fh5co-advantages-grid-columns wow animated fadeIn" data-wow-delay="0.36s">
			<?php foreach ($sertifikat as $s): ?>

				<div class="col-sm-4">
					<img class="grid-image" src="<?php echo base_url()?><?php echo $s->logo?>" alt="Icon-1">
					<h1 class="grid-title"><?php echo $s->judul?></h1>
					<p class="grid-desc"><?php echo $s->keterangan?></p>					
				</div>
			<?php endforeach ?>

			</div>

		</div>

	</div>

	
	<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
	<div id="fh5co-features2" class="fh5co-features-outer" style="margin-bottom: 50px;">
		<div class="container">

			<div class="row fh5co-features-grid-columns">

				<div class="col-sm-6 in-order-2 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
					<h1>LAYANAN KONSUMEN</h1>
						<?php echo $layanan->isi_layanan_konsumen ?>
				</div>

				<div class="col-sm-6 in-order-3 sm-6-content wow animated fadeInLeft" data-wow-delay="0.22s">
					<h1>PEMESANAN</h1>
					<?php echo $layanan->isi_pemesanan?>
					</br></br>
					<button><a class="btn btn-primary" target="_blank" href="<?php echo base_url()?>index.php/login">Pesan</a></button>
					
						<!--<a title="Hubungi Kami via WhatsApp" rel="nofollow" 
						href="https://api.whatsapp.com/send?phone=622388388794&text=Saya ingin bertanya sesuatu">
						<b>Hubungi Kami via WhatsApp</b></a>-->
				</div>

				
			</div> <!-- row -->


		</div>
	</div>


	
	
	<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
	<div class="fh5co-slider-outer wow fadeIn" data-wow-delay="0.36s">
		<div id="galery">
		<h1>Galeri</h1>
		<small>Bread Shop</small>
		<div class="container fh5co-slider-inner">

			<div class="owl-carousel owl-theme">
			<?php foreach ($galeri as $g): ?>

				<div class="item"><img src="<?php echo base_url()?><?php echo $g->foto?>" alt=""></div>
				

            <?php endforeach ?>
			</div>

		</div>
	</div>
	</div>


	

	<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
	<div id="fh5co-features" class="fh5co-features-outer">
		<div class="container">
			<div class="row fh5co-features-grid-columns">
			<?php foreach ($produk as $p): ?>

				<div class="col-sm-6 in-order-1 wow animated fadeInLeft" data-wow-delay="0.22s">
					<div class="col-sm-image-container">
						<img class="img-float-left" src="<?php echo base_url()?><?php echo $p->gambar?>"alt="satutu">
					</div>
				</div>
				 
				<div class="col-sm-6 in-order-2 sm-6-content wow animated fadeInRight" data-wow-delay="0.22s">
				<h1><?php echo $p->nama_produk?></h1>
					<p><?php echo $p->keterangan?></p>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>

	
	<div class="curved-bg-div wow animated fadeIn" data-wow-delay="0.15s"></div>
	<div id="fh5co-reviews" class="fh5co-reviews-outer">
		<h1>Profil Perusahaan</h1>
		<small>PT. Teknopreneurship </small>
		
		<div class="container fh5co-reviews-inner">
			<div class="row justify-content-center">
				<div class="col-sm-5 wow fadeIn animated" data-wow-delay="0.67s">
					<p class="testimonial-desc">
					<?php echo $profil[0]->isi_teks_profil?>

					<!--Melihat kebutuhan akan air bersih terutama air minum yang besar di masyarakat, 
					khususnya masyarakat Kabupaten Kampar dan Kota Pekanbaru di Provinsi Riau maka tercetus ide mendirikan 
					pabrik Air Minum Dalam Kemasan yang praktis dan dapat langsung dikonsumsi untuk mencukupi kebutuhan itu. 
					Kondisi pasar di Kampar saat ini untuk pasar air minum belum begitu banyak pesaing. Berdasarkan kebutuhan 
					tersebut dan untuk mengisi persaingan terhadap Air Minum Dalam Kemasan maka kami dirikan PT. Kampar Sejahtera 
					Abadi. --></p>
				</div>
				
				<div class="col-sm-5 testimonial-2 wow fadeIn animated" data-wow-delay="0.67s">
					<p class="testimonial-desc">
					<?php echo $profil[0]->isi_teks_visi?>

					<!--<ol>Visi : </br>
					Menjadi penyedia Air Minum Dalam Kemasan yang bersih, menyegarkan, berkualitas dan sesuai harapan pelanggan</br>
					Misi :</br>
					<li>Mampu memenuhi kebutuhan pasar di Kabupaten Kampar dan Kota Pekanbaru Sekitarnya</li>
					<li>Memberikan kualitas air yang baik dan memenuhi syarat SNI Air Mineral</li>
					<li>Selalu mencoba yang terbaik untuk memenuhi harapan pelanggan</li>
					<li>Menjalin hubungan baik dengan pihak distributor</li>
					</ol>-->
					</p>
					
				</div>
			</div>

		</div>
	</div>
	

	

	<div id="fh5co-download" class="fh5co-bottom-outer">
		<div class="overlay">
			<div class="container fh5co-bottom-inner">
				<div class="row">
					<div class="col-sm-6">
						<p><i class="fas fa-phone"></i> <?php echo $kontak[0]->no_hp?><!--0895-6160-25942 --><br/>
							<i class="fas fa-map-marker-alt"></i> <?php echo $kontak[0]->alamat?><!--Alamat 	:
							Jl. Kubang Raya KM 5,5 Desa Kualu, Kecamatan Tambang, Kabupaten Kampar, 
							<br/>Provinsi Riau – 28462--></p>
					</div>
					<div class="col-sm-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.71216542872!2d101.36961751426786!3d0.41795746397817185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a7bb85c62da9%3A0xff342e944b1e8bbe!2sJl.%20Kubang%20Raya%2C%20Tarai%20Bangun%2C%20Kec.%20Tambang%2C%20Kabupaten%20Kampar%2C%20Riau%2028293!5e0!3m2!1sid!2sid!4v1571194722042!5m2!1sid!2sid" width="500" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	

	<footer class="footer-outer">
		<div class="container footer-inner">

			<div class="footer-three-grid wow fadeIn animated" data-wow-delay="0.66s">

				
				<div class="column-3-3">
					<div class="social-icons-footer">
						<a href="https://www.facebook.com/murti"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.instagram.com/murti099"><i class="fab fa-instagram"></i></a>
						<a href="https://www.twitter.com/murtianggraeni1"><i class="fab fa-twitter"></i></a>
					</div>
				</div>
			</div>


			<p class="copyright">&copy; 2021 FahrulAlHidayat.</p>

		</div

	</footer>

</div> <!-- main page wrapper -->
	
	<script src="<?php echo base_url()?>asset/user/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>asset/user/js/bootstrap.js"></script>
	<script src="<?php echo base_url()?>asset/user/js/owl.carousel.js"></script>
	<script src="<?php echo base_url()?>asset/user/js/wow.min.js"></script>
	<script src="<?php echo base_url()?>asset/user/js/main.js"></script>
	
<script type="text/javascript">
    var $backToTop = $(".backTop");
    $backToTop.hide();
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 100) {
        $backToTop.fadeIn();
      } else {
        $backToTop.fadeOut();
      }
    });

    $backToTop.on('click', function(e) {
      $("html, body").animate({scrollTop: 0}, 500);
    });
</script>
</body>
</html>