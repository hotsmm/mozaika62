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
							<a href="tel:89511014610" class="d-flex align-items-center" style="color: white;">
								<span class="icon-phone mr-2"></span>
								<span class="d-none d-md-inline-block">8 (951) 101-46-10</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'site-navbar.php'; ?>
	</div>
		
	<div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg); <?php if (!$_GET['page'] or $_GET['page'] == 'main') echo 'height: calc(100vh);'; ?>" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row align-items-center text-md-center justify-content-center" <?php if (!$_GET['page'] or $_GET['page'] == 'main') echo 'style="height: calc(100vh);"'; ?>>
				<div class="col-md-9">
					<h1>Встроенные кухни</h1>
					<h2>Готовые и на заказ</h2>
					<!--span class="sub-text">ВСТРОЕННЫЕ КУХНИ, КУХОННЫЕ УГОЛКИ, ШКАФЫ-КУПЕ, ГАРДЕРОБНЫЕ, ПРИХОЖИЕ, ОБЕДЕННЫЕ ГРУППЫ И ДРУГАЯ КОРПУСНАЯ МЕБЕЛЬ.</span-->
				</div>
			</div>
		</div>
	</div>  
	<!-- /Header -->
	
	<!-- Kitchens catalog -->
	<div class="site-section">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<span class="sub-title" style="color: #00a3d3;">Каталог</span>
					<h2 class="mb-4">Кухни</h2>
				</div>
			</div>
			
			<div class="row justify-content-center align-items-center" style="padding-top: 25px; padding-bottom: 25px;">
				<div class="col">
					<div id="kitchens" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators"></ol>
						<div class="carousel-inner" style="margin: auto;">
							<div class="carousel-item active">
								<img src="images/kitchens/3.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 1</h5>
									<a href="" onclick="getPrice('Кухня 1');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/4.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 2</h5>
									<a href="" onclick="getPrice('Кухня 2');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/5.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 3</h5>
									<a href="" onclick="getPrice('Кухня 3');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/6.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 4</h5>
									<a href="" onclick="getPrice('Кухня 4');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/7.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 5</h5>
									<a href="" onclick="getPrice('Кухня 5');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/8.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 6</h5>
									<a href="" onclick="getPrice('Кухня 6');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/9.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 7</h5>
									<a href="" onclick="getPrice('Кухня 7');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/10.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 8</h5>
									<a href="" onclick="getPrice('Кухня 8');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/11.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 9</h5>
									<a href="" onclick="getPrice('Кухня 9');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/12.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 10</h5>
									<a href="" onclick="getPrice('Кухня 10');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/13.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 11</h5>
									<a href="" onclick="getPrice('Кухня 11');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/14.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 12</h5>
									<a href="" onclick="getPrice('Кухня 12');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/15.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 13</h5>
									<a href="" onclick="getPrice('Кухня 13');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/16.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 14</h5>
									<a href="" onclick="getPrice('Кухня 14');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/17.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 15</h5>
									<a href="" onclick="getPrice('Кухня 15');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/18.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 16</h5>
									<a href="" onclick="getPrice('Кухня 16');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/19.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 17</h5>
									<a href="" onclick="getPrice('Кухня 17');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/20.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 18</h5>
									<a href="" onclick="getPrice('Кухня 18');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/21.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 19</h5>
									<a href="" onclick="getPrice('Кухня 19');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/22.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 20</h5>
									<a href="" onclick="getPrice('Кухня 20');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/23.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 21</h5>
									<a href="" onclick="getPrice('Кухня 21');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/24.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 22</h5>
									<a href="" onclick="getPrice('Кухня 22');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/25.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 23</h5>
									<a href="" onclick="getPrice('Кухня 23');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/26.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 24</h5>
									<a href="" onclick="getPrice('Кухня 24');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/27.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 25</h5>
									<a href="" onclick="getPrice('Кухня 25');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/28.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 26</h5>
									<a href="" onclick="getPrice('Кухня 26');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/29.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 27</h5>
									<a href="" onclick="getPrice('Кухня 27');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/30.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 28</h5>
									<a href="" onclick="getPrice('Кухня 28');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/31.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 29</h5>
									<a href="" onclick="getPrice('Кухня 29');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/32.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 30</h5>
									<a href="" onclick="getPrice('Кухня 30');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/33.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 31</h5>
									<a href="" onclick="getPrice('Кухня 31');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/34.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 32</h5>
									<a href="" onclick="getPrice('Кухня 32');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/35.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 33</h5>
									<a href="" onclick="getPrice('Кухня 33');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/36.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 34</h5>
									<a href="" onclick="getPrice('Кухня 34');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/37.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 35</h5>
									<a href="" onclick="getPrice('Кухня 35');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/38.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 36</h5>
									<a href="" onclick="getPrice('Кухня 36');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/39.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 37</h5>
									<a href="" onclick="getPrice('Кухня 37');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/40.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 38</h5>
									<a href="" onclick="getPrice('Кухня 38');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/41.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 39</h5>
									<a href="" onclick="getPrice('Кухня 39');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/42.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 40</h5>
									<a href="" onclick="getPrice('Кухня 40');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/43.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 41</h5>
									<a href="" onclick="getPrice('Кухня 41');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item ">
								<img src="images/kitchens/1.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 42</h5>
									<a href="" onclick="getPrice('Кухня 42');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
							<div class="carousel-item">
								<img src="images/kitchens/2.jpg" class="d" style="max-height: 100%; max-width: 100%;" alt="Кухни на заказ">
								<div class="carousel-caption pb-4">
									<h5 class="mb-3">Кухня 43</h5>
									<a href="" onclick="getPrice('Кухня 43');" data-toggle="modal" data-target="#getPrice">Узнать стоиомсть</a>
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#kitchens" role="button" data-slide="prev">
							<span><img src="images/icons/arrow-left.png"></span>
							<span class="sr-only">Previous</span>
						</a>
						 <a class="carousel-control-next" href="#kitchens" role="button" data-slide="next">
							<span><img src="images/icons/arrow-right.png"></span>
							<span class="sr-only">Next</span>
						 </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Kitchens catalog -->
	
	<!-- About us -->
	<div class="site-section about-section bg-light">
		<div class="container pt-4 pb-4">
			<div class="row align-items-center">
				<div class="col-lg-6 img-years mb-5 mb-lg-0">
					<!--span class="experience">
						<span class="years" style="color: #d0326f; text-shadow: 0 0 5px white">Нам 20 лет</span>
						<!--<span class="caption" style="color: #00a3d3;">накопленного опыта</span>-->
					<!--/span-->
					<img src="images/about-us.jpg" alt="Image" class="img-fluid">
				</div>
				<div class="col-lg-6 ml-auto">
					<!--span class="sub-title" style="color: #00a3d3;">Коротко</span>
					<h3 class="mb-4">О нас</h3-->
					<p class="mb-5">Студия кухни «Мозаика» поможет каждому клиенту при выборе мебели по <strong>индивидуальным размерам, бесплатный дизайн-проект</strong> любой сложности, большой выбор мебели по цветовой гамме и ценовой категории.</p>
					<p class="mb-5">Обширный ассортимент фасадного материала такие как: Fundermax, Альтернатив, AGT, Feelwood, TSS. Для каждого клиента подбираем по его желаниям и возможностям европейскую фурнитуру, таких фирм как: Blum, Boyard, Hettich, VIBO и др. А также у нас можно укомплектоать мебель кухонной техникой известных фирм: Эликор, Midea, Куперсберг и др.</p>
					<!--p class="mb-5">Нашими партнерами являются крупные фабрики «Ульяновск», «CUCINA», г. Пенза «Лев Мебель», «Мебель стиль».</p>
					<!-- <p><a href="#" class="btn btn-primary btn-lg rounded-0">Read More About Us</a></p> -->
				</div>
			</div>
		</div>
    </div>
	<!-- /About us -->
	
	
	<!-- Action -->
	<section class="action-4-section bg-white py-5">
		<div class="container py-5"> <!-- container/container-fluid -->
			<div class="row justify-content-center">
				<div class="col">
					<h2 class="mb-5 text-center">Акции и скидки</h2>
					<div class="row justify-content-around">
						<div class="col-md-7 mb-5 mb-md-0">
							<img src="images/actions/action-4.jpg" class="w-100 mb-4">
							<p class="fs-5 fw-light">При заказе шкафа-купе или гардеробной <strong>до 31 августа</strong> - честная <strong style="color: #e10585;">скидка&#160;10%!</strong></p>
						</div>
						<!--div class="col-md-5">
							<img src="images/actions/action-3.jpg" class="w-100 mb-4">
							<p class="fs-5 fw-light">При заказе кухни от 60 000 рублей - мойка из искуственного камня <strong>в&#160;подарок!</strong></p>
						</div-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /Action -->
	
	
</div>

<?php
	include 'footer.php';
?>