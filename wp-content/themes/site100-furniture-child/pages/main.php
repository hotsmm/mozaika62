<!DOCTYPE html>
<html lang="en">
<head>
    <title>Студия кухни "Мозаика".</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
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
					<div class="col-4 col-md-3">
						<!--
						<a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
						<a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
						<a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
						<a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
						-->
						<h2 class="m-0 under-logo-title">Магазин мебели</h2>
					</div>
					<div class="col-8 col-md-9">
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
		<?php include 'site-navbar.php'; ?>
	</div>
		
	<div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/hero_bg_2.jpg); <?php if ( !isset( $_GET['page'] ) or isset( $_GET['page'] ) == 'main') echo 'height: calc(100vh);'; ?>" data-aos="fade" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row align-items-center text-md-center justify-content-center" <?php if ( !isset( $_GET['page'] ) or isset( $_GET['page'] ) == 'main') echo 'style="height: calc(100vh);"'; ?>>
				<div class="col-md-9 margin-title-with-span">
					<h1>Корпусная мебель</h1>
					<h2 class="mb-3">Готовая и на заказ</h2>
					<span class="sub-text">ВСТРОЕННЫЕ КУХНИ, КУХОННЫЕ УГОЛКИ, ШКАФЫ-КУПЕ, ГАРДЕРОБНЫЕ, ПРИХОЖИЕ, ОБЕДЕННЫЕ ГРУППЫ И ДРУГАЯ КОРПУСНАЯ МЕБЕЛЬ.</span>
				</div>
			</div>
		</div>
	</div>  
	<!-- /Header -->
	
    <div class="site-block-1">
      <div class="container">
        <div class="row">
			<div class="col pb-4 text-center">
				<p><button type="button" class="btn btn-lg btn-primary2" data-toggle="modal" data-target=".bd-example-modal-lg">Узнайте стоимость Вашей кухни</button></p>
			</div>
		</div>
		<div class="row">
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-window font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Современные стили</h3>
                <p>Учтены все современные стили и технологии.</p>
              </div>
            </a>   
          </div>
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4 fon-other">
              <div class="mr-3">
                <span class="icon flaticon-measuring font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Есть дизайн проект?</h3>
                <p>Позвоните, мы сделаем дешевле!</p>
              </div>
            </a>
          </div>
          <div class="col-lg-4">
            <a href="#" class="site-block-feature d-flex p-4 rounded mb-4">
              <div class="mr-3">
                <span class="icon flaticon-interior-design font-weight-light h2"></span>
              </div>
              <div class="text">
                <h3>Бесплатная парковка</h3>
                <p>Клиентам нашего магазина бесплатная парковка.</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
	
	
	<!-- Action --
	<div class="site-section about-section">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-8 text-center">
					<span class="sub-title" style="color: #00a3d3;">Внимание</span>
					<h3 class="mb-4">Акция!</h3>
					<img src="images/actions/banner-1.jpg" class="w-100 mb-3 shadow">
					<p class="text-center" style="color:#000;">* Количество товаров по акции ограничено!</p>
				</div>
			</div>
		</div>
    </div>
	<!-- /Action -->
	
	
	<!-- About us -->
	<div class="site-section about-section bg-white">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12 text-center">
					<span class="sub-title" style="color: #00a3d3;">Внимание!</span>
					<h3 class="mb-4">Новая акция</h3>
					<img src="images/actions/action-2023-02-07.jpg" alt="Image" class="img-fluid">
				</div>
			</div>
		</div>
    </div>
	<!-- /About us -->
	
	
	<!-- About us -->
	<div class="site-section about-section bg-light">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 mb-5 mb-lg-0"> <!--img-years -->
					<!--span class="experience">
						<span class="years" style="color: #d0326f; text-shadow: 0 0 5px white">Нам 20 лет</span>
						<!--<span class="caption" style="color: #00a3d3;">накопленного опыта</span>-->
					<!--/span-->
					<img src="images/o-nas.jpg" alt="Image" class="img-fluid">
				
				</div>
				<div class="col-lg-6 ml-auto">
					<span class="sub-title" style="color: #00a3d3;">Коротко</span>
					<h3 class="mb-4">О нас</h3>
					<p class="mb-5">Студия кухни «Мозаика» поможет каждому клиенту при выборе мебели по индивидуальным размерам, бесплатный дизайн-проект любой сложности, большой выбор мебели по цветовой гамме и ценовой категории.</p>
					<p class="mb-5">Обширный ассортимент фасадного материала такие как: Fundermax, Альтернатив, AGT, Feelwood, TSS. Для каждого клиента подбираем по его желаниям и возможностям европейскую фурнитуру, таких фирм как: Blum, Boyard, Hettich, VIBO и др. А также у нас можно укомплектоать мебель кухонной техникой известных фирм: Эликор, Midea, Куперсберг и др.</p>
					<p class="mb-5">Нашими партнерами являются крупные фабрики «Ульяновск», «CUCINA», г. Пенза «Лев Мебель», «Мебель стиль».</p>
					<!-- <p><a href="#" class="btn btn-primary btn-lg rounded-0">Read More About Us</a></p> -->
				</div>
			</div>
		</div>
    </div>
	<!-- /About us -->
	
	<!-- Quiz modal -->
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<!-- <h5 class="modal-title" id="exampleModalLabel">Выберите Вашу планировку</h5> -->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<!-- Quiz container -->
				<div id="quiz-container" class="container shadow bg-white pt-4 rounded-lg">
					<div class="row">
						<div class="col pb-4 text-center">
							<h3>Выберите Вашу планировку</h3>
						</div>
					</div>
					<div class="row justify-content-center text-left" style="min-height: 275px;">
						<div class="col-md-3 pb-5">
							<div class="card w-100 border-0">
								<img src="images/quiz/q-1-1.jpg" class="card-img-top" alt="...">
								<div class="card-body pl-1 pr-1" style="min-height: auto;">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline1"><h5 class="card-title mb-0">Линейная</h5></label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 pb-5">
							<div class="card w-100 border-0">
								<img src="images/quiz/q-1-2.jpg" class="card-img-top" alt="...">
								<div class="card-body pl-1 pr-1" style="min-height: auto;">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline2"><h5 class="card-title mb-0">Г-образная</h5></label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3 pb-5">
							<div class="card w-100 border-0">
								<img src="images/quiz/q-1-3.jpg" class="card-img-top" alt="...">
								<div class="card-body pl-1 pr-1" style="min-height: auto;">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline3"><h5 class="card-title mb-0">П-образная</h5></label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row pb-5">
						<div class="col text-center">
							<button class="btn btn-lg btn-primary2" onclick="question1();">Следующий вопрос</button>
						</div>
					</div>
				</div>
				<!-- End quiz container -->
			</div>
		</div>
	</div>
	
	<!-- Scripts for quiz -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		function question1() {
			
			var question = 'question1';
			
			if (document.getElementById('customRadioInline1').checked == true) {
				var answer = 'Линейная';
			} else if (document.getElementById('customRadioInline2').checked == true) {
				var answer = 'Г-образная';
			} else if (document.getElementById('customRadioInline3').checked == true) {
				var answer = 'П-образная';
			} else {
				var answer = 'Линейная';
			}
			
			$.ajax ({
				type: "POST",
				url: "quiz-action.php",
				data: {question, answer},
				dataType: "html",
				success: function(data) {
					var p = document.getElementById('quiz-container');
					p.innerHTML = data;
				}
			});
		}
		
		function question2() {
			var question = 'question2';
			var answer1 = document.getElementById('d1').value;
			var answer2 = document.getElementById('d2').value;
			var answer3 = document.getElementById('d3').value;
			
			$.ajax ({
				type: "POST",
				url: "quiz-action.php",
				data: { question, answer1, answer2, answer3 },
				dataType: "html",
				success: function(data) {
					var p = document.getElementById('quiz-container');
					p.innerHTML = data;
				}
			});
		}
		
		function question3() {
			
			var question = 'question3';
			
			if (document.getElementById('customRadioInline1').checked == true) {
				var answer = 'ДСП';
			} else if (document.getElementById('customRadioInline2').checked == true) {
				var answer = 'Пленка';
			} else if (document.getElementById('customRadioInline3').checked == true) {
				var answer = 'Пластик';
			} else if (document.getElementById('customRadioInline4').checked == true) {
				var answer = 'Массив';
			}
			
			$.ajax ({
				type: "POST",
				url: "quiz-action.php",
				data: {question, answer},
				dataType: "html",
				success: function(data) {
					var p = document.getElementById('quiz-container');
					p.innerHTML = data;
				}
			});
		}
	</script>
</div>