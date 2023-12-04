<!DOCTYPE html>
<html lang="en">
<head>
    <title>Студия кухни "Мозаика"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(55290793, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/55290793" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
    
    <link rel="shortcut icon" href="http://мозаика62.рф/images/icons/favicon.jpg" type="image/x-icon" />
</head>
<body>
  
<div class="site-wrap">
    
	<div class="site-mobile-menu">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close mt-3">
				<span class="icon-close2 js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div> <!-- .site-mobile-menu -->

	<!-- Header -->
	<div class="site-navbar-wrap">
		<div class="site-navbar-top">
			<div class="container py-3">
			  <div class="row align-items-center">
					<div class="col-4">
						<!--
						<a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
						<a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
						<a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
						<a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
						-->
						<h2 class="m-0" style="color: white; font-weight: 300;">Студия кухни</h2>
					</div>
					<div class="col-8">
						<div class="d-flex ml-auto" style="font-size: 1.125rem;">
							<a href="#" class="d-flex align-items-center ml-auto mr-4" style="color: white;">
								<i class="fas fa-map-marker mr-2"></i>
								<span class="d-none d-md-inline-block">г.Рязань, ул. Чапаева, д. 56</span>
							</a>
							<a href="mailto:parus_2020@bk.ru" class="d-flex align-items-center mr-4" style="color: white;">
								<span class="icon-envelope mr-2"></span>
								<span class="d-none d-md-inline-block">mozaika62@bk.ru</span>
							</a>
							<a href="tel:+74912256704" class="d-flex align-items-center" style="color: white;">
								<span class="icon-phone mr-2"></span>
								<span class="d-none d-md-inline-block">777-098</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		 
		<div class="site-navbar">
			<div class="container py-1">
			  <div class="row align-items-center">
				<div class="col-4">
					<h1 class="mb-0 site-logo">
						<a href="index.php?page=main">
							<img src="images/icons/Logo-mozaika.jpg" style="max-width: 300px;">
						</a>
					</h1>
				</div>
				<div class="col-8">
				  <nav class="site-navigation text-right" role="navigation">
					<div class="container">
					  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
					  <ul class="site-menu js-clone-nav d-none d-xl-block" style="text-transform: uppercase;">
							<li <?php if (!$_GET['page'] or $_GET['page'] == 'main') { echo 'class="active"'; } ?>><a href="index.php?page=main">Главная</a></li>
							<li class="has-children <?php if ($_GET['page'] == 'kitchens' or $_GET['page'] == 'groups' or $_GET['page'] == 'prihojie' or $_GET['page'] == 'cupe') echo 'active'; ?>">
								<a>Каталог</a>
								<ul class="dropdown arrow-top">
									<li><a href="index.php?page=kitchens">Кухни</a></li>
									<li><a href="index.php?page=groups">Обеденные группы</a></li>
									<li><a href="index.php?page=prihojie">Прихожие</a></li>
									<li><a href="index.php?page=cupe">Шкафы-купе и гардеробные</a></li>
								</ul>
							</li>
							<li <?php if ($_GET['page'] == 'portfolio') echo 'class="active"'; ?>><a href="index.php?page=portfolio">Наши работы</a></li>
							<li <?php if ($_GET['page'] == 'actions') echo 'class="active"'; ?>><a href="index.php?page=actions">Акции</a></li>
							<li <?php if ($_GET['page'] == 'contacts') echo 'class="active"'; ?>><a href="index.php?page=contacts">Контакты</a></li>
						</ul>
						<ul class="site-menu js-clone-nav d-none d-xl-block text-center" style="text-transform: uppercase;">
							<li><button class="btn btn-primary3" data-toggle="modal" data-target="#exampleModal1">Вызов дизайнера</button></li>
							<li><button class="btn btn-primary3" data-toggle="modal" data-target="#exampleModal2">Замер помещения</button></li>
						</ul>
					</div>
				  </nav>
				</div>
			  </div>
			</div>
		</div>
	</div>
		
	<div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg); <?php if (!$_GET['page'] or $_GET['page'] == 'main') echo 'height: calc(100vh);'; ?>" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row align-items-center text-center justify-content-center" <?php if (!$_GET['page'] or $_GET['page'] == 'main') echo 'style="height: calc(100vh);"'; ?>>
				<div class="col-md-8 mb-5">
					<h1>Кухни<?php echo $record['h1']; ?></h1>
					<span class="sub-text">КУХОННЫЕ УГЛЫ, ШКАФЫ-КУПЕ, ПРИХОЖИЕ, ОБЕДЕННЫЕ ГРУППЫ И ДРУГАЯ МЕБЕЛЬ<?php echo $record['description']; ?></span>
				</div>
			</div>
		</div>
	</div>  
	<!-- /Header -->
	
	<div id="right-contacts">
		<div id="ico-right-contacts">
			<img src="images/icons/telephone.png" class="blink-image" style="margin: 15px;">
		</div>
		<div id="content-right-contacts">
			<p style="margin-top: 15px;">Консультация специалиста по телефону: <a href="tel:77-70-98" style="color: white; font-weight: 500;">777-098</a></p>
		</div>
		<div style="clear: both;"></div>
	</div>