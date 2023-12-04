<?php
/**
 * Архив продуктов 2
 * 
 *
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'woocommerce' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>


<!-- Header --
<header id="header-catalogy" class="woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center text-start" style="min-height: 410px;">
			<div class="col py-5">
				
				<h2 class="mb-4 mb-md-5 header-sub-title">Кухни и шкафы на заказ по Вашим размерам</h2>
				<?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				//do_action( 'woocommerce_archive_description' );
				?>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->



<!-- Archive product cat -->
<section class="pb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="breadcrumbs py-4">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col offset-md-2">
						<h2 class="text-md-center mb-5">
							Выбирайте варианты из нашего каталога
							<span class="sub-title" style="color: #00a3d3; margin-top: 15px;">Или присылайте свои проекты, изображения, наброски</span>
							
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<?php dynamic_sidebar( 'wsidebar-1' ); ?>
					</div>
					<div class="col-md-10">
						<div class="row">
							<?php
							if ( woocommerce_product_loop() ) {

								/**
								 * Hook: woocommerce_before_shop_loop.
								 *
								 * @hooked woocommerce_output_all_notices - 10
								 * @hooked woocommerce_result_count - 20
								 * @hooked woocommerce_catalog_ordering - 30
								 */
								//do_action( 'woocommerce_before_shop_loop' );
								
								// Нижее выводятся карточки категорий и подкатегорий
								woocommerce_product_loop_start();
				
								
								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();
										
										/**
										 * Hook: woocommerce_shop_loop.
										 */
										
										do_action( 'woocommerce_shop_loop' );
										
										wc_get_template_part( 'content', 'product' );
										
									}
								}

								woocommerce_product_loop_end();

								echo '<div style="width: 100%;">';
								/**
								 * Hook: woocommerce_after_shop_loop.
								 *
								 * @hooked woocommerce_pagination - 10
								 **/
								do_action( 'woocommerce_after_shop_loop' );
								echo '</div>';
							} else {
								/**
								 * Hook: woocommerce_no_products_found.
								 *
								 * @hooked wc_no_products_found - 10
								 */
								do_action( 'woocommerce_no_products_found' );
							}

							/**
							 * Hook: woocommerce_after_main_content.
							 *
							 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
							 */
							do_action( 'woocommerce_after_main_content' );

							/**
							 * Hook: woocommerce_sidebar.
							 *
							 * @hooked woocommerce_get_sidebar - 10
							 */
							//do_action( 'woocommerce_sidebar' );

							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Portfolio --
<div id="portfolio-scroll-point" class="scroll-point"></div>
<section class="bg-light pb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 py-5">
				<h2 class="text-center mb-3">Примеры наших работ</h2>
				<div class="title-line mb-5"></div>
				<div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators" style="bottom: 5%;">
						<?php
							$query = new WP_Query( array(
								'post_type' => 'portfolio'
							) );
							
							$count = 0;
							while ( $query->have_posts() ) { $query->the_post();
								if ( $count == 0 ) { ?>
									<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="<?php echo $count; ?>" class="active" aria-current="true" aria-label="Slide <?php echo $count + 1; ?>"></button>
								<?php $count = $count + 1; } else { ?>
									<button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="<?php echo $count; ?>" aria-label="Slide <?php echo $count + 1; ?>"></button>
								<?php $count = $count + 1; }
							}
						?>
					</div>
					<div class="carousel-inner">
						<?php
							$query = new WP_Query( array(
								'post_type' => 'portfolio',
								/*
								'tax_query' => array(
									array(
										'taxonomy' => 'portfolio-cat',
										'field' => 'slug',
										'terms' => 'портфолио-жалюзи-и-рулонных-штор'
									)
								)*/
							) );
							
							$count = 0;
							while ( $query->have_posts() ) { $query->the_post();
								if ( $count == 0 ) { ?>
									<div class="carousel-item mb-4 active" data-bs-interval="100000">
										<img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class="rounded shadow" alt="..." loading="lazy">
									</div>
								<?php $count = $count + 1; } else { ?>
									<div class="carousel-item mb-4">
										<img src="<?php echo get_post_meta($post->ID, '_img-1')[0]; ?>" class="rounded shadow" alt="..." loading="lazy">
									</div>
								<?php }
							}
						?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-left.png">
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ico/arrow-right.png">
					</button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="row align-items-center text-center">
					<div class="col">
						<a href="https://unistyle-mebel.ru/portfolio/"><button class="btn btn-lg btn-orange ps-3 pe-3">Смотреть все работы</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Portfolio -->


<!-- Advantages --
<section class="advantages bg-white py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="text-center mb-3">Преимущества покупки мебели у нас</h2>
				<div class="title-line mb-5"></div>
				<div class="row">
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-1.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Собственное производство</h3>
								<p class="mb-0">Приобретайте напрямую у производителя с опытом работы более 8 лет, без переплаты посредникам.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-9.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Бесплатный замер</h3>
								<p class="mb-0">Бесплатный замер и 3d дизайн-проект в Санкт-Петербурге и Лен. области, без выходных с 9:00 до 20:00, с каталогами материалов.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-3.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Европейское качество</h3>
								<p class="mb-0">Экологичные и безопасные материалы с гарантией 2 года.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-8.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Доставляем и устанавливаем</h3>
								<p class="mb-0">Установка "под ключ". Самовывоз (Санкт-Петербург). Доставка по России.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-5.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Рассрочка 0%</h3>
								<p class="mb-0">Благодаря собственному производству предлагаем беспроцентную рассрочку на 12 месяцев.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-6.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Удобная оплата</h3>
								<ul class="mb-0 text-orange ps-0" style="">
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Банковской картой на замере (по банковскому терминалу)</li>
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Наличными </li>
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Онлайн</li>
									<li style="line-height: 24px;"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point.png" class="me-2">Безналичный расчет</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-5 mb-md-0">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-7.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Большой выбор готовой продукции и материалов</h3>
								<p class="mb-0">Более 900 готовых изделий, декоров и фасадов.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 mb-0">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/advantage-10.png" class="img-fluid">
							</div>
							<div class="col-10">
								<h3>Регулярные акции и подарки</h3>
								<p class="mb-0">Регулярно проводим акции, делаем существенные скидки, дарим подарки.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Advantages -->


<!-- Quiz section -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="quiz-section bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
			<?php
				$obj = get_queried_object();
				$cat_name = $obj->name;
				if ( $cat_name == 'Кухни' ) { ?>
				<h2 class="text-md-center mb-5">
					Рассчитаем предварительную стоимость Вашей кухни
					<span class="sub-title" style="color: #00a3d3; margin-top: 15px;">Для расчета ответьте на 6 вопросов ниже</span>
					
				</h2>
				<div class="row justify-content-center">

					<!-- ВОПРОСЫ ПО КУХНЯМ -->
					<div class="col-12" id="2-1">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">1/6</span> Какая планировка кухни Вам нужна?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-1">
									<input type="radio" id="answer-2-1-1" name="quostion-2-1" class="checkbox" value="Прямая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Прямая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-2">
									<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-3">
									<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">П-образная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-4">
									<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">С островком</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '2-1' );">
							</div>
						</div>
					</div>
					
					<!-- Один размер -->
					<div class="col-md-6" id="3-1-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span> Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-1" name="quostion-3-1-1">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-1' );">
							</div>
						</div>
					</div>
					
					<!-- Два размера -->
					<div class="col-md-6" id="3-1-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span> Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-2" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-2" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-2' );">
							</div>
						</div>
					</div>
					
					<!-- Три размера -->
					<div class="col-md-6" id="3-1-3" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span> Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-3" class="form-label">Длинна 3, м</label>
								<input type="text" class="form-control" id="answer-3-1-3-3" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-3' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-3' );">
							</div>
						</div>
					</div>
					
					<!-- Четыре размера -->
					<div class="col-md-6" id="3-1-4" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span> Укажите размеры в метрах</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-3">
								<label for="answer-3-1-1" class="form-label">Длинна 1</label>
								<input type="text" class="form-control" id="answer-3-1-1-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-2" class="form-label">Длинна 2</label>
								<input type="text" class="form-control" id="answer-3-1-2-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-3" class="form-label">Длинна 3</label>
								<input type="text" class="form-control" id="answer-3-1-3-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-4" class="form-label">Длинна островка</label>
								<input type="text" class="form-control" id="answer-3-1-4-4" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-4' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-4' );">
							</div>
						</div>
					</div>
					
					<!-- 4/7 -->
					<div class="col-12" id="4-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/6</span> Какой стиль кухни Вы рассматриваете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-1">
									<input type="radio" id="answer-4-1-1" name="quostion-4-1" class="checkbox" value="Современный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Современный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-2">
									<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Классический</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-3">
									<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Лофт</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-4">
									<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '4-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '4-1' );">
							</div>
						</div>
					</div>
					
					<!-- 5/7 -->
					<div class="col-12" id="5-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/6</span> Какой материал фасада кухни Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-1">
									<input type="radio" id="answer-5-1-1" name="quostion-5-1" class="checkbox" value="ЛДСП/ЛМДФ">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП/ЛМДФ</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-2">
									<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пленка</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-3">
									<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Эмаль</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-4">
									<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пластик</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-5">
									<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Массив</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-6">
									<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '5-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '5-1' );">
							</div>
						</div>
					</div>
					
					<!-- 6/7 -->
					<div class="col-12" id="6-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/6</span> Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-1">
									<input type="radio" id="answer-6-1-1" name="quostion-6-1" class="checkbox" value="Скидка 10%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-2">
									<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-3">
									<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15% на заказ шкафа в теченее года</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-6-1-4">
									<input type="radio" id="answer-6-1-4" name="quostion-6-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пластик</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '6-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '6-1' );">
							</div>
						</div>
					</div>
					
					<!-- 7/1 -->
					<div class="col-md-6" id="7-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/6</span> Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_kitchen.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone">
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-1" name="answer1">
									<input type="hidden" id="answer2-1" name="answer2">
									<input type="hidden" id="answer3-1-1" name="answer3-1">
									<input type="hidden" id="answer3-1-2" name="answer3-2">
									<input type="hidden" id="answer3-1-3" name="answer3-3">
									<input type="hidden" id="answer3-1-4" name="answer3-4">
									<input type="hidden" id="answer4-1" name="answer4">
									<input type="hidden" id="answer5-1" name="answer5">
									<input type="hidden" id="answer6-1" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '7-1' );">
									<input type="submit" class="btn btn-corporate-color-1" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО КУХНЯМ -->						
				</div>
				
				<?php } else if ( $cat_name == 'Шкафы' ) { ?>
					<!-- Расчет любой мебели -->
				<h2 class="text-center mb-5">
					<span class="sub-title" style="color: #00a3d3;">Ответьте на 6 вопросов ниже</span>
					и узнайте предварительную стоимость Вашего шкафа</h2>
				
				<div class="row justify-content-center">
					<!-- ВОПРОСЫ ПО ШКАФАМ -->
					<div class="col-12" id="2-2">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">1/6</span> Какой тип шкафа Вам нужен?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-1">
									<input type="radio" id="answer-2-2-1" name="quostion-2-2" class="checkbox" value="Корпусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Корпусный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-2">
									<input type="radio" id="answer-2-2-2" name="quostion-2-2" class="checkbox" value="Встроенный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Встроенный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-3">
									<input type="radio" id="answer-2-2-3" name="quostion-2-2" class="checkbox" value="Угловой">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловой</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-4">
									<input type="radio" id="answer-2-2-4" name="quostion-2-2" class="checkbox" value="Радиусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Радиусный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-5">
									<input type="radio" id="answer-2-2-5" name="quostion-2-2" class="checkbox" value="Гардеробный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Гардеробный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-6">
									<input type="radio" id="answer-2-2-6" name="quostion-2-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '2-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="3-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span> Какой материал фасада шкафа Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-1">
									<input type="radio" id="answer-3-2-1" name="quostion-3-2" class="checkbox" value="ЛДСП">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-2">
									<input type="radio" id="answer-3-2-2" name="quostion-3-2" class="checkbox" value="Пескоструй">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пескоструй</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-3">
									<input type="radio" id="answer-3-2-3" name="quostion-3-2" class="checkbox" value="Зеркало">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Зеркало</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-4">
									<input type="radio" id="answer-3-2-4" name="quostion-3-2" class="checkbox" value="Фотопечать">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Фотопечать</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-5">
									<input type="radio" id="answer-3-2-5" name="quostion-3-2" class="checkbox" value="Комбинированный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Комбинированный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-6">
									<input type="radio" id="answer-3-2-6" name="quostion-3-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="4-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/6</span> Какая ориентировочная ширина шкафа планируется?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-1">
									<input type="radio" id="answer-4-2-1" name="quostion-4-2" class="checkbox" value="1">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-2">
									<input type="radio" id="answer-4-2-2" name="quostion-4-2" class="checkbox" value="1,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-3">
									<input type="radio" id="answer-4-2-3" name="quostion-4-2" class="checkbox" value="2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-4">
									<input type="radio" id="answer-4-2-4" name="quostion-4-2" class="checkbox" value="2,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-5">
									<input type="radio" id="answer-4-2-5" name="quostion-4-2" class="checkbox" value="3">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-6">
									<input type="radio" id="answer-4-2-6" name="quostion-4-2" class="checkbox" value="3,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-7">
									<input type="radio" id="answer-4-2-7" name="quostion-4-2" class="checkbox" value="4">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-8">
									<input type="radio" id="answer-4-2-8" name="quostion-4-2" class="checkbox" value="4,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-9">
									<input type="radio" id="answer-4-2-9" name="quostion-4-2" class="checkbox" value="5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-10">
									<input type="radio" id="answer-4-2-10" name="quostion-4-2" class="checkbox" value=">5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">>5</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '4-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '4-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="5-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/6</span> Какое количество дверей Вы предполагаете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-1">
									<input type="radio" id="answer-5-2-1" name="quostion-5-2" class="checkbox" value="1 дверь">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1 дверь</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-2">
									<input type="radio" id="answer-5-2-2" name="quostion-5-2" class="checkbox" value="2 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-3">
									<input type="radio" id="answer-5-2-3" name="quostion-5-2" class="checkbox" value="3 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-4">
									<input type="radio" id="answer-5-2-4" name="quostion-5-2" class="checkbox" value="4 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-5">
									<input type="radio" id="answer-5-2-5" name="quostion-5-2" class="checkbox" value="5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5 дверей</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-6">
									<input type="radio" id="answer-5-2-6" name="quostion-5-2" class="checkbox" value="Более 5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Более 5 дверей</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '5-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '5-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="6-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/6</span> Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-1">
									<input type="radio" id="answer-6-2-1" name="quostion-6-2" class="checkbox" value="Скидка 15%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-2">
									<input type="radio" id="answer-6-2-2" name="quostion-6-2" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-3">
									<input type="radio" id="answer-6-2-3" name="quostion-6-2" class="checkbox" value="Бесплатная доставка и установка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Бесплатная доставка и установка</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-4">
									<input type="radio" id="answer-6-2-4" name="quostion-6-2" class="checkbox" value="Скидка 10% на заказ кухни в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10% на заказ кухни в теченее года</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '6-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '6-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-md-6" id="7-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/6</span> Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_closet.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone" required>
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-2" name="answer1">
									<input type="hidden" id="answer2-2" name="answer2">
									<input type="hidden" id="answer3-2" name="answer3">
									<input type="hidden" id="answer4-2" name="answer4">
									<input type="hidden" id="answer5-2" name="answer5">
									<input type="hidden" id="answer6-2" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '7-2' );">
									<input type="submit" class="btn btn-corporate-color-1" value="Отправить">
								</div>
							</div>
						</form>
					</div><!-- /ВОПРОСЫ ПО ШКАФАМ -->
				</div><!-- /Расчет шкафа -->
				
				<?php } else { ?>
		
				<!-- Расчет любой мебели -->
				<h2 class="text-center mb-3">
					<span class="sub-title" style="color: #00a3d3;">Ответьте на несколько вопросов ниже</span>
					и узнайте предварительную стоимость Вашей мебели
				</h2>
				<div class="title-line mb-5"></div>
				<div class="row justify-content-center">
			
					<!--  ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
					<div class="col-12" id="1">
						<h3 class="text-center mb-5">Какая мебель Вас интересует?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-1">
									<input type="radio" id="answer-1-1" name="quostion-1" class="checkbox" value="Кухня">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Кухня</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-2">
									<input type="radio" id="answer-1-2" name="quostion-1" class="checkbox" value="Шкаф или гардеробная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Шкаф или гардеробная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-1-3">
									<input type="radio" id="answer-1-3" name="quostion-1" class="checkbox" value="Другая корпусная мебель">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Другая корпусная мебель</h3>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" style="width: 175px;" onclick="nextQuostion( '1' );">
							</div>
						</div>
					</div>
					<!--  /ПЕРВЫЙ ОБЩИЙ ВОПРОС -->
					
					
					<!-- ВОПРОСЫ ПО КУХНЯМ -->
					<div class="col-12" id="2-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span> Какая планировка кухни Вам нужна?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-1">
									<input type="radio" id="answer-2-1-1" name="quostion-2-1" class="checkbox" value="Прямая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Прямая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-2">
									<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-3">
									<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">П-образная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-4">
									<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">С островком</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-2-1-5">
									<input type="radio" id="answer-2-1-5" name="quostion-2-1" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пока не знаю</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '2-1' );">
							</div>
						</div>
					</div>
					
					<!-- Один размер -->
					<div class="col-md-6" id="3-1-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span> Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, см</label>
								<input type="text" class="form-control" id="answer-3-1-1-1" name="quostion-3-1-1">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-1' );">
							</div>
						</div>
					</div>
					
					<!-- Два размера -->
					<div class="col-md-6" id="3-1-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span> Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, см</label>
								<input type="text" class="form-control" id="answer-3-1-1-2" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, см</label>
								<input type="text" class="form-control" id="answer-3-1-2-2" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-2' );">
							</div>
						</div>
					</div>
					
					<!-- Три размера -->
					<div class="col-md-6" id="3-1-3" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span> Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, см</label>
								<input type="text" class="form-control" id="answer-3-1-1-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, см</label>
								<input type="text" class="form-control" id="answer-3-1-2-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-3" class="form-label">Длинна 3, см</label>
								<input type="text" class="form-control" id="answer-3-1-3-3" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-3' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-3' );">
							</div>
						</div>
					</div>
					
					<!-- Четыре размера -->
					<div class="col-md-6" id="3-1-4" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span> Укажите размеры в сантиметрах</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-3">
								<label for="answer-3-1-1" class="form-label">Длинна 1</label>
								<input type="text" class="form-control" id="answer-3-1-1-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-2" class="form-label">Длинна 2</label>
								<input type="text" class="form-control" id="answer-3-1-2-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-3" class="form-label">Длинна 3</label>
								<input type="text" class="form-control" id="answer-3-1-3-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-4" class="form-label">Длинна островка</label>
								<input type="text" class="form-control" id="answer-3-1-4-4" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-1-4' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-1-4' );">
							</div>
						</div>
					</div>
					
					<!-- 4/7 -->
					<div class="col-12" id="4-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span> Какой стиль кухни Вы рассматриваете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-1">
									<input type="radio" id="answer-4-1-1" name="quostion-4-1" class="checkbox" value="Современный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Современный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-2">
									<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Классический</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-3">
									<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Лофт</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-4">
									<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/4-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '4-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '4-1' );">
							</div>
						</div>
					</div>
					
					<!-- 5/7 -->
					<div class="col-12" id="5-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span> Какой материал фасада кухни Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-1">
									<input type="radio" id="answer-5-1-1" name="quostion-5-1" class="checkbox" value="ЛДСП/ЛМДФ">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП/ЛМДФ</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-2">
									<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пленка</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-3">
									<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Эмаль</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-4">
									<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пластик</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-5">
									<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Массив</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-6">
									<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-1-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '5-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '5-1' );">
							</div>
						</div>
					</div>
					
					<!-- 6/7 -->
					<div class="col-12" id="6-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span> Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-1">
									<input type="radio" id="answer-6-1-1" name="quostion-6-1" class="checkbox" value="Скидка 10%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-2">
									<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-3">
									<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15% на заказ шкафа в теченее года</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-6-1-4">
									<input type="radio" id="answer-6-1-4" name="quostion-6-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пластик</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '6-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '6-1' );">
							</div>
						</div>
					</div>
					
					<!-- 7/1 -->
					<div class="col-md-6" id="7-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span> Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_kitchen.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone">
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-1" name="answer1">
									<input type="hidden" id="answer2-1" name="answer2">
									<input type="hidden" id="answer3-1-1" name="answer3-1">
									<input type="hidden" id="answer3-1-2" name="answer3-2">
									<input type="hidden" id="answer3-1-3" name="answer3-3">
									<input type="hidden" id="answer3-1-4" name="answer3-4">
									<input type="hidden" id="answer4-1" name="answer4">
									<input type="hidden" id="answer5-1" name="answer5">
									<input type="hidden" id="answer6-1" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '7-1' );">
									<input type="submit" class="btn btn-corporate-color-1" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО КУХНЯМ -->
					
					
					<!-- ВОПРОСЫ ПО ШКАФАМ -->
					<div class="col-12" id="2-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/7</span> Какой тип шкафа Вам нужен?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-1">
									<input type="radio" id="answer-2-2-1" name="quostion-2-2" class="checkbox" value="Корпусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Корпусный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-2">
									<input type="radio" id="answer-2-2-2" name="quostion-2-2" class="checkbox" value="Встроенный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Встроенный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-3">
									<input type="radio" id="answer-2-2-3" name="quostion-2-2" class="checkbox" value="Угловой">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловой</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-4">
									<input type="radio" id="answer-2-2-4" name="quostion-2-2" class="checkbox" value="Радиусный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Радиусный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-5">
									<input type="radio" id="answer-2-2-5" name="quostion-2-2" class="checkbox" value="Гардеробный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Гардеробный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-2-6">
									<input type="radio" id="answer-2-2-6" name="quostion-2-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/2-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '2-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="3-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/7</span> Какой материал фасада шкафа Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-1">
									<input type="radio" id="answer-3-2-1" name="quostion-3-2" class="checkbox" value="ЛДСП">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-2">
									<input type="radio" id="answer-3-2-2" name="quostion-3-2" class="checkbox" value="Пескоструй">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пескоструй</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-3">
									<input type="radio" id="answer-3-2-3" name="quostion-3-2" class="checkbox" value="Зеркало">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Зеркало</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-4">
									<input type="radio" id="answer-3-2-4" name="quostion-3-2" class="checkbox" value="Фотопечать">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Фотопечать</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-5">
									<input type="radio" id="answer-3-2-5" name="quostion-3-2" class="checkbox" value="Комбинированный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Комбинированный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-3-2-6">
									<input type="radio" id="answer-3-2-6" name="quostion-3-2" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/3-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '3-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '3-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="4-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/7</span> Какая ориентировочная ширина шкафа планируется?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-1">
									<input type="radio" id="answer-4-2-1" name="quostion-4-2" class="checkbox" value="1">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-2">
									<input type="radio" id="answer-4-2-2" name="quostion-4-2" class="checkbox" value="1,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-3">
									<input type="radio" id="answer-4-2-3" name="quostion-4-2" class="checkbox" value="2">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-4">
									<input type="radio" id="answer-4-2-4" name="quostion-4-2" class="checkbox" value="2,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-5">
									<input type="radio" id="answer-4-2-5" name="quostion-4-2" class="checkbox" value="3">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-6">
									<input type="radio" id="answer-4-2-6" name="quostion-4-2" class="checkbox" value="3,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-7">
									<input type="radio" id="answer-4-2-7" name="quostion-4-2" class="checkbox" value="4">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-8">
									<input type="radio" id="answer-4-2-8" name="quostion-4-2" class="checkbox" value="4,5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4,5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-9">
									<input type="radio" id="answer-4-2-9" name="quostion-4-2" class="checkbox" value="5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5</h3>
							</div>
							<div class="col-3 col-md-1">
								<label class="option_item mb-3" for="answer-4-2-10">
									<input type="radio" id="answer-4-2-10" name="quostion-4-2" class="checkbox" value=">5">
									<div class="option_inner">
										<div class="shadow-wrapper-box"></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/ico/check-background.png" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">>5</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '4-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '4-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="5-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/7</span> Какое количество дверей Вы предполагаете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-1">
									<input type="radio" id="answer-5-2-1" name="quostion-5-2" class="checkbox" value="1 дверь">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">1 дверь</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-2">
									<input type="radio" id="answer-5-2-2" name="quostion-5-2" class="checkbox" value="2 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">2 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-3">
									<input type="radio" id="answer-5-2-3" name="quostion-5-2" class="checkbox" value="3 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">3 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-4">
									<input type="radio" id="answer-5-2-4" name="quostion-5-2" class="checkbox" value="4 двери">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">4 двери</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-5">
									<input type="radio" id="answer-5-2-5" name="quostion-5-2" class="checkbox" value="5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">5 дверей</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-2-6">
									<input type="radio" id="answer-5-2-6" name="quostion-5-2" class="checkbox" value="Более 5 дверей">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/5-2-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Более 5 дверей</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '5-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '5-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-12" id="6-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/7</span> Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-1">
									<input type="radio" id="answer-6-2-1" name="quostion-6-2" class="checkbox" value="Скидка 15%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 15%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-2">
									<input type="radio" id="answer-6-2-2" name="quostion-6-2" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-3">
									<input type="radio" id="answer-6-2-3" name="quostion-6-2" class="checkbox" value="Бесплатная доставка и установка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Бесплатная доставка и установка</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-2-4">
									<input type="radio" id="answer-6-2-4" name="quostion-6-2" class="checkbox" value="Скидка 10% на заказ кухни в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/6-2-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка 10% на заказ кухни в теченее года</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '6-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-color-1" onclick="nextQuostion( '6-2' );">
							</div>
						</div>
					</div>
					
					<div class="col-md-6" id="7-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">7/7</span> Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_closet.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone" required>
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-2" name="answer1">
									<input type="hidden" id="answer2-2" name="answer2">
									<input type="hidden" id="answer3-2" name="answer3">
									<input type="hidden" id="answer4-2" name="answer4">
									<input type="hidden" id="answer5-2" name="answer5">
									<input type="hidden" id="answer6-2" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '7-2' );">
									<input type="submit" class="btn btn-corporate-color-1" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО ШКАФАМ -->
					
					
					<!-- ВЛПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->
					<div class="col-12" id="2-3" style="display: none;">
						<h3 class="text-center mb-5">Для расчета стоимости опишите Ваше изделие</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate.php" enctype="multipart/form-data">
							<div class="row justify-content-center py-2">
								<div class="col-8 mb-3">
									<textarea type="text" rows="3" name="mes" class="form-control form-control-corporate-color-1" placeholder="Опишите изделие своими словами, укажите размеры, материалы и другую информацию"></textarea>
								</div>
								<div class="col-8">
									<p>Прикрепите изображение изделия или схематично нарисованный Вами рисунок.</p>
								</div>
								<div class="col-8 mb-3">
									<div class="input-group custom-file-button">
										<label class="input-group-text" for="inputGroupFile">Прикрепить</label>
										<input type="file" name="mail_file" accept=".jpg,.jpeg,.png,.pdf,.heic" class="form-control" id="inputGroupFile">
									</div>
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col-4 mb-3">
									<input type="text" name="name" class="form-control form-control-corporate-color-1" placeholder="Ваше имя">
								</div>
								<div class="col-4 mb-3">
									<input type="text" name="tel" class="form-control form-control-corporate-color-1 telMask" placeholder="Ваш телефон*" required="" inputmode="text">
								</div>
							</div>
							<div class="row justify-content-center">
								<div class="col text-center" style="margin-top: 35px;">
									<input type="button" value="Назад" class="btn btn-corporate-color-outline-1" onclick="previousQuostion( '2-3' );">
									<input type="submit" value="Отправить" class="btn btn-corporate-color-1">
								</div>
							</div>
						</form>
					</div><!-- /ВОПРОСЫ ПО ДРУГОЙ МЕБЕЛИ -->			
				</div><!-- /Расчет любой мебели -->
			
			<?php } ?>
			</div>
		</div>
	</div>
</section>
<!-- End Quiz section -->


<?php

	get_footer( 'shop' );
	//include 'footer.php';
	
?>