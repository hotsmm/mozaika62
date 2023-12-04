<?php
	session_start();
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$_SESSION['display'] = "block";
	} else { $_SESSION['display'] = "none"; }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Студия кухни "Мозаика"</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/theme.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/quiz.css">
	<script src="https://kit.fontawesome.com/064ae6a0a2.js"></script>
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
    
    <link rel="shortcut icon" href="https://мозаика62.рф/images/icons/favicon.jpg" type="image/x-icon" />
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
						<div class="col-3">
							<!--
							<a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
							<a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
							<a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
							<a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
							-->
							<h2 class="m-0" style="color: white; font-weight: 300;">Магазин мебели</h2>
						</div>
						<div class="col-9">
							<div class="d-flex ml-auto" style="font-size: 1rem;">
								<a href="#" class="d-flex align-items-center ml-auto mr-4" style="color: white;">
									<i class="fas fa-map-marker mr-2"></i>
									<span class="d-none d-md-inline-block">г.Рязань, ул.Чапаева, д.56</span>
								</a>
								<a href="mailto:parus_2020@bk.ru" class="d-flex align-items-center mr-4" style="color: white;">
									<span class="icon-envelope mr-2"></span>
									<span class="d-none d-md-inline-block">mozaika62@bk.ru</span>
								</a>
								<a href="tel:89511014610" class="d-flex align-items-center mr-4" style="color: white;">
									<i class="fas fa-mobile-alt mr-2"></i>
									<span class="d-none d-md-inline-block">8 (951) 101-46-10</span>
								</a>
								<a href="tel:84912527890" class="d-flex align-items-center" style="color: white;">
									<span class="icon-phone mr-2"></span>
									<span class="d-none d-md-inline-block">8 (4912) 52-78-90</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="site-navbar">
				<div class="container py-1">
					<div class="row align-items-center">
						<div class="col-4 col-md-3">
							<h1 class="mb-0 site-logo text-center">
								<a href="https://мозаика62.рф">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/logo-white.png">
								</a>
							</h1>
						</div>
						<div class="col-8 col-md-9">
							<nav class="site-navigation text-right" role="navigation">
								<div class="container">
									<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
									<ul class="site-menu js-clone-nav d-none d-xl-block" style="text-transform: uppercase;">
										<li><a href="/главная/">Главная</a></li>
										<li class="has-children">
											<a>Каталог</a>
											<ul class="dropdown arrow-top">
												<li><a href="/product-category/кухни/">Кухни</a></li>
												<li><a href="/product-category/обеденные-группы/">Обеденные группы</a></li>
												<li><a href="/product-category/прихожие/">Прихожие</a></li>
												<li><a href="/product-category/шкафы/">Шкафы</a></li>
											</ul>
										</li>
										<li><a href="/наши-работы/">Наши работы</a></li>
										<li><a href="/акции/">Акции</a></li>
										<li><a href="/контакты/">Контакты</a></li>
									</ul>
									<ul class="site-menu js-clone-nav d-none d-xl-block text-center" style="text-transform: uppercase;">
										<li><button class="btn btn-primary3" data-toggle="modal" data-target="#exampleModal1">Консультация дизайнера</button></li>
										<li><button class="btn btn-primary3" data-toggle="modal" data-target="#exampleModal2">Замер помещения</button></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div><!-- site-navbar -->
		</div>

			
		<div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/home-bg5.jpg); <?php // if (!$_GET['page'] or $_GET['page'] == 'main') echo 'height: calc(100vh);'; ?>" data-aos="fade" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row align-items-center text-md-center justify-content-center header-padding-top">
					<div class="col-md-9">
						<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
							<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
						<?php endif; ?>
						<h2><?php echo get_post_meta(get_the_ID(), 'Subtitle', true); ?></h2>
						<h2>
							<?php
								if ( is_archive() ) {
									echo 'Готовые и на заказ по Вашим размерам';
								}
							?>
						</h2>
						<span class="sub-text"><?php echo get_post_meta(get_the_ID(), 'Description', true); ?></span>
						<a href="#quiz-sp" type="button" class="btn btn-lg btn-primary2 mt-3">Рассчитать стоимость</a>
					</div>
				</div>
			</div>
		</div>  
		<!-- /Header -->